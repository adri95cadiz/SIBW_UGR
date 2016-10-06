<?php
if(isset($_POST['btn-signup']))
{
	$uname = mysql_real_escape_string($_POST['uname']);
	$email = mysql_real_escape_string($_POST['email']);
	$upass = md5(mysql_real_escape_string($_POST['pass']));

	$uname = trim($uname);
	$email = trim($email);
	$upass = trim($upass);

	// email exist or not
	$query = "SELECT email FROM usuario WHERE email='$email'";
	$result = mysql_query($query);

	$count = mysql_num_rows($result); // if email not found then register

	if($count == 0){

		if(mysql_query("INSERT INTO usuario(nombreUsuario,email,pass) VALUES('$uname','$email','$upass')"))
		{
            $_SESSION['user'] = $uname;
			?>
			<script>alert('Registrado correctamente');</script>
			<script type=\"text/javascript\">
               history.go(-2);
            </script>
			<?php
		}
		else
		{
			?>
			<script>alert('Error');</script>
			<?php
		}
	}
	else{
			?>
			<script>alert('Este email ya est� registrado');</script>
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
<td><input type="text" name="uname" placeholder="Nombre de Usuario" required /></td>
</tr>
<tr>
<td><input type="email" name="email" placeholder="Email" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Contraseña" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-signup">Registrarse</button></td>
</tr>
<tr>
<td><a href="index.php?seccion=6">Iniciar sesión</a></td>
</tr>
</table>
</form>
</div>
</center>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
</div>
</body>
</html>
