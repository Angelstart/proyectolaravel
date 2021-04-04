@extends("layouts.app2")


@section("content")

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/r-2.2.7/datatables.min.css"/> 
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script  type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
	<img id="logo" src="img/logo.png"><br><br><br><br>
	<table id="tabla_reserva" class="table table-bordered table-striped dt-responsive nowrap" style="width:100%;">
		<thead>
			<tr><th>Codigo del vuelo</th><th>Origen</th><th>Destino</th><th>Hora</th><th>Fecha</th><th></th></tr>
		</thead>
		<tbody>
			@foreach($codigos as $codigo)
				<tr data-id={{$codigo->id}}>
					<td data-campo='codigo' class="editar">{{$codigo->codigo}}</td>
					<td data-campo='origen' class="editar">{{$codigo->aeropuerto_origen}}</td>
					<td data-campo='destino'  class="editar">{{$codigo->aeropuerto_destino}}</td>
					<td data-campo='horario'  class="editar">{{$codigo->horario}}</td>
					<td data-campo='fecha'  class="editar">{{$codigo->fecha}}</td>
					<td data-campo='f_modificacion'  class="editar"><a href="/airways/{{$codigo->id}}/edit" class="btn btn-success">Reservar</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
	

<script>

	$(document).ready(function(){
        var t=$("#tabla_reserva").DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            },
			responsive: {
				details: {
					renderer: function ( api, rowIdx, columns ) {
						var data = $.map( columns, function ( col, i ) {
							return col.hidden ?
								'<tr data-dt-row="'+col.rowIndex+'" data-dt-column="'+col.columnIndex+'">'+
									'<td>'+col.title+':'+'</td> '+
									'<td>'+col.data+'</td>'+
								'</tr>' :
								'';
						} ).join('');

						return data ?
							$('<table/>').append( data ) :
							false;
					}
				}
        	}
        });
    });

</script>

@endsection
