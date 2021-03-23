<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class avion extends Model
{
    use HasFactory;
	
	public function tipoavion()
    {
        return $this->belongsTo('App\Models\tipo_avion');
    }
	
	public function planvuelo (){
		return $this->hasMany('App\Models\plan_vuelo');
	}
}
