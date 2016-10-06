<head>
<title>Hotel Plaza Nueva en Granada</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:site_name" content="Hotel Plaza Nueva">
<meta property="business:contact_data:postal_code" content="18010 ">
<meta property="business:contact_data:country_name" content="España">
<meta name="description" content="Hotel called Hotel Plaza Nueva allocated on Granada ">
<meta name="author" content="Juan Miguel Hinojosa Guerrero, Adrian Portillo Sanchez">

<link href="slider/js-image-slider.css" rel="stylesheet" type="text/css" />
<script src="slider/js-image-slider.js" type="text/javascript"></script>
<link href="default.css" rel="stylesheet" type="text/css" />
    <!-- IE -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
    <!-- other browsers -->
    <link rel="icon" type="image/x-icon" href="imagesfavicon.ico" />
</head>

<body>

	<div id="content">

      <center><span class="headline">Formulario de contacto</span></center>
	  
	  <br />
	 
		
		
		
		<!-- cambiar para mandar por correo el formulario lo siguiente 
		
		action="mailto:emaildelaempresaquehaceelformulario@email.com"
		
		-->
		
		<form action="formulario_enviado.php" method="post" enctype="text/plain">
			Nombre: <input type="text" name="nombre" size="36" maxlength="50"required/><br><br>
			Apellidos: <input type="text" name="apellidos" size="35" maxlength="100"required/>
			<br><br>
			Correo electrónico: <input type="text" title="mail@example.com" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)+$" size="25" name="email" required />
			<br><br>
			Teléfono: <input type="text" title="Teléfono compuesto por 9 números" pattern="^[9|6|7][0-9]{8}$" name="telefono" size="35" maxlength="9" required />
			<br><br>
			Cuentenos su consulta<br>
            <textarea cols="90" rows="10" name="consulta" placeholder="Escriba aquí su consulta..."></textarea>
			<br><br>


			<!-- botones enviar y borrar formulario -->
			<table width="50%" border="0" align="center" cellpadding="10" cellspacing="0">
			<tr>
			<td><div align="center">
			<input type="submit" value="Enviar formulario">
			</div></td>
			<td><div align="center">
			<input type="Reset" value="Borrar formulario">
			</div></td>
			</tr>
			</table>
		</form>
		
		
	  
	  
	  
	</div>

</body>
</html>