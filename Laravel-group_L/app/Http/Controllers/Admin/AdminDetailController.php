<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\Back\BackDetails;
use App\Models\Back\BackMenus;
use App\Models\Back\BackCategories;
use App\Models\Back\BackPrices;

class AdminDetailController extends Controller
{
    //
    public function __construct(){}

    public function index(Request $request){
        $sort = $request->input('sort');
    	$detail = new BackDetails();
    	$result_detail = $detail->getData($sort, 4);

        $i = 1;
    	return view('back_end.detail.page.index')->with([
            'detail' => $result_detail,
            'i' => $i
            ]);
    }
    public function indexPrice(){
        $price = new BackPrices();
        $result_price = $price->getAllData();

        $i = 1;
        return view('back_end.detail.page.index')->with([
            'price' => $result_price,
            'i' => $i
            ]);
    }
    /*=============================== ADD ===============================*/
    public function addDetailView(){
        $menu = new BackMenus();
        $result_menu = $menu->getParent();

    	return view('back_end.detail.add.index')->with('menu', $result_menu);
    }
    public function addDetail(Request $request){
    	$title = $request->input('title');
    	$b_description = $request->input('brief_description');
    	$f_description = $request->input('full_description');
        $type = $request->input('type');
    	$detail = new BackDetails();

    	$img = Input::file('fileToUpload');
    	if ($img != null){
    		$detail->addDetail($title, $b_description, $f_description, $this->uploadPicture('fileToUpload', 'detail'), $type);
    		return redirect()->route('adminDetail');
    	}
    	else {
    		$message = 'You must choose any picture!!';
			return view('back_end.detail.add.index')->with(['message' => $message]);
    	}
    }
    /*=============================== EDIT ===============================*/
    public function editDetailView(Request $request){
    	$id = $request->input('id');
    	$detail = new BackDetails();
    	$result_detail = $detail->getDataCond($id);

        $menu = new BackMenus();
        $result_menu = $menu->getParent();

		return view('back_end.detail.edit.index')->with([
            'detail' => $result_detail,
            'menu' => $result_menu
            ]);
    }
    public function editDetail(Request $request){
		$id = $request->input('id');
		$title = $request->input('title');
		$b_description = $request->input('b_description');
		$f_description = $request->input('f_description');
        $type = $request->input('type');
		$detail = new BackDetails();
        
		$img = Input::file('fileToUpload');
        if ($img != null){
        	$this->deletePicture($id);
            $detail->updateDetail($id, $title, $b_description, $f_description, $this->uploadPicture('fileToUpload', 'detail'), $type);
        }
        else{
            $detail->updateDetail($id, $title, $b_description, $f_description, null, $type);
        }
        return redirect()->route('adminDetail');
    }
    /*=============================== DELETE ===============================*/
    public function deleteDetail(Request $request){
    	$detail = new BackDetails();
    	$id = $request->input('id');
    	$this->deletePicture($id);
    	$detail->deleteDetail($id);

    	return redirect()->route('adminDetail');
    }
    /*=============================== UPLOAD PICTURES ===============================*/
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
    /*=============================== DELETE PICTURES ===============================*/
    public function deletePicture($id){
        $picName = null;
        $detail = new BackDetails();
        $dataPic = $detail->getDataCond($id);
        foreach ($dataPic as $key => $value) {
            $picName = $value->detail_image;
        }
        $checkFile = file_exists(public_path() . '/' . $picName);
        if ($checkFile){
        	unlink(public_path() . '/' . $picName);
        }
    }

    public function addPriceView(){
        $cate = new BackCategories();
        $result_category = $cate->getAllData();

        return view('back_end.detail.add.index')->with([
            'cate' => $result_category
            ]);
    }
    public function getDetailTypeDynamicData(Request $request){
        $type = $request->input('type');

        var_dump($type);
        die();

        $detail = new BackDetails();
        $result_detail = $detail->getDynamicData($type);

        return response()->json($result_detail);
    }
}