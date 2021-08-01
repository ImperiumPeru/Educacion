<?php
session_start();
include_once("./main.php");
include_once("./course.php");
include_once("./develop.php");
include_once("./DAO/ListHome.php");
include_once("./DAO/ListCourse.php");
include_once("./DAO/UserModel.php");
include_once("./DAO/PersonModel.php");
include_once("./DAO/StatusModel.php");


if(isset($_SESSION['user'])==false){
  $_SESSION['user']="";
}

$usuarioSession=$_SESSION['user'];		 
$vacio="";
			  
if($usuarioSession!=$vacio){
    
    $objUserHomeList=new StatusModel;
    $userHom=$objUserHomeList->getStatusHome($usuarioSession);//LIST CONTENT USER WATCH HOME INDEX
    $userCours=$objUserHomeList->getStatusCourse($usuarioSession);//LIST CONTENT USER WATCH HOME INDEX
    
    
    $objUsuarioModel=new UsuarioModel;
	$usuarioInfo=$objUsuarioModel->getIdPersonaUser($usuarioSession);

	$Person=new PersonaModel;
	$DetalleUser=$Person->getInfoPerson($usuarioInfo[0][1]);//idPerson
		
	$_SESSION['userinfo']=$usuarioInfo;
	$_SESSION['personinfo']=$DetalleUser;
	$_SESSION['user']=$usuarioInfo[0][2];
    
    $objFormMain = new FormMenu;
    $objFormCourse = new FormCourse;
    $objFormDevel = new FormDevelop;
    
    $objHomeList=new ListHome;
    $objCourseList=new ListCourse;
    
    $userDato=$_SESSION['userinfo'];
	$userPersona=$_SESSION['personinfo'];
    
    $HomeList=$objHomeList->getHomeList();//LIST CONTENT HOME INDEX
    $CourseList=$objCourseList->getCourseList();//LIST CONTENT COURSE INDEX
    
    $_SESSION['ListItemsHomess']=$HomeList;
    $_SESSION['ListItemsCoursess']=$CourseList;
    
    $_SESSION['viewUserHome']=$userHom;
    $_SESSION['viewUserCourse']=$userCours;
    
    
    $opti=$_SESSION['opcion'];
    
    switch($opti){
        
        case 1: $objFormMain -> FormMenuShow($userDato,$userPersona,$userHom,$HomeList);break;
        case 2: $objFormCourse -> FormCourseShow($userDato,$userPersona,$userCours,$CourseList);break;
        case 3: $objFormDevel -> FormDevelopShow($userDato,$userPersona,$userCours,$CourseList);break;
    }

}

else{
echo ('<html>
                    <head>
                    <title>Error</title>
                    <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=https://www.mylegacyvip.com/login/index.php">
                    </head>
                    <body>
                    Ingrese de manera correcta...
                    </body>
                    </html>');
}





?>