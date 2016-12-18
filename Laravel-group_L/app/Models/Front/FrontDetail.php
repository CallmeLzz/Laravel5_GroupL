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
	public function getData($id){
		return self::where('detail_id', $id)->paginate(1);
	}
	public function getDataCond($type){
        return  self::where('detail_type', $type)
                        ->join('prices', 'price_detail', '=', 'detail_title')
                        ->get();
	}
    public function getTypeReservation($type){
        return FrontDetail::where('detail_type', 'LIKE', $type)
                    ->pluck('detail_title', 'detail_title')
                    ->toArray();
    }
}