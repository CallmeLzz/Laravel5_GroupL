<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Excel;
use App\Models\Back\BackDetails;
use App\Models\Back\BackMenus;
use App\Models\Back\BackCategories;
use App\Models\Back\BackPrices;
use App\Models\Back\BackFeatures;

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
    public function indexFeature(){
        $feature = new BackFeatures();
        $result_feature = $feature->getAllData();

        return view('back_end.detail.page.index')->with([
                'feature' => $result_feature
            ]);
    }
    /*======================================== MAIN ========================================*/
        /*=============================== ADD ===============================*/
            public function addDetailView(){
                $menu = new BackMenus();
                $result_menu = $menu->getParentTitle();

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
        /*=============================== SEARCH ===============================*/
            public function searchDetail(Request $request){
                $key = $request->input('q');
                $type = $request->input('type');
                $detail = new BackDetails();

                $searchResult = null;
                $img = Input::file('fileToUpload');
                if($img != null){
                    $searchResult = $detail->getDataCond($this->searchByImage('fileToUpload', $img));
                    /*var_dump($searchResult->toArray());
                    die();*/
                    if ($searchResult == null) $searchResult = "Your detail NOT exists";
                }
                else {
                    $searchResult = $detail->searchDetail($type, $key);
                }

                return view('back_end.detail.search.index')->with('searchDetail', $searchResult);
            }
            public function searchByImage($sourcePicName, $img){
                $picName = $this->uploadPicture($sourcePicName, 'search');
                $extension = $img->getClientOriginalExtension();

                if($extension == 'jpg'){
                    $image = imagecreatefromjpeg(public_path(). '/images/search/' . $picName);
                }
                elseif($extension == 'png') {
                    $image = imagecreatefrompng(public_path(). '/images/search/' . $picName);
                }
                //$width = imagesx($image);
                //$height = imagesy($image);
                $color = imagecolorat($image, 5, 5);
                //$r = ($color >> 16) & 0xFF;
                //$g = ($color >> 8) & 0xFF;
                //$b = $color & 0xFF;
                //var_dump($r, $g, $b);
                //var_dump(imagecolorsforindex($image, $color));
                //var_dump($color);

                $detail = new BackDetails();
                $allResult = $detail->getAllData();

                $check = 0;
                $getIDImage = null;
                foreach ($allResult as $value) {
                    $dataColor = imagecolorat(imagecreatefromjpeg(public_path(). '/' . $value->detail_image), 5, 5);
                    if ($dataColor == $color){
                        $check = 1;
                        $getIDImage = $value->detail_id;
                        break;
                    }
                }
                unlink(public_path(). '/images/search/' . $picName);
                /*var_dump($getIDImage);
                die();
                if ($getIDImage != null) return $getIDImage;*/
                return $getIDImage;
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
        /*=============================== EXPORT TO EXCEL ===============================*/
            public function exportDetail(){
                $detail = new BackDetails();
                $result_detail = $detail->exportDetail();
                
                Excel::create('details', function($excel) use($result_detail){
                    $excel->sheet('DetailSheet', function($sheet) use($result_detail){
                        $sheet->fromArray($result_detail);
                    });
                })->export('xls');
            }
    /*======================================== PRICES ========================================*/
        /*=============================== ADD PRICES ===============================*/
            public function addPrice(Request $request){
                $detail = new BackDetails();
                $cate = new BackCategories();
                $price = new BackPrices();

                $default = $cate->getDefaultData();
                $result_detail = $detail->getDynamicData($default);
                $result_category = $cate->getDataTitle();

                if ($request->input('rate') == null){
                    return view('back_end.detail.add.index')->with([
                        'cate' => $result_category,
                        'detail' => $result_detail
                        ]);
                }
                else {
                    $rate = $request->input('rate');
                    $type = $request->input('type');
                    $detail = $request->input('detail');
                    
                    $result_price = $price->addPrice($rate, $type, $detail);
                    if ($result_price != null){
                        return response()->view('back_end.detail.add.index', [
                            'cate' => $result_category,
                            'message'=> $result_price,
                            'detail' => $result_detail
                            ]);
                    }
                    else return redirect()->route('adminDetailPrice');
                }
            }
            public function getDetailTypeDynamicData(Request $request){
                $type = $request->input('type');

                $detail = new BackDetails();
                $result_detail = $detail->getDynamicData($type);

                return response()->json($result_detail);
            }
        /*=============================== EDIT PRICES ===============================*/
            public function editPrice(Request $request){
                $price = new BackPrices();
                $detail = new BackDetails();

                if($request->input('rate') == null){
                    $id = $request->input('id');
                    $result_price = $price->getDataCond($id);

                    $getType = null;
                    foreach ($result_price as $value) {
                        $getType = $value->price_type;
                    }
                    $result_defaul = $price->getDataDefault($getType);
                    $result_detail = $detail->getDynamicData($getType);

                    return view('back_end.detail.edit.index')->with([
                        'price' => $result_price,
                        'default_type' => $result_defaul,
                        'detail_title' => $result_detail
                        ]);
                }
                else {
                    $id = $request->input('id');
                    $rate = $request->input('rate');
                    $type = $request->input('type');
                    $detail = $request->input('detail');

                    $price->updatePrice($id, $rate, $type, $detail);
                    
                    return redirect()->route('adminDetailPrice');
                }
            }
        /*=============================== DELETE PRICES ===============================*/
            public function deletePrice(Request $request){
                $id = $request->input('id');
                $price = new BackPrices();
                $price->deletePrice($id);

                return redirect()->route('adminDetailPrice');
            }
        /*=============================== SEARCH ===============================*/
            public function searchPrice(Request $request){
                $key = $request->input('q');
                $type = $request->input('type');

                $price = new BackPrices();
                $searchResult = $price->searchPrice($type, $key);

                return view('back_end.detail.search.index')->with('searchPrice', $searchResult);
            }
        /*=============================== EXPORT TO EXCEL ===============================*/
            public function exportPrice(){
                $price = new BackPrices();
                $result_price = $price->exportPrice();

                Excel::create('prices', function($excel) use($result_price){
                    $excel->sheet('PriceSheet', function($sheet) use($result_price){
                        $sheet->fromArray($result_price);
                    });
                })->export('xls');
            }
    /*======================================== FEATURES ========================================*/
        /*=============================== ADD FEATURE ===============================*/
            public function addFeature(Request $request){
                $detail = new BackDetails();
                $cate = new BackCategories();
                $feature = new BackFeatures();

                $default = $cate->getDefaultData();
                $result_detail = $detail->getDynamicData($default);

                $result_category = $cate->getDataTitle();
                $result_feature = '123';

                if($request->input('content') == null){
                    return view('back_end.detail.add.index')->with([
                            'feature' => $result_feature,
                            'cate_default' => $result_category,
                            'detail_default' => $result_detail
                        ]);
                }
                else {
                    $type = $request->input('type');
                    $title = $request->input('title');
                    $content = $request->input('content');

                    $result_feature = $feature->addFeature($title, $type, $content);

                    if ($result_feature != null){
                        return response()->view('back_end.detail.add.index', [
                            'feature' => $result_feature,
                            'cate_default' => $result_category,
                            'detail_default' => $result_detail,
                            'message'=> $result_feature,
                            ]);
                    }
                    else return redirect()->route('adminDetailFeature');
                }
            }
        /*=============================== EDIT FEATURE ===============================*/
            public function editFeature(Request $request){
                $id = $request->input('id');
                $feature = new BackFeatures();
                $menu = new BackMenus();

                if($request->input('feature_title') == null){
                    $result_feature = $feature->getDataCond($id);
                    $result_menu = $menu->getParent();
                    
                    return view('back_end.detail.edit.index')->with([
                        'feature' => $result_feature,
                        'menu_default' => $result_menu
                        ]);
                }
            }
}