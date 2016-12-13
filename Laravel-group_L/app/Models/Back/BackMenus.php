<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Model;

class BackMenus extends Model
{
    //
    protected $table = 'menus';
    protected $primaryKey = 'menu_id';
    public $incrementing = false; //$primaryKey will not return to int
    public $timestamps = false;
    protected $fillable = [
    	'menu_title',
    	'menu_level',
    	'menu_parents'
	];

	public function getParent(){
		return self::all();
	}
	public function getParentID(){
		return self::pluck('menu_id', 'menu_id')->toArray();
	}
	public function getParentTitle(){
		return self::pluck('menu_title', 'menu_title')->toArray();
	}
	public function getParentCond($id){
		return self::where('menu_id', $id)->get();
	}
	/*=============================== UPDATE ===============================*/
	public function updateMenu($update_id, $update_title, $update_level){
		self::where('menu_id', $update_id)->update(array(
			'menu_title' => $update_title,
			'menu_level' => $update_level));
	}
	/*=============================== DELETE ===============================*/
	public function deleteMenu($id){
		self::where('menu_id', $id)->delete();
	}
	/*=============================== ADD ===============================*/
	public function addMenu($add_menu_title, $add_menu_level, $add_menu_parents){
		if ($this->checkExistsData($add_menu_title) == false){
			$menu = new self;

			if($this->autoIncreaseNumber() < 10){
				$menu->menu_id = 'M0'.$this->autoIncreaseNumber();
			}
			else {
				$menu->menu_id = 'M'.$this->autoIncreaseNumber();
			}
			$menu->menu_title = $add_menu_title;
			$menu->menu_level = $add_menu_level;
			$menu->menu_parents = $add_menu_parents;

			$menu->save();
		}
		elseif($this->checkExistsData($add_menu_title) == true) return "Your product id is exists";
	}
	public function checkExistsData($title){
        $check = null;
        foreach (self::where('menu_title', 'LIKE', $title)->get() as $key => $value) {
            $check = $value->menu_title;
        }
        if ($check != null) return true;
        else return false;
    }
    public function autoIncreaseNumber(){
        $check = self::all();

        $arr[] = null;
        foreach ($check as $key => $value) {
            $arr[] += substr($value->menu_id, 1, 2);
        }
        $i = 0;
        while ($i != $arr){
            if (in_array($i, $arr) == false) return $i;
            $i++;
        }
    }
    /*=============================== SEARCH ===============================*/
    public function searchMenu($type, $key){
    	$result = self::where('menu_'.$type, 'like', '%'.$key.'%')->get();

    	if (sizeof($result) == 0) return "Your menu NOT exists";
        else return $result;
    }
	/*======================================================================*/
	public $result = null;
	public function getData($key){
		$hierarchy = self::where('menu_parents', "")->get();

		/*var_dump($hierarchy->toArray());
		die();*/

		foreach ($hierarchy as $key => $value) {
			$this->result .= $value->menu_title.';';
			foreach ($this->getData($value->menu_id) as $key => $value) {
				$this->result .= $value->menu_title.'/';
			}
			/*if ($value->menu_parents != null){
				$this->result .= $value->menu_title.'/';
				return $this->getData($value->menu_parents);
			}
			else {
				$this->result .= $value->menu_title.'/';
				return $this->getData($value->menu_parents);
			} */
		}
		return $this->result;
	}
}
