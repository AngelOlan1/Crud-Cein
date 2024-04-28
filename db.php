<?php

$host = '127.0.0.1'; //nombre o ip del servidor de base de datos
$user = 'root'; //usuario de la BD
$pwd  = ''; //contraseña del usuario de la BD
$db   = 'db'; // Nombre de la BD


//$host = '10.18.200.94'; //nombre o ip del servidor de base de datos
//$user = 'usuarioAdmin'; //usuario de la BD
//$pwd  = '12345admin'; //contraseña del usuario de la BD
//$db   = 'db'; // Nombre de la BD
$conn = new mysqli ($host,$user,$pwd,$db); //Cadena de conexión

//Verificar la conexión

if ($conn->connect_error){
	die ("Falló la conexión: ".$conn->connect_error);
}
 //Solo para mostrar que la conexión tuvo éxito
?>