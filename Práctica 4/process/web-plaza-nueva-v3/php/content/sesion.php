<html>
<body>


	<?php
		if(!isset($_GET["tipo"])){
			include 'php/content/sesion/iniciar.php';
		} else if ($_GET["tipo"]==1) {
			include 'php/content/sesion/registrar.php';
		} else if ($_GET["tipo"]==2) {
			include 'php/content/sesion/logout.php';
		} else if ($_GET["tipo"]==3) {
			include 'php/content/sesion/editar_perfil.php';
		}
	?>


</body>
</html>
