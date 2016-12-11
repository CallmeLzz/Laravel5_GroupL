<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Front\FrontMenus;
use App\Models\Front\FrontDetail;
use App\Models\Front\FrontCategories;

class CategoryController extends Controller
{
    //
    public function index(Request $request){
    	$type = $request->input('type');
    	$menu = new FrontMenus();
        $cate = new FrontCategories();
        $detail = new FrontDetail();

        $result_menu = $menu->getData();
    	$result_cate = $cate->getDataCond($type);
        $result_detail = $detail->getDataCond($type);

    	$country = 'Vietnam';
        $city = 'Ho Chi Minh city';

        $currDay = date('l');
        $nextDay = date('l',strtotime("tomorrow"));

        /*var_dump($result_banner->toArray());
        die();*/

    	return view('front_end.category.category')->with([
    		'country' => $country,
            'city' => $city,
            'currentDay' => $currDay,
            'nextDay' => $nextDay,
    		'cate' => $result_cate,
            'menu' => $result_menu,
            'detail' => $result_detail
    		]);
    }
}
