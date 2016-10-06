
<html>
<body>

	<?php
		if(!isset($_GET["tipo"])){
			include 'php/content/habitaciones/general.php';
		} else {
			include 'php/content/habitaciones/especifico.php';
		}
	?>

</body>
</html>