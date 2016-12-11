<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Model;

class FrontCategories extends Model
{
    //
    protected $table = 'categories';
    protected $primaryKey = 'category_id';
    public $timestamps = false;
    public $incrementing = false; //$primaryKey will not return to int
    protected $fillable = [
    	'category_title',
    	'category_description',
    	'category_type',
        'category_image'
	];
	public function getData($type){
		return self::where('category_type', $type)->get();
	}
	public function getDataCond($type){
		return self::where('category_type', $type)->orderBy('category_id')->take(5)->get();
	}
}
