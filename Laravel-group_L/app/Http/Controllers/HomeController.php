<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Front\FrontMenus;
use App\Models\Front\FrontBanners;

class HomeController extends Controller
{
    public function __construct(){
    	$this->data = array();
    }
    public function index(){
    	$menu = new FrontMenus();
        $result_menu = $menu->getData();
        $banner = new FrontBanners();
        $result_banner = $banner->getData();

        /*var_dump($result_banner->toArray());
        die();*/

        /*$allmenu = $menu->getData(null);
        echo $allmenu;
        die();*/

    	//$user_ip = getenv('REMOTE_ADDR');

        /*if (pingAddress("http://www.geoplugin.net/php.gp") == 1) {
            $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp"));//?ip=$user_ip"));
            $country = $geo["geoplugin_countryName"];
            $city = $geo["geoplugin_city"];
        }
        else {*/
            $country = 'Vietnam';
            $city = 'Ho Chi Minh city';

        $currDay = date('l');
        $nextDay = date('l',strtotime("tomorrow"));
        /*if ($this->pingAddress('http://www.geoplugin.net/php.gp') == 1) echo "Alive";
        else echo "Dead";*/        
    	return view('front_end.home.index')->with([
            'country' => $country,
            'city' => $city,
            'currentDay' => $currDay,
            'nextDay' => $nextDay,
            'banner' => $result_banner,
            'menu' => $result_menu
            ]);
    }

    public function pingAddress($ip) {
        $pingresult = exec("ping  -n 3 $ip", $outcome, $status);
        if (0 == $status) {
            return 1;
            //$status = "alive => ( ".print_r($outcome)." )";
        } else {
            return 0;
            //$status = "dead";
        }
        //echo "The IP address, $ip, is  ".$status;
    }
}
