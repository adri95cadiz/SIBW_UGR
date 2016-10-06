
<html>
<body>

	<?php
		if(!isset($_GET["tipo"])){
            $sql="SELECT content FROM hotel WHERE idSeccion='3'";
            $result = mysql_query($sql);
            $row = mysql_fetch_array($result);
            echo $row['content'];
		} else {
			include 'php/content/habitaciones/especifico.php';
		}
	?>

</body>
</html>
