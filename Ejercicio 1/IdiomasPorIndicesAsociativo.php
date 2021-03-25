<?php
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
    <link href="css/styleIndicesAsociativo.css" rel="stylesheet" type="text/css" />
    <title>Registro de Academia de Idiomas</title>
</head>
<body>
    <h2>Bienvenido Al Registro de la Academia de Idiomas</h2>
    <?php 
        for($i=0;$i<=4;$i++)
        {
            echo '<table>';
            echo '<tr>';
            echo '<td>Idioma:</td>';
            echo '<td>'.$idioma[$i]['Idioma'].'</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>Basico:</td>';
            echo '<td>'.$idioma[$i]['Basico'].'</td>';
            echo '</tr>';
            echo '<td>Intermedio:</td>';
            echo '<td>'.$idioma[$i]['Intermedio'].'</td>';
            echo '</tr>';
            echo '<td>Avanzado:</td>';
            echo '<td>'.$idioma[$i]['Avanzado'].'</td>';
            echo '</tr>';
            echo '</table>';
            echo "<hr/>";
        }
    ?>
</body>
</html>