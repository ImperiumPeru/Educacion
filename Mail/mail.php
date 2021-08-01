<?php
	include "class.phpmailer.php";
	include "class.smtp.php";
	
	class Email{
	    //"contacto@mylegacyvip.com"
	    //"soporte@mylegacyvip.com"
	    protected $servername = "localhost";
        protected $username = "mylegacy_legacyV";
        protected $pass = "secretpasslegacy";
        protected $bd="mylegacy_homepage";

	    function mail($name,$subject,$mail,$messag,$mail_to,$phone){
	      $message=$messag;
	      date_default_timezone_set("America/Lima");
          $NowDate=date('Y-m-d H:i:s');
      	  $email_user = "legacyvipcontact@gmail.com";
      	  $email_password = "LegacyVIPContact1@";
      	  $address_to =$mail;
	      $the_subject = $subject;
	      
	        $from_name =$name;
        	$phpmailer = new PHPMailer();
        
        	// ---------- datos de la cuenta de Gmail -------------------------------
        	$phpmailer->Username = $email_user;
        	$phpmailer->Password = $email_password; 
        	//-----------------------------------------------------------------------
        	$phpmailer->SMTPDebug = 1;
        	$phpmailer->SMTPSecure = 'ssl';
        	$phpmailer->Host = "smtp.gmail.com";
        	$phpmailer->Port = 465;
        	$phpmailer->IsSMTP();
        	$phpmailer->SMTPAuth = true;
        
        	$phpmailer->setFrom($phpmailer->Username,$from_name);
        	$phpmailer->AddAddress($mail_to);
        
        	$phpmailer->Subject = $subject;
        	$phpmailer->Body .="<p>De: ".$name. "</p>";
        	$phpmailer->Body .="<p>Email: ".$mail;
        	$phpmailer->Body .="<p>Teleféfono: " .$phone. "</p>";
        	$phpmailer->Body .="<p>" .$message. "</p>";;
        	$phpmailer->IsHTML(true);
        	$phpmailer->Send();
        	
        	return ;
        	  }
        	  
        	  
        function SaveStatusMail($email,$user,$date){
            
            $con=mysqli_connect($this->servername, $this->username, $this->pass,$this->bd);
            
            
            $sql="INSERT INTO `ChangePassword`(`email`, `date` , `User`) VALUES ('$email','$date','$user')";var_dump($sql);
            $result=mysqli_query($con,$sql);
        
            return $result;
            
        }
        
        function getRequestInfo($email){
            
            $con=mysqli_connect($this->servername, $this->username, $this->pass,$this->bd);
            
            $sql="SELECT * FROM `ChangePassword` WHERE `email`='$email' ORDER BY `id`";
            $result=mysqli_query($con,$sql);
            
            $request=array();
        
            for ($i=0; $i < 1; $i++) {
	
			
	        $array = array();
            $fila[$i] = mysqli_fetch_array($result);
            
            array_push($array,$fila[$i]['id']);
            array_push($array,$fila[$i]['User']);
            array_push($array,$fila[$i]['email']);
            array_push($array,$fila[$i]['date']);
			
			array_push($request,$array);
	        }
	    return $request;
            
        }
        
        function delRequest($email){
            
            $con=mysqli_connect($this->servername, $this->username, $this->pass,$this->bd);
            
            $sql="DELETE FROM `ChangePassword` WHERE `email`='$email'";
            $result=mysqli_query($con,$sql);
            
            return $result;
        }
        	  
        function SendchangePass($mail,$user){
	        date_default_timezone_set("America/Lima");
            $NowDate=date('Y-m-d H:i:s');
      	    $email_user = "legacyvipcontact@gmail.com";
      	    $email_password = "LegacyVIPContact1@";
      	    $address_to =$mail;
	        $the_subject = "Soporte de Legacy";
	      
	        $from_name ="Legacy VIP";
        	$phpmailer = new PHPMailer();
        
        	// ---------- datos de la cuenta de Gmail -------------------------------
        	$phpmailer->Username = $email_user;
        	$phpmailer->Password = $email_password; 
        	//-----------------------------------------------------------------------
        	$phpmailer->SMTPDebug = 1;
        	$phpmailer->SMTPSecure = 'ssl';
        	$phpmailer->Host = "smtp.gmail.com";
        	$phpmailer->Port = 465;
        	$phpmailer->IsSMTP();
        	$phpmailer->SMTPAuth = true;
        
        	$phpmailer->setFrom($phpmailer->Username,$from_name);
        	$phpmailer->AddAddress($address_to);
        
        	$phpmailer->Subject = $the_subject;	
        	$phpmailer->Body ="<head>
<meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='nonymous'></script>
<link href='https://fonts.googleapis.com/css?family=Lobster&display=swap' rel='stylesheet'>
<style>

	
	p {
	font-size:15px;
	}
	
	.cont{
	width:100%;
	position:relative;
	height:80%;
	left:0;
	}
	
	img{
		width:60%;
		height:80%;
	}
	
	@media (max-width:700px) and (min-width:320px) {
		p{
		font-size: 12.5px;
		}

		.title {
			font-size: 250%;
			top:25%;
			left:0%;
			}
		
		.cont{
			width:180%;
			left:-200px;
			}
			
			img{
				width:40%;
				height:80%;
			}
	}
</style>


</head>
<body style='background:black;'>
<div class='cont' align='center'>
<!--columna-->
<div class='row' align='center' style='width:40%;height:15%;background:#013440;position:relative;margin-top:2.5%' >
	<div class='col-md-5 col-lg-5'>
		<img src='logo.png'></img>
	</div>
	<!--columna-->
	<div class='col-md-7 col-lg-7' style='text-align:left;position:relative;top:20%'>
			<h1 style='color:white;font-family: Cinzel, serif;font-size:250%'><strong>LEGACY VIP</strong></h1>
	</div>
</div>
<div class='row' style='width:40%;height:80%;background:#E7E7E2;position:relative;text-align:center' >

	<div class='col-lg-12 col-md-12' align='center;' style='top:2%;'>
		<h1 style='color:black;text-align:center;font-size:200%'>Solicitud de cambio de contraseña</h1>
	</div>
	
	<div class='col-lg-12 col-md-12' style='text-align:justify;padding-left:5%;padding-right:5%;height:7%;position:relative;top:-7%'>
	<p>Recibimos una solicitud de cambio de contraseña para su cuenta de Legacy VIP.<br>
	Este enlace expirará en 24 horas. Si no solicitaste un cambio de contraseña, ignora este correo y no se harán cambios en tu cuenta. Es posible que otro usuario haya ingresado tu nombre de usuario por error.</p>
	</div>
	
	<div class='col-lg-12 col-md-12' style='text-align:justify;padding-left:5%;padding-right:5%;text-align:center;position:relative' align='center'>
		<div style='background:#C9C9C6;width:100%'>
			<p>Estimado usuario, <b>". $user ."</b></p>
			<p>Haz clic en el siguiente enlace para cambiar de contraseña.</p>
			<a href='https://mylegacyvip.com/Mail/ChangePassword.php?rel=". $mail .">Cambiar contraseña</a>
		</div>
	</div>
</div>



</div>
</body>";
        	$phpmailer->IsHTML(true);
        	$phpmailer->Send();
        	
        	return ;
        }
	}
	
	