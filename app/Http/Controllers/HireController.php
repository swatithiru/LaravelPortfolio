<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products as Products;

class HireController extends Controller
{
    //
	public function index(){
		$hireme = Products::all();
		//$hireme = Products::select('product_image','product_pr')->where([['user_name',$username],['password',$password]])->get();
		return view('screens.hireme', compact('hireme'));
	}
	public function deleteScreen(){
		$products = Products::all()->toArray();
		//$aboutme = About::orderBy('contact_id','desc')->take(1)->get();
		return view('screens.service_edit', compact('products'));
	}
	public function deleteService($id){
    	
    	$product = Products::find($id);
        $product->delete();
        $resumeMe = Products::all()->toArray();
        return view('screens.adminpage');
    }
}
