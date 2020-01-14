<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    //
	public $timestamps = false;
	protected $table = "job";
	protected $primaryKey = "job_id";
	protected $casts = ["job_id" => "INT"];
}
