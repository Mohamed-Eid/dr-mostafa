<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;
use Illuminate\Validation\Rule;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware(['ability:super_admin,read_members'])->only('index');
        $this->middleware(['ability:super_admin,create_members'])->only('create');
        $this->middleware(['ability:super_admin,update_members'])->only('edit');
        $this->middleware(['ability:super_admin,delete_members'])->only('destroy');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
        return view('dashboard.team.index',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'image' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ];

        foreach (config('translatable.locales') as $locale){
            $rules += [$locale.'.name'        => ['required']];
            $rules += [$locale.'.job'         => ['required']];
            $rules += [$locale.'.description' => ['required']];
        }

        $request->validate($rules);
        
        $data = $request->all();
       
        $data['image'] = upload_image('team_images',$request->image);


        Member::create($data);

        session()->flash('success', "تمت الإضافة بنجاح");

        return redirect()->route('dashboard.members.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        return view('dashboard.team.edit',compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //dd($request->all());
        $rules = [
            'email' => 'required',
            'phone' => 'required',
        ];

        foreach (config('translatable.locales') as $locale){
            $rules += [$locale.'.name'        => ['required']];
            $rules += [$locale.'.job'         => ['required']];
            $rules += [$locale.'.description' => ['required']];
        }

        $request->validate($rules);
        
        $data = $request->all();
       
        if($request->has('image')){
           // dd($request->image);
            delete_image('team_images',$member->image);
            $data['image'] = upload_image('team_images',$request->image);
            //dd($data);
        }

        $member->update($data);

        session()->flash('success', "تم التعديل بنجاح");

        return redirect()->route('dashboard.members.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        delete_image('team_images',$member->image);

        $member->delete();

        session()->flash('success', "تم الحذف بنجاح");

        return redirect()->route('dashboard.members.index');
    }
}
