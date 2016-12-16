<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Model;

class BackPrices extends Model
{
    //
    protected $table = 'prices';
    protected $primaryKey = 'price_id';
    public $incrementing = false; //$primaryKey will not return to int
    public $timestamps = false;
    protected $fillable = [
    	'price_rate',
    	'price_type',
        'price_detail'
	];

	public function getAllData(){
		return BackPrices::paginate(5);
	}
    public function getDataCond($id){
        return BackPrices::where('price_id', $id)->get();
    }
    public function getDataDefault($type){
        return BackPrices::where('price_type', '<>', $type)->pluck('price_type', 'price_type')->toArray();
    }
    public function exportPrice(){
        return BackPrices::all();
    }
    /*=============================== ADD ===============================*/
        public function addPrice($rate, $type, $detail){
            if ($this->checkExistsData($detail) == false){
                $price = new BackPrices();

                if($this->autoIncreaseNumber() < 10){
                   $price->price_id = 'D0'.$this->autoIncreaseNumber();
                }
                else {
                    $price->price_id = 'D'.$this->autoIncreaseNumber();
                }
                $price->price_rate = $rate;
                $price->price_type = $type;
                $price->price_detail = $detail;

                $price->save();
            }
            elseif($this->checkExistsData($detail) == true) return "Your price is exists";
        }
        public function checkExistsData($detail){
            $check = null;
            foreach (BackPrices::where('price_detail', $detail)->get() as $key => $value) {
                $check = $value->price_detail;
            }
            if ($check != null) return true;
            else return false;
        }
        public function autoIncreaseNumber(){
            $check = self::all();

            $arr[] = null;
            foreach ($check as $key => $value) {
                $arr[] += substr($value->price_id, 1, 2);
            }
            $i = 0;
            while ($i != $arr){
                if (in_array($i, $arr) == false) return $i;
                $i++;
            }
        }
    /*=============================== EDIT ===============================*/
        public function updatePrice($id, $rate, $type, $detail){
            BackPrices::where('price_id', $id)->update(array(
                    'price_rate' => $rate,
                    'price_type' => $type,
                    'price_detail' => $detail
                ));
        }
    /*=============================== DELETE ===============================*/
        public function deletePrice($id){
            BackPrices::where('price_id', $id)->delete();
        }
}
