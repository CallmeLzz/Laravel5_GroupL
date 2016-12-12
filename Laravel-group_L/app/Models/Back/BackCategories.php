<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Model;
use App\Models\Back\BackMenus;

class BackCategories extends Model
{
    //
    protected $table = 'categories';
    protected $primaryKey = 'category_id';
    public $timestamps = false;
    public $incrementing = false; //$primaryKey will not return to int
    protected $fillable = [
    	'category_title',
        'category_description',
    	'category_type',
        'category_image'
	];

    public function getAllData(){
        return BackCategories::all();
    }
    public function getData($sort){
        if ($sort == null){
            return BackCategories::orderBy('category_id', 'asc')->paginate(4);
        }
        else {
            return BackCategories::orderBy('category_'.$sort, 'asc')->paginate(4);
        }
    }
    public function getDataCond($id){
        return BackCategories::where('category_id', $id)->get();
    }
    public function getDefaultData(){
        foreach (BackCategories::take(1)->get() as $key => $value) {
            return $value->category_type;
        }
    }
    /*=============================== ADD ===============================*/
        public function addCategory($title, $description, $type, $img){
            if ($this->checkExistsData($title) == false){
                $cate = new BackCategories();

                if($this->autoIncreaseNumber() < 10){
                    $cate->category_id = 'C0'.$this->autoIncreaseNumber();
                }
                else {
                    $cate->category_id = 'C'.$this->autoIncreaseNumber();
                }
                $cate->category_title = $title;
                $cate->category_description = $description;
                $cate->category_type = $type;
                $cate->category_image = 'images/categories/'.$img;

                $cate->save();
            }
            elseif($this->checkExistsData($title) == true) return "Your category is exists";
        }
        public function checkExistsData($title){
            $check = null;
            foreach (BackCategories::where('category_title', 'LIKE', $title)->get() as $key => $value) {
                $check = $value->category_title;
            }
            if ($check != null) return true;
            else return false;
        }
        public function autoIncreaseNumber(){
            $check = self::all();

            $arr[] = null;
            foreach ($check as $key => $value) {
                $arr[] += substr($value->category_id, 1, 2);
            }
            $i = 0;
            while ($i != $arr){
                if (in_array($i, $arr) == false) return $i;
                $i++;
            }
        }
    /*=============================== UPDATE ===============================*/
        public function updateCategory($id, $title, $description, $type, $img){
            if ($img == null){
                BackCategories::where('category_id', $id)->update(array(
                    'category_title' => $title,
                    'category_description' => $description,
                    'category_type' => $type));
            }
            else {
                BackCategories::where('category_id', $id)->update(array(
                    'category_title' => $title,
                    'category_description' => $description,
                    'category_type' => $type,
                    'category_image' => 'images/categories/'.$img));
            }
        }
    /*=============================== DELETE ===============================*/
        public function deleteCategory($id){
            BackCategories::where('category_id', $id)->delete();
        }
}