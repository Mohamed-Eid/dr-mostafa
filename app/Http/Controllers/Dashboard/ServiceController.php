<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Validation\Rule;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('dashboard.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.services.create');
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
            'icon' => 'required',
        ];

        foreach (config('translatable.locales') as $locale){
            $rules += [$locale.'.title' => ['required' ,Rule::unique('service_translations','title')]];
            $rules += [$locale.'.description' => ['required' ,Rule::unique('service_translations','description')]];
        }

        $request->validate($rules);
        
        $data = $request->all();
       
        $data['icon']  = upload_image('service_images',$request->icon);
        $data['image'] = upload_image('service_images',$request->image);


        Service::create($data);

        session()->flash('success', "تمت الإضافة بنجاح");

        return redirect()->route('dashboard.services.index');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('dashboard.services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $rules = [];

        foreach (config('translatable.locales') as $locale){
            $rules += [$locale.'.title' => ['required' ]];
            $rules += [$locale.'.description' => ['required']];
        }

        $request->validate($rules);
        
        $data = $request->all();
        
        if($request->has('icon')){
            delete_image('service_images',$service->icon);
            $data['icon']  = upload_image('service_images',$request->icon);
        }

        if($request->has('image')){
            delete_image('service_images',$service->image);
            $data['image'] = upload_image('service_images',$request->image);
        }



        $service->update($data);

        session()->flash('success', "تم التعديل بنجاح");

        return redirect()->route('dashboard.services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        delete_image('service_images',$service->icon);
        delete_image('service_images',$service->image);

        $service->delete();

        session()->flash('success', "تم الحذف بنجاح");

        return redirect()->route('dashboard.services.index');

    }
}
