<?php
include_once ("../BEAN/Status.php");


class StatusModel  {

    protected $servername = "localhost";
    protected $username = "mylegacy_legacyV";
    protected $pass = "secretpasslegacy";
    protected $bd="mylegacy_homepage";
   
    public function getStatusHome($User){
    
        $con=mysqli_connect($this->servername, $this->username, $this->pass,$this->bd);
  
    
        $sql = "SELECT * FROM `Status` WHERE User='$User' and OptionList='Home'";
        $result=mysqli_query($con,$sql);
        $cant=mysqli_num_rows($result);
    
        mysqli_close($con);
    
        $ListHome=array();
        for ($i = 0; $i < $cant; $i++) {
	
			
	        $array=array();
            $fila[$i] = mysqli_fetch_array($result);
            
            array_push($array,$fila[$i]['User']);
            array_push($array,$fila[$i]['OptionList']);
            array_push($array,$fila[$i]['Number']);

            array_push($ListHome,$array);
            
	        }
        
	    return $ListHome;
	 
    }
    
    
    public function getStatusCourse($User){
    
        $con=mysqli_connect($this->servername, $this->username, $this->pass,$this->bd);
  
    
        $sql = "SELECT * FROM `Status` WHERE User='$User' and OptionList='Courses'"; 
        $result=mysqli_query($con,$sql);
        $cant=mysqli_num_rows($result);
    
        mysqli_close($con);
        
        $ListHome=array();
        for ($i = 0; $i < $cant; $i++) {
	
			
	        $array=array();
            $fila[$i] = mysqli_fetch_array($result);
            
            array_push($array,$fila[$i]['User']);
            array_push($array,$fila[$i]['OptionList']);
            array_push($array,$fila[$i]['Number']);

            array_push($ListHome,$array);
            
	        }
        
	    return $ListHome;
	 
    }
    
    public function getStatusItem($user,$option,$number){
        
         $con=mysqli_connect($this->servername, $this->username, $this->pass,$this->bd);
         $sql="SELECT * FROM `Status` WHERE User='$user' and OptionList='$option' and Number='$number'";
         $result=mysqli_query($con,$sql);
         $cant=mysqli_num_rows($result);
         mysqli_close($con);
         return $cant; 
    }
    
    public function setStatusItem($user,$option,$idNumber){
        
        
         $con=mysqli_connect($this->servername, $this->username, $this->pass,$this->bd);
         $sql="INSERT INTO `Status`(`User`, `OptionList`, `Number`) VALUES ('$user','$option','$idNumber')";
         $result=mysqli_query($con,$sql);
         return $result;
    }
}
?>