<?php

//dbname va el nombre de la base de datos que le asignamos en mysqli

//Conectamos a la base de datos

$link = 'mysql:host=localhost;dbname=prueba_2';

$usuario= 'root';
$password ='';

try{

    $pdo = new PDO($link, $usuario, $password);

    echo 'Conectado';
    //query es una sentencia que se muestra por ejemplo la tabla 

    foreach($pdo->query('SELECT * FROM `tablas` ') as $fila)  {
        print_r($fila);
    }

} catch (PDOException $e) {
    print "Error: " . $e->getMessage() . "</br>";
    die();
}




?>