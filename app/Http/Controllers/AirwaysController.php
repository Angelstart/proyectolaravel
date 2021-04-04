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
use Illuminate\Support\Facades\DB;

class AirwaysController extends Controller
{
	
	//SELECT codigo, aeropuerto_origen, aeropuerto_destino, horario, fecha FROM plan_vuelos ,codigo_vuelos WHERE codigo_vuelos.id=id_codigo AND aeropuerto_origen=8 AND aeropuerto_destino=5
    public function index()
	{
		
		//$codigos = codigo_vuelo::where('aeropuerto_origen','8')->where('aeropuerto_destino','5')->get();
		//$codigos = DB::select("SELECT codigo, aeropuerto_origen, aeropuerto_destino, horario, fecha FROM plan_vuelos ,codigo_vuelos WHERE codigo_vuelos.id=id_codigo AND aeropuerto_origen=8 AND aeropuerto_destino=5")
		$codigos = DB::select("SELECT plan_vuelos.id, codigo, aeropuerto_origen, aeropuerto_destino, horario, fecha FROM plan_vuelos ,codigo_vuelos WHERE codigo_vuelos.id=id_codigo AND aeropuerto_origen=8 AND aeropuerto_destino=6 AND fecha='2021-03-29'");
		return view("airways.index",compact("codigos"));
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
