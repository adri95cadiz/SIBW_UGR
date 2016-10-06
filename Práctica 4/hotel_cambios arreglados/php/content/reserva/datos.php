<?php

if(isset($_POST["btn-aceptar"]))
{
    $uname = $_SESSION['user'];
    $nombre = mysql_real_escape_string($_POST['nombre']);
    $nombre = trim($nombre);
    $DNI = mysql_real_escape_string($_POST['DNI']);
    $DNI = trim($DNI);
    $direccion = mysql_real_escape_string($_POST['direccion']);
    $direccion = trim($direccion);
    $telefono = mysql_real_escape_string($_POST['telefono']);
    $telefono = trim($telefono);	
    $numBancario = mysql_real_escape_string($_POST['numBancario']);
    $numBancario = trim($numBancario);
	$precio = $_SESSION['precio'];
	$idReserva = $_SESSION['idReserva'];
	$desayuno = false;
	if($_SESSION['desa']=="1"){
		$desayuno = true;
	}
	
	if(!mysql_query("UPDATE usuario SET nombre = '$nombre', DNI = '$DNI', direccion = '$direccion', telefono = '$telefono' WHERE nombreUsuario = '$uname'"))          
            {
                ?>
                <script>alert('Error');</script>
                <?php
            }
			
	if(!mysql_query("UPDATE reserva SET precio = '$precio', numBancario = '$numBancario', estado = 'RESERVADO', desayuno = '$desayuno' WHERE idReserva = '$idReserva'"))          
            {
                ?>
                <script>alert('Error');</script>
                <?php
            }
			
	for ($i = 0; $i < $_SESSION['seleccionadas1']; $i++) {
		$habitacion = $_SESSION['habitaciones1'] - $i;
		echo $habitacion;
		mysql_query("INSERT INTO reservahabitacion(idHabitacion, idReserva)
					VALUES('$habitacion','$idReserva')");
	}
	
	for ($i = 0; $i < $_SESSION['seleccionadas2']; $i++) {
		$habitacion = $_SESSION['habitaciones2'] - $i + 5;
		mysql_query("INSERT INTO reservahabitacion(idHabitacion, idReserva)
					VALUES('$habitacion','$idReserva')");
	}
	
	for ($i = 0; $i < $_SESSION['reserva1']; $i++) {
		mysql_query("INSERT INTO reservaservicio(idServicio, idReserva)
					VALUES('1','$idReserva')");
	}
	
	for ($i = 0; $i < $_SESSION['reserva2']; $i++) {
		mysql_query("INSERT INTO reservaservicio(idServicio, idReserva)
					VALUES('2','$idReserva')");
	}
	?>
	<script>alert('Ha reservado correctamente ¡Enhorabuena!');</script>
	<?php

} 
?>

<div id="content">

	<span class="headline">Ha elegido <?php echo $_SESSION['seleccionadas1']; ?> habitaciones dobles y <?php echo $_SESSION['seleccionadas2']; ?> habitaciones dobles superiores o triples para las fechas desde <?php echo $_SESSION['fecha-ini']; ?> hasta <?php echo $_SESSION['fecha-fin']; ?>.</span></br>
	<span class="headline"><?php if ($_SESSION['desa']=="1") echo 'Ha seleccionado desayuno con sus habitaciones.</br>'; ?> Ha reservado <?php echo $_SESSION['reserva1']; ?> plazas para visitar la Alhambra y <?php echo $_SESSION['reserva2']; ?> plazas para la excursión a Sierra Nevada.</span></br>
	<span class="headline">El precio total asciende a:&nbsp <?php echo $_SESSION['precio']; ?>&nbsp euros.</span></br>
	<span class="headline">Si tiene algún error asegúrese de haber actualizado el precio antes de continuar.</span></br></br>
	<span class="headline">Introduzca sus datos a continuación:</span>
	<center>
	</br>
	<div id="login-form" >
	<form method="post">
	<table align="center" width="100%" border="0">
					<?php
					$uname = $_SESSION['user'];
					$result = mysql_query("SELECT * FROM usuario WHERE nombreUsuario='$uname'");
					$row = mysql_fetch_array($result);

					echo '<tr><td>Nombre*: <textarea cols="68" rows="1" name="nombre" style="resize:vertical;" required>';
					echo $row['nombre'];
					echo '</textarea></tr>';

					echo '<tr><td>DNI*: <textarea cols="68" rows="1" name="DNI" style="resize:vertical;" required>';
					echo $row['DNI'];
					echo '</textarea></tr>';					
					
					echo '<tr><td>Número Bancario*: <textarea cols="68" rows="1" name="numBancario" style="resize:vertical;" required>';					
					echo '</textarea></tr>';

					echo '<tr><td>Dirección: <textarea cols="68" rows="2" name="direccion" style="resize:vertical;">';
					echo $row['direccion'];
					echo '</textarea></tr>';

					echo '<tr><td>Teléfono: <textarea cols="68" rows="1" name="telefono" style="resize:vertical;">';
					echo $row['telefono'];
					echo '</textarea></tr>';
					?>
	<tr>
	<td><button type="submit" name="btn-aceptar">Confirmar Reserva.</button></td>
	</tr>
	<tr>
	<td><button type="reset" name="btn-reset">Reiniciar Datos.</button></td>
	</tr>
	</table>
	</form>
	</div>
	</center>
</div>