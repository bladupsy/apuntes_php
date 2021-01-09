<?php

//Arrelgos, Array
//Las arrays parten de 0 seria en este caso el perro 
$animales = ['Perro', 'Gato', 'Elefante'];
// Se podria hacer la misma declaracion de la siguiente manera:
// $animales = array('Perro', 'Gato', 'Elefante');

?>
<!DOCTYPE html>
<html lang="es">
    <head>
    <!-- Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    </head>
    <body>
    <!--
    <h1>Mi animal favorito es: <?php echo $animales[0] ; //array de indice 0 ?></h1>
    <h1>Mi animal favorito es: <?php echo $animales[1] ; //array de indice 1 ?></h1>
    <h1>Mi animal favorito es: <?php echo $animales[2] ; //array de indice 2 ?></h1>-->
    <?php
        $i=0;

        while($i<=2){
            echo '<h1>Mi animal favorito es:' .$animales[$i].'</h1>';
            $i++;
            //Realizamos un arreglo o aaray, utilizamos un while porque es un ciclo repetitivo.
            // Va a mostrar todos los indices que posea la array con respecto a las condicionantes de while.
        }
    
    ?>

    </body>
</html>