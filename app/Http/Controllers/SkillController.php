<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill as Skill;

class SkillController extends Controller
{
    //
	public function index(){
		return view('screens.skill');
	}
	public function managerialSkills(){
		//$portfolio = Portfolio::all();
		$skillme = Skill::all()->where('skill_typeid_fk','1');
		$skilltransfer = Skill::all()->where('skill_typeid_fk','2');
		$skillLanguage = Skill::all()->where('skill_typeid_fk','3');
		return view('screens.skill',compact('skillme','skilltransfer','skillLanguage'));
	}
	/*public function transferableSkills(){
		//$portfolio = Portfolio::all();
		$skilltransfer = Skill::all()->where('skill_typeid_fk','2');
		return view('screens.skill',compact('skilltransfer'));
	}*/
	public function insertSkill(Request $request)
	{
		$selectid = "";
		$skillType = $request->get('skillType');
		$skillName = $request->get('skillName');
		$skillPercentage = $request->get('skillPercentage');
		$skillColor = $request->get('skillColor');
		$skillIcon = $request->get('skillIcon');
		if($skillType == 'managerialSkills')
		{
        $selectid=1;
       
		}
		if($skillType == "transferableSkills")
		{
        $selectid=2;
        
		}
		if($skillType == "languageSkills")
		{
        $selectid=3;
       
		}
		//$reffeedback = $request->get('reffeedback');
		//$refImage = $request->get('refImage');
		//$productImage = $request->get('newserviceImage');
		//$productImage = addslashes(file_get_contents($_FILES['newserviceImage']['tmp_name']));
		
		
		//echo $firstname;
		$skill = new Skill();
		$skill->skill_typeid_fk = $selectid;
		$skill->skill_name = $skillName;
		$skill->skill_percentage = $skillPercentage ;
		$skill->skill_userid_fk = '1' ;
		$skill->skill_color = $skillColor ;
		$skill->skill_icon = $skillIcon ;
		$skill->save();
		return view('screens.adminpage')->with('success','skill is inserted');
		
		//echo 'service is inserted';
	
		
		
	}
}
