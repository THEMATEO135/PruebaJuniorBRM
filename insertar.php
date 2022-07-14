<html>
    <head>
        <title>Agenda Telefonica - Insertar</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
        <div id="inicio">
            <div id="busqueda">
                <img src="img/add.png">
				<a href="index.php"><img src="img/search.png" height="72px" title="Buscar"></a>
				<a href="remover.php"><img src="img/remove.png" height="72px" title="Eliminar contacto"></a>
				<form action="#" method="POST">
					<label>Nombre:<br/>
					<input type="text" name="name"></label><br/>
					<label>Telefono:<br/>
					<input type="text" name="phone"></label><br/>
					<label>Fecha nacimiento:<br/>
					<input type="date" name="date"></label><br/>
					<label>Direccion:<br/>
					<input type="text" name="address"></label><br/>
					<label>Correo:<br/>
					<input type="email" name="email"></label><br/>
					<input type="submit" name="insertar" value="Insertar"><br/>
			   </form>
				</div>
			<div id="mensaje">
			<?php
			if(isset($_POST['insertar'])){

				if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['date']) && isset($_POST['address']) && isset($_POST['email'])){
					if(!empty($_POST['name']) && !empty($_POST['phone'])&& !empty($_POST['date'])&& !empty($_POST['address'])&& !empty($_POST['email']))
					{
						$name = trim($_POST['name']);
						$phone = trim($_POST['phone']);
						$date = trim($_POST['date']);
						$address = trim($_POST['address']);
						$email = trim($_POST['email']);
						require 'inc/conexion.php';
					
						$name = mysqli_real_escape_string($conexion, $name);
						$consulta = mysqli_real_escape_string($conexion, $phone);
							$consulta = "INSERT INTO agenda (name, phone, date, address, email) VALUES ('{$name}','{$phone}','{$date}','{$address}','{$email}')";
							if(mysqli_query($conexion, $consulta) === TRUE) {
								echo "Registro realizado correctamente";
							}else {
								echo "Error";
							}
					}
					else
					{
						echo "Rellene todos los campos.";
					}
				}
				else
				{
					echo "Rellene todos los campos!";
				}
			}
			?>
			</div>						
        </div>
    </body>
</html>