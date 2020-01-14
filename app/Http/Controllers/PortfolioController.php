<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio as Portfolio;


class PortfolioController extends Controller
{
    //
	public function index(){
		$portfolioWebsite = Portfolio::all();
		//$portfolioWebsite = Portfolio::all()->where('categoryid_fk','1');
		return view('screens.portfolio',compact('portfolioWebsite'));
	}
	public function website(){
		//$portfolio = Portfolio::all();
		$portfolioWebsite = Portfolio::all()->where('categoryid_fk','1');
		return view('screens.portfolio',compact('portfolioWebsite'));
	}
	public function apps(){
		//$portfolio = Portfolio::all();
		$portfolioWebsite = Portfolio::all()->where('categoryid_fk','2');
		return view('screens.portfolio',compact('portfolioWebsite'));
	}
	public function design(){
		//$portfolio = Portfolio::all();
		$portfolioWebsite = Portfolio::all()->where('categoryid_fk','3');
		return view('screens.portfolio',compact('portfolioWebsite'));
	}
	public function photography(){
		//$portfolio = Portfolio::all();
		$portfolioWebsite = Portfolio::all()->where('categoryid_fk','4');
		return view('screens.portfolio',compact('portfolioWebsite'));
	}
	public function deleteScreen(){
		$portfolio = Portfolio::all()->toArray();
		//$aboutme = About::orderBy('contact_id','desc')->take(1)->get();
		return view('screens.portfolio_edit', compact('portfolio'));
	}
	public function deletePortfolio($id){
    	
    	$portfolio = Portfolio::find($id);
        $portfolio->delete();
        $resumeMe = Portfolio::all()->toArray();
        return view('screens.adminpage');
    }
	public function insertPortfolio(Request $request)
	{
		$selectid = "";
		$portfolioType = $request->get('portfolioType');
		$portfolio_name = $request->get('portfolio_name');
		if($portfolioType == 'website')
		{
        $selectid=1;
       
		}
		if($portfolioType == "app")
		{
        $selectid=2;
        
		}
		if($portfolioType == "design")
		{
        $selectid=3;
       
		}
		if($portfolioType == "photography")
		{
        $selectid=4;
        
		}
		//$reffeedback = $request->get('reffeedback');
		//$refImage = $request->get('refImage');
		//$productImage = $request->get('newserviceImage');
		//$productImage = addslashes(file_get_contents($_FILES['newserviceImage']['tmp_name']));
		
		
		//echo $firstname;
		$portfolio = new Portfolio();
		$portfolio->portfolio_name = $portfolio_name;
		$portfolio->categoryid_fk = $selectid;
		$portfolio->portfolio_userid_fk = '1' ;
		if($request->hasfile('portfolioImage'))
		{
			$file = $request->file('portfolioImage');
			$extension = $file->getClientOriginalExtension();
			$filename = time(). '.' .$extension;
			$file->move('uploads/employee/', $filename);
			$portfolio->portfolio_images = $filename;
		}
		else
		{
			return $request;
			$portfolio->portfolio_images = '';
			
		}
		//$products->product_image = $productImage;
		$portfolio->save();
		return view('screens.adminpage')->with('success','portfolio is inserted');
		
		//echo 'service is inserted';
	
		
		
	}
}
