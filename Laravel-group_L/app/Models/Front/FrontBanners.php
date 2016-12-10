<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Model;

class FrontBanners extends Model
{
    //
    protected $table = 'banners';
    protected $primaryKey = 'banner_id';
    public $timestamps = false;
    public $incrementing = false; //$primaryKey will not return to int
    protected $fillable = [
    	'banner_title',
        'banner_img',
    	'banner_type'
	];
	public function getData(){
		return self::where('banner_type', 'home')->get();
	}
}
