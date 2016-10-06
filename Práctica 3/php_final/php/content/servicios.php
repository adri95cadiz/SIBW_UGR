

<html>
<body>


	<?php
		if(!isset($_GET["tipo"])){
			include 'php/content/servicios/general.php';
		} else {
			include 'php/content/servicios/especifico.php';
		}
	?>

   
</body>
</html>