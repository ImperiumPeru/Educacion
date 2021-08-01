<?php
    session_start();
    include_once ('../Mail/mail.php');
    include_once ('../DAO/UserModel.php');
    include_once ('../login/Recovery.php');
    
    date_default_timezone_set("America/Lima");
    $NowDate=date('Y-m-d H:i:s');
    
	$email = $_GET['rel'];
	
	$objmail=new Email;
	$RequestInfo=$objmail->getRequestInfo($email);
	
	var_dump($RequestInfo);
	$dateSendRequest=$RequestInfo[3];
    
	if($dateSendRequest!=array()){
	
	$Tomorrow=strtotime("tomorrow");
	$LimitDate=date($dateSendRequest, $Tomorrow);
	
	if($LimitDate<$NowDate){
	    
	    $Del=$objmail->delRequest($email);
	    $objRecovery=new FormRecovery;
	    $_SESSION['mail']=$email;
	    $objRecovery->FormRecoveryShow("Ingrese","");
	    
	    
	    }else{
	        session_destroy();
	    echo ("Error: Se ha excedido el límite de solicitud. 24 horas máximo.");
	    
	         }
	         
	      }else{
	          session_destroy();
	      echo ("Error: Petición inválida.");
	}
?>