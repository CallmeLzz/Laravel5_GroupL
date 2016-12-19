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
		return BackReservations::paginate(10);
	}
	public function getDataCond($id){
		return BackReservations::select('reservation_name', 'reservation_email', 'reservation_arrival_date', 
                'reservation_departure_date', 'reservation_type', 'reservation_number_people', 
                'price_rate', 'detail_image')
					->where('reservation_id', '=', $id)
	                ->join('prices', 'price_detail', '=', 'reservation_type')
	                ->join('details', 'detail_title', '=', 'reservation_type')
	                ->get();/*
					->join('prices', 'price_detail', '=', 'reservation_type')
					->where('reservation_id', 'LIKE', $id)
					->get();*/
	}
	/*=============================== Delete ===============================*/
		public function deleteReservation($id){
			BackReservations::where('reservation_id', 'LIKE', $id)->delete();
		}
	/*=============================== Export ===============================*/
		public function exportReservation(){
			return BackReservations::all();
		}
}
