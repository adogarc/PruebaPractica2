<?php
 $matriz=array(
    array(25,10,8,12,30),
    array(15,5,4,8,15),
    array(10,2,1,4,10)
 );
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styleIndices.css" rel="stylesheet" type="text/css" />
    <title>Registro de Alumnos</title>
</head>
<body>
<h3>Bienvenido al Registro de Alumnos de la Academia de Idiomas</h3>
    <?php
    //Registro del Ingles
    echo '<table style:>';
    echo '<tr>';
    echo '<td>Idioma:</td>';
    echo '<td>Ingles</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Basico:</td>';
    echo '<td>'.$matriz[0][0].'</td>';
    echo '</tr>';
    echo '<td>Intermedio:</td>';
    echo '<td>'.$matriz[1][0].'</td>';
    echo '</tr>';
    echo '<td>Avanzado:</td>';
    echo '<td>'.$matriz[2][0].'</td>';
    echo '</tr>';
    echo '<hr>';
    //Registro del Frances
    echo '<table>';
    echo '<tr>';
    echo '<td>Idioma:</td>';
    echo '<td>Frances</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Basico:</td>';
    echo '<td>'.$matriz[0][1].'</td>';
    echo '</tr>';
    echo '<td>Intermedio:</td>';
    echo '<td>'.$matriz[1][1].'</td>';
    echo '</tr>';
    echo '<td>Avanzado:</td>';
    echo '<td>'.$matriz[2][1].'</td>';
    echo '</tr>';
    echo '<hr>';

    //Registro del Aleman
    echo '<table>';
    echo '<tr>';
    echo '<td>Idioma:</td>';
    echo '<td>Aleman</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Basico:</td>';
    echo '<td>'.$matriz[0][2].'</td>';
    echo '</tr>';
    echo '<td>Intermedio:</td>';
    echo '<td>'.$matriz[1][2].'</td>';
    echo '</tr>';
    echo '<td>Avanzado:</td>';
    echo '<td>'.$matriz[2][2].'</td>';
    echo '</tr>';
    echo '<hr>';

    //Registro del Ruso
    echo '<table>';
    echo '<tr>';
    echo '<td>Idioma:</td>';
    echo '<td>Ruso</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Basico:</td>';
    echo '<td>'.$matriz[0][3].'</td>';
    echo '</tr>';
    echo '<td>Intermedio:</td>';
    echo '<td>'.$matriz[1][3].'</td>';
    echo '</tr>';
    echo '<td>Avanzado:</td>';
    echo '<td>'.$matriz[2][3].'</td>';
    echo '</tr>';
    echo '<hr>';

    //Registro del Chino Mandarin
    echo '<table>';
    echo '<tr>';
    echo '<td>Idioma:</td>';
    echo '<td>Chino Mandarin</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Basico:</td>';
    echo '<td>'.$matriz[0][4].'</td>';
    echo '</tr>';
    echo '<td>Intermedio:</td>';
    echo '<td>'.$matriz[1][4].'</td>';
    echo '</tr>';
    echo '<td>Avanzado:</td>';
    echo '<td>'.$matriz[2][4].'</td>';
    echo '</tr>';
    echo '<hr>';
    ?>
</body>
</html>