<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Message;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware(['ability:super_admin,read_contact'])->only('index');
        $this->middleware(['ability:super_admin,delete_contact'])->only('destroy');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::all();
        return view('dashboard.contact_messages.index',compact('messages'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {

        $message->delete();

        session()->flash('success', "تم الحذف بنجاح");

        return redirect()->route('dashboard.messages.index');    
    }
}
