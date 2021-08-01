<?php
session_start();
include_once ('Controller.php');
include_once("../DAO/StatusModel.php");


if(isset($_POST['btn_select'])){
    
    
    $userSession=$_SESSION['user'];              	
	$id = $_POST['id'];
	$name = $_POST['link'];//Name file
	$option=$_POST['option'];
    $cursos="/cursos/".$name;
    $inicio="/inicio/".$name;
    $develop="/develop/".$name;

    if($option=="Home"){
        
        $content=$inicio;
    }else{
        if($option=="Develop"){
            
           $content=$develop; 
        }else{
            
          $content=$cursos;  
        }
        
    }
    
    $link="Location: https://www.mylegacyvip.com/education" . $content . ".php";
    
    if($option!="Develop"){
         $objUserHomeList=new StatusModel;
    $rows=$objUserHomeList->getStatusItem($userSession,$option,$id);
    
    
    $var=0;
    
    if($rows==0){
        
        $Controller=new Controller;
        $resp=$Controller->Selector($userSession,$id,$option);
        
        
        $userHom=$objUserHomeList->getStatusHome($usuarioSession);//LIST CONTENT USER WATCH HOME INDEX
        $userCours=$objUserHomeList->getStatusCourse($usuarioSession);//LIST CONTENT USER WATCH HOME INDEX
        
        $_SESSION['viewUserHome']=$userHom;
        $_SESSION['viewUserCourse']=$userCours;
        
        $var=1;
    }
    
    if($var==0){
        
        header("Status: 301 Moved Permanently");
        header($link);
        exit; 
    }else{
        
        header("Status: 301 Moved Permanently");
        header($link);
        exit;  
        }
        
    }else{
        
        header("Status: 301 Moved Permanently");
        header($link);
        exit; 
    }

}

    
//Input out
 else {
    
    echo('<html>
    <head>
    <title>Error</title>
    <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=https://www.mylegacyvip.com/login/index.php">
    </head>
    <body>
    Ingrese correctamente...
    </body>
    </html>');
    
    }
/*$in='<html>
    <head>
    <title>Inicio</title>
    <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=https://www.mylegacyvip.com/education';
    $content="";
    $out='.php">
    </head>
    <body>
    Cargando...
    </body>
    </html>';*/
?>   
