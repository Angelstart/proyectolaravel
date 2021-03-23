<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class codigo_vuelo extends Model
{
    use HasFactory;
	
	public function origen()
    {
        return $this->belongsTo('App\Models\aeropuerto');
    }
	
	public function destino()
    {
        return $this->belongsTo('App\Models\aeropuerto');
    }
	
	public function planvuelo (){
		return $this->hasMany('App\Models\plan_vuelo');
	}
}
