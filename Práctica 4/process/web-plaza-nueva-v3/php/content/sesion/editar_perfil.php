<?php
if(isset($_POST["btn-submit"]))
{
    $uname = $_SESSION['user'];
    $nombre = mysql_real_escape_string($_POST['nombre']);
    $nombre = trim($nombre);
    $DNI = mysql_real_escape_string($_POST['DNI']);
    $DNI = trim($DNI);
    $direccion = mysql_real_escape_string($_POST['direccion']);
    $direccion = trim($direccion);
    $telefono = mysql_real_escape_string($_POST['telefono']);
    $telefono = trim($telefono);

	if(mysql_query("UPDATE usuario SET nombre = '$nombre', DNI = '$DNI', direccion = '$direccion', telefono = '$telefono' WHERE nombreUsuario = '$uname'"))
            {
                ?>
                <script>alert('Los cambios se han realizado correctamente');</script>
                <?php
            }
            else
            {
                ?>
                <script>alert('Error');</script>
                <?php
            }

} else if(isset($_POST["btn-delete"])) {

    unset($_SESSION['confirmar']);
    $uname = $_SESSION['user'];
    if(mysql_query("DELETE FROM usuario WHERE nombreUsuario = '$uname'"))
            {
                session_destroy();
                unset($_SESSION['user']);
                ?>
                <script>alert('Ha borrado su perfil de usuario');</script>
                <?php
            }
            else
            {
                ?>
                <script>alert('Error');</script>
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
                <?php
                $uname = $_SESSION['user'];
                $result = mysql_query("SELECT * FROM usuario WHERE nombreUsuario='$uname'");
                $row = mysql_fetch_array($result);

                echo '<tr><td>Nombre: <textarea cols="68" rows="1" name="nombre" style="resize:vertical;">';
                echo $row['nombre'];
                echo '</textarea></tr>';

                echo '<tr><td>DNI: <textarea cols="68" rows="1" name="DNI" style="resize:vertical;">';
                echo $row['DNI'];
                echo '</textarea></tr>';

                echo '<tr><td>Dirección: <textarea cols="68" rows="2" name="direccion" style="resize:vertical;">';
                echo $row['direccion'];
                echo '</textarea></tr>';

                echo '<tr><td>Teléfono: <textarea cols="68" rows="1" name="telefono" style="resize:vertical;">';
                echo $row['telefono'];
                echo '</textarea></tr>';
                ?>
<tr>
<td><button type="submit" name="btn-submit">Aceptar Cambios.</button></td>
</tr>
<tr>
<td><button type="submit" name="btn-delete">Borrar Perfil.</button></td>
</tr>
</table>
</form>
</div>
</center>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
</div>

</body>
</html>
