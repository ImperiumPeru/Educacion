<?php
session_start();
include_once ('Controller.php');
include_once ('../DAO/PersonModel.php');

$message = ''; 
if (isset($_POST['subirBtn']))
{
 
    
  if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK)
  {
    // get details of the uploaded file
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $fileName = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    $dni=$_POST['dni'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
    
    if($fileSize<10500000){
        
       // sanitize file-name
    $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

    // check if file has one of the following extensions
    $allowedfileExtensions = array('jpg', 'png', 'jpeg');

    if (in_array($fileExtension, $allowedfileExtensions))
    {
      // directory in which the uploaded file will be moved
      $uploadFileDir = './upload-profile/';
      $dest_path = $uploadFileDir . $newFileName;

      if(move_uploaded_file($fileTmpPath, $dest_path)) 
      {
        $Controller=new Controller;
        $Person=new PersonaModel;
        $username=$_SESSION['user'];
        $src=$dest_path;
        $image=$Person->getInfoPerson($dni);
        $resp=$Controller->UpdatePicture($src,$dni);
        
        if($resp!=1){
            
            $message="Ha ocurrido un problema con el servidor";
        }else{
            
                $message ='Subido con éxito.';
                if($image[0][9]!="../profile-img/perfil.jpg"){
                   if(!unlink($image[0][9])){
                    
                }else{
                  unlink($image[0][9]);  
                }
                 
                }
                
            
	        $DetalleUser=$Person->getInfoPerson($dni);//idPerson
            $_SESSION['personinfo']=$DetalleUser;
        }
        
      }
      else 
      {
        $message = 'Se produjo un error al mover el archivo para cargar el directorio. Asegúrese de que el servidor web pueda escribir en el directorio de carga.';
      }
    }
    else
    {
      $message = 'Carga fallida. Tipos de archivo permitidos: ' . implode(',', $allowedfileExtensions);
    } 
    
    }else{
       
      $message = 'Máximo permitido 10Mb<br>';  
    }
    
    
    
  }
  else
  {
    $message = 'Hay algún error en la carga del archivo. Por favor verifique el siguiente error.<br>';
    $message .= 'Error:' . $_FILES['uploadedFile']['error'];
  }
  
  $_SESSION['mensaje'] = $message;
  header("Location: ./index.php");
  
}else{
   echo ('<html>
    <head>
    <title>Error</title>
    <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=https://www.mylegacyvip.com/login/index.php">
    </head>
    <body>
    Ingrese correctamente...
    </body>
    </html>');
    
}
