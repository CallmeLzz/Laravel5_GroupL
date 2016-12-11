<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Model;

class BackDetails extends Model
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
        return BackDetails::all();
    }
    public function getDataCond($id){
        return BackDetails::where('detail_id', $id)->get();
    }
    /*=============================== ADD ===============================*/
        public function addDetail($id, $title, $b_description, $f_description, $img, $type){
            if ($this->checkExistsData($id) == false){
            	$detail = new BackDetails();

            	$detail->detail_id = $id;
            	$detail->detail_title = $title;
            	$detail->detail_brief_description = $b_description;
            	$detail->detail_full_description = $f_description;
            	$detail->detail_image = 'images/detail/'.$img;
                $detail->detail_type = $type;

            	$detail->save();
            }
            elseif($this->checkExistsData($id) == true) return "Your detail is exists";
        }
        public function checkExistsData($id){
            $check = null;
            foreach (BackDetails::where('detail_id', $id)->get() as $key => $value) {
                $check = $value->detail_id;
            }
            if ($check != null) return true;
            else return false;
        }
    /*=============================== UPDATE ===============================*/
        public function updateDetail($id, $title, $b_description, $f_description, $img, $type){
            if ($img == null){
                BackDetails::where('detail_id', $id)->update(array(
                    'detail_title' => $title,
                    'detail_brief_description' => $b_description,
                    'detail_full_description' => $f_description,
                    'detail_type' => $type));
            }
            else {
                BackDetails::where('detail_id', $id)->update(array(
                    'detail_title' => $title,
                    'detail_brief_description' => $b_description,
                    'detail_full_description' => $f_description,
                    'detail_image' => 'images/detail/'.$img,
                    'detail_type' => $type));
            }
        }
    /*=============================== DELETE ===============================*/
        public function deleteDetail($id){
            BackDetails::where('detail_id', $id)->delete();
        }
}
