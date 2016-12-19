<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\Back\BackCategories;
use App\Models\Back\BackMenus;
use App\Models\Back\BackReservations;
use Excel;

class AdminCategoryController extends Controller
{
    //
    public function indexCategory(Request $request){
        $sort = $request->input('sort');
    	$cate = new BackCategories();
    	$result_cate = $cate->getData($sort);

        $i = 1;
    	return view('back_end.category.page.index')->with([
            'cate'=> $result_cate,
            'i' => $i
            ]);
    }
    public function indexReservation(Request $request){
        $reservation = new BackReservations();
        $result_reservation = $reservation->getData();

        return view('back_end.category.page.index')->with([
            'reservation'=> $result_reservation
            ]);
    }
    /*============================================ CATEGORY ============================================*/
        /*=============================== ADD ===============================*/
            public function addCategoryView(){
            	$menu = new BackMenus();
        		$result_menu = $menu->getParent();

        		return view('back_end.category.add.index')->with('menu', $result_menu);
            }
            public function addCategory(Request $request){
        		$title = $request->input('title');
        		$description = $request->input('description');
        		$type = $request->input('type');
        		$menu = new BackMenus();
        		$cate = new BackCategories();

        		$img = Input::file('fileToUpload');
        		if ($img != null){
        			$result_cate = $cate->addCategory($title, $description, $type, $this->uploadPicture('fileToUpload', 'categories'));
        			return redirect()->route('adminCategory');
        		}
        		else {
        			$message = 'You must choose any picture!!';
        			$result_menu = $menu->getParent();
        			return view('back_end.category.add.index')->with([
                        'menu' => $result_menu,
                        'message' => $message
                        ]);
        		}
            }
        /*=============================== EDIT ===============================*/
            public function editCategoryView(Request $request){
            	$id = $request->input('id');
            	$menu = new BackMenus();
            	$cate = new BackCategories();
            	$result_menu = $menu->getParent();
        		$result_cate = $cate->getDataCond($id);

        		return view('back_end.category.edit.index')->with([
        			'cate' => $result_cate,
        			'menu' => $result_menu
        			]);
            }
            public function editCategory(Request $request){
        		$id = $request->input('category_id');
        		$title = $request->input('title');
        		$description = $request->input('description');
        		$type = $request->input('type');
        		$cate = new BackCategories();

        		$img = Input::file('fileToUpload');
                if ($img != null){
                	$this->deletePicture($id);
                    $result_cate = $cate->updateCategory($id, $title, $description, $type, $this->uploadPicture('fileToUpload', 'categories'));
                }
                else{
                    $result_cate = $cate->updateCategory($id, $title, $description, $type, null);
                }
                return redirect()->route('adminCategory');
            }
        /*=============================== DELETE ===============================*/
            public function deleteCategory(Request $request){
            	$cate = new BackCategories();
            	$id = $request->input('id');
            	$this->deletePicture($id);
            	$result = $cate->deleteCategory($id);

            	return redirect()->route('adminCategory');
            }
        /*=============================== SEARCH ===============================*/
            public function searchCategory(Request $request){
                $key = $request->input('q');
                $type = $request->input('type');

                $cate = new BackCategories();
                $searchResult = $cate->searchCategory($type, $key);

                return view('back_end.category.search.index')->with('searchCategory', $searchResult);
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
                $banner = new BackCategories();
                $dataPic = $banner->getDataCond($id);
                foreach ($dataPic as $key => $value) {
                    $picName = $value->category_image;
                }
                $checkFile = file_exists(public_path() . '/' . $picName);
                if ($checkFile){
                	unlink(public_path() . '/' . $picName);
                }
            }
        /*=============================== EXPORT TO EXCEL ===============================*/
            public function exportCategory(){
                $cate = new BackCategories();
                $result_cate = $cate->getAllData();

                Excel::create('categories', function($excel) use($result_cate){
                    $excel->sheet('CategorySheet', function($sheet) use($result_cate){
                        $sheet->fromArray($result_cate);
                    });
                })->export('xls');
            }
    /*============================================ RESERVATION ============================================*/
        /*=============================== DELETE ===============================*/
            public function deleteReservation(Request $request){
                $id = $request->input('id');
                $reservation = new BackReservations();
                $result_reservation = $reservation->deleteReservation($id);

                return redirect()->route('adminReservation');
            }
        /*=============================== EXPORT TO EXCEL ===============================*/
            public function exportReservation(){
                $reservation = new BackReservations();
                $result_reservation = $reservation->exportReservation();

                Excel::create('reservations', function($excel) use($result_reservation){
                    $excel->sheet('ReservationSheet', function($sheet) use($result_reservation){
                        $sheet->fromArray($result_reservation);
                    });
                })->export('xls');
            }
    /*===================================================================================================*/
}
