<?php 

//variables
$edad = 29;
$nombre = 'Gisela';
//Los booleanos son los de tipo verdadero o falso

// $vivo = falso;

//Muestra la informacion a través de echo
//echo $edad;

// la concatenación es la union de dos elementos, se realiza a traves del .
echo $nombre. '  tiene una edad de: '.$edad. 'años  </br>';


//cuando pongo echo con comiilas dobles puedo llamar a las variables, que con frecuencia no se realiza por medios de seguridad. Ejemplo
echo "$nombre tiene una edad de $edad años </br>";

//</br> hace que salto de linea es una etiqueta de html5
//con comillas simples
echo '$nombre tiene una edad de $edad años </br>'

?>