 <?php
include('db.php');

$nombre=$_POST['nombre'];
$appat=$_POST['appat'];
$apmat=$_POST['apmat'];
$fecha_nac=$_POST['fecha_nac'];
$edo_civil=$_POST['edo_civil'];
$mail=$_POST['mail'];
$fecha_registro=date("Y-m-d");
$idcarrera=$_POST['carrera'];

$sql = "INSERT INTO datos_personales (nombre,appat,apmat,fecha_nac,edo_civil,mail,fecha_registro,idcarrera) 
	VALUES ('$nombre','$appat','$apmat','$fecha_nac','$edo_civil','$mail','$fecha_registro','$idcarrera')";

if (mysqli_query($conn, $sql)) {
        echo "<script>+alert('Usuario suscrito correctamente con la matricula $nombre'); window.location.href='tabla.php'</script>
    <noscript><a href='tabla.php'>Usuario suscrito correctamente.</a></noscript)";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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