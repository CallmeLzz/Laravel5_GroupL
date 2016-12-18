<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Back\BackReservations;
use Mail;

class SendMailController extends Controller
{
    //
    /*
    	Wrong when send. Go to https://www.google.com/settings/security/lesssecureapps and active it.
    */
    public function sendMail(Request $request){
    	$id = $request->input('id');
    	$reservation = new BackReservations();
    	$result_reservation = $reservation->getDataCond($id);

    	foreach ($result_reservation as $key => $value) {
    		$reservation_name = $value->reservation_name;
    		$reservation_email = $value->reservation_email;
    		$reservation_arrival_date = $value->reservation_arrival_date;
    		$reservation_departure_date = $value->reservation_departure_date;
    		$reservation_type = $value->reservation_type;
    		$reservation_number_people = $value->reservation_number_people;
    	}

    	$data = [
    		'author' => 'LEISURE',
    		'reservation_name' => $reservation_name,
    		'reservation_email' => $reservation_email,
    		'reservation_arrival_date' => $reservation_arrival_date,
    		'reservation_departure_date' => $reservation_departure_date,
    		'reservation_type' => $reservation_type,
    		'reservation_number_people' => $reservation_number_people
    		];
    	Mail::send(['text' => 'mail'], $data, function($message) use ($data){
    		$message->to($data['reservation_email'], $data['reservation_name'])
    			->subject('Send mail from '.$data['author'].'.');
    		$message->from('nguyenanhhoanld.thienhaxaxoi@gmail.com');
    	});

    	return redirect()->route('adminReservation');
    }
}
