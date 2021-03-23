<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aeropuerto extends Model
{
    use HasFactory;
	
	public function codigoorigen (){
		return $this->hasMany('App\Models\codigo_vuelo');
	}
	
	public function codigodestino (){
		return $this->hasMany('App\Models\codigo_vuelo');
	}
}
