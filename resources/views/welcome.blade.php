<style>
	#Origen{
		width: 170px;
	}
	#Destino{
		width: 170px;
		margin-top: 8px;
	}
	#Ida{
		width: 170px;
	}
	#Vuelta{
		width: 170px;
	}
	#Cantidad{
		width: 60px;
		margin-top: 8px;
		margin-bottom: 23px;
	}
	#principal{
		position: absolute;
		left:15%;
		right:15%;
		top: 80px;
		background-color: #3a84a7;
		width: 70%;
		height: 210px;
	}
	.subprincipal{
		display: inline-block;
		padding-left: 15px;
	}
	#logo{
		position:absolute;
		left: 15%;
		height: 80px;
		width: auto;
	}
	#covid{
		position:absolute;
		right: 15%;
		font-size: 40px;
		margin-top: 3px;
	}
	.separacion{
		margin-top: 8px;
	}
	.page {
  padding: 40px;
   
}
html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    font-family: Helvetica, Arial, sans-serif;
}

#splash {
  background: #3a84a7;
  background-repeat: repeat-y;
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  animation: splash 3s ease-in;
  animation-fill-mode: forwards;
  -webkit-animation-fill-mode: forwards;
}

#loader {
  position: absolute;
  left: 50%;
  top: 0;
  transform: translate(-50%,0);
}

#loader:after {
  content: '';
  position: absolute;
  left: 50%;
  margin-left: -8px;
  bottom: -170px;
  width: 3px;
  background: #fff;
  background: linear-gradient(to bottom, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 50%, rgba(255,255,255,0) 100%);
  height: 200px;
}

#loader:before {
  content: '';
  position: absolute;
  left: 50%;
  margin-left: 8px;
  bottom: -190px;
  width: 3px;
  background: #000;
  background: linear-gradient(to bottom, rgba(0,0,0,.2) 0%, rgba(0,0,0,.2) 50%, rgba(0,0,0,0) 100%);
  height: 200px;
}

#splash .anim {
  height: 100%;
  position: absolute;
  left: 50%;
  width: 100px;
  transform: translate(-50%,100%);
  animation: loader 4s linear;
  animation-fill-mode: forwards;
  -webkit-animation-fill-mode: forwards;
}

@keyframes loader {
  0% {
    transform: translate(-50%,110%);
  }
  30% {
    transform: translate(-50%,50%);
  }
  100% {
    transform: translate(-50%,0%);
  }
}

@keyframes splash {
  0% {
    transform: translate(0%,0%);
  }
  50% {
    transform: translate(0%,0%);
  }
  100% {
    transform: translate(0%,-100%);
  }
}
	#notificacion{
		width: 25%;
		display: fixed;
		position: absolute;
		right: 5px;
		bottom: 0px;
		visibility: hidden;
	}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<img id="logo" src="img/logo.png"><button type="button" class="btn btn-info" id="covid">Situacion COVID19</button>
<div class="alert alert-danger" id="notificacion" role="alert" onclick="notificacion()">
  Debe insertar todos los datos de ingreso
</div>
<div id="principal">
	<div class="subprincipal">
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
		<label class="separacion">Ida y Vuelta
		<input type="checkbox" onclick="vuelta()"></label>
	</div>
	<div class="subprincipal">
		<label>Ida:
		<input class="form-control" type="date" id="Ida" name="Ida"></label><br>
		<label>Vuelta:
		<input class="form-control" type="date" id="Vuelta" name="Vuelta" disabled></label>
	</div>
	<div class="subprincipal">
		<label>Personas:
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
		</select></label><br>
		<a href="#">Formar Grupos</a>
	</div>
	<div class="subprincipal">
		<label class="separacion">Todos menores de 29
		<input type="checkbox"></label><br>
		<label class="separacion">Todos carné joven
		<input type="checkbox"></label><br>
		<label class="separacion">Todos Universitarios
		<input type="checkbox"></label><br>
		<label class="separacion">Todos mayores de 60 años
		<input type="checkbox"></label><br>
		<label class="separacion">Familia numerosa
		<input type="checkbox"></label>
	</div>
	<div>
		<button type="button" class="btn btn-light" onclick="comprobar()">
			
			Reservar
		</button>
	</div>
</div><a href="/airways" class="btn btn-light">Reservar</a>
<div id="splash">
  <div class="anim">
    <div id="loader">
      <svg version="1.1" width="60px" height="70px" viewBox="0 0 60 70">
        <defs>
          <filter id="f1" x="0" y="0">
            <feGaussianBlur in="SourceGraphic" stdDeviation="2" />
          </filter>
        </defs>
        <g id="airplane">
          <path fill="#000" d="M0.677,20.977l4.355,1.631c0.281,0.104,0.579,0.162,0.88,0.16l9.76-0.004L30.46,41.58c0.27,0.34,0.679,0.545,1.112,0.541
          h1.87c0.992,0,1.676-0.992,1.322-1.918l-6.643-17.439l6.914,0.002l6.038,6.037c0.265,0.266,0.624,0.412,0.999,0.418l1.013-0.004
          c1.004-0.002,1.684-1.012,1.312-1.938l-2.911-7.277l2.912-7.278c0.372-0.928-0.313-1.941-1.313-1.938h1.017
          c-0.375,0-0.732,0.15-0.996,0.414l-6.039,6.039h-6.915l6.646-17.443c0.354-0.926-0.33-1.916-1.321-1.914l-1.87-0.004
          c-0.439,0.004-0.843,0.203-1.112,0.543L15.677,17.24l-9.765-0.002c-0.3,0.002-0.597,0.055-0.879,0.16L0.678,19.03
          C-0.225,19.36-0.228,20.637,0.677,20.977z" transform="translate(44,0) rotate(90 0 0)" />
        </g>
        <g id="shadow" transform="scale(.9)">
          <path fill="#000" fill-opacity="0.3" d="M0.677,20.977l4.355,1.631c0.281,0.104,0.579,0.162,0.88,0.16l9.76-0.004L30.46,41.58c0.27,0.34,0.679,0.545,1.112,0.541
      		h1.87c0.992,0,1.676-0.992,1.322-1.918l-6.643-17.439l6.914,0.002l6.038,6.037c0.265,0.266,0.624,0.412,0.999,0.418l1.013-0.004
      		c1.004-0.002,1.684-1.012,1.312-1.938l-2.911-7.277l2.912-7.278c0.372-0.928-0.313-1.941-1.313-1.938h1.017
      		c-0.375,0-0.732,0.15-0.996,0.414l-6.039,6.039h-6.915l6.646-17.443c0.354-0.926-0.33-1.916-1.321-1.914l-1.87-0.004
      		c-0.439,0.004-0.843,0.203-1.112,0.543L15.677,17.24l-9.765-0.002c-0.3,0.002-0.597,0.055-0.879,0.16L0.678,19.03
      		C-0.225,19.36-0.228,20.637,0.677,20.977z" transform="translate(64,30) rotate(90 0 0)" filter="url(#f1)" />
        </g>
      </svg>
    </div>
  </div>
</div>
<script type="text/javascript">
	console.log("hola")
	function vuelta(){
		let result = document.getElementById("Vuelta").hasAttribute("disabled")
		if (result){
			document.getElementById("Vuelta").removeAttribute("disabled");
		}else{
			document.getElementById("Vuelta").setAttribute("disabled", "true");
		}
	}
	function comprobar(){
		var ida = document.getElementById("Ida").value;
		console.log(ida)
		let result = document.getElementById("Vuelta").hasAttribute("disabled")
		if (result){
		}else{
			var vuelta = document.getElementById("Vuelta").value;
			console.log(vuelta)
		}
		var origen = document.getElementById("Origen").value;
		var destino = document.getElementById("Destino").value;
		console.log("origen -> "+origen+" | destino -> "+destino)
		if(origen == "" || destino == "" || ida == ""){
			document.getElementById("notificacion").style.visibility = "visible";
		}else{
			window.location.href = "/airways";
		}
	}
	function notificacion(){
		document.getElementById("notificacion").style.visibility = "hidden";
	}
	
</script>