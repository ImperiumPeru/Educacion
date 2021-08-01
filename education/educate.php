<?php
session_start();

if(isset($_POST['btn_home'])){
    
    $op=$_POST['o'];
    $_SESSION['opcion']=1;

    header("Status: 301 Moved Permanently");
    header("Location: https://www.mylegacyvip.com/education/index.php");
    exit;
}
else if(isset($_POST['btn_course'])){

    $op=$_POST['o'];
    $_SESSION['opcion']=2;

    header("Status: 301 Moved Permanently");
    header("Location: https://www.mylegacyvip.com/education/index.php");
    exit;
}
else if(isset($_POST['btn_develop'])){

    $op=$_POST['o'];
    $_SESSION['opcion']=3;

    header("Status: 301 Moved Permanently");
    header("Location: https://www.mylegacyvip.com/education/index.php");
    exit;
    
}
else if(isset($_POST['btn_contact'])){

        $op=$_POST['o'];
        $_SESSION['opcion']=4;

        header("Status: 301 Moved Permanently");
        header("Location: https://www.mylegacyvip.com/education/contact.html");
        exit;

    
}
else if(isset($_POST['btn_logout'])){

    session_destroy(); //Destruye la sesión
    header("Status: 301 Moved Permanently");
    header("Location: https://www.mylegacyvip.com/");
    exit;
    
}
    
//Input out
else {

    session_destroy();
    
    
    header("Status: 301 Moved Permanently");
    header("Location: https://www.mylegacyvip.com/");
    exit;
    }






/*echo ('<html>
    <head>
    <title>Error</title>
    <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=https://www.mylegacyvip.com/login/login.php">
    </head>
    <body>
    Su mensaje no ha sido enviado. Complete el formulario correctamente
    </body>
    </html>');*/
?>