<?php

include_once 'conexion.php';

//LEER la basa de datos
$basedatos = 'SELECT * FROM tablas';

$conexion = $pdo->prepare($basedatos);
$conexion->execute();

$resultado = $conexion-> fetchAll(); //con fetchAll devuelve nuestra array de la base de datos

//var_dump($resultado);

//AGREGAR
 
 
 if($_POST){
   //echo $_POST['color']; //si las cosas se estan enviando por POST  quiero que me muestre los que agrego

   $color = $_POST['color'];
   $descripcion = $_POST['descripcion'];
    //con esta variable agragamos los datos a mysql con values ?,? no permitimos las inyectiones, metodo de seguridad
   $basedatos_agregar = ' INSERT INTO  tablas (color, descripcion) VALUES (?,?)';
   $sentencia_agregar = $pdo->prepare($basedatos_agregar);
   $sentencia_agregar->execute(array($color, $descripcion));
   

 }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6">
                <!-- Muestra de datos-->
              <?php   foreach($resultado as $dato): ?>
                <div class="alert alert-<?php echo $dato['color'] ?> " role="alert">
                    <?php echo $dato['color'] ?>
                        -
                      <?php echo $dato['descripcion'] ?>
                 </div>

              <?php endforeach ?>
      
        </div>
        <div class="col-md-6">
        <h2>Agregar Elementos</h2>
        <form method="POST">
          <input type="text" class="form-control" name="color">
          <input type="text" class="form-control mt-3" name="descripcion">
          <button class="btn btn-primary mt-3">Agregar</button>
          </form>
        
        
        </div>
        
      </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>