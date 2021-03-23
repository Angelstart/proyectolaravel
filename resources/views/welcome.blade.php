<style>
	#Origen{
		width: 170px;
	}
	#Destino{
		width: 170px;
	}
	#Ida{
		width: 170px;
	}
	#Vuelta{
		width: 170px;
	}
	#Cantidad{
		width: 60px;
	}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div id="principal">
	<select class="form-control" name="Origen" id="Origen">
		<option value="" hidden>Origen</option>
		<optgroup label="Islas Canarias">
			<option value="hierro">El Hierro</option>
			<option value="palma">La Palma</option>
			<option value="gomera">La Gomera</option>
			<option value="tenerifen">Tenerife Norte</option>
			<option value="tenerifes">Tenerife Sur</option>
			<option value="lanzarote">Lanzarote</option>
			<option value="fuerteventura">Fuerteventura</option>
			<option value="grancanaria">Gran Canaria</option>
		</optgroup>
	</select>
	<select class="form-control" name="Destino" id="Destino">
		<option value="" hidden>Destino</option>
		<optgroup label="Islas Canarias">
			<option value="hierro">El Hierro</option>
			<option value="palma">La Palma</option>
			<option value="gomera">La Gomera</option>
			<option value="tenerifen">Tenerife Norte</option>
			<option value="tenerifes">Tenerife Sur</option>
			<option value="lanzarote">Lanzarote</option>
			<option value="fuerteventura">Fuerteventura</option>
			<option value="grancanaria">Gran Canaria</option>
		</optgroup>
	</select>
	<label>Ida y Vuelta</label>
	<input type="radio" id="IdaVuelta" name="IdaVuelta">
	<label>Ida:</label>
	<input class="form-control" type="date" id="Ida" name="Ida">
	<label>Vuelta:</label>
	<input class="form-control" type="date" id="Vuelta" name="Vuelta" disabled>
	<label>Personas:</label>
	<select class="form-control" name="Cantidad" id="Cantidad">
		<option value="" hidden>-</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
	</select>
</div>	
<script type="text/javascript">
document.getElementById("Vuelta").removeAttribute("disabled");
</script>