<?php

class Home{
    
   private $idHome;
   private $Path;
   private $Name;
   
   function getIdHome() {
       return $this->idHome;
   }

   function getPath() {
       return $this->Path;
   }

   function getName() {
       return $this->Name;
   }

   function setIdHome($idHome) {
       $this->idHome = $idHome;
   }

   function setPath($Path) {
       $this->Path = $Path;
   }

   function setName($Name) {
       $this->Name = $Name;
   }


}



?>