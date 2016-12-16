<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Excel;
use App\Models\Back\BackBanners;
use App\Models\Back\BackMenus;

class AdminHomeController extends Controller
{
    /*=============================== Index ===============================*/
    public function indexBanner(){
        $banner = new BackBanners();
        $result_banner = $banner->getData();

    	return view('back_end.home.page.index')->with(['banner' => $result_banner]);
    }
    public function indexMenu(){
    	$menu = new BackMenus();
        $result_menu = $menu->getParent();

    	return view('back_end.home.page.index')->with(['menu' => $result_menu]);
    }
    /*=============================== Banner ===============================*/
	    /*========================== ADD ==========================*/
		    public function addBannerView(Request $request){
		        $banner = new BackBanners();
		        $result_banner = $banner->getData();

		        return view('back_end.home.add.index')->with('banner', $result_banner);
		    }
		    public function addBanner(Request $request){
		        $banner_title = $request->input('title');
		        $type = $request->input('type');
		        $banner = new BackBanners();

		        $img = Input::file('fileToUpload');
		        if ($img != null){
		            $result_banner = $banner->add($banner_title, $this->uploadPicture('fileToUpload', 'banners'), $type);
		            return redirect()->route('adminBanner');
		        }
		        else {
		            $message = 'You must choose any picture!!';
		            $result_banner = $banner->getData();
		            return view('back_end.home.add.index')->with([
		                'banner' => $result_banner,
		                'message' => $message
		                ]);
		        }
		    }
	    /*========================== EDIT ==========================*/
		    public function editBannerView(Request $request){
		        $id = $request->input('id');
		        $banner = new BackBanners();
		        $result_banner = $banner->getDataCond($id);
		        
		        return view('back_end.home.edit.index')->with([
		        		'banner' => $result_banner,
		        		]);
		    }
		    public function editBanner(Request $request){
		        $id = $request->input('id');
		        $title = $request->input('title');
		        $banner = new BackBanners();
		        $type = $request->input('type');

		        $img = Input::file('fileToUpload');
		        if ($img != null){
		            $this->deletePicture($id);
		            $result_banner = $banner->updateBanner($id, $title, $this->uploadPicture('fileToUpload', 'banners'), $type);
		        }
		        else{
		            $result_banner = $banner->updateBanner($id, $title, null, $type);
		        }
		        return redirect()->route('adminBanner');
		    }
	    /*========================== DELETE ==========================*/
		    public function deleteBanner(Request $request){
		        $id = $request->input('id');
		        $banner = new BackBanners();
		        $this->deletePicture($id);
		        $banner->deleteBanner($id);

		        return redirect()->route('adminBanner');
		    }
	    /*========================== SEARCH ==========================*/
		    public function searchBanner(Request $request){
		        $key = $request->input('q');
		        var_dump($key);
		    }
	    /*========================== UPLOAD PICTURE ==========================*/
		    public function uploadPicture($img, $path){
		        $img_name = null;
		        if (Input::file($img)->isValid()) {
		            $destinationPath = 'images/' . $path;
		            $extension = Input::file($img)->getClientOriginalExtension();
		            $fileName = rand(11111,99999).'.'.$extension;
		            $img_name = $fileName;
		            Input::file($img)->move($destinationPath, $fileName);
		        }
		        return $img_name;
		    }
	    /*========================== DELETE PICTURE ==========================*/
		    public function deletePicture($id){
		        $picName = null;
		        $banner = new BackBanners();
		        $dataPic = $banner->getDataCond($id);
		        foreach ($dataPic as $key => $value) {
		            $picName = $value->banner_img;
		        }
		        $checkFile = file_exists(public_path() . '/' . $picName);
		        if ($checkFile){
		            unlink(public_path() . '/' . $picName);
		        }
		    }
	/*=============================== Menu ===============================*/
		/*=============================== EDIT ===============================*/
		    public function editMenu(Request $request){
		    	$menu = new BackMenus();
		    	if ($request->input('menu_id') == null){
		            $id = $request->input('id');
		            $result_menu = $menu->getParentCond($id);
		            
		            return view('back_end.home.edit.index')->with('menu', $result_menu);
		        }
		        else {
		            $id = $request->input('menu_id');
		            $menu_title = $request->input('menu_title');
		            $menu_level = $request->input('menu_level');
		            $result_menu = $menu->updateMenu($id, $menu_title, $menu_level);

		            return redirect()->route('adminMenu');
		        }
		    }
	    /*=============================== DELETE ===============================*/
		    public function deleteMenu(Request $request){
		    	$id = $request->input('id');
		    	$menu = new BackMenus();
		        $result_menu = $menu->deleteMenu($id);

		        return redirect()->route('adminMenu');
		    }
	    /*=============================== ADD ===============================*/
		    public function addMenu(Request $request){
		    	$menu = new BackMenus();
		        if ($request->input('title') == null){
		            $result_menu = $menu->getParentID();
		            return view('back_end.home.add.index')->with('menuID', $result_menu);
		        }
		        else {
		        	$menu_title = $request->input('title');
		        	$menu_level = $request->input('level');
		        	$menu_parents = $request->input('parents');

		            $result_menu = $menu->addMenu($menu_title, $menu_level, $menu_parents);
		            $get_menu_id = $menu->getParent();

		            if ($result_menu != null){
		                return response()->view('back_end.home.add.index', [
		                    'message'=> $result_menu,
		                    'menu' => $get_menu_id
		                    ]);
		            }
		        	else return redirect()->route('adminMenu');
		        }
		    }
	    /*=============================== SEARCH ===============================*/
		    public function searchMenu(Request $request){
		        $key = $request->input('key');
		        $type = $request->input('type');

		        $menu = new BackMenus();
		        $searchResult = $menu->searchMenu($type, $key);

		        return view('back_end.home.search.index')->with('searchMenu', $searchResult);
		    }
	    /*=============================== EXPORT TO EXCEL ===============================*/
	    	public function exportMenu(){
	    		$menu = new BackMenus();
	    		$result_menu = $menu->getParent();

	    		Excel::create('menus', function($excel) use($result_menu){
	    			$excel->sheet('MenuSheet', function($sheet) use($result_menu){
	    				$sheet->fromArray($result_menu);
	    			});
	    		})->export('xls');
	    	}
    /*=================================================================================*/
}