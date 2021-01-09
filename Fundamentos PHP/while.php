<?php
//por lo general se le asigna a la variable i denomina a incremento
//WHILE: sirve para recorrer arreglo o para incrementos, dentro del parentesis se coloca la condición.
//
$i = 1;
//DO es una acción, 
do{

    echo $i.'</br>';
    $i++;
}
while($i<10);
    echo 'fin del ciclo while';

/*
while($i<10){
    echo $i.'</br>'; //si se deja así el while, será un ciclo infinito imprimira uno infinitamente | con el punto se esta concatenando
    $i++; // genera un incremento

}
echo 'fin del ciclo while';
*/

?>
