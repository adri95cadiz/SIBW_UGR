
<html>
<body>


	<div id="content">

                    <div>
                        <p>

                                <span class="headline">
								<?php
								$tipo = $_GET["tipo"];
                                $sql="SELECT * FROM tipoHabitacion WHERE idTipoHabitacion='$tipo'";
                                $result = mysql_query($sql);
                                $row = mysql_fetch_array($result);
                                echo 'Habitación '; echo $row['nombre'];
								echo'</span><br />';
                                echo $row['descripcion'];
                                echo '<br />Los precios para estas habitaciones son de '; echo $row['precio']; echo ' euros la noche sin desayuno y '; echo $row['precioDesayuno']; echo ' euros con desayuno.  ';
                                echo '<a href="index.php?seccion=1">reservar.</a>';
                                echo '</div></p><br />';
                                echo'<center><a href="'; echo $row['imgPath']; echo'"><img src="'; echo $row['imgPath']; echo'" width=500></a></center><br />';
					?>
					<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br /> <br /> <br /> <br /> <br /> <br /> <br /><br />	<br />	<br />	<br />	<br />	<br />	<br />  <br />	<br />	<br />	<br />	<br />	<br />	<br />  <br />
					
	</div>



</body>
</html>
