<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_reserva extends Model
{
    use HasFactory;
	
	public function precio (){
		return $this->hasMany('App\Models\precio');
	}
}
