<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Model;

class BackBanners extends Model
{
    //
    protected $table = 'banners';
    protected $primaryKey = 'banner_id';
    public $timestamps = false;
    protected $fillable = [
    	'banner_title',
    	'banner_img',
        'banner_type'
	];

	public function getData(){
		return self::all();
	}
    public function getDataCond($id){
        return self::where('banner_id', $id)->get();
    }
    /*=============================== ADD ===============================*/
    public function add($id, $title, $img, $type){
        if ($this->checkExistsData($id) == false){
            $banner = new BackBanners();

            $banner->banner_id = $id;
            $banner->banner_title = $title;
            $banner->banner_img = 'images/banners/'.$img;
            $banner->banner_type = $type;

            $banner->save();
        }
        elseif($this->checkExistsData($id) == true) return "Your banner is exists";
    }
    public function checkExistsData($id){
        $check = null;
        foreach (BackBanners::where('banner_id', $id)->get() as $key => $value) {
            $check = $value->banner_id;
        }
        if ($check != null) return true;
        else return false;
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