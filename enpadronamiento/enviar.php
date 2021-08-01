
<?php 



/*   //Reseteamos variables a 0.
   $invitacion = $nombres = $apellidos = $celular = $para = $headers = $msjCorreo = NULL;

   if (isset($_POST['submit'])) {
      //Obtenemos valores input formulario
      $invitacion = $_POST['invitacion'];
      $nombres = $_POST['nombres'];
      $apellidos = $_POST['apellidos'];   
      $celular = $_POST['celular'];
      $para = ' eventos@mylegacyvip.com	';

      //Creamos cabecera.
      $headers = 'De' . "Nuevo Registro " . $invitacion . "\r\n";
      $headers .= "Nuevo Registro";

      //Componemos cuerpo correo.
      $msjCorreo = "Invitación hecha por: " . $invitacion;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Nombres: " . $nombres;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Apellidos: " . $apellidos;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Celular: " . $celular;
      $msjCorreo .= "\r\n";

    if (mail($para, $invitacion, $msjCorreo, $headers)) {
         echo "<script language='javascript'>
            alert('Se ha registrado correctamente, muchas gracias.');
         </script>";
    } else {
         echo "<script language='javascript'>
            alert('fallado');
         </script>";
    }
    
  }
 */


//Reseteamos variables a 0.
$invitacion = $nombres = $apellidos = $celular = $para = $headers = $msjCorreo = NULL;

if (isset($_POST['submit'])) {

  
    //Obtenemos valores input formulario
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $celular = $_POST['celular'];   
    $email = $_POST['email'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $usuario = $_POST['usuario'];   
    $direccion = $_POST['direccion'];
    $para = ' usuarios@mylegacyvip.com	';


   //Compones nuestro correo electronico

   //Incluimos libreria PHPmailer (deberas descargarlo).
   require'class.phpmailer.php';

   //Nuevo correo electronico.
   $mail = new PHPMailer;
   //Caracteres.
   $mail->CharSet = 'UTF-8';

   //De dirección correo electrónico y el nombre
   $mail->From = "LegacyVIP";
   $mail->FromName = "LegacyVIP";

   //Dirección de envio y nombre.
   $mail->addAddress($para);
   //Dirección a la que responderá destinatario.
   $mail->addReplyTo("usuarios@mylegacyvip.com","usuarios");

   //BCC ->  incluir copia oculta de email enviado.
   $mail->addBCC("usuarios@mylegacyvip.com");

   //Enviar codigo HTML o texto plano.
   $mail->isHTML(true);

   //Titulo email.
   $mail->Subject = "Nuevo Usuario";
   //Cuerpo email con HTML.
   $mail->Body = "
           <h1>Nuevo usuario </h1>

           Nombres: $nombre<br /> <br /> 
           Fecha de Cumpleaños: $fecha <br /><br /> 
           Numero de Celular: $celular <br /><br /> 
           Correo Electronico: $email <br /><br /> 
           Facebook: $facebook <br /><br /> 
           Instagram: $instagram <br /><br /> 
           Usuario: $usuario <br /><br />
           Dirección: $direccion <br /><br />

   "; 

 //Comprobamos el envio.
 if(!$mail->send()) {                   
     echo "<script language='javascript'>
         alert('fallado');
      </script>";
 } else {
     echo "<script language='javascript'>
         alert('Se ha registrado correctamente, muchas gracias, Legacy VIP siempre dando lo mejor por nuestros socios ♥');
      </script>";
 } 
 include 'index.html';
}

?> 
