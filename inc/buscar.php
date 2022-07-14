<?php
require 'conexion.php';
if(isset($_GET['busqueda'])){
	if(!empty($_GET['busqueda'])){
		$buscar = trim($_GET['busqueda']);
		$buscar = mysqli_real_escape_string($conexion, $buscar);
		$consulta = "SELECT * FROM agenda WHERE name LIKE '%{$buscar}%' OR phone LIKE '%{$buscar}%' OR email LIKE  '%{$buscar}%'";
		$resultado = mysqli_query($conexion, $consulta);
		if(mysqli_num_rows($resultado) > 0){
			while($registro = mysqli_fetch_assoc($resultado))
			{
				?>
				
				<div id="resultado">
				<img src="img/contact.png">
		
				<b>Nombre: </b><?php echo $registro['name'];?></p>
				<p><b>Tel: </b><?php echo $registro['phone'];?></p>
				<p><b>Nacimiento: </b><?php echo $registro['date'];?></p>
				<?php
				$cumpleanos = new DateTime($registro['date']);
				$hoy = new DateTime();
				$edad = $hoy->diff($cumpleanos);
				?>
				<p><b>Edad: </b><?php echo $edad->y ?></p>
				<p><b>Direccion: </b><?php echo $registro['address'];?></p>
				<p><b>Correo: </b><?php echo $registro['email'];?></p>		
				</div>
				<?php
			}
			echo "Se encontraron registros: " . mysqli_num_rows($resultado);
		}else{
			echo 'No se encontraron registros.';
		}
	}else{
		echo 'Busqueda vacia.';
	}
}
?>