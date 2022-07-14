<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];
	require 'inc/conexion.php';
	$consulta = "DELETE FROM agenda WHERE phone = {$id}";
	mysqli_query($conexion, $consulta);
	header("Location: remover.php");
}