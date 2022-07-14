<html>
    <head>
        <title>Agenda Telefonica - Remover</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
        <div id="inicio">
            <div id="busqueda">
                <img src="img/remove.png">
				<a href="index.php"><img src="img/search.png" height="72px" title="Buscar"></a>
				<a href="insertar.php"><img src="img/add.png" height="72px" title="Agregar nuevo contacto"></a>
			<?php
			require 'inc/conexion.php';
			$consulta = "SELECT * FROM agenda";
			$resultado = mysqli_query($conexion, $consulta);
			if(mysqli_num_rows($resultado) > 0){
			while($registro = mysqli_fetch_assoc($resultado)){
				?>
				<div id="resultados">
				<a href="removercontacto.php?id=<?php echo $registro['phone'] ?>"><img src="img/remove.png"></a>
				<p><b>Nombre: </b><?php echo $registro['name'];?></p>
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
			}
			else
			{
				echo "No hay registros.";
			}
			?>
			</div>				
        </div>
    </body>
</html>