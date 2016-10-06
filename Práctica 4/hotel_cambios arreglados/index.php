<?php
	header('Content-Type: text/html; charset=utf-8');
	mb_internal_encoding('UTF-8');
	mb_http_output('UTF-8');
?>

<html>
<head>
	<title>Hotel Plaza Nueva en Granada</title><meta property="og:site_name" content="Hotel Plaza Nueva">
	<meta property="business:contact_data:postal_code" content="18010 ">
	<meta property="business:contact_data:country_name" content="España">
	<meta name="description" content="Hotel called Hotel Plaza Nueva allocated on Granada ">
	<meta name="author" content="Juan Miguel Hinojosa Guerrero, Adrian Portillo Sanchez">



	<link href="default.css" rel="stylesheet" type="text/css" />
    <!-- IE -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
    <!-- other browsers -->
    <link rel="icon" type="image/x-icon" href="imagesfavicon.ico" />
</head>

<body>

	<?php 	
		include 'php/header.php';
		echo '</br>';
		if(!isset($_GET["seccion"])){
			//include 'php/content/reserva/cuadro-reserva.php';
			include 'php/slider.php';
			}
		include 'php/sidebar.php';
		include 'php/content.php';		
		include 'php/footer.php';
	?>

</body>
</html>