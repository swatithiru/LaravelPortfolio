<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
	public $timestamps = false;
	protected $table = "products";
	protected $primaryKey = "product_id";
	protected $casts = ["product_id" => "INT"];
}
