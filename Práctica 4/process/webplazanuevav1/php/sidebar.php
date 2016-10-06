
<html>
<head>
<link href="menu/accordion-menu.css" rel="stylesheet" type="text/css" />
<script src="menu/accordion-menu.js" type="text/javascript"></script>
    <link href="slider/ninja-slider.css" rel="stylesheet" type="text/css" />
    <script src="slider/ninja-slider.js" type="text/javascript"></script>
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
					<li><a href='index.php?seccion=3'>Habitaciones</a></li>
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
					<li><a href='index.php?seccion=4'>Servicios</a></li>
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
					echo "<li><a href='index.php?seccion=5'>Contacto</a></li>";}
					if(!isset($_GET["tipo"]) || $_GET["tipo"] != 1 ){
					echo "<li><a href='index.php?seccion=5&tipo=1'>Formulario</a></li>";}
					echo "</ul>
				</li>";
			}
			
			if(isset($_GET["seccion"])){			
				if( $_GET["seccion"] == 3 ){					
					if(isset($_GET["tipo"])){
					echo "<li><a href='index.php?seccion=3'>Habitaciones</a></li>";}
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
					echo "<li><a href='index.php?seccion=4'>Servicios</a></li>";}
					if(!isset($_GET["tipo"]) || $_GET["tipo"] != 1 ){
					echo "<li><a href='index.php?seccion=4&tipo=1'>Alhambra</a></li>";}
					if(!isset($_GET["tipo"]) || $_GET["tipo"] != 2 ){
					echo "<li><a href='index.php?seccion=4&tipo=2'>Sierra Nevada</a></li>";}
				}				
			}
			
			if(isset($_GET["seccion"])){			
				if( $_GET["seccion"] == 5 ){
					if(isset($_GET["tipo"])){
					echo "<li><a href='index.php?seccion=5'>Contacto</a></li>";}
					if(!isset($_GET["tipo"]) || $_GET["tipo"] != 1 ){
					echo "<li><a href='index.php?seccion=5&tipo=1'>Formulario</a></li>";}
				}				
			}
			?>
			
		<li><div> Info Contacto  </div>
		 <ul>
			
			<span class="headline">Dirección:</span> <font size = 2>Imprenta, nº 2</font><br >
			<span class="headline">Provincia:</span> <font size = 2>Granada</font><br >
			<span class="headline">País:</span> <font size = 2>España </font><br >
			<span class="headline">Teléfono:</span> <font size = 2>+34 958 215 273 </font><br >
			<span class="headline">Fax:</span> <font size = 2>+34 958 225 765</font><br >
			<span class="headline">E-mail:</span> <font size = 2>info@hotel-plazanueva.com</font><br >
			</ul> </li>
	  
	</div>
	
	<div id="ninja-slider">
        <div class="slider-inner">
            <ul>
                <li>
                   <a href= "www.google.com"><img class="ns-img" src="images/promocion01.jpg"></img></a>
                    <div class="caption"></div>
                </li>
               <li><a href= "www.google.com"><img class="ns-img" src="images/promocion02.png"></img></a>
                    <div class="caption"></div>
                </li>		
                <li><a href= "www.google.com"><img class="ns-img" src="images/promocion03.jpg"></img></a>
                    <div class="caption"></div>
                </li>
            </ul>
        </div>
    </div>
	
	</div>
</body>
</html>