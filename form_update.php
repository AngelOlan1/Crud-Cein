 <?php
include('db.php');

//Recibimos por GET el id del registro a borrar
$id=$_GET['id'];

// sentencia SQL para OBTENER un registro
$sql = "SELECT * FROM datos_personales WHERE id=$id";
if ($cons=mysqli_query($conn, $sql)) {
	$reg=mysqli_fetch_assoc($cons);
?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<title><?=$reg['nombre']?></title>
</head>
<body>
	<div class="container">
		
	
	<form action="update_exe.php" method="post">
		<div class="row">
			<label for="nombre">NOMBRE</label>
			<input type="text" name="nombre" class="form-control col-md-12" value="<?php echo $reg['nombre'];?>">
		</div>
		<div class="row">
			<input type="text" name="appat" class="form-control col-md-6" placeholder="Apellido Paterno" value="<?=$reg['appat']?>">
			<input type="text" name="apmat" class="form-control col-md-6" placeholder="Apellido Materno" value="<?=$reg['apmat']?>">
		</div>
		<div class="row">
			<input type="email" name="mail" class="form-control col-md-12" placeholder="Correo Electrónico" value="<?=$reg['mail']?>" required>
		</div>
		<div class="form-group row">		
			<label for="fecha_nac"></label><input type="date" name="fecha_nac" class="form-control col-md-6" value="<?=$reg['fecha_nac']?>">
			<div class="form-check">
	          <input class="form-check-input" type="radio" name="edo_civil" id="solt" value="0" 
	          <?php if ($reg['edo_civil']==0) {echo "checked";}?>>
	          <label class="form-check-label" for="solt">
	            Soltero
	          </label>
	        </div>
	        <div class="form-check">

	          <input class="form-check-input" type="radio" name="edo_civil" id="casado" value="1" <?php if ($reg['edo_civil']==1) {echo "checked";}?>>
	          <label class="form-check-label" for="casado">
	            Casado
	          </label>
	        </div>
	        <input type="hidden" name="id" value="<?=$reg['id']?>">			
		</div>
		<div class="form-group">
			<div class="col-md-6 form-group has-feedback">
				<label>Carrera</label>
				<div>
					<select id="carrera" name="carrera" id="idcarrera" class="form-control input-lg" data-required >
						<option value="0" selected>Seleccione carrera</option>
						<?php
						$strcarr=mysqli_query($conn,'SELECT * FROM 
							carreras');
						while($filas=mysqli_fetch_assoc($strcarr)) {?>
						<option value="<?= $filas['idcarrera'] ?>" <?= ($filas['idcarrera'] 
						== $reg['idcarrera']) ? 'selected' : '' ?>>
                                <?= $filas['carrera'] ?>
                            </option>
							<?php } ?>	
					</select>

			</div>
		</div>
		<input type="submit" class="btn btn-info" href="tabla.php" value="Actualizar ">
	</form>
	<br>
	<p> <br> <a class="btn btn-success" href="tabla.php">Regresar</a></p>
	<script type="usuario.js"></script>
	</div>
	
</body>
</html>
<?php }
mysqli_close($conn);
?>