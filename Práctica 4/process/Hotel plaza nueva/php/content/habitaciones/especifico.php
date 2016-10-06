
<html>
<body>

	
	<div id="content">
                
                    <div>
                        <p>
                            
                                <span class="headline">
								<?php 
								switch($_GET["tipo"]){
									case 1: echo "Habitación doble o twin (2 camas)"; break;
									case 2: echo "Habitación doble superior"; break;
									case 3: echo "Habitación triple"; break;
									default: echo "Este tipo de habitación no existe.";
								}			
								?>
								</span><br />
							<?php
                            switch($_GET["tipo"]){
									case 1: echo "En nuestra habitaciones standard disfrutará de todo el equipamento y comodidad que su estancia en Granada merece.<br />
									Los precios para estas habitaciones son de 49,00€ la noche sin desayuno y 63,00€ con desayuno. <a href='index.php?seccion=3&tipo=1'>reservar.</a>"; break;
									case 2: echo "Disfrute de una magnífica vista de la plaza nueva y el centro de Granada desde nuestras habitaciones superiores.<br />
									Los precios para estas habitaciones son de 71,00€ la noche sin desayuno y 85,00€ con desayuno. <a href='index.php?seccion=3&tipo=2'>reservar.</a>"; break;
									case 3: echo "En nuestras habitaciones triples podrá disfrutar de sus vacaciones en familia o con amigos en el centro de Granada.<br />
									Los precios para estas habitaciones son de 84,00€ la noche sin desayuno y 108,00€ con desayuno. <a href='index.php?seccion=3&tipo=3'>reservar.</a>"; break;
								}	
							?>
                    </div></p>
					<br />
					<?php
					switch($_GET["tipo"]){
									case 1: echo "<a href='images/hab1_grande.jpg'>
									<img src='images/hab1_grande.jpg' width=500></a>"; break;
									case 2: echo "<a href='images/hab2_grande.jpg'>
									<img src='images/hab2_grande.jpg' width=500></a>"; break;
									case 3: echo "<a href='../images/hab3.jpg'>
									<img src='../images/hab3.jpg' width=500></a>"; break;
								}							
					
					?>
					<br />
	</div>
	


</body>
</html>