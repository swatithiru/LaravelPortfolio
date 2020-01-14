<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resume as Resume;

class ResumeController extends Controller
{
    //
	public function index(){
		$resume = Resume::all();
		return view('screens.resume',compact('resume'));
	}
	public function deleteSc(){
		$resume = Resume::all()->toArray();
		//$aboutme = About::orderBy('contact_id','desc')->take(1)->get();
		return view('screens.resume_edit', compact('resume'));
	}
	public function deleteResume($id){
    	
    	$resume = Resume::find($id);
        $resume->delete();
        $resumeMe = Resume::all()->toArray();
        return view('screens.adminpage');
    }
	public function insertResume(Request $request)
	{
		$jobTitle = $request->get('jobTitle');
		$jobCompany = $request->get('jobCompany');
		$jobDuration = $request->get('jobDuration');
		$jobYear = $request->get('jobYear');
		//$productImage = $request->get('newserviceImage');
		//$productImage = addslashes(file_get_contents($_FILES['newserviceImage']['tmp_name']));
		
		
		//echo $firstname;
		$resume = new Resume();
		$resume->job_title = $jobTitle;
		$resume->job_company = $jobCompany;
		$resume->job_duration = $jobDuration ;
		$resume->job_year = $jobYear ;
		$resume->job_userid_fk = '1' ;
		
		$resume->save();
		return view('screens.adminpage')->with('success','Resume is inserted');
		//echo 'service is inserted';
	
		
		
	}
}
