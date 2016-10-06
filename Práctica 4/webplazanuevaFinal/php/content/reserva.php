
<div id="content">

	<?php
	
		$today = date("Y-m-d");
		$uname = mysql_real_escape_string($_SESSION['user']);
		$uname = trim($uname);
		$fechaIni = $_SESSION['fecha-ini'];
		$fechaFin = $_SESSION['fecha-fin'];
		if(!isset($_SESSION['fecha-fin']) || !isset($_SESSION['fecha-ini'])){					
			?>
			<script type="text/javascript"> 
			  window.location.replace("index.php?seccion=8");
			</script>
			<?php
		}

		/* BORRAR RESERVAS ANTIGUAS
		$result = mysql_query("SELECT idReserva FROM reserva WHERE fechaFin<'$today'");
		$row = $mysql_fetch_row($result);
		$borrar = $row['idReserva'];
		mysql_query("DELETE FROM reservaHabitacion WHERE idReserva = '$borrar'");
		mysql_query("DELETE FROM reservaServicio WHERE idReserva = '$borrar'");
		mysql_query("DELETE FROM reserva WHERE idReserva = '$borrar')");*/


		mysql_query("DELETE FROM reserva WHERE cliente = '$uname' AND estado = 'PROCESO'");

		mysql_query("INSERT INTO reserva(cliente, fechaEntrada, fechaSalida, estado)
					VALUES('$uname','$fechaIni','$fechaFin', 'PROCESO')");

		$result = mysql_query("SELECT MAX(idReserva) FROM reserva");

		$row = mysql_fetch_array($result);
		$_SESSION['idReserva'] = $row['MAX(idReserva)'];


		/*$result=mysql_query("SELECT idHabitacion FROM habitacion WHERE idHabitacion NOT IN
							(SELECT idHabitacion FROM reservahabitacion WHERE idReserva =
							(SELECT idReserva FROM reserva WHERE ((fechaEntrada<='$fechaIni' AND fechaSalida>='$fechaIni')
							OR (fechaEntrada<='$fechaFin' AND fechaSalida>='$fechaFin')
							OR (fechaEntrada>='$fechaIni' AND fechaSalida<='$fechaFin'))
							)
							)");*/

		$result=mysql_query("SELECT idHabitacion FROM habitacion WHERE idHabitacion IN
							(SELECT idHabitacion FROM habitacion WHERE idHabitacion NOT IN
							(SELECT idHabitacion FROM reservahabitacion WHERE idReserva IN
							(SELECT idReserva FROM reserva WHERE ((fechaEntrada<='$fechaIni' AND fechaSalida>='$fechaIni')
							OR (fechaEntrada<='$fechaFin' AND fechaSalida>='$fechaFin')
							OR (fechaEntrada>='$fechaIni' AND fechaSalida<='$fechaFin'))
							)
							)) AND tipoHabitacion ='1'");

		$habitaciones1 = mysql_num_rows($result);
		$_SESSION['habitaciones1'] = $habitaciones1;
		
		$result=mysql_query("SELECT idHabitacion FROM habitacion WHERE idHabitacion IN
							(SELECT idHabitacion FROM habitacion WHERE idHabitacion NOT IN
							(SELECT idHabitacion FROM reservahabitacion WHERE idReserva IN
							(SELECT idReserva FROM reserva WHERE ((fechaEntrada<='$fechaIni' AND fechaSalida>='$fechaIni')
							OR (fechaEntrada<='$fechaFin' AND fechaSalida>='$fechaFin')
							OR (fechaEntrada>='$fechaIni' AND fechaSalida<='$fechaFin'))
							)
							))AND tipoHabitacion ='2'");

		$habitaciones2 = mysql_num_rows($result);
		$_SESSION['habitaciones2'] = $habitaciones2;

		echo '<span class="headline">Estas son las habitaciones que tenemos disponibles para las fechas seleccionadas:</span>';
                $sql="SELECT * FROM tipoHabitacion";
                $result = mysql_query($sql);
				echo '<table><tr>';
                while ($row = mysql_fetch_assoc($result)) {
                echo'<br />
                <div>';
					echo '<td>';
                    echo '<img src="'; echo $row["imgPath"]; echo'" width=120>
                    </a>
                    <div>
                        <p>
                            <span class="headline">'; echo $row["nombre"]; echo'</span>';
                            echo '</br><span class="headline">Precios:'; echo $row['precio']; echo ' euros.</br>'; echo $row['precioDesayuno']; echo ' euros + desayuno.</span></br>';
							echo '</br><a href="index.php?seccion=7&añadir=';
							if($row['idTipoHabitacion']==1){
								echo '1';
							} else {
								echo '2';
							} echo '"><img src="images/boton-mas.png" width="30px"></a>';
							echo '&nbsp&nbsp&nbsp&nbsp&nbsp';
							echo '<a href="index.php?seccion=7&eliminar=';
							if($row['idTipoHabitacion']==1){
								echo '1';
							} else {
								echo '2';
							} echo '"><img src="images/boton-menos.png" width="30px"></a>';
							echo '</br>Habitaciones Disponibles: ';
							if($row['idTipoHabitacion']==1){
								echo $habitaciones1-$_SESSION['seleccionadas1'];
							} else {
								echo $habitaciones2-$_SESSION['seleccionadas2'];
							}
							echo '</br>Seleccionadas: ';
							if($row['idTipoHabitacion']==1){
								echo $_SESSION['seleccionadas1'];
							} else {
								echo $_SESSION['seleccionadas2'];
							}
                            echo'</div></p>
                            </div>
                            <br />
							</td>';
                }
				echo '</tr></table>';


		?>

		<form method="post" >
		<span class="headline">¿Quiere desayuno con sus habitaciones?</span><input type="checkbox" name="desayuno" value="desayuno"
		<?php
		echo $desayuno;
		if(isset($_POST['desayuno'])&& $_POST['desayuno']){
			$_SESSION['desayuno'] = $_POST['desayuno'];
		} else {
			$_SESSION['desayuno'] == '';
		}
        $_SESSION['desa'] = "0";
		if($_SESSION['desayuno'] == 'desayuno'){
			echo 'checked';
			$_SESSION['desa'] = "1";
			if(!isset($_POST['btn-refresh']) && !isset($_POST['btn-submit']) && !isset($_GET['añadir']) && !isset($_POST['eliminar'])){
                unset($_SESSION['desayuno']);
			}
		}
		?>/></br>
		<?php
		echo '</br><span class="headline">¿Desea incluir alguno de los siguientes servicios?</span><br />';
                $sql="SELECT * FROM servicio";
                $result = mysql_query($sql);
                while ($row = mysql_fetch_assoc($result)) {
                echo'<br />
                <div>';
                    echo '<img src="'; echo $row["imgPath"]; echo'" width=180>
                    </a>
                    <div>
                        <p>';
							$selected = 0;
							if($row['idServicio']=='1'){
								if(!isset($_SESSION['reservas1'])){
									$selected = $_POST['reservas1'];
								} else {
									$selected = $_SESSION['reservas1'];
								}
							} else {
								if(!isset($_SESSION['reservas2'])){
									$selected = $_POST['reservas2'];
								} else {
									$selected = $_SESSION['reservas2'];
								}
							}
                            echo '<span class="headline">Visita a '; echo $row["nombre"]; echo'</span><br />';
                            echo '<br />Precio: '; echo $row['precio']; echo ' euros.</br>';
                            echo '<span class="headline">¿Cuántas reservas desea?</span>
							<select name="';
							if($row['idServicio']==1){
								echo 'reservas1';
							} else {
								echo 'reservas2';
							}
							echo'">';

							echo '
							  <option value="0"'; if($selected == '0') {echo 'selected="selected"';} echo '>0</option>
							  <option value="1"'; if($selected == '1') {echo 'selected="selected"';} echo '>1</option>
							  <option value="2"'; if($selected == '2') {echo 'selected="selected"';} echo '>2</option>
							  <option value="3"'; if($selected == '3') {echo 'selected="selected"';} echo '>3</option>
							  <option value="4"'; if($selected == '4') {echo 'selected="selected"';} echo '>4</option>
							  <option value="5"'; if($selected == '5') {echo 'selected="selected"';} echo '>5</option>
							</select></br>';
                            echo'</div></p>
                            </div>
                            <br />';
                }



		echo '<span class="headline">Subtotal: ';


		$result = mysql_query("SELECT * from tipoHabitacion WHERE idTipoHabitacion='1'");
		$row = mysql_fetch_array($result);

		$precio=0;

		if(!isset($_SESSION['desa'])){
			$precio = $_SESSION['seleccionadas1']*$row['precio'];
		} else {
			$precio = $_SESSION['seleccionadas1']*$row['precioDesayuno'];
		}

		$result = mysql_query("SELECT * from tipoHabitacion WHERE idTipoHabitacion='2'");
		$row = mysql_fetch_array($result);

		if(!isset($_SESSION['desa'])){
			$precio = $precio+$_SESSION['seleccionadas2']*$row['precio'];
		} else {
			$precio = $precio+$_SESSION['seleccionadas2']*$row['precioDesayuno'];
		}

		$result = mysql_query("SELECT * from servicio WHERE idServicio='1'");
		$row = mysql_fetch_array($result);

		$precio = $precio + $_SESSION['reservas1']*$row['precio'];
        $_SESSION['reserva1'] = $_SESSION['reservas1'];
		$_SESSION['reservas1'] = $_POST['reservas1'];


		$result = mysql_query("SELECT * from servicio WHERE idServicio='2'");
		$row = mysql_fetch_array($result);

		$precio = $precio + $_SESSION['reservas2']*$row['precio'];
        $_SESSION['reserva2'] = $_SESSION['reservas2'];
		$_SESSION['reservas2'] = $_POST['reservas2'];

		echo $precio; echo ' euros.</br>';

		$_SESSION['precio'] = $precio;

		if(isset($_GET['añadir'])){
			if($_GET['añadir']==1){
					if(!isset($_SESSION['seleccionadas1'])){
						$_SESSION['seleccionadas1']=0;
					}
					if($habitaciones1-$_SESSION['seleccionadas1'] > 0) {
						$_SESSION['seleccionadas1'] = $_SESSION['seleccionadas1']+1;
					}
			} else {
					if(!isset($_SESSION['seleccionadas2'])){
						$_SESSION['seleccionadas2']=0;
					}
					if($habitaciones2-$_SESSION['seleccionadas2'] > 0) {
						$_SESSION['seleccionadas2'] = $_SESSION['seleccionadas2']+1;
					}
			}
			?>
			<script type="text/javascript">
			  window.location.replace("index.php?seccion=7");
			</script>
			<?php
		}

		if(isset($_GET['eliminar'])){
			if($_GET['eliminar']==1){
					if(!isset($_SESSION['seleccionadas1'])){
						$_SESSION['seleccionadas1']=0;
					}
					if($_SESSION['seleccionadas1'] > 0) {
						$_SESSION['seleccionadas1'] = $_SESSION['seleccionadas1']-1;
					}
			} else {
					if(!isset($_SESSION['seleccionadas2'])){
						$_SESSION['seleccionadas2']=0;
					}
					if($_SESSION['seleccionadas2'] > 0) {
						$_SESSION['seleccionadas2'] = $_SESSION['seleccionadas2']-1;
					}
			}
			?>
			<script type="text/javascript">
			  window.location.replace("index.php?seccion=7");
			</script>
			<?php
		}
        ?>
		<script type="text/javascript">
		  <?php
		  if(isset($_POST['btn-submit'])){
		  echo'window.location.replace("index.php?seccion=7&datos=true");';
		  }
		  if(isset($_POST['btn-refresh'])){
		  echo'window.location.replace("index.php?seccion=7");';
		  }
		  ?>
		</script>

		<table width="30%" border="0" align="left" cellpadding="10" cellspacing="0" style="margin-right:150px">
		<tr>
		<td><div align="center">
		<button type="submit" name="btn-refresh">Actualizar Precio.</button>
		</div></td>
		<td><div align="center">
		<button type="submit" name="btn-submit">Continuar.</button>
		</div></td>
		</tr>
		</table>
		</form>
		</br></br></br></br></br></br></br>



</div>
