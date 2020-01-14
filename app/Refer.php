<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Refer extends Model
{
    //
	public $timestamps = false;
	protected $table = "portreference";
	protected $primaryKey = "ref_id";
	protected $casts = ["ref_id" => "INT"];
}
