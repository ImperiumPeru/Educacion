<?php
include_once("./mail.php");
                
if(isset($_POST['contact'])){
	

	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$phone = $_POST['phone'];
	$company = $_POST['company'];
	$message = $_POST['message'];

    $key="@";
    
	if($name!="" && $mail!="" && $phone!=""  && $message!="" && strpos($mail, $key) != false){
	    
	  $mailController = new  Email;
	  $Resul=$mailController -> mail($name,"CONTACTO DEL USUARIO",$mail,$message,"contacto@mylegacyvip.com",$phone);
	
      echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";
	    
	
	 }else{
	    
        echo('<html>
            <head>
            
            <script type="text/javascript">
            function timeout()
            {
            setTimeout("cerrar()", 5000)
            }
            
            function cerrar() {
            var ventana = window.self
            ventana.opener = window.self
            ventana.close()}
            
            </script>
            
            </head>
            <body onload = "timeout()">
            <h2>Campos inválidos, complete nuevamente<h2>
            </body>
            </html>');
            	    
	    }
	
	
}

else if(isset($_POST['support'])){
	

	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	
    $key="@";
    
	if($name!="" && $mail!="" && $phone!=""  && $message!="" && strpos($mail, $key) != false){
	    
	    
	$mailController = new  Email;
	$Resul=$mailController -> mail($name,"SOPORTE AL USUARIO",$mail,$message,"soporte@mylegacyvip.com",$phone);
	
	}else{
	    
         echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";
            	    
	}
}

else if(isset($_POST['btn_recovery'])){
    
    $pass0 = $_POST['pass0'];
	$pass1 = $_POST['pass1'];
	

}

else if(isset($_POST['btn_'])){
    
    $val=$_POST['id'];
    include_once ('./Recovery.php');
    
    $Recovery=new Recovery;
    $Recovery->FormRecoveryShow("",$val);
    
    
}
else {
    
     echo('<html>
            <head>
            
            <script type="text/javascript">
            function timeout()
            {
            setTimeout("cerrar()", 5000)
            }
            
            function cerrar() {
            var ventana = window.self
            ventana.opener = window.self
            ventana.close()}
            
            </script>
            
            </head>
            <body onload = "timeout()">
            <h2>Ingrese correctamente...<h2>
            </body>
            </html>');
}

?>