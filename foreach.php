<?php

$animales = ['Perro', 'Gato', 'Elefante'];

?>
<!DOCTYPE html>
<html lang="es">
    <head>
    <!-- Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    </head>
    <body>
    
    <?php
      
            //En el FOR pusimos la variable $i=0, el condicionante $i<=2 y el incremento de dicha variable que es $i++
           for($i=0; $i<=2; $i++) {
            echo '<h1>Mi animal favorito es:' .$animales[$i].'</h1>';

           }

            //en el parentesis declaramos la array y le asignamos otra variable $valor
           foreach($animales as $valor) {
            echo '<h1>Mi animal favorito es:' .$valor.'</h1>';
           }
        
    
    ?>

    </body>
</html>