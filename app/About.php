<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    //
	public $timestamps = false;
	protected $table = "contact";
	protected $primaryKey = "contact_id";
	protected $casts = ["contact_id" => "INT"];
}
