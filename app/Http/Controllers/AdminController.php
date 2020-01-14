<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Products as Products;
use App\About as About;

class AdminController extends Controller
{
    //
	public function index(Request $request){
		//$request->session()->put('success','success');
		$aboutme = About::orderBy('contact_id','desc')->take(1)->get();
		//return view('screens.aboutme', compact('aboutme'));
		return view('screens.adminpage', compact('aboutme'));
	}
	public function insertService(Request $request)
	{
		$productTitle = $request->get('newservicetitle');
		$productDesc = $request->get('newservicedescription');
		$productPrice = $request->get('newservicecharge');
		//$productImage = $request->get('newserviceImage');
		//$productImage = addslashes(file_get_contents($_FILES['newserviceImage']['tmp_name']));
		
		
		//echo $firstname;
		$products = new Products();
		$products->product_title = $productTitle;
		$products->product_desc = $productDesc;
		$products->product_price = $productPrice ;
		if($request->hasfile('newserviceImage'))
		{
			$file = $request->file('newserviceImage');
			$extension = $file->getClientOriginalExtension();
			$filename = time(). '.' .$extension;
			$file->move('uploads/employee/', $filename);
			$products->product_image = $filename;
		}
		else
		{
			return $request;
			$products->product_image = '';
			
		}
		//$products->product_image = $productImage;
		$products->save();
		return view('screens.adminpage')->with('success','Service is inserted');
		//echo 'service is inserted';
	
		
		
	}
	
}
