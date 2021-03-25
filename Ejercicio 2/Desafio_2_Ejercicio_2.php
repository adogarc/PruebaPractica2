<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Biblioteca</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/abc.css">
	

</head>
<body>

<br>
<br>
<div class="container">

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="card">
					<div class="card-body">
						Desea Agregar algun libro?
						<a class="btn btn-primary btn-lg" href="agregar.php" role="button">Agregar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>







<?php

include('agregar.php');

$libro1= new libro("1","Harry Potter1", "asdad", "233", "EEUU", "2001", "10000", "2 de 3", "123456215321");

$libro2= new libro("2","Harry Potter2", "agfhfh", "401", "china", "2001", "10000", "2 de 3", "123456215321");

$libro3= new libro("3","HP3", "agfhfh", "401", "china", "2001", "10000", "2 de 3", "123456215321");


$libro1->ver();
$libro2->ver();
$libro3->ver();

?>




</body>
</html>