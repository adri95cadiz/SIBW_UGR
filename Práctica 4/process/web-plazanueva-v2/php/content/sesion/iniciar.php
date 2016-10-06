
<?php
if(isset($_POST['btn-login']))
{
	$name = mysql_real_escape_string($_POST['user']);
	$upass = mysql_real_escape_string($_POST['pass']);

	$name = trim($name);
	$upass = trim($upass);

	$res=mysql_query("SELECT nombreUsuario, pass FROM usuario WHERE nombreUsuario='$name' OR email='$name'");
	$row=mysql_fetch_array($res);

	$count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
	if($count == 1 && $row['pass']==md5($upass))
	{
		$_SESSION['user'] = $row['nombreUsuario'];
	}
	else
	{
		?>
        <script>alert('Usuario / Contraseña son incorrectos !');</script>
        <?php
	}

}
?>

<html>
<body>

<div id="content">
<center>
</br>
<div id="login-form">
<form method="post">
<table align="center" width="100%" border="0">
<tr>
<td><input type="text" name="user" placeholder="Tu nombre de usuario o email" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Tu Contraseña" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">Iniciar Sesión.</button></td>
</tr>
<tr>
<td><a href="index.php?seccion=6&tipo=1">Registrarse</a></td>
</tr>
</table>
</form>
</div>
</center>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
	</div>

</body>
</html>
