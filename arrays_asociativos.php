
<?php
//$ciudad = ['Valdivia', 'Puerto Varas'];
//ARRAY asociativo
$ciudad[0]=[
    'nombre'=> 'Valdivia',
    'poblacion'=>100

];
$ciudad[1]=[
    'nombre'=> 'Puerto Varas ',
    'poblacion'=>100

];


?>

<!DOCTYPE html>
<html lang="es">
    <head>
    <!-- Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    </head>

    <body>
    <h1>Ciudades</h1>
    <hr>
    <!--<?php  echo $ciudad[0]['nombre']?> Array simple-->
    <!--Array asociativa con FOR
        <?php
    for($i=0; $i<=1; $i++){
        echo '<h2> Nombre: ' .$ciudad[$i]['nombre']. '</h2>';
        echo '<h2> Población: ' .$ciudad[$i]['poblacion']. '</h2>';
        echo '<hr>';
    }
    ?>-->

    <?php
    foreach($ciudad as $valor){
        echo '<h2> Nombre: '.$valor['nombre'].' </h2>';
        echo '<h2>Población: '.$valor['poblacion'].'</h2>';
        echo '<hr>';
    }
    
    ?>
    </body>

</html>