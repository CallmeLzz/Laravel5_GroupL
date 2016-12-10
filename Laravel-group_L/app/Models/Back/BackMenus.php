<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Model;

class BackMenus extends Model
{
    //
    protected $table = 'menus';
    //protected $primaryKey = 'menu_id';
    public $timestamps = false;
    protected $fillable = [
    	'menu_id',
    	'menu_title',
    	'menu_level',
    	'menu_parents'
	];

	public function getParent(){
		return self::all();
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
	public function addMenu($id, $add_menu_title, $add_menu_level, $add_menu_parents){
		if ($this->checkExistsData($id) == false){
			$menu = new self;

			$menu->menu_id = $id;
			$menu->menu_title = $add_menu_title;
			$menu->menu_level = $add_menu_level;
			$menu->menu_parents = $add_menu_parents;

			$menu->save();
		}
		elseif($this->checkExistsData($id) == true) return "Your product id is exists";
	}
	public function checkExistsData($id){
        $check = null;
        foreach (self::where('menu_id', $id)->get() as $key => $value) {
            $check = $value->menu_id;
        }
        if ($check != null) return true;
        else return false;
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
