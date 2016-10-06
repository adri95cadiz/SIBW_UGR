
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
                                echo $row['nombre'];
								echo'</span><br />';
                                echo $row['descripcion'];
                                echo '</div></p><br />';
                                echo $row['imgPath'];
					?>
					<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />
	</div>



</body>
</html>
