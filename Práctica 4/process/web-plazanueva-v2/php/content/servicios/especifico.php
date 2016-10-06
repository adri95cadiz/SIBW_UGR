
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
			echo'<br /></p><br />';
			echo $row['imgPath'];
     ?>
				<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />
				</div>

	</div>

</body>
</html>
