<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;

class VideoController extends Controller
{
    public function __construct()
    {
        $this->middleware(['ability:super_admin,read_videos'])->only('index');
        $this->middleware(['ability:super_admin,create_videos'])->only('create');
        $this->middleware(['ability:super_admin,update_videos'])->only('edit');
        $this->middleware(['ability:super_admin,delete_videos'])->only('destroy');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();
        return view('dashboard.videos.index',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.videos.create');
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
            'link' => 'required',

        ];

        $request->validate($rules);
        
        Video::create($request->all());

        session()->flash('success', "تمت الإضافة بنجاح");

        return redirect()->route('dashboard.videos.index');
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
    public function edit(Video $video)
    {
        return view('dashboard.videos.edit',compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $rules = [
            'link' => 'required',
        ];

        $request->validate($rules);
        
        $video->update($request->all());

        session()->flash('success', "تم التعديل بنجاح");

        return redirect()->route('dashboard.videos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video->delete();

        session()->flash('success', "تم الحذف بنجاح");

        return redirect()->route('dashboard.videos.index');
    }
}
