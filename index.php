<html>
    <head>
        <title>Agenda Telefonica</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
        <div id="inicio">
            <div id="busqueda">
                <img src="img/search.png">
				<a href="insertar.php"><img src="img/add.png" height="72px" title="Agregar nuevo contacto"></a>
				<a href="remover.php"><img src="img/remove.png" height="72px" title="Eliminar contacto"></a>
				<form action="#" method="GET">
                    <input type="text" name="busqueda" placeholder="Busqueda...">
                    <input type="submit" value="Buscar"><br/>
                </form>
			</div>
			<?php 
			include 'inc/buscar.php';
			?>					
        </div>
    </body>
</html>
