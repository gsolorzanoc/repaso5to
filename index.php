<!DOCTYPE html>
<html>
<head>
	<title>PAGINA PRINCIPAL</title>
</head>
<body>
<?php

	include "encabezado.php";

?>
<div class="inicio">
<br>
<center>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width: 500px; height: 300px">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/peli1.jpg" class="d-block w-100" alt="..." width="500px" height="300px">
    </div>
    <div class="carousel-item">
      <img src="img/peli2.jpeg" class="d-block w-100" alt="..." width="500px" height="300px">
    </div>
    <div class="carousel-item">
      <img src="img/peli3.jpg" class="d-block w-100" alt="..." width="500px" height="300px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="estrenos">
<table>
	<tr>
		<td>
			<div class="card" style="width: 18rem;">
  			<img src="img/peli1.jpg" class="card-img-top" alt="...">
  			<div class="card-body">
    			<h5 class="card-title">Transformers</h5>
    			<p class="card-text">Introduccion a la pelicula</p>
    			<a href="transformers.php" class="btn btn-primary">Ver Más</a>
  			</div>
			</div>
		</td>
		<td>
			<div class="card" style="width: 18rem;">
  			<img src="img/peli2.jpeg" class="card-img-top" alt="...">
  			<div class="card-body">
    			<h5 class="card-title">Star Wars</h5>
    			<p class="card-text">Introduccion a la pelicula</p>
    			<a href="starwars.php" class="btn btn-primary">Ver Más</a>
  			</div>
			</div>
		</td>
		<td>
			<div class="card" style="width: 18rem;">
  			<img src="img/peli3.jpg" class="card-img-top" alt="...">
  			<div class="card-body">
    			<h5 class="card-title">Harry Potter</h5>
    			<p class="card-text">Introduccion a la pelicula</p>
    			<a href="harrypotter.php" class="btn btn-primary">Ver Más</a>
  			</div>
			</div>
		</td>
	</tr>
</table>
</div>	
</center>
</div>
</body>
</html>