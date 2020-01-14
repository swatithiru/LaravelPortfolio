<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\About as About; 

class SendEmailController extends Controller
{
    //
	function index()
	{
		$aboutme = About::orderBy('contact_id','desc')->take(1)->get();
		//return view('screens.aboutme', compact('aboutme'));
		return view('screens.send_email',compact('aboutme') );
	}
	
	function send(Request $request)
	{
		$email = $request->get('email');
		$this->validate($request,[
		'name' => 'required|min:3|max:15',
		'email' => 'required|email',
		'phone' =>'required|max:10',
		'message' => 'required|min:5'
		]);
		$data = array(
		'name' => $request->name,
		'message' => $request->message
		);
		Mail::to($email)->send(new SendMail($data));
		return back()->with('emailsuccess','successfully sent to '.$email.'');
	}
}
