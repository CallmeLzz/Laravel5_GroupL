<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Back\BackReservations;
use Mail;

class SendMailController extends Controller
{
    //
    public $id = null;
    public $reservation_name = null;
    public $reservation_email = null;
    public $reservation_arrival_date = null;
    public $reservation_departure_date = null;
    public $reservation_type = null;
    public $reservation_number_people = null;
    public $price_rate = null;
    public $detail_image = null;

    public function __construct(Request $request) {
        $this->id = $request->input('id');
    	$reservation = new BackReservations();
    	$result_reservation = $reservation->getDataCond($this->id);

    	foreach ($result_reservation as $key => $value) {
    		$this->reservation_name = $value->reservation_name;
    		$this->reservation_email = $value->reservation_email;
    		$this->reservation_arrival_date = $value->reservation_arrival_date;
    		$this->reservation_departure_date = $value->reservation_departure_date;
    		$this->reservation_type = $value->reservation_type;
    		$this->reservation_number_people = $value->reservation_number_people;
    		$this->price_rate = $value->price_rate;
    		$this->detail_image = $value->detail_image;
    	}
    }
    /*
    	Wrong when send. Go to https://www.google.com/settings/security/lesssecureapps and active it.
    */
    public function sendMail(){
    	$data = [
    		'confirm' => 'confirm',
    		'author' => 'LEISURE',
    		'reservation_name' => $this->reservation_name,
    		'reservation_email' => $this->reservation_email,
    		'reservation_arrival_date' => $this->reservation_arrival_date,
    		'reservation_departure_date' => $this->reservation_departure_date,
    		'reservation_type' => $this->reservation_type,
    		'reservation_number_people' => $this->reservation_number_people,
    		'price_rate' => $this->price_rate,
    		'detail_image' => $this->detail_image
    		];
    	Mail::send(['text' => 'mail'], $data, function($message) use ($data){
    		$message->to($data['reservation_email'], $data['reservation_name'])
    			->subject('Mail sent from '.$data['author'].'.');
			$message->attach(public_path() . '/' . $data['detail_image']);
    		$message->from('leisureresort@gmail.com');
    	});

    	return redirect()->route('adminReservation');
    }
    public function cancelReservation(){
    	$data = [
    		'cancel' => 'cancel',
    		'author' => 'LEISURE',
    		'reservation_name' => $this->reservation_name,
    		'reservation_email' => $this->reservation_email,
    		'reservation_arrival_date' => $this->reservation_arrival_date,
    		'reservation_departure_date' => $this->reservation_departure_date,
    		'reservation_type' => $this->reservation_type,
    		'reservation_number_people' => $this->reservation_number_people,
    		'price_rate' => $this->price_rate,
    		'detail_image' => $this->detail_image
    		];
    	Mail::send(['text' => 'mail'], $data, function($message) use ($data){
    		$message->to($data['reservation_email'], $data['reservation_name'])
    			->subject('Mail sent from '.$data['author'].'.');
			$message->attach(public_path() . '/' . $data['detail_image']);
    		$message->from('leisureresort@gmail.com');
    	});

    	return redirect()->route('deleteReservation', ['id' => $this->id]);
    }
}
