<?php
  $timezone = "Europe/Madrid";
  date_default_timezone_set($timezone);
  $today = date("Y-m-d");
  $fechamax = strtotime ( '+1 year' , strtotime ( $today ) ) ;
  $fechamax = date ( 'Y-m-j' , $fechamax );
  
  if(isset($_POST['btn-aceptar'])){
	  $_SESSION['fecha-ini'] = $_POST['llegada'];
	  $_SESSION['fecha-fin'] = $_POST['salida'];		  
  
	  
	  if(isset($_SESSION['user'])){
		  $output = "7";
	  } else if($_SESSION['fecha-ini']>$_SESSION['fecha-fin']){
		  $output = "";
	  } else {
		  $output = "6";
	  }
	?>
	<script type="text/javascript"> 
	  window.location.replace("index.php?seccion=<?php echo htmlspecialchars($output); ?>");
	</script>
	<?php
  }
?>



	<center>
	</br>
	<div id="login-form">
	<form method="post" onsubmit="return redirect()">
	<table align="center" width="100%" border="0">
	<tr>
	<td>Fecha Llegada: <input type="date" name="llegada" min="<?php echo $today; ?>" max="<?php echo $fechamax; ?>" value="<?php echo $today; ?>"></td>
	</tr>
	<tr>
	<td>Fecha Salida: <input type="date" name="salida" min="<?php echo $today; ?>" max="<?php echo $fechamax; ?>" value="<?php echo $today; ?>"></td>
	</tr>
	<tr>
	<td><button type="submit" name="btn-aceptar">Buscar Reserva.</button></td>
	</tr>
	</table>
	</form>
	</div>
	</center>
