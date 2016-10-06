
<html>
<body>
	<?php
		if(!isset($_GET["seccion"])){
			include 'php/content/hotel.php';
		} else switch($_GET["seccion"]){
			case 1: include 'php/content/promociones.php'; break;
			case 2: include 'php/content/fotos.php'; break;
			case 3: include 'php/content/habitaciones.php'; break;
			case 4: include 'php/content/servicios.php'; break;
			case 5: include 'php/content/contacto.php'; break;
			default: echo"<body>No existe esta sección.</body>";
		}
	?>
</body>
</html>
