<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About as About;


class AboutController extends Controller
{
    //
	public function index(){
		//$aboutme = About::all();
		$aboutme = About::orderBy('contact_id','desc')->take(1)->get();
		return view('screens.aboutme', compact('aboutme'));
	}
		public function deleteScreen(){
		$aboutme = About::all()->toArray();
		//$aboutme = About::orderBy('contact_id','desc')->take(1)->get();
		return view('screens.display', compact('aboutme'));
	}
	public function deleteData($id){
    	
    	$about = About::find($id);
        $about->delete();
        $aboutme = About::all()->toArray();
        return view('screens.adminpage');
    }
	
	
	    
		public function deleteContact()
    {
        $res=About::where('phone','6825584661')->delete();
        return redirect('adminpage')->with('success','profile is deleted');
    }
	    public function destroy($phone)
    {
        $form = About::find($phone);
        $form->delete();
        return redirect('adminpage')->with('success','Coin has been  deleted');
    }


	public function insertContact(Request $request)
	{
		
		$insertadd = $request->get('insertadd');
		$insertrole = $request->get('insertrole');
		$insertphone = $request->get('insertphone');
		$insertwebsite = $request->get('insertwebsite');
		$insertskype = $request->get('insertskype');
		$insertcv = $request->get('insertcv');
		//$uploadImage = $request->get('uploadImage');
		//$logoImage = $request->get('logoImage');
		$addDescription = $request->get('addDescription');
		
		//$reffeedback = $request->get('reffeedback');
		//$refImage = $request->get('refImage');
		//$productImage = $request->get('newserviceImage');
		//$productImage = addslashes(file_get_contents($_FILES['newserviceImage']['tmp_name']));
		
		
		//echo $firstname;
		$about = new About();
		$about->phone = $insertphone;
		$about->address = $insertadd;
		$about->nationality = 'Indian';
		$about->description = $addDescription;
		$about->role = $insertrole;
		$about->whatsap = $insertphone;
		$about->skype = $insertskype;
		$about->DOB = '08-22-1993';
		$about->contact_userid_fk = '1';
		$about->cv = $insertcv;
		$about->website = $insertwebsite;
		
		
		if($request->hasfile('uploadImage'))
		{
			$file = $request->file('uploadImage');
			$extension = $file->getClientOriginalExtension();
			$filename = time(). '.' .$extension;
			$file->move('uploads/employee/', $filename);
			$about->image = $filename;
		}
		else
		{
			return $request;
			$about->image = '';
			
		}
		if($request->hasfile('logoImage'))
		{
			$file = $request->file('logoImage');
			$extension = $file->getClientOriginalExtension();
			$filename = time(). '.' .$extension;
			$file->move('uploads/employee/', $filename);
			$about->logo = $filename;
		}
		else
		{
			return $request;
			$about->logo = '';
			
		}
		//$products->product_image = $productImage;
		$about->save();
		return view('screens.adminpage')->with('success','contact is inserted');
		
		//echo 'service is inserted';
	
		
		
	}
	
}
