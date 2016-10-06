

<html>
<body>

	<?php
		if(!isset($_GET["tipo"])){
			include 'php/content/formulario/general.php';
		} else {
			include 'php/content/formulario/formulario.php';
		}
	?>

</body>
</html>