<?php
    // incluimos la clase PHPMailer
    require_once('php/PHPMailer/class.phpmailer.php'); 
    require_once('php/PHPMailer/class.smtp.php');

    // extraemos los datos
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
	$telefono = $_POST['telefono'];

    // Primer envío
    $mail = new PHPMailer(); // instancio un objeto de la clase PHPMailer
    // para que funcionen caracteres de otros idiomas
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'quoted-printable';
    $mail->IsSMTP(); // indico a la clase que use SMTP
    // Debo de hacer autenticación SMTP
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'smtp.gmail.com'; // indico el servidor de Gmail para SMTP
    $mail->Port = 465; // indico el puerto que usa Gmail
    $mail->Username = 'plazanuevahotel@gmail.com'; // indico un usuario
    $mail->Password = 'hotelplazanueva'; // indico clave de un usuario de gmail
    $mail->SetFrom('plazanuevahotel@gmail.com', 'Hotel Plaza Nueva'); // defino el email y nombre del remitente del mensaje
    $mail->AddReplyTo('plazanuevahotel@gmail.com', 'Hotel Plaza Nueva'); // defino la dirección de correo a la que se envía el mensaje
    $mail->Subject = '[Consulta hotel] '.$asunto; // añado un asunto al mensaje
    $mail->MsgHTML($nombre.' con email '.$email.' y telefono '.$telefono.' ha enviado el siguiente mensaje:<br/>'.$mensaje); // inserto el texto del mensaje en formato HTML
    $mail->AddAddress('plazanuevahotel@gmail.com', 'Hotel Plaza Nueva'); // la añado a la clase, indicando el nombre de la persona destinatario
    
    // Se envía el primer mensaje
    if(!$mail->Send()) {
        echo '<script type="text/javascript">alert("Error al enviar");</script>';
    } else { // Si se ha enviado el primer mensaje, se envía el segundo confirmando al usuario que lo ha enviado
        
        // Segundo envío: al mail de la web
        $mail = new PHPMailer(); // instancio un objeto de la clase PHPMailer
        // para que funcionen caracteres de otros idiomas
        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'quoted-printable';
        $mail->IsSMTP(); // indico a la clase que use SMTP
        // Debo de hacer autenticación SMTP
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'smtp.gmail.com'; // indico el servidor de Gmail para SMTP
        $mail->Port = 465; // indico el puerto que usa Gmail
        $mail->Username = 'plazanuevahotel@gmail.com'; // indico un usuario
        $mail->Password = 'hotelplazanueva'; // indico clave de un usuario de gmail
        $mail->SetFrom('plazanuevahotel@gmail.com', 'Hotel Plaza Nueva'); // defino el email y nombre del remitente del mensaje
        $mail->AddReplyTo($email,$nombre); // defino la dirección de correo a la que se envía el mensaje
        $mail->Subject = '[Consulta hotel plaza nueva] '.$asunto; // añado un asunto al mensaje
        $mail->MsgHTML('El mensaje correspondiente ha sido enviado al mail de contacto de Hotel Plaza Nueva:<br/>'.$mensaje); // inserto el texto del mensaje en formato HTML
        $mail->AddAddress($email,$nombre); // la añado a la clase, indicando el nombre de la persona destinatario
       
        // Se envía el segundo mensaje
        if($mail->Send()) {
            echo 
                '<script type="text/javascript">location.href="../index.php?cat=contacto";alert("Mensaje enviado correctamente");</script>';
        } else {
            echo 
                '<script type="text/javascript">alert("Error al enviar");</script>';
        }
    }
?>