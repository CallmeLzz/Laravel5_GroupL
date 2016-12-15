<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Model;

class FrontPrices extends Model
{
    //
    protected $table = 'prices';
    protected $primaryKey = 'price_id';
    public $incrementing = false; //$primaryKey will not return to int
    public $timestamps = false;
    protected $fillable = [
    	'price_rate',
    	'price_type',
        'price_detail'
	];

    public function getDataCond($type){
    	return FrontPrices::where('price_type', $type)->get();
    }
}
