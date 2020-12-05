<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['ability:super_admin,read_users'])->only('index');
        $this->middleware(['ability:super_admin,create_users'])->only('create');
        $this->middleware(['ability:super_admin,update_users'])->only('edit');
        $this->middleware(['ability:super_admin,delete_users'])->only('destroy');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('dashboard.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::where('name','!=','super_admin')->get();
        return view('dashboard.users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
            'role'        => 'required',

        ]);
        $data = $request->except(['password', 'password_confirmation',]);
        $data['password'] = bcrypt($request->password);


        $user = User::create($data);

        $user->attachRole($request->role);

        $role = Role::find($request->role);

        $user->syncPermissions($role->permissions);

        session()->flash('success', __('site.added_successfully'));

        return redirect()->route('dashboard.users.index');
    }

   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::where('name','!=','super_admin')->get();
        // $roles = Role::all();
        return view('dashboard.users.edit',compact('user','roles'));
    }

    public function edit_profile()
    {
        $user = auth()->user();
        return view('dashboard.users.edit_profile',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', Rule::unique('users')->ignore($user->id)],
            //'permissions' => 'required|min:1',
        ]);

        $data = $request->except(['password', 'password_confirmation',]);

        if($request->has('password') && $request->password != null){
            $request->validate([
                'password' => 'required|confirmed',
            ]); 
            $data['password'] = bcrypt($request->password);
        }

        //dd($data);
        $user->update($data);
        
        $user->detachRoles($user->roles); // parameter can be a Role object, array, id or the role string name

        $user->attachRole($request->role);

        $role = Role::find($request->role);

        $user->syncPermissions($role->permissions);

        session()->flash('success', "تم تعديل البيانات بنجاح");

        return redirect()->route('dashboard.users.index');
    }

    public function update_profile(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', Rule::unique('users')->ignore($user->id)],
            //'permissions' => 'required|min:1',
        ]);

        $data = $request->except(['password', 'password_confirmation',]);

        if($request->has('password') && $request->password != null){
            $request->validate([
                'password' => 'required|confirmed',
            ]); 
            $data['password'] = bcrypt($request->password);
        }

        //dd($data);
        $user->update($data);
        
        // $user->detachRoles($user->roles); // parameter can be a Role object, array, id or the role string name

        // $user->attachRole($request->role);

        // $role = Role::find($request->role);

        // $user->syncPermissions($role->permissions);

        session()->flash('success', "تم تعديل البيانات بنجاح");

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        session()->flash('success', "تم الحذف بنجاح");

        return redirect()->route('dashboard.users.index');    
    }
}
