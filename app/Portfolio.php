<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    //
	public $timestamps = false;
	protected $table = "portfolio";
	protected $primaryKey = "portfolio_id";
	protected $casts = ["portfolio_id" => "INT"];
}
