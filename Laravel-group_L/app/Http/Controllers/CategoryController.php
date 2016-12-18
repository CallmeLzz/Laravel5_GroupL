<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Front\FrontMenus;
use App\Models\Front\FrontDetail;
use App\Models\Front\FrontCategories;
use App\Models\Front\FrontPrices;
use App\Models\Front\FrontReservations;

class CategoryController extends Controller
{
    //
    public function index(Request $request){
    	$type = $request->input('type');
    	$menu = new FrontMenus();
        $cate = new FrontCategories();
        $detail = new FrontDetail();
        $price = new FrontPrices();

        $result_menu = $menu->getData();
    	$result_cate = $cate->getDataCond($type);
        $result_detail = $detail->getDataCond($type);
        $result_price = $price->getDataCond($type);
        $typeReservation = $detail->getTypeReservation($type);

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
            'detail' => $result_detail,
            'price' => $result_price,
            'typeReservation' => $typeReservation
    		]);
    }
    public function reservation(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $arrival_date = $request->input('arrival_date');
        $departure_date = $request->input('departure_date');
        $type = $request->input('type');
        $adult = $request->input('adult');

        $reservation = new FrontReservations();
        $result_reservation = $reservation->makeReservation($name, $email, $arrival_date, $departure_date, $type, $adult);

        return redirect()->route('home');
    }
}
