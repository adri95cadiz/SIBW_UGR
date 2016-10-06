
<html>
<body>

<div id="content">
  
 

      <span class="headline">
	  <?php
		switch($_GET["tipo"]){
			case 1: echo "Alhambra"; break;
			case 2: echo "Sierra Nevada"; break;
			default: echo "No existe este servicio";
		}	  
	  ?>
	  </span><br />

      <br />
	  
          
              <div>
			  
			  
						<p>
						<?php
							switch($_GET["tipo"]){
								case 1: echo "
								 Descubrirá con nosotros la única Ciudad Medieval Musulmana mejor conservada del mundo, la Alhambra; 
								 visitando sus palacios, Mexuar, Comares, Leones, Generalife; paseando por sus patios, de los Arrayenes, 
								 la Reja, la Acequia, la Sultana; y disfrutando de sus jardines, de Partal, de la Medina y por suspuesto del 
								 Generalife con sus gracioso juegos de agua, y su laberintico diseño."; break;
								case 2: echo "En Sierra Nevada podrá admirar la nieve y visitar numerosas estaciones de deportes de invierno 
								como son Snowboard, esquí o trineos. Lo pasará genial, garantizado."; break;
							}	  
						  ?><br />
						 </p>
                <br />
						<?php
				switch($_GET["tipo"]){
					case 1: echo "			
					<center><a href='images/alhambra2.jpg'><img src='images/alhambra2.jpg' width=500></a></center>
					<br />
					<a href='http://www.alhambra.org/'>Web oficial</a>"; break;
					case 2: echo "
					<center><a href='images/sierra_nevada2.jpg'><img src='images/sierra_nevada2.jpg' width=500></a></center>
					<br />
					<a href='http://sierranevada.es/'>Web oficial</a>"; break;
				}	  
			  ?>
				<br />
				</div>
				
	</div>

</body>
</html>