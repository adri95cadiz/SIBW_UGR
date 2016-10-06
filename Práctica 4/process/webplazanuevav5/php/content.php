<html>
<body>
	<?php
        if(!isset($_GET["seccion"])){
            $sql="SELECT content FROM hotel WHERE idSeccion='0'";
            $result = mysql_query($sql);
            $row = mysql_fetch_array($result);
            echo $row['content'];
        }
		else if($_GET["seccion"] == 3){
			include 'php/content/habitaciones.php';
		} else if($_GET["seccion"] == 4){
            include 'php/content/servicios.php';
        } else if($_GET["seccion"] == 5){
            include 'php/content/contacto.php';
        } else if($_GET["seccion"] == 6){
            include 'php/content/sesion.php';			
        } else if($_GET["seccion"] == 7){
			if(!isset($_GET['datos']) || $_GET['datos'] == 'false'){
				include 'php/content/reserva.php';
			} else if($_GET['datos'] == 'true'){
				include 'php/content/reserva/datos.php';
			}
		} else {
            $seccion = $_GET["seccion"];
            $sql="SELECT content FROM hotel WHERE idSeccion='$seccion'";
            $result = mysql_query($sql);
            $row = mysql_fetch_array($result);
            echo $row['content'];
		}
	?>
</body>
</html>
