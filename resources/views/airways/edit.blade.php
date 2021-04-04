
@extends("layouts.app2")


@section("content")
<img style="height: 80px; width: auto;" src="https://upload.wikimedia.org/wikipedia/commons/8/86/Binter_Logo.png">
<h1>Reservar</h1>
<form   method="POST" class="form-horizontal" action="{{url('/reserva')}}">
@csrf
    	
	<div class="form-group">
      <label class="control-label col-sm-2" for="pasajero_id">Id del pasajero:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pasajero_id" placeholder="Id del pasajero" name="pasajero_id">
      </div>
    </div>
    
	<div class="form-group">
      <label class="control-label col-sm-2" for="vuelo_id">Id del vuelo:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="vuelo_id" placeholder="Id del vuelo" name="vuelo_id">
      </div>
    </div>
	
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Guardar</button>
      </div>
    </div>

  </form>

<a href="/reserva" class="btn btn-info">Volver al listado </a>
<table id="tabla_vuelos" class="table table-bordered table-striped">
		<thead>
			<tr><th>Nยบ</th><th>Id del vuelo</th><th>Origen</th><th>Destino</th><th>Fecha</th></tr>
		</thead>
		<tbody>
			@foreach($vuelos as $vuelo)
				<tr data-id={{$vuelo->id}}><td data-campo='n' class="editar"></td><td data-campo='id' class="editar">{{$vuelo->id}}</td><td data-campo='idorigen' class="editar">{{$vuelo->addOrigen->nombre}}</td><td   data-campo='iddestino' class="editar">{{$vuelo->addDestino->nombre}}</td><td  data-campo='f_matriculacion'  class="editar">{{$vuelo->fecha}}</td>
					@csrf
				</tr>
			@endforeach
		</tbody>
	</table>

	<script>

	$(document).ready(function(){
        var t=$("#tabla_vuelos").DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
        });

        t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
    });
	
	

</script>


@endsection