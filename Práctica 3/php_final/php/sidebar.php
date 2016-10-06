
<html>
<head>
<link href="menu/accordion-menu.css" rel="stylesheet" type="text/css" />
<script src="menu/accordion-menu.js" type="text/javascript"></script>
</head>

<body>

	<div id=sidebar>
		<div id="accordion">
		<ul>	
			<?php
			if(isset($_GET["seccion"])){
				echo "
				<li>
					<a href='index.php'>Hotel</a>
				</li>";
				
			}			
			if(!isset($_GET["seccion"]) || $_GET["seccion"] != 1 ){
				echo "<li>
				<a href='index.php?seccion=1'>Promociones</a>
				</li>";
			}	
			
			if(!isset($_GET["seccion"]) || $_GET["seccion"] != 2 ){
				echo "<li>
				<a href='index.php?seccion=2'>Fotos</a>
				</li>";
			}
			
			if(!isset($_GET["seccion"]) || $_GET["seccion"] != 3 ){
				echo "<li>
				<div>Habitaciones</div>
				<ul>
					<li><a href='index.php?seccion=3'>Información</a></li>
					<li>
						<div>Tipos</div>
						<ul>";
							if(!isset($_GET["tipo"]) || $_GET["tipo"] != 1 ){
							echo "<li><a href='index.php?seccion=3&tipo=1'>Doble o Twin</a></li>";}
							if(!isset($_GET["tipo"]) || $_GET["tipo"] != 2 ){
							echo "<li><a href='index.php?seccion=3&tipo=2'>Doble Superior</a></li>";}
							if(!isset($_GET["tipo"]) || $_GET["tipo"] != 3 ){
							echo "<li><a href='index.php?seccion=3&tipo=3'>Triple</a></li>";}
				echo	"</ul>
					</li>
				</ul>
			</li>";
			}
			
			if(!isset($_GET["seccion"]) || $_GET["seccion"] !=4 ){
				echo "<li>
				<div>Servicios</div>
				<ul>
					<li><a href='index.php?seccion=4'>Información</a></li>
					<li>
						<div>Visitas</div>
						<ul>";
							if(!isset($_GET["tipo"]) || $_GET["tipo"] != 1 ){
							echo "<li><a href='index.php?seccion=4&tipo=1'>Alhambra</a></li>";}
							if(!isset($_GET["tipo"]) || $_GET["tipo"] != 2 ){
							echo "<li><a href='index.php?seccion=4&tipo=2'>Sierra Nevada</a></li>";}
				echo	"</ul>
					</li>
				</ul>
			</li>";
			}
			
			if(!isset($_GET["seccion"]) || $_GET["seccion"] !=5 ){
				echo "<li>
				<div>Contacto</div>
				<ul>";
					if(!isset($_GET["tipo"])){
					echo "<li><a href='index.php?seccion=5'>Información</a></li>";}
					if(!isset($_GET["tipo"]) || $_GET["tipo"] != 1 ){
					echo "<li><a href='index.php?seccion=5&tipo=1'>Formulario</a></li>";}
					echo "</ul>
				</li>";
			}
			
			if(isset($_GET["seccion"])){			
				if( $_GET["seccion"] == 3 ){					
					if(isset($_GET["tipo"])){
					echo "<li><a href='index.php?seccion=3'>Información</a></li>";}
					if(!isset($_GET["tipo"]) || $_GET["tipo"] != 1 ){
					echo "<li><a href='index.php?seccion=3&tipo=1'>Doble o Twin</a></li>";}
					if(!isset($_GET["tipo"]) || $_GET["tipo"] != 2 ){
					echo "<li><a href='index.php?seccion=3&tipo=2'>Doble Superior</a></li>";}
					if(!isset($_GET["tipo"]) || $_GET["tipo"] != 3 ){
					echo "<li><a href='index.php?seccion=3&tipo=3'>Triple</a></li>";}
				}				
			}
			
			if(isset($_GET["seccion"])){			
				if( $_GET["seccion"] == 4 ){					
					if(isset($_GET["tipo"])){
					echo "<li><a href='index.php?seccion=4'>Información</a></li>";}
					if(!isset($_GET["tipo"]) || $_GET["tipo"] != 1 ){
					echo "<li><a href='index.php?seccion=4&tipo=1'>Alhambra</a></li>";}
					if(!isset($_GET["tipo"]) || $_GET["tipo"] != 2 ){
					echo "<li><a href='index.php?seccion=4&tipo=2'>Sierra Nevada</a></li>";}
				}				
			}
			
			if(isset($_GET["seccion"])){			
				if( $_GET["seccion"] == 5 ){
					if(isset($_GET["tipo"])){
					echo "<li><a href='index.php?seccion=5'>Información</a></li>";}
					if(!isset($_GET["tipo"]) || $_GET["tipo"] != 1 ){
					echo "<li><a href='index.php?seccion=5&tipo=1'>Formulario</a></li>";}
				}				
			}
			?>
	</div>
	</div>

</body>
</html>