<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Model;

class BackPrices extends Model
{
    //
    protected $table = 'prices';
    protected $primaryKey = 'price_id';
    public $incrementing = false; //$primaryKey will not return to int
    public $timestamps = false;
    protected $fillable = [
    	'price_title',
    	'price_rate',
    	'price_type'
	];

	public function getAllData(){
		return BackPrices::paginate(10);
	}
}
