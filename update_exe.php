 <?php
include('db.php');

//Recibir mediante post los campos que se van a actualizar
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$appat=$_POST['appat'];
$apmat=$_POST['apmat'];
$fecha_nac=$_POST['fecha_nac'];
$edo_civil=$_POST['edo_civil'];
$mail=$_POST['mail'];

$fecha_registro=date("Y-m-d | H:i:s a");
$idcarrera=$_POST['carrera'];


$sql = "UPDATE datos_personales SET nombre='$nombre',appat='$appat',apmat='$apmat',fecha_nac='$fecha_nac',edo_civil='$edo_civil',mail='$mail', idcarrera = '$idcarrera' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
  echo "<script>window.location.href='tabla.php'</script>";
} else {
  echo "Error actualizando registro: " . mysqli_error($conn);
  echo "<script>window.location.href='tabla.php'</script>";
}

mysqli_close($conn);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<br>
        <a href="tabla.php" class="btn btn-danger">Volver</a>
        <hr>

</body>
</html>