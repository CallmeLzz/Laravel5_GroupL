<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Model;

class FrontDetail extends Model
{
    //
    protected $table = 'details';
    protected $primaryKey = 'detail_id';
    public $timestamps = false;
    public $incrementing = false; //$primaryKey will not return to int
    protected $fillable = [
    	'detail_title',
    	'detail_brief_description',
    	'detail_full_description',
    	'detail_image',
        'detail_type'
	];
	public function getData(){
		return self::all();
	}
	public function getDataCond($id){
		return self::where('detail_id', $id)->get();
	}
}