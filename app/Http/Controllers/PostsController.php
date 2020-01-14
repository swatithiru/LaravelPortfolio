<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register as Register;

class PostsController extends Controller
{
    //
	public function submitted(Request $request)
	{
		$firstname = $request->get('signfirstname');
		$lastname = $request->get('signlastname');
		$email = $request->get('signemail');
		
		//echo $firstname;
		$user = new Register();
		$user->first_name = $firstname;
		$user->last_name = $lastname;
		$user->email = $email ;
		$user->admin_indicator = '0';
		$user->save();
	}
}
