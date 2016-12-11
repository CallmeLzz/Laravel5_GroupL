<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Front\FrontMenus;
use App\Models\Front\FrontBanners;
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
        $banner = new FrontBanners();
        $detail = new FrontDetail();

        $result_menu = $menu->getData();
        $result_banner = $banner->getDataCond('detail', $type, '1');
        $result_detail = $detail->getDataCond($id);

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
    		'banner' => $result_banner,
            'detail' => $result_detail
    		]);
    }
}
