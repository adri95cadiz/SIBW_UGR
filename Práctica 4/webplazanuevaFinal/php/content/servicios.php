

<html>
<body>


	<?php
		if(!isset($_GET["tipo"])){
            $seccion = $_GET["seccion"];
            $sql="SELECT content FROM hotel WHERE idSeccion='4'";
            $result = mysql_query($sql);
            $row = mysql_fetch_array($result);
            echo '<div id="content">';
            echo $row['content'];
            echo '</br></br><span class="headline">También le interesará conocer posibilidades como visitar la Alhambra o Sierra Nevada, las cuales podrá incluir en su reserva:</span><br />';
                $sql="SELECT * FROM servicio";
                $result = mysql_query($sql);
                while ($row = mysql_fetch_assoc($result)) {
                echo'<br />
                <div>
                    <a href="index.php?seccion=4&tipo='; echo $row["idServicio"]; echo '">
                        <img src="'; echo $row["imgPath"]; echo'" width=180>
                    </a>
                    <div>
                        <p>
                            <a href="index.php?seccion=4&tipo='; echo $row["idServicio"];
                            echo'">
                                <span class="headline">Visita a '; echo $row["nombre"]; echo'</span><br />
                            </a>';
                            echo $row["descripcion"];
                            echo '<br />El precio de esta excursión es de '; echo $row['precio']; echo ' euros por persona. ';
                            echo '<a href="index.php?seccion=1">reservar.</a>';
                            echo'</div></p>
                            </div>
                            <br />';
                }
                echo'<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />';
                mysql_free_result($result);
            } else {
			include 'php/content/servicios/especifico.php';
		}
	?>


</body>
</html>
