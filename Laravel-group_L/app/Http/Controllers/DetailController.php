<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Front\FrontMenus;
use App\Models\Front\FrontBanners;

class DetailController extends Controller
{
    //
    public function __construct() {
        $this->data = array();
    }
    public function index(Request $request){
    	$type = $request->input('type');

    	$menu = new FrontMenus();
        $result_menu = $menu->getData();

    	$banner = new FrontBanners();
        $result_banner = $banner->getDataCond('detail', $type, '1');

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
    		'banner' => $result_banner
    		]);
    }
}
