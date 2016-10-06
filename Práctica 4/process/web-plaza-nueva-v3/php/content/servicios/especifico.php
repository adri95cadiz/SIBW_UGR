
<html>
<body>

<div id="content">



      <span class="headline">
	  <?php
            $servicio = $_GET["tipo"];
            $sql="SELECT * FROM servicio WHERE idServicio='$servicio'";
            $result = mysql_query($sql);
            $row = mysql_fetch_array($result);
            echo $row['nombre'];
            echo'</span><br /><br /><div><p>';
			echo $row['descripcion'];
			echo '<br />El precio de esta excursión es de '; echo $row['precio']; echo ' euros por persona. ';
			echo '<a href="index.php?seccion=1">reservar.</a>';
			echo'<br /></p><br />';
			echo'<center><a href="'; echo $row['imgPath']; echo'"><img src="'; echo $row['imgPath']; echo'" width=500></a></center><br />';
            echo'<a href="'; echo $row['web']; echo '">Web oficial</a>';
     ?>
				<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />
				</div>

	</div>

</body>
</html>
