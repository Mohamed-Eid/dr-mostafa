<?php

namespace App\Http\Controllers\Frontend;

use App\Appointment;
use App\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Image;
use App\Member;
use App\Message;
use App\Service;
use App\Video;

class HomeController extends Controller
{
    public function index(){
        $services = Service::take(7)->get();
        $team = Member::all();
        $courses = Course::all();
        return view('frontend.index',compact('services','team','courses'));
    }

    public function services(){
        $services = Service::all();
        return view('frontend.services.index',compact('services'));
    }

    public function team(){
        $team = Member::all();
        return view('frontend.team.index',compact('team'));
    }

    public function gallery(){
        $images = Image::paginate(9);
        $videos = Video::paginate(9);
        return view('frontend.gallery.index',compact('images','videos'));
    }

    public function courses(){
        $courses = Course::all();
        return view('frontend.courses.index',compact('courses'));
    }

    public function show_course(Course $course){
        return view('frontend.courses.show',compact('course'));
    }

    public function about_us(){
        return view('frontend.about.index');
    }

    public function send_contact_message(Request $request){
        //dd($request->all());
        $request->validate([
            'name'    => 'required',
            'email'   => 'required',
            'phone'   => 'required',
            'message' => 'required|min:10',
        ]);

        Message::create($request->all());

        session()->flash('success', "تم إرسال الرساله بنجاح");

        return redirect()->back();
    }

    public function contact(){
        return view('frontend.contact.index');
    }


    public function appointments(){
        return view('frontend.appointments.index');
    }
    public function save_appointment(Request $request){
        
        //dd($request->all());
        
        $request->validate([
            'contact_method'  => 'required',
            'visit_time'      => 'required',
            'days'            => 'required',
            'name'            => 'required',
            'email'           => 'required',
            'phone'           => 'required',
            'message'         => 'required',
        ]);

        Appointment::create($request->all());

        session()->flash('success', "تم إرسال الرساله بنجاح");

        return redirect()->back();
    }


}

