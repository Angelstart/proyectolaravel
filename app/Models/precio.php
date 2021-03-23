<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class precio extends Model
{
    use HasFactory;
	
	public function tiporeserva()
    {
        return $this->belongsTo('App\Models\tipo_reserva');
    }
	
	public function reserva()
    {
        return $this->belongsTo('App\Models\plan_vuelo');
    }
	
	public function reserva (){
		return $this->hasMany('App\Models\reserva');
	}
}
