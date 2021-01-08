<?php
 // string "holaa" o "4" 

//OPERADORES ARITMETICOS
$a = 3; //primer variable a
$b = 4;
$z = 5;

$c= $a * $b;

//echo $c;

//OPERADORES LÓGICOS, se ocupa con frecuencia con los condicionales, a traves de verdadero o falso

//OPERADORES DE COMPARACIÓN
//cuando se trata de comparaciones mayor o igual que u menor igual que la sintaxis es la siguiente: ($a>=$b)


if($z>$b){

    echo 'Es verdad </br>';


}else {
    echo 'es mentira </br>';
}

//Comparación entre condicionales && llamada "I", en este caso solo es true si se cumple que el primer condicional es verdad y despues verifica al segundo operador.
//Para que de verdadero los dos condicionales tienen que ser true

if($z>$b && $z>$a){

    echo 'Es verdad </br>';


}else {
    echo 'es mentira </br>';
}

//En este caso la comparacion || llamada "o "es que una de las dos condiciones sea true el operador va a tomar como verdadero.
if($z>$b || $z<$a){
    echo 'Es verdad </br>';

}else {
    echo 'Es mentira </br>';
}

//En este ejemplo vemos que la primer variable a vale 3 (por la variable del inicio) pero como se lo suma 1 da que la segunda variable de a valga  4
// en la tercera variable a toma el valor final de la segunda variable de a y le suma 1, da como resultado 5
//$a = $a+1; //segunda variable  a
//$a = $a+1;// tercer variable a
//echo $a;

//Como abreviar los operadores
$a++; //Incrementa 
$a--;//disminuye
echo $a;


?>