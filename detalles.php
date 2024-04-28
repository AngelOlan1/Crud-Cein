 <?php
include('db.php');

//Recibimos por GET el id del registro a consultar
$id=$_GET['id'];

// sentencia SQL para OBTENER un registro
$sql = "SELECT * FROM datos_personales WHERE id=$id";
if ($cons=mysqli_query($conn, $sql)) {
    $reg=mysqli_fetch_assoc($cons);
    $idcarrera= $reg['idcarrera']; //columna idCarrera de la tabla datos_personales
    $newFecha = date("d/m/Y", strtotime($reg['fecha_nac']));
    

// Consulta para extraer el nombre de la carrera a partir del ID almacenado
// en la tabla: datos_personales
$sql2 = "SELECT * FROM carreras WHERE idcarrera=$idcarrera"; 
$cons2 = mysqli_query($conn, $sql2);
$reg2 = mysqli_fetch_assoc($cons2);

$idcarrera = $reg2['carrera'];
?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title></title>
</head>
<body>
    <div class="container">
        <br>
        <a href="tabla.php" class="btn btn-dark">Volver</a>
        <hr>
        <div class="card text-center">
            <div class="card-header text-bg-primary">
                Tarjeta Personal
            </div>
          <!-- <img src="..." class="card-img-top" alt="..."> -->
          <div class="card-body">
            <h5 class="card-title"><?=$reg['nombre']." ".$reg['appat']." ".$reg['apmat']?></h5>
            <p class="card-text"></p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Correo electrónico: <?=$reg['mail']?></li>
            <li class="list-group-item">Estado civil: <?php if ($reg['edo_civil']==1) {echo "casado";} else echo "soltero";?></li>
            <li class="list-group-item">Fecha nacimiento: <?=$newFecha?> </li>
            <li class="list-group-item">Carrera: <?=$idcarrera?> </li>

          </ul>
          <div class="card-footer text-body-secondary text-center">
            <a class="btn btn-warning" href="form_update.php?id=<?=$reg['id']?>">Editar</a> 
            <a class="btn btn-danger" href="delete_exe.php?id=<?=$reg['id']?>" onclick="return confirm('¿Estás seguro de que deseas borrar este registro?')">Borrar</a>

          </div>
        </div>    
    </div>
</body>
</html>
<?php }
mysqli_close($conn);
?>