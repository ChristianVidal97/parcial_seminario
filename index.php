<!DOCTYPE html >
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>zoologico</title>
	<link href="https://fonts.googleapis.com/css2?family=Tiro+Devanagari+Hindi&display=swap" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="img/perro.png">
	<link href="/path/print.css" media="print" rel="stylesheet" />
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
	integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
	crossorigin="anonymous"></script>
	<script type="text/javascript" src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min,js"></script>
	

	<br>

	<style>
		body {
			background-image: url(img/zoo.png);
			background-size:cover;
		}
	</style>



</head>

<body>	
	<div class="divisor"></div>
	<div id="contenedorp" class="container, col-12" ><!--container 1 -->
		<div class="row">
			<center>
				<div id="contenedor2"class="col-3">
					<div class="card border-info" >
						<div class="card-body" style="background-color:#3a0219" >
							<h2>INGRESE LOS SIGUIENTES DATOS:</h2>
							<ul class="list-group list-group-light" align="center">
								
								<li class="list-group-item">
									<div for="txt_id"><b>Codigo animal:</b>
										<input type="number" name="txt_coda" id="txt_coda"min= "1" max="1000000000">
									</div>
								</li>

								<li class="list-group-item">	
									<div for="txt_nombre"><b>Nombre animal:</b>
										<input  type="text" name="txt_nombre" id="txt_nombre" >
									</div>
								</li>

								<li class="list-group-item">
									<div for="txt_especie"><b>Especie:</b>
										<input type="text" name="txt_especie" id="txt_especie"min= "1" max="1000000000">
									</div>
								</li>
								<li class="list-group-item">
									<div for="txt_sexo"><b>sexo:</b>
										<input type="text" name="txt_sexo" id="txt_sexo"min= "1" max="1000000000">
									</div>
								</li>
								<li class="list-group-item">
									<div for="txt_comida"><b>comida:</b>
										<input type="text" name="txt_comida" id="txt_comida"min= "1" max="1000000000">
									</div>
								</li>

								<li class="list-group-item">
									<div for="txt_"><b>jaula:</b>
										<input type="number" name="txt_jaula" id="txt_jaula"min= "1" max="1000000000">
									</div>
								</li>

								<li class="list-group-item">
									<div for="txt_vete"><b>veterinario:</b>
										<input type="number" name="txt_vete" id="txt_vete"min= "1" max="1000000000">
									</div>
								</li>

								<li class="list-group-item">
									<div for="txt_canta"><b>cantidad:</b>
										<input type="number" name="txt_canta" id="txt_canta"min= "1" max="1000000000">
									</div>
								</li>

								<li class="list-group-item">					
									<button type="button" class="btn btn-primary" onclick="abrir('datos.php')">OPCION 1</button>
									<button type="button" class="btn btn-warning" onclick="opcion2()">OPCION 2</button>
									<button type="button" class="btn btn-warning" onclick="opcion3()">OPCION 3</button>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</center>
		</div>

	</div>	<!--fin contenedor principal-->



	<script type="text/javascript" src="js/functions.js"></script>
</body>
</html>