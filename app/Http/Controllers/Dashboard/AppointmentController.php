<?php

namespace App\Http\Controllers\Dashboard;

use App\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppointmentController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::all();
        return view('dashboard.appointments.index',compact('appointments'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {

        $appointment->delete();

        session()->flash('success', "تم الحذف بنجاح");

        return redirect()->route('dashboard.appointments.index');    
    }
}
