<?php

$elección = 'dulce';
//SWITCH, por cada variable o dato hay un caso se puede reemplazar al if. Además se puede llevar más casos
switch($elección) {
        case 'helado': //por cada caso evalua la variable
        echo 'El valor del helado es de $1000';
        break; //para cerrar el ciclo
        case 'pizza':
            echo 'El vallor de la pizza es de $5000';
            break;
        case 'torta':
            echo 'El valor de la torta es de $2000';
            break;
        default:
        echo 'Opción no válida';
        break;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8"S
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
 <h1>Ingresa una opción:</h1>
 <hr>
 <h2>1)Pizza</h2>
 <h2>2)Helado</h2>
 <h2>3)Torta</h2>

</body>
</html>