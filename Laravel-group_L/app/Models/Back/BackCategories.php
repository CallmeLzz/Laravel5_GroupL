<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Model;

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

    public function getData(){
        //return BackCategories::all();
        return BackCategories::paginate(4);
        //var_dump(BackCategories::paginate(4));
    }
    public function getDataCond($id){
        return BackCategories::where('category_id', $id)->get();
    }
    /*=============================== ADD ===============================*/
        public function addCategory($id, $title, $description, $type, $img){
            if ($this->checkExistsData($id) == false){
                $cate = new BackCategories();

                $cate->category_id = $id;
                $cate->category_title = $title;
                $cate->category_description = $description;
                $cate->category_type = $type;
                $cate->category_image = 'images/categories/'.$img;

                $cate->save();
            }
            elseif($this->checkExistsData($id) == true) return "Your category is exists";
        }
        public function checkExistsData($id){
            $check = null;
            foreach (BackCategories::where('category_id', $id)->get() as $key => $value) {
                $check = $value->category_id;
            }
            if ($check != null) return true;
            else return false;
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