<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Front\FrontMenus;
use App\Models\Front\FrontBanners;
use App\Models\Front\FrontCategories;

class CategoryController extends Controller
{
    //
    public function index(Request $request){
    	$type = $request->input('type');

    	$menu = new FrontMenus();
        $result_menu = $menu->getData();

        $banner = new FrontBanners();
        $result_banner = $banner->getDataCond('category', $type, '1');

    	$cate = new FrontCategories();
    	$result_cate = $cate->getDataCond($type);

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
    		'banner' => $result_banner,
            'menu' => $result_menu
    		]);
    }
}
