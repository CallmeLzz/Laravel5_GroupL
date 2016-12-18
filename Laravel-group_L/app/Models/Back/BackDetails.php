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

    public function getData($sort, $paginate){
        if($sort == null){
            return BackDetails::orderBy('detail_id', 'asc')->paginate($paginate);
        }
        else {
            return BackDetails::orderBy('detail_'.$sort, 'asc')->paginate($paginate);
        }
    }
    public function getDataCond($id){
        return BackDetails::where('detail_id', 'LIKE', $id)->get();
    }
    public function getDynamicData($type){
        return BackDetails::where('detail_type', $type)->get();
    }
    public function exportDetail(){
        return BackDetails::select('detail_id', 'detail_title', 'detail_brief_description', 
                'detail_full_description', 'detail_image', 'detail_type', 'price_rate')
                ->join('prices', 'price_detail', '=', 'detail_title')
                ->get();
    }
    public function getAllData(){
        return BackDetails::all();
    }
    /*=============================== ADD ===============================*/
        public function addDetail($title, $b_description, $f_description, $img, $type){
            if ($this->checkExistsData($title) == false){
            	$detail = new BackDetails();

                if($this->autoIncreaseNumber() < 10){
            	   $detail->detail_id = 'D0'.$this->autoIncreaseNumber();
                }
                else {
                    $detail->detail_id = 'D'.$this->autoIncreaseNumber();
                }
            	$detail->detail_title = $title;
            	$detail->detail_brief_description = $b_description;
            	$detail->detail_full_description = $f_description;
            	$detail->detail_image = 'images/detail/'.$img;
                $detail->detail_type = $type;

            	$detail->save();
            }
            elseif($this->checkExistsData($title) == true) return "Your detail is exists";
        }
        public function checkExistsData($title){
            $check = null;
            foreach (BackDetails::where('detail_title', $title)->get() as $key => $value) {
                $check = $value->detail_title;
            }
            if ($check != null) return true;
            else return false;
        }
        public function autoIncreaseNumber(){
            $check = self::all();

            $arr[] = null;
            foreach ($check as $key => $value) {
                $arr[] += substr($value->detail_id, 1, 2);
            }
            $i = 0;
            while ($i != $arr){
                if (in_array($i, $arr) == false) return $i;
                $i++;
            }
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
    /*=============================== SEARCH ===============================*/
    public function searchDetail($type, $key){
        $result = self::where('detail_'.$type, 'like', '%'.$key.'%')->get();
        if (sizeof($result) == 0) return "Your detail NOT exists";
        else return $result;
    }
}
