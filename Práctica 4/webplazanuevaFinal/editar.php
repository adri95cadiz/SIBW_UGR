<?php
session_start();
include_once 'php/dbconnect.php';
header('Content-Type: text/html; charset=utf-8');
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
?>

<?php
if(isset($_POST["btn-volver"]))
    {
       echo "<script type=\"text/javascript\">
           history.go(-2);
       </script>";
        exit;
}else if(isset($_POST['btn-submit']))
{

    if(!isset($_GET["tipo"])){
        $content = mysql_real_escape_string($_POST['content']);
        $content = trim($content);
        if(!isset($_GET["seccion"])){
            $seccion = 0;
        } else {
            $seccion = $_GET["seccion"];
        }
       if(mysql_query("UPDATE hotel SET content = '$content' WHERE idSeccion = '$seccion'"))
        {
            ?>
            <script>alert('Los cambios se han realizado correctamente');</script>
            <?php
            header("Location: index.php");
        }
        else
        {
            ?>
            <script>alert('Error');</script>
            <?php
        }
    } else {

        $nombre = mysql_real_escape_string($_POST['nombre']);
        $nombre = trim($nombre);
        $descripcion = mysql_real_escape_string($_POST['descripcion']);
        $descripcion = trim($descripcion);
        $imgPath = mysql_real_escape_string($_POST['imgPath']);
        $imgPath = trim($imgPath);
        $precio = mysql_real_escape_string($_POST['precio']);
        $precio = trim($precio);

        $tipo = $_GET["tipo"];

         if($_GET["seccion"] == 3){

            $precioDesayuno = mysql_real_escape_string($_POST['precioDesayuno']);
            $precioDesayuno = precioDesayuno($web);

            if(mysql_query("UPDATE tipoHabitacion SET nombre = '$nombre', descripcion = '$descripcion', imgPath = '$imgPath', precio = '$precio', precioDesayuno = '$precioDesayuno' WHERE idTipoHabitacion = '$tipo'"))
            {
                ?>
                <script>alert('Los cambios se han realizado correctamente');</script>
                <?php
                header("Location: index.php");
            }
            else
            {
                ?>
                <script>alert('Error');</script>
                <?php
            }
         }
         else if($_GET["seccion"] == 4){

            $web = mysql_real_escape_string($_POST['web']);
            $web = trim($web);

            if(mysql_query("UPDATE servicio SET nombre = '$nombre', descripcion = '$descripcion', imgPath = '$imgPath', precio = '$precio', web = '$web' WHERE idServicio = '$tipo'"))
            {
                ?>
                <script>alert('Los cambios se han realizado correctamente');</script>
                <?php
                header("Location: index.php");
            }
            else
            {
                ?>
                <script>alert('Error');</script>
                <?php
            }
         }
    }
}
?>

<html>
<head>
<title>Hotel Plaza Nueva en Granada</title><meta property="og:site_name" content="Hotel Plaza Nueva">
<meta property="business:contact_data:postal_code" content="18010 ">
<meta property="business:contact_data:country_name" content="España">
<meta name="description" content="Hotel called Hotel Plaza Nueva allocated on Granada ">
<meta name="author" content="Juan Miguel Hinojosa Guerrero, Adrian Portillo Sanchez">



<link href="default.css" rel="stylesheet" type="text/css" />
    <!-- IE -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
    <!-- other browsers -->
    <link rel="icon" type="image/x-icon" href="imagesfavicon.ico" />
</head>

<body>

    <center>
    </br>
    <div id="login-form">
    <form method="post">
    <table align="center" width="60%" border="0">
    <?php
        if(!isset($_GET["tipo"])){
            echo '<tr><td><textarea cols="156" rows="20" name="content" style="resize:vertical;">';
            if(!isset($_GET["seccion"])){
                 $result = mysql_query("SELECT content FROM hotel WHERE idSeccion='0'");
            } else {
                $seccion = $_GET["seccion"];
                $result = mysql_query("SELECT content FROM hotel WHERE idSeccion='$seccion'");
            }
            $row = mysql_fetch_array($result);
            echo $row['content'];
            echo '</textarea></tr>';
        } else {
            if($_GET["seccion"] == 3){
                $tipo = $_GET["tipo"];
                $result = mysql_query("SELECT * FROM tipoHabitacion WHERE idTipoHabitacion='$tipo'");
                $row = mysql_fetch_array($result);

                echo '<tr><td><textarea cols="156" rows="1" name="nombre" style="resize:vertical;">';
                echo $row['nombre'];
                echo '</textarea></tr>';

                echo '<tr><td><textarea cols="156" rows="10" name="descripcion" style="resize:vertical;">';
                echo $row['descripcion'];
                echo '</textarea></tr>';

                echo '<tr><td><textarea cols="156" rows="1" name="imgPath" style="resize:vertical;">';
                echo $row['imgPath'];
                echo '</textarea></tr>';

                echo '<tr><td><textarea cols="156" rows="1" name="precio" style="resize:vertical;">';
                echo $row['precio'];
                echo '</textarea></tr>';

                echo '<tr><td><textarea cols="156" rows="1" name="precioDesayuno" style="resize:vertical;">';
                echo $row['precioDesayuno'];
                echo '</textarea></tr>';

            } else if($_GET["seccion"] == 4){
                $tipo = $_GET["tipo"];
                $result = mysql_query("SELECT * FROM servicio WHERE idServicio='$tipo'");
                $row = mysql_fetch_array($result);

                echo '<tr><td><textarea cols="156" rows="1" name="nombre" style="resize:vertical;">';
                echo $row['nombre'];
                echo '</textarea></tr>';

                echo '<tr><td><textarea cols="156" rows="8" name="descripcion" style="resize:vertical;">';
                echo $row['descripcion'];
                echo '</textarea></tr>';

                echo '<tr><td><textarea cols="156" rows="1" name="imgPath" style="resize:vertical;">';
                echo $row['imgPath'];
                echo '</textarea></tr>';

                echo '<tr><td><textarea cols="156" rows="1" name="precio" style="resize:vertical;">';
                echo $row['precio'];
                echo '</textarea></tr>';

                echo '<tr><td><textarea cols="156" rows="1" name="web" style="resize:vertical;">';
                echo $row['web'];
                echo '</textarea></tr>';
            }
        }
    ?>
    <tr>
    <td><button type="submit" name="btn-submit">Aceptar Cambios</button></td>
    </tr>
    <tr>
    <td><button type="reset" name="btn-volver">Reiniciar</button></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-volver">Cancelar</button></td>
    </tr>
    </table>
    </form>
    </div>
    </center>

</body>
</html>
