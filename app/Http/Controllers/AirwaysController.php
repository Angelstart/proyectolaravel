<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reserva;
use App\Models\reserva_pasajero;
use App\Models\codigo_vuelo;
use App\Models\plan_vuelo;
use App\Models\precio;
use App\Models\aeropuerto;
use App\Http\Requests\StoreAirways;

class AirwaysController extends Controller
{
    public function index()
	{
		$reserva=reserva::all();
		return view("airways.index",compact("reserva"));
	}
	public function create()
	{
		$reserva=reserva::all();
		return view("airways.create",compact("vuelos"));
	}
	public function show($id)
	{
		$reserva=reserva::find($id);
		
		return view("airways.show", compact('reserva'));
	}
	public function edit($id)
	{
		$reserva = reserva::find($id);
		return view('airways.edit', compact('reserva'));
	}
	public function update(StoreAirways $request, $id)
	{
		$datos=$request->all();
		$reserva= reserva::find($id);
		$reserva->update($datos);
		return redirect('airways');
	}
	
	public function store(StoreAirways $request)
	{
		$datos=$request->all();
		
		reserva::create($datos);
		return redirect('/airways');
	}
	public function destroy($id)
	{
		$reserva = reserva::find($id);
		$reserva->delete();
		return redirect('airways');
	}
}
