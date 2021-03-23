<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_avion extends Model
{
    use HasFactory;
	
	public function avion (){
		return $this->hasMany('App\Models\avion');
	}
}
