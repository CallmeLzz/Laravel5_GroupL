<?php

namespace App\Models\Back;

use Illuminate\Database\Eloquent\Model;

class BackReservations extends Model
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
	public function getData(){
		return BackReservations::paginate(5);
	}
	public function exportReservation(){
		return BackReservations::all();
	}
}
