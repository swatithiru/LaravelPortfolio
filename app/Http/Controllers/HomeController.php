<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register as Register;
use App\Login as Login;
use App\About as About;

class HomeController extends Controller
{
    //
	public function create(){
		$aboutme = About::orderBy('contact_id','desc')->take(1)->get();
		return view('screens.index', compact('aboutme'));
	}
	
	
	public function submitted(Request $request)
	{
		$firstname = $request->get('signfirstname');
		$lastname = $request->get('signlastname');
		$email = $request->get('signemail');
		$username = $request->get('signuser');
		$password = $request->get('signRegPassword');
		
		//echo $firstname;
		$this->validate($request,[
		'signfirstname' => 'required|min:3|max:15',
		'signlastname' => 'required|min:3|max:20',
		'signemail' =>'required|email',
		'signuser' => 'required|min:3|max:15',
		'signRegPassword' => 'required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{5,}$/',
		'confirmRegPassword' => 'required|same:signRegPassword'
		]);
		$user = new Register();
		$user->first_name = $firstname;
		$user->last_name = $lastname;
		$user->email = $email ;
		$user->admin_indicator = '0';
		$user->save();
		//$registeruser = Register::all()->toArray();
		$registeruser= Register::select('user_id')->where('email',$email )->get();
		//echo $registeruser;
		foreach($registeruser as $reguser)
		$reg = $reguser['user_id'];
		
		$login = new Login();
		$login->userid_fk = $reg;
		$login->user_name = $username;
		$login->password = $password;
		$login->save();
		return redirect('/index')->with('success', 'Register is succesfull');
	
		
		
	}
	
	public function index(Request $request)
	{
		$username = $request->get('name_text');
		$password = $request->get('password_text');
		$this->validate($request,[
		'name_text' => 'required|min:3|max:15',
		'password_text' => 'required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{5,}$/'
		]);
		$logincheckuser = Login::select('user_name','password')->where([['user_name',$username],['password',$password]])->get();
		$loginuser = Login::select('user_name','password')->where([['user_name',$username],['password',$password]])->get()->count();
		//echo $loginuser;
		if($loginuser == 1)
		{
			
			foreach($logincheckuser as $loguser)
			if($loguser['user_name'] == 'swati')
			{
				//return redirect('/adminpage')->with('success', true)->with('message','Welcome Admin!');
				 
				 $request->session()->put('success',$username);
				//session
				//return redirect('/adminpage')->with('success', $username);
				return view('screens.adminpage')->with('data',$request->session()->get('success'));
				//session
				
				//return redirect('/adminpage')->with('data',$request->session()->get('usersession'));		
			//echo 'Admin'.' ' .$loguser['user_name'] .' ' .'has succesfully logged in';
			//echo "<script>if(confirm('Admin has succesfully logged in')){document.location.href='{{ url('/adminpage') }}'};</script>";
			
			}
			else
			{
				 
				 $request->session()->put('success',$request->get('name_text'));
				//return redirect('/home')->with('success', $username);
				return view('screens.index')->with('data',$request->session()->get('success'));
				//echo 'Guest'.' ' .$loguser['user_name'] .' ' .'has succesfully logged in';
			}
		}
		else
		{
			echo 'Please enter valid Username and password ';
		}
		
		//echo $loguser['user_name'] .' ' .$loguser['password'];
		
		
		//return view('screens.display', compact('registeruser'));
	}
	 public function deleteSessionData(Request $request) {
      $request->session()->forget('success');
      return view('screens.index')->with('success','none');
   }
    
	
}
