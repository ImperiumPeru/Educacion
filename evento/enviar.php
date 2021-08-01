
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
    $invitacion = $_POST['invitacion'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];   
    $celular = $_POST['celular'];
    $para = ' eventos@mylegacyvip.com	';


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
   $mail->addReplyTo("eventos@mylegacyvip.com","Eventos");

   //BCC ->  incluir copia oculta de email enviado.
   $mail->addBCC("eventos@mylegacyvip.com");

   //Enviar codigo HTML o texto plano.
   $mail->isHTML(true);

   //Titulo email.
   $mail->Subject = $invitacion;
   //Cuerpo email con HTML.
   $mail->Body = "
           <h1>Nuevo Registro de $invitacion</h1>

           Invitación hecha por: $invitacion<br /> <br /> 
           Nombres: $nombres <br /><br /> 
           Apellidos: $apellidos <br /><br /> 
          Numero de Celular: $celular <br /><br /> 

   "; 

 //Comprobamos el envio.
 if(!$mail->send()) {                   
     echo "<script language='javascript'>
         alert('fallado');
      </script>";
 } else {
     echo "<script language='javascript'>
         alert('Se ha registrado correctamente, muchas gracias.');
      </script>";
 } 
 include 'index.html';
}

?> 
