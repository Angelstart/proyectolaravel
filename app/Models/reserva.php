<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reserva extends Model
{
    use HasFactory;
	
	public function reservapasajero (){
		return $this->hasMany('App\Models\reserva_pasajero');
	}
	
	public function precio()
    {
        return $this->belongsTo('App\Models\precio');
    }
}
