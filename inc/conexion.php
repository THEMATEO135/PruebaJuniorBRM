<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$bd = "agenda";

$conexion = mysqli_connect($servidor, $usuario, $clave, $bd);

if(!$conexion){
	die("Error de conexion: " . mysqli_connect_error());
}

?>