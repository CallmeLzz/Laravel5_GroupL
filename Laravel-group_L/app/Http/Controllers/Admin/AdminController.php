<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Back\BackMenus;
use App\Models\Back\BackBanners;

class AdminController extends Controller
{
    public function index(){
    	$menu = new BackMenus();
        $result_menu = $menu->getParent();

        $banner = new BackBanners();
        $result_banner = $banner->getData();

    	return view('back_end.page.index')->with([
            'menu' => $result_menu,
            'banner' => $result_banner
            ]);
    }

    public function search(){
    }
    /*=============================== Upload File ===============================*/
    public function uploadFileView(){
        return view('back_end.upload.index');
    }
    public function uploadFile(Request $request){
        if (Input::file('fileToUpload')->isValid()) {
          $this->uploadPicture('fileToUpload', 'upload');
        }
        else echo "Error";
        return redirect()->to('/admin/page');
    }
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
}