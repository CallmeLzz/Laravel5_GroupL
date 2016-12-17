<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Model;

class BackFeatures extends Model
{
    //
    protected $table = 'features';
    protected $primaryKey = 'feature_id';
    public $timestamps = false;
    public $incrementing = false; //$primaryKey will not return to int
    protected $fillable = [
    	'feature_type',
    	'feature_title',
        'feature_content'
	];

	public function getAllData(){
		return BackFeatures::all();
	}
	public function getDataCond($id){
		return BackFeatures::where('feature_id', $id)->get();
	}
	/*=============================== ADD ===============================*/
		public function addFeature($title, $type, $content){
			if ($this->checkExistsData($content) == false){
				$feature = new BackFeatures();

				if($this->autoIncreaseNumber() < 10){
					$feature->feature_id = 'F0'.$this->autoIncreaseNumber();
				}
				else {
					$feature->feature_id = 'F'.$this->autoIncreaseNumber();
				}
				$feature->feature_title = $title;
				$feature->feature_type = $type;
				$feature->feature_content = $content;

				$feature->save();
			}
			elseif($this->checkExistsData($content) == true) return "Your feature is exists";
		}
		public function checkExistsData($content){
	        $check = null;
	        foreach (self::where('feature_content', 'LIKE', $content)->get() as $key => $value) {
	            $check = $value->feature_content;
	        }
	        if ($check != null) return true;
	        else return false;
	    }
	    public function autoIncreaseNumber(){
	        $check = self::all();

	        $arr[] = null;
	        foreach ($check as $key => $value) {
	            $arr[] += substr($value->feature_id, 1, 2);
	        }
	        $i = 0;
	        while ($i != $arr){
	            if (in_array($i, $arr) == false) return $i;
	            $i++;
	        }
	    }
}
