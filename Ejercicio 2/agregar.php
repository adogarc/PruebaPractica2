<?php
/**
 * 
 */
class libro
{
	private $Id;
	private $Titulo;
	private $Autor;
	private $NumeroEdicion;
	private $Lugar;
	private $Año;
	private $NumeroPag;
	private $Notas;
	private $ISBN;
	
	//constructor
	function __construct($Id='',$Titulo='', $Autor='', $NumeroEdicion='', $Lugar='', $Año='', $NumeroPag='', $Notas='', $ISBN='')
	{
		$this -> Id=$Id;
		$this -> Titulo = $Titulo;
		$this -> Autor = $Autor;
		$this -> NumeroEdicion = $NumeroEdicion;
		$this -> Lugar = $Lugar;
		$this -> Año = $Año;
		$this -> NumeroPag = $NumeroPag;
		$this -> Notas = $Notas;
		$this -> ISBN = $ISBN;
	}

	function lista()
	{

	}
	function VerId()
	{
		echo $this->Id;
	}

	function verTitulo()
	{
		echo $this->Titulo;
	}

	function verAutor()
	{
		echo $this->Autor;
	}

	function verNumeroEdit()
	{
		echo $this->NumeroEdicion;
	}

	function verLugar()
	{
		echo $this->Lugar;
	}

	function verAño()
	{
		echo $this->Año;
	}

	function verNumeroPag()
	{
		echo $this->NumeroPag;
	}

	function verNotas()
	{
		echo $this->Notas;
	}

	function verISBN()
	{
		echo $this->ISBN;
	}

	function ver()
	{


		echo "<html>";
		echo "<table class='table'>";
		echo "<thead>";
		echo "<tr>";
		echo "<th scope='col'>#</th>";
		echo "<th scope='col'>Titulo</th>";
		echo "<th scope='col'>Autor</th>";
		echo "<th scope='col'>Numero de Edicion</th>";
		echo "<th scope='col'>Lugar de Publicacion</th>";
		echo "<th scope='col'>Año de Publicacion</th>";
		echo "<th scope='col'>Numero de Paginas</th>";
		echo "<th scope='col'>Notas</th>";
		echo "<th scope='col'>ISBN</th>";
		echo "</tr>";
		echo "</thead>";

		echo "<tbody>";
		echo "<tr>";
		echo "<td>".$this->Id."</td>";
		echo "<td>".$this->Titulo."</td>";
		echo "<td>".$this->Autor."</td>";
		echo "<td>".$this->NumeroEdicion."</td>";
		echo "<td>".$this->Lugar."</td>";
		echo "<td>".$this->Año."</td>";
		echo "<td>".$this->NumeroPag."</td>";
		echo "<td>".$this->Notas."</td>";
		echo "<td>".$this->ISBN."</td>";
		echo "</tr>";
		echo "  </tbody>";
		echo "</table>";
	}




	function agregar()
	{
		
	}

};



	//Metodo para ver los libros
/*	function ver2()
	{

	 	echo "<html>";
		echo "<table class='table'>";
		echo "<thead>";
		echo "<tr>";
		echo "<th scope='col'>#</th>";
		echo "<th scope='col'>Titulo</th>";
		echo "<th scope='col'>Autor</th>";
		echo "<th scope='col'>Numero de Edicion</th>";
		echo "<th scope='col'>Lugar de Publicacion</th>";
		echo "<th scope='col'>Año de Publicacion</th>";
		echo "<th scope='col'>Numero de Paginas</th>";
		echo "<th scope='col'>Notas</th>";
		echo "<th scope='col'>ISBN</th>";
		echo "</tr>";
		echo "</thead>";


	}*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nuevo Libro</title>	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/abc.css">
</head>
<body>
	<h3 style="text-align:center;">Bienvenido al registro de Libros</h3>
    <div class="container">
        <form action="Post">
            <label for="Titulo">Ingrese el Titulo del Libro</label>
            <input type="text" placeholder="">
        </form>
    </div>
</body>
</html>