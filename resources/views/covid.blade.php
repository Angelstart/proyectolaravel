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
<img id="logo" src="img/logo.png">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>