<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About as About;
use App\Resume as Resume;
use App\Portfolio as Portfolio;
use App\Products as Products;

class AboutUpdateController extends Controller
{
    //

    public function updateData($id){
    	
    	$about = About::find($id);
    	return view('screens.aboutmeupdate', compact('about','id'));

    }

	public function updateResumeData($id){
    	
    	$resume = Resume::find($id);
    	return view('screens.resumeupdate', compact('resume','id'));

    }
	public function updatePortfolioData($id){
    	
    	$portfolio = Portfolio::find($id);
    	return view('screens.portfolioupdate', compact('portfolio','id'));

    }
	public function updateServiceData($id){
    	
    	$products = Products::find($id);
    	return view('screens.productupdate', compact('products','id'));

    }


    public function updateinDB(Request $request, $id){
		
		
		//$reffeedback = $request->get('reffeedback');
		//$refImage = $request->get('refImage');
		//$productImage = $request->get('newserviceImage');
		//$productImage = addslashes(file_get_contents($_FILES['newserviceImage']['tmp_name']));
		
		
		//echo $firstname;
		$about = About::find($id);
		$about->phone = $request->get('insertphone');
		$insertadd = $request->get('insertadd');
		$insertrole = $request->get('insertrole');
		$insertphone = $request->get('insertphone');
		$insertwebsite = $request->get('insertwebsite');
		$insertskype = $request->get('insertskype');
		$insertcv = $request->get('insertcv');
		//$uploadImage = $request->get('uploadImage');
		//$logoImage = $request->get('logoImage');
		$addDescription = $request->get('addDescription');
		$about->phone = $insertphone;
		$about->address = $insertadd;
		$about->nationality = 'Indian';
		//$about->description = $addDescription;
		$about->role = $insertrole;
		$about->whatsap = $insertphone;
		$about->skype = $insertskype;
		$about->DOB = '08-22-1993';
		$about->contact_userid_fk = '1';
		$about->cv = $insertcv;
		$about->website = $insertwebsite;
		//$products->product_image = $productImage;
		$about->save();
        $aboutme = About::all()->toArray();
        return view('screens.display', compact('aboutme'));


    }
	public function updateinResumeDB(Request $request, $id){
		
		
		//$reffeedback = $request->get('reffeedback');
		//$refImage = $request->get('refImage');
		//$productImage = $request->get('newserviceImage');
		//$productImage = addslashes(file_get_contents($_FILES['newserviceImage']['tmp_name']));
		
		
		//echo $firstname;
		$resum = Resume::find($id);
		$jobTitle = $request->get('jobTitle');
		$jobCompany = $request->get('jobCompany');
		$jobDuration = $request->get('jobDuration');
		$jobYear = $request->get('jobYear');
		//$productImage = $request->get('newserviceImage');
		//$productImage = addslashes(file_get_contents($_FILES['newserviceImage']['tmp_name']));
		
		
		//echo $firstname;
		$resum->job_title = $jobTitle;
		$resum->job_company = $jobCompany;
		$resum->job_duration = $jobDuration ;
		$resum->job_year = $jobYear ;
		$resum->job_userid_fk = '1' ;
		
		$resum->save();
        $resume = Resume::all()->toArray();
        return view('screens.resume_edit', compact('resume'));


    }
	
	public function updateinServiceDB(Request $request, $id){
		
		$produc = Products::find($id);
		$productTitle = $request->get('newservicetitle');
		$productDesc = $request->get('newservicedescription');
		$productPrice = $request->get('newservicecharge');
		//$productImage = $request->get('newserviceImage');
		//$productImage = addslashes(file_get_contents($_FILES['newserviceImage']['tmp_name']));
		
		
		//echo $firstname;
		//$products = new Products();
		$produc->product_title = $productTitle;
		$produc->product_desc = $productDesc;
		$produc->product_price = $productPrice ;
		
		//$products->product_image = $productImage;
		$produc->save();
		$products = Products::all()->toArray();
        return view('screens.service_edit', compact('products'));


    }
	
	public function updateinPortfolioDB(Request $request, $id){
		
		
		
		
		$portfoli = Portfolio::find($id);
		//$portfolioType = $request->get('portfolioType');
		$portfolio_name = $request->get('portfolio_name');
		
		//$reffeedback = $request->get('reffeedback');
		//$refImage = $request->get('refImage');
		//$productImage = $request->get('newserviceImage');
		//$productImage = addslashes(file_get_contents($_FILES['newserviceImage']['tmp_name']));
		
		
		//echo $firstname;
		//$portfolio = new Portfolio();
		$portfoli->portfolio_name = $portfolio_name;
		//$portfoli->categoryid_fk = '1';
		//$portfoli->portfolio_userid_fk = '1' ;
		/*if($request->hasfile('portfolioImage'))
		{
			$file = $request->file('portfolioImage');
			$extension = $file->getClientOriginalExtension();
			$filename = time(). '.' .$extension;
			$file->move('uploads/employee/', $filename);
			$portfoli->portfolio_images = $filename;
		}
		else
		{
			return $request;
			$portfoli->portfolio_images = '';
			
		}*/
		//$products->product_image = $productImage;
		$portfoli->save();
		$portfolio = Portfolio::all()->toArray();
        return view('screens.portfolio_edit', compact('portfolio'));


    }

}
