

<html>
<body>


	<?php
		if(!isset($_GET["tipo"])){
            $seccion = $_GET["seccion"];
            $sql="SELECT content FROM hotel WHERE idSeccion='4'";
            $result = mysql_query($sql);
            $row = mysql_fetch_array($result);
            echo $row['content'];
		} else {
			include 'php/content/servicios/especifico.php';
		}
	?>


</body>
</html>
