<?php
include ('../BEAN/Cursos.php');


class ListCourse  {

    protected $servername = "localhost";
    protected $username = "mylegacy_legacyV";
    protected $pass = "secretpasslegacy";
    protected $bd="mylegacy_homepage";
   
    public function getCourseList(){
    
        $con=mysqli_connect($this->servername, $this->username, $this->pass,$this->bd);
  
    
        $sql = "SELECT *from `Courses`"; 
        $result=mysqli_query($con,$sql);
        $cant=mysqli_num_rows($result);
    
        mysqli_close($con);
    
        $ListCourse=array();
        for ($i = 0; $i < $cant; $i++) {
	
			
	        $array=array();
            $fila[$i] = mysqli_fetch_array($result);

            array_push($array,$fila[$i]['Path']);
            array_push($array,$fila[$i]['Name']);

            array_push($ListCourse,$array);
            
	        }
        
	    return $ListCourse;
	 
    }
}
?>