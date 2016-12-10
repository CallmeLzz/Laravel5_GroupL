<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Model;

class FrontMenus extends Model
{
    //
    protected $table = 'menus';
    protected $primaryKey = 'menu_id';
    public $timestamps = false;
    public $incrementing = false; //$primaryKey will not return to int
    protected $fillable = [
    	'menu_title',
        'menu_level',
    	'menu_parents'
	];
	public function getData(){
		return self::where('menu_parents', '')->get();
	}
}
