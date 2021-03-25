<?php
   /* $matriz=array(array(3),array(5));
    $matriz[0][0]=25;
    $matriz[0][1]=15;
    $matriz[0][2]=10;
    $matriz[1][0]=10;
    $matriz[1][1]=5;
    $matriz[1][2]=2;
    $matriz[2][0]=8;
    $matriz[2][1]=4;
    $matriz[2][2]=1;
    $matriz[3][0]=12;
    $matriz[3][1]=8;
    $matriz[3][2]=4;
    $matriz[4][0]=30;
    $matriz[4][1]=15;
    $matriz[4][2]=10;*/

    $idioma[0]=[
        'Idioma'=>'Ingles',
        'Basico'=>25,
        'Intermedio'=>15,
        'Avanzado'=>10
    ];
    $idioma[1]=[
        'Idioma'=>'frances',
        'Basico'=>10,
        'Intermedio'=>5,
        'Avanzado'=>2
    ];
    $idioma[2]=[
        'Idioma'=>'Aleman',
        'Basico'=>8,
        'Intermedio'=>4,
        'Avanzado'=>1
    ];
    $idioma[3]=[
        'Idioma'=>'Ruso',
        'Basico'=>12,
        'Intermedio'=>8,
        'Avanzado'=>4
    ];

    $idioma[4]=[
        'Idioma'=>'chino',
        'Basico'=>30,
        'Intermedio'=>15,
        'Avanzado'=>10
    ];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styleArrays.css" rel="stylesheet" type="text/css" />
    <title>Academia de Idiomas</title>
</head>
<body>
<h2>Bienvenido Este es el registro de la escuela de Idiomas</h2>
   <?php  
   foreach($idioma as $valor)
   {
       echo '<table>';
       echo '<tr>';
       echo '<td>Idioma:</td>';
       echo '<td>'.$valor['Idioma'].'</td>';
       echo '</tr>';
       echo '<tr>';
       echo '<td>Basico:</td>';
       echo '<td>'.$valor['Basico'].'</td>';
       echo '</tr>';
       echo '<td>Intermedio:</td>';
       echo '<td>'.$valor['Intermedio'].'</td>';
       echo '</tr>';
       echo '<td>Avanzado:</td>';
       echo '<td>'.$valor['Avanzado'].'</td>';
       echo '</tr>';
       echo '</table>';
       echo "<hr/>";
   }
   ?>
</body>
</html>
