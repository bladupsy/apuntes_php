
<?php
//echo date('Y'); // es una fución date que cuando le asignamos Y devuelve los datos del año que dice tu pc
//La función le podemos declarar el nombre que deseemos. Dentro de las llaves se presneta la acción que desea llevar a cabo
//se devuelve los valores de la función con return
function lorem() {
    return '<h1>Holaa que onda</h1>';
}

// En los () de la función van los parametros a declarar o funciones dinamicas
function promedio( $n1, $n2){
    return ($n1+$n2)/2;//retornamos el promedio del calculo de dichas variables
}
//los datos del echo seran remplazados en los parametros de la  funcion $n1 es 10 y $n2 es 20
echo promedio(10, 20);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
    <section><?php echo lorem(); ?>
    <?php echo lorem(); ?>
    <?php echo lorem(); ?>
    </section>

</body>


</html>
