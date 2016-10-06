<?php
session_start();
include_once 'dbconnect.php';
?>
<html>
<body>
<div id="container">

<div id="header2"> <a href="index.php"> <img src="images/logo.jpg" width="328" height="71" alt="" id="logo" /> </a>
    <ul class="menu">
        <?php
        $result = mysql_query("SELECT idSeccion, nombre FROM hotel");
        ?>
        <a href="index.php" /><li class ="button"><?php
        $row = mysql_fetch_assoc($result);
        echo $row['nombre'];
        ?></li></a>
        <li class="line"></li>
        <a href="index.php?seccion=<?php
        $row = mysql_fetch_assoc($result);
        echo $row['idSeccion'];
        ?>"><li class="button" /><?php
        echo $row['nombre'];
        ?></li></a>
        <li class="line"></li>
        <a href="index.php?seccion=<?php
        $row = mysql_fetch_assoc($result);
        echo $row['idSeccion'];
        ?>"><li class="button" /><?php
        echo $row['nombre'];
        ?></li>
        <li class="line"></li>
        <a href="index.php?seccion=<?php
        $row = mysql_fetch_assoc($result);
        echo $row['idSeccion'];
        ?>"><li class="button" onmouseover="show('oculto_habitaciones')" onmouseout="hide('oculto_habitaciones')" /><?php
        echo $row['nombre'];
        ?>
        <li class="line"></li>
        <a href="index.php?seccion=<?php
        $row = mysql_fetch_assoc($result);
        echo $row['idSeccion'];
        ?>"><li class="button" onmouseover="show('oculto_servicios')" onmouseout="hide('oculto_servicios')" /><?php
        echo $row['nombre'];
        ?>
        </li></a>
        <li class="line"></li>
        <a href="index.php?seccion=<?php
        $row = mysql_fetch_assoc($result);
        echo $row['idSeccion'];
        ?>"><li class="button" onmouseover="show('oculto_contacto')" onmouseout="hide('oculto_contacto')" /><?php
        echo $row['nombre'];
        mysql_free_result($result);
        ?>

            </li></a>
    </ul>
      <ul class="menu_hab" id="oculto_habitaciones" onmouseover="show('oculto_habitaciones')" onmouseout="hide('oculto_habitaciones')">
          <?php
          $result = mysql_query("SELECT idTipoHabitacion, nombre FROM tipoHabitacion");
          while ($row = mysql_fetch_assoc($result)) {
                echo '<a href="index.php?seccion=3&tipo='; echo $row['idTipoHabitacion']; echo'"><li class="button" />'; echo $row['nombre']; echo '</li></a>';
          }
          mysql_free_result($result);
          ?>
      </ul>

      <ul class="menu_serv" id="oculto_servicios" onmouseover="show('oculto_servicios')" onmouseout="hide('oculto_servicios')">
          <?php
          $result = mysql_query("SELECT idServicio, nombre FROM servicio");
          while ($row = mysql_fetch_assoc($result)) {
                echo '<a href="index.php?seccion=4&tipo='; echo $row['idServicio']; echo'"><li class="button" />'; echo $row['nombre']; echo '</li></a>';
          }
          mysql_free_result($result);
          ?>
      </ul>

      <ul class="menu_cont" id="oculto_contacto" onmouseover="show('oculto_contacto')" onmouseout="hide('oculto_contacto')">
          <a href="index.php?seccion=5&tipo=1.php"><li class="button" />Formulario</li></a>
      </ul>

      </br></br></br></br></br></br>
<?php
if(!isset($_SESSION['user']))
{
     echo '<a href="index.php?seccion=6.php">Iniciar Sesión.</a> <a href="index.php?seccion=6&tipo=1.php">Registrarse.</a>';
}
else
{
	echo 'Hola  '; echo $_SESSION['user']; echo ',&nbsp; <a href="index.php?seccion=6&tipo=2">Cerrar Sesión.</a>'; echo '&nbsp; <a href="index.php?seccion=6&tipo=3">Editar Perfil.</a>';
}
?>
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
