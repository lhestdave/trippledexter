<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact');
    }

    public function contact()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $this->validate($request,[ 
            'name' => 'required',
            'email' => 'required'
            ]);

        //create new message
        $message = new Message;
        $message->datenow = $request->input('datenow');
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        //save message
        $message->save();

        //redirect
        return redirect('/');
    }
}
