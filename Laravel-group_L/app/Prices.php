<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prices extends Model
{
    //
    protected $table = 'prices';
    protected $primaryKey = 'price_id';
    public $timestamps = false;
    protected $fillable = [
    	'price_title',
    	'price_rate',
    	'price_type'
	];

	public function getPrice(){
		return self::all();
	}
}
