<html>
<body>

<div id="container">

  <div id="header2"> <a href="index.php"> <img src="images/logo.jpg" width="328" height="71" alt="" id="logo" /> </a>
    <ul class="menu">
        <a href="index.php" /><li class ="button">Hotel</li></a>
        <li class="line"></li>
        <a href="index.php?seccion=1"><li class="button" />Promociones</li></a>
        <li class="line"></li>
        <a href="index.php?seccion=2"><li class="button" />Fotos</li>
        <li class="line"></li>
        <a href="index.php?seccion=3"><li class="button" onmouseover="show('oculto_habitaciones')" onmouseout="hide('oculto_habitaciones')" />Habitaciones
        <li class="line"></li>
        <a href="index.php?seccion=4"><li class="button" onmouseover="show('oculto_servicios')" onmouseout="hide('oculto_servicios')" />Servicios
            </li></a>
        <li class="line"></li>
        <a href="index.php?seccion=5"><li class="button" onmouseover="show('oculto_contacto')" onmouseout="hide('oculto_contacto')" />Contacto y Mapa
            
            </li></a>
    </ul>
      <ul class="menu_hab" id="oculto_habitaciones" onmouseover="show('oculto_habitaciones')" onmouseout="hide('oculto_habitaciones')">
          <a href="index.php?seccion=3&tipo=1"><li class="button" />Doble o Twin</li></a>
          <a href="index.php?seccion=3&tipo=2"><li class="button" />Doble Superior</li></a>
          <a href="index.php?seccion=3&tipo=3"><li class="button" />Triple</li></a>
      </ul>

      <ul class="menu_serv" id="oculto_servicios" onmouseover="show('oculto_servicios')" onmouseout="hide('oculto_servicios')">
          <a href="index.php?seccion=4&tipo=1"><li class="button" />Alhambra</li></a>
          <a href="index.php?seccion=4&tipo=2"><li class="button" />S. Nevada</li></a>
      </ul>

      <ul class="menu_cont" id="oculto_contacto" onmouseover="show('oculto_contacto')" onmouseout="hide('oculto_contacto')">
          <a href="index.php?seccion=5&tipo=1.php"><li class="button" />Formulario</li></a>
      </ul>
    </div>
	
	<script type="text/javascript">
        function show(which) {
            var obj = document.getElementById(which);
            obj.style.display = "block"
        }

        function hide(which) {
            var obj = document.getElementById(which);
            obj.style.display = "none"
        }
    </script>

</body>
</html>