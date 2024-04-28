 <?php
include('db.php');

//Recibimos por GET el id del registro a borrar
$id=$_GET['id'];

// sentencia SQL para eliminar un registro
$sql = "DELETE FROM datos_personales WHERE id=$id";

if (mysqli_query($conn, $sql)) {
  echo "<script>window.location.href='tabla.php'</script>";
} else {
  echo "Error borrando el registro: " . mysqli_error($conn);
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
        <a href="tabla.php" class="btn btn-dark">Volver</a>
        <hr>

</body>
</html>


