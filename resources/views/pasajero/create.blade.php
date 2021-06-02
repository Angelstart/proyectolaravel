
@extends("layouts.app2")


@section("content")
<img id="logo" src="https://i.imgur.com/r7KDtNb.png"><br><br><br><br>
<h1>Reservar</h1>
<form   method="GET" class="form-horizontal" action="{{url('/')}}">
@csrf
    	
	<div class="form-group">
      <label class="control-label col-sm-2" for="nombre">Nombre:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
      </div>
    </div>
    
	<div class="form-group">
      <label class="control-label col-sm-2" for="primer_apellido">Primer Apellido:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="primer_apellido" placeholder="Primer Apellido" name="primer_apellido">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="segundo_apellido">Segundo Apellido:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="segundo_apellido" placeholder="Segundo Apellido" name="segundo_apellido">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="DNI">DNI:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="DNI" placeholder="DNI" name="DNI">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="correo">Correo Electronico:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="correo" placeholder="Correo Electronico" name="correo">
      </div>
    </div>
	
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Guardar</button>
      </div>
    </div>

  </form>

<a href="/" class="btn btn-info">Volver al listado </a>



@endsection