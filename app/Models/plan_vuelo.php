<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plan_vuelo extends Model
{
    use HasFactory;
	
	public function codigovuelo()
    {
        return $this->belongsTo('App\Models\codigo_vuelo');
    }
	
	public function avion()
    {
        return $this->belongsTo('App\Models\avion');
    }
	
	public function precio (){
		return $this->hasMany('App\Models\precio');
	}
}
