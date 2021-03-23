<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\codigo_vuelo;
use App\Models\plan_vuelo;
use App\Models\precio;
use App\Models\aeropuerto;
use App\Http\Requests\StoreAirways;

class AirwaysController extends Controller
{
     public function __construct()
    {

        $this->middleware('auth');

        $this->middleware('gmail');
    }

	public function actualizar($id, $campo, $valor){
		$airway=Airway::find($id); 
		$airway->update([$campo => $valor]);
		return $airway;
	}
	
	
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $airways=Airway::all();
		
		  return view("airways.index",compact("airways"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("airways.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAirways $request)
    {
        $datos=$request->all();

		
		Airway::create($datos);
		return redirect("/airways");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
