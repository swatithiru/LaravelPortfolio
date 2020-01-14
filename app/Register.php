<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    //
	public $timestamps = false;
	protected $table = "user";
	protected $primaryKey = "user_id";
	protected $casts = ["user_id" => "INT"];
}
