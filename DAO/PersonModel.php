<?php
include_once ('../BEAN/Persona.php');


class PersonaModel  {

    protected $servername = "localhost";
    protected $username = "mylegacy_legacyV";
    protected $pass = "secretpasslegacy";
    protected $bd="mylegacy_homepage";
   
    public function getInfoPerson($idPerson){
    
    $con=mysqli_connect($this->servername, $this->username, $this->pass,$this->bd);
  
    
    $sql = "SELECT * FROM `Person` WHERE idPerson='$idPerson'"; 
    $result=mysqli_query($con,$sql);
    $cant=mysqli_num_rows($result);
    
    mysqli_close($con);
    
    $ListPersona=array();
        
        for ($i=0; $i < $cant; $i++) {
	
			
	        $array = array();
            $fila[$i] = mysqli_fetch_array($result);
            
            array_push($array,$fila[$i]['idPerson']);
            array_push($array,$fila[$i]['Name']);
            array_push($array,$fila[$i]['ApePat']);
            array_push($array,$fila[$i]['ApeMat']);
            array_push($array,$fila[$i]['Email']);
            array_push($array,$fila[$i]['Dni']);
            array_push($array,$fila[$i]['FECHANAC']);
            array_push($array,$fila[$i]['NumberPhone']);
            array_push($array,$fila[$i]['Sex']);
            array_push($array,$fila[$i]['Picture']);
			
			array_push($ListPersona,$array);
	        }
        
	    return $ListPersona;
	 
    }
    
    public function AddPerson($Name,$ApePat,$ApeMat,$Email,$Dni,$NumberPhone,$Sex){
        
        $con=mysqli_connect($this->servername, $this->username, $this->pass,$this->bd);
        
        $sql="INSERT INTO `Person`(`Name`, `ApePat`, `ApeMat`, `Email`, `Dni`, `NumberPhone`, `Sex`) VALUES ('$Name','$ApePat','$ApeMat','$Email','$Dni','$NumberPhone','$Sex')";
        $result=mysqli_query($con,$sql);
        
        return $result;
        
    }
    
    public function getPersonForDni($code){
        
        $con=mysqli_connect($this->servername, $this->username, $this->pass,$this->bd);
        
        $sql="SELECT *from `Person` WHERE Dni='$code' or Email='$code'";
        $result=mysqli_query($con,$sql);
        $cant=mysqli_num_rows($result);
    
        mysqli_close($con);
    
        $array = array();
        
        for ($i=0; $i < $cant; $i++) {
	
			
	        
            $fila[$i] = mysqli_fetch_array($result);
            
            array_push($array,$fila[$i]['idPerson']);

	        }
        
	    return $array;
    }

}
?>