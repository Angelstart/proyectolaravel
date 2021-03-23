<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reserva_pasajero extends Model
{
    use HasFactory;
	
	public function pasajero()
    {
        return $this->belongsTo('App\Models\pasajero');
    }
	
	public function reserva()
    {
        return $this->belongsTo('App\Models\reserva');
    }
}
