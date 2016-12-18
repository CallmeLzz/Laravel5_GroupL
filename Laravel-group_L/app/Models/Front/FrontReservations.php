<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Model;

class FrontReservations extends Model
{
    //
    protected $table = 'reservations';
    protected $primaryKey = 'reservation_id';
    public $timestamps = false;
    public $incrementing = false; //$primaryKey will not return to int
    protected $fillable = [
    	'reservation_name',
    	'reservation_email',
    	'reservation_arrival_date',
        'reservation_departure_date',
        'reservation_type',
        'reservation_number_people'
	];
	public function makeReservation($name, $email, $arrival_date, $departure_date, $type, $adult){
        $reservation = new FrontReservations();

        $reservation->reservation_name = $name;
        $reservation->reservation_email = $email;
        $reservation->reservation_arrival_date = $arrival_date;
        $reservation->reservation_departure_date = $departure_date;
        $reservation->reservation_type = $type;
        $reservation->reservation_number_people = $adult;

        $reservation->save();
    }
}