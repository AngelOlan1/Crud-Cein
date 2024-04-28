<?php include ('db.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Mi primer Formulario</title>
</head>
<body>
	<div class="container">
	
	<div class="jumbotron">
		<h1>Formulario de Registro</h1>
	</div>	
	
	<form id="miFormulario" action="insert_exe.php" method="post">
		<div class="row">
			<label for="nombre">Nombre(s)</label>
			<input type="text" name="nombre" class="form-control col-md-12">
		</div><br>
		<div class="row">
			<input type="text" name="appat" class="form-control col-md-6" placeholder="Apellido Paterno">
			<input type="text" name="apmat" class="form-control col-md-6" placeholder="Apellido Materno">
		</div>
		<div class="row">
			<input type="email" name="mail" class="form-control col-md-12" placeholder="Correo Electrónico" required>
		</div>	<br>	
		
		<br>	
		<div class="form-group">
			<div class="col-md-6 form-group has-feedback">
				<label>Carrera</label>
				<div>
					<select id="carrera" name="carrera" id="idcarrera" class="form-control input-lg" data-required>
						<option value="0" selected>Seleccione carrera</option>
						<?php
						$strcarr=mysqli_query($conn,'SELECT * FROM 
							carreras');
						while($filas=mysqli_fetch_assoc($strcarr)) {?>
						<option value="<?=$filas['idcarrera']?>">
							<?=$filas['carrera']?></option>
							<?php } ?>	
					</select>

			</div>
		</div>



		<div class="form-group row">		
			<label for="fecha_nac">Fecha de Nacimiento</label>
			<input type="date" name="fecha_nac" class="form-control col-md-4">
			
			<div class="form-check col-md-3">
	          <input class="form-check-input" type="radio" name="edo_civil" id="solt" value="0">
	          <label class="form-check-label" for="solt">
	            Soltero
	          </label>
	        </div>
	        
	        <div class="form-check col-md-3">
	          <input class="form-check-input" type="radio" name="edo_civil" id="casado" value="1">
	          <label class="form-check-label" for="casado">
	            Casado
	          </label>
	        </div>			
		</div>
		
		<input type="submit" class="btn btn-info" value="Guardar datos">
	</form>
	<br>
	<p><a class="btn btn-success" href="tabla.php">Volver</a></p>
	<br>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="usuario.js"></script>
	
</body>
</html>