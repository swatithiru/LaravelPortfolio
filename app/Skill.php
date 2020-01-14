<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //
	public $timestamps = false;
	protected $table = "skills";
	protected $primaryKey = "skill_id";
	protected $casts = ["skill_id" => "INT"];
}
