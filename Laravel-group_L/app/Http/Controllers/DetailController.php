<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Front\FrontMenus;
use App\Models\Front\FrontCategories;
use App\Models\Front\FrontDetail;

class DetailController extends Controller
{
    //
    public function __construct() {
        $this->data = array();
    }
    public function index(Request $request){
    	$id = $request->input('id');
        $type = $request->input('type');

        $menu = new FrontMenus();
        $cate = new FrontCategories();
        $detail = new FrontDetail();

        $result_menu = $menu->getData();
        $result_detail = $detail->getData($id);

        $getType = null;
        foreach ($result_detail as $key => $value) {
            $getType = $value->detail_type;
        }

        $resutl_category = $cate->getData($getType);

        /*var_dump($result_detail->toArray());
        die();*/

        $country = 'Vietnam';
        $city = 'Ho Chi Minh city';

        $currDay = date('l');
        $nextDay = date('l',strtotime("tomorrow"));

    	return view('front_end.detail.detail')->with([
    		'country' => $country,
            'city' => $city,
            'currentDay' => $currDay,
            'nextDay' => $nextDay,
    		'menu' => $result_menu,
    		'cate' => $resutl_category,
            'detail' => $result_detail
    		]);
    }
}
