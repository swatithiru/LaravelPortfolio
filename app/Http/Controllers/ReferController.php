<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Refer as Refer;

class ReferController extends Controller
{
    //
	public function index(){
		$reference = Refer::all();
		return view('screens.references', compact('reference'));
	}
	public function insertReference(Request $request)
	{
		$refname = $request->get('refname');
		$refrole = $request->get('refrole');
		$reffeedback = $request->get('reffeedback');
		//$refImage = $request->get('refImage');
		//$productImage = $request->get('newserviceImage');
		//$productImage = addslashes(file_get_contents($_FILES['newserviceImage']['tmp_name']));
		
		
		//echo $firstname;
		$refer = new Refer();
		$refer->ref_name = $refname;
		$refer->ref_role = $refrole;
		$refer->ref_feedback = $reffeedback ;
		if($request->hasfile('refImage'))
		{
			$file = $request->file('refImage');
			$extension = $file->getClientOriginalExtension();
			$filename = time(). '.' .$extension;
			$file->move('uploads/employee/', $filename);
			$refer->ref_image = $filename;
		}
		else
		{
			return $request;
			$refer->ref_image = '';
			
		}
		//$products->product_image = $productImage;
		$refer->save();
		return view('screens.addReferences')->with('reference','reference is inserted');
		
		//echo 'service is inserted';
	
		
		
	}
}
