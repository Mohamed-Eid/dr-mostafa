<?php

namespace App\Http\Controllers\Dashboard;

use App\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('dashboard.courses.index',compact('courses'));
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.courses.create');   
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
        $rules = [
            'image' => 'required',
            'cost' => 'required',
        ];

        foreach (config('translatable.locales') as $locale){
            $rules += [$locale.'.name'               => ['required']];
            $rules += [$locale.'.instructor'         => ['required']];
            $rules += [$locale.'.about_course'       => ['required']];
            $rules += [$locale.'.about_instructor'   => ['required']];
        }

        $request->validate($rules);
        
        $data = $request->all();
       
        $data['image'] = upload_image('course_images',$request->image);


        Course::create($data);

        session()->flash('success', "تمت الإضافة بنجاح");

        return redirect()->route('dashboard.courses.index');
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
    public function edit(Course $course)
    {
        return view('dashboard.courses.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $rules = [
            'cost' => 'required',
        ];

        foreach (config('translatable.locales') as $locale){
            $rules += [$locale.'.name'               => ['required']];
            $rules += [$locale.'.instructor'         => ['required']];
            $rules += [$locale.'.about_course'       => ['required']];
            $rules += [$locale.'.about_instructor'   => ['required']];
        }

        $request->validate($rules);
        
        $data = $request->except('image');
       
        if($request->has('image')){
           // dd($request->image);
            delete_image('course_images',$course->image);
            $data['image'] = upload_image('course_images',$request->image);
            //dd($data);
        }

        $course->update($data);

        session()->flash('success', "تم التعديل بنجاح");

        return redirect()->route('dashboard.courses.index');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        delete_image('course_images',$course->image);

        $course->delete();

        session()->flash('success', "تم الحذف بنجاح");

        return redirect()->route('dashboard.courses.index');
    }
}
