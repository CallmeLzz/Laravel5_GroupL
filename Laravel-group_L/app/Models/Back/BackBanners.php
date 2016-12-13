<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Model;

class BackBanners extends Model
{
    //
    protected $table = 'banners';
    protected $primaryKey = 'banner_id';
    public $incrementing = false; //$primaryKey will not return to int
    public $timestamps = false;
    protected $fillable = [
    	'banner_title',
    	'banner_img',
        'banner_type'
	];

	public function getData(){
		return self::all();
	}
    public function getDataID(){
        return self::pluck('banner_type', 'banner_type')->toArray();
    }
    public function getDataCond($id){
        return self::where('banner_id', $id)->get();
    }
    /*=============================== ADD ===============================*/
    public function add($title, $img, $type){
        if ($this->checkExistsData($title) == false){
            $banner = new BackBanners();

            if($this->autoIncreaseNumber() < 10){
                $banner->banner_id = 'B0'.$this->autoIncreaseNumber();
            }
            else {
                $banner->banner_id = 'B'.$this->autoIncreaseNumber();
            }
            $banner->banner_title = $title;
            $banner->banner_img = 'images/banners/'.$img;
            $banner->banner_type = $type;

            $banner->save();
        }
        elseif($this->checkExistsData($title) == true) return "Your banner is exists";
    }
    public function checkExistsData($title){
        $check = null;
        foreach (BackBanners::where('banner_title', $title)->get() as $key => $value) {
            $check = $value->banner_title;
        }
        if ($check != null) return true;
        else return false;
    }
    public function autoIncreaseNumber(){
        $check = self::all();

        $arr[] = null;
        foreach ($check as $key => $value) {
            $arr[] += substr($value->banner_id, 1, 2);
        }
        $i = 0;
        while ($i != $arr){
            if (in_array($i, $arr) == false) return $i;
            $i++;
        }
    }
    /*=============================== EDIT ===============================*/
    public function updateBanner($id, $title, $img, $type){
        if ($img == null){
            BackBanners::where('banner_id', $id)->update(array(
                'banner_title' => $title,
                'banner_type' => $type));
        }
        else {
            BackBanners::where('banner_id', $id)->update(array(
                'banner_title' => $title,
                'banner_img' => 'images/banners/'.$img,
                'banner_type' => $type));
        }
    }
    /*=============================== DELETE ===============================*/
    public function deleteBanner($id){
        BackBanners::where('banner_id', $id)->delete();
    }
}