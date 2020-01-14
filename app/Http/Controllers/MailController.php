<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class MailController extends Controller
{
    //
	public function send()
	{
		Mail::send(['text'=>'mail'],['name','Swati'],function($message){
		$message->to('vishak.0041@gmail.com','To Bitfumes')->subject('Test Email');
		$message->from('vishak.0041@gmail.com','Bitfumes');
		});
		//$name = 'Krunal';
		//Mail::to('swati.thirunavakarasu@mavs.uta.edu')->send(new SendMailable($name));
		//return 'Email was sent';
		//return view('screens.mail');
	}
}
