
<html>
<body>

	<?php
		if(!isset($_GET["tipo"])){
            $sql="SELECT content FROM hotel WHERE idSeccion='3'";
            $result = mysql_query($sql);
            $row = mysql_fetch_array($result);
            echo '<div id="content">';
            echo $row['content'];
            echo '<span class="headline">Estos son los distintos tipos de habitaciones que tenemos disponibles:</span><br />';
                $sql="SELECT * FROM tipoHabitacion";
                $result = mysql_query($sql);
                while ($row = mysql_fetch_assoc($result)) {
                echo'<br />
                <div>
                    <a href="index.php?seccion=3&tipo='; echo $row["idTipoHabitacion"]; echo '">
                        <img src="'; echo $row["imgPath"]; echo'" width=180>
                    </a>
                    <div>
                        <p>
                            <a href="index.php?seccion=3&tipo='; echo $row["idTipoHabitacion"];
                            echo'">
                                <span class="headline">Habitación '; echo $row["nombre"]; echo'</span><br />
                            </a>';
                            echo $row["descripcion"];
                            echo '<br />Los precios para estas habitaciones son de '; echo $row['precio']; echo ' euros la noche sin desayuno y '; echo $row['precioDesayuno']; echo ' euros con desayuno.  ';
                            echo '<a href="index.php?seccion=1">reservar.</a>';
                            echo'</div></p>
                            </div>
                            <br />';
                }
                echo'</div>';
                mysql_free_result($result);
            } else {
			include 'php/content/habitaciones/especifico.php';
		}
	?>

</body>
</html>
