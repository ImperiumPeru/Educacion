<?php

class Courses{
    
   private $idCourse;
   private $Path;
   private $Name;
   
   function getIdCourse() {
       return $this->idCourse;
   }

   function getPath() {
       return $this->Path;
   }

   function getName() {
       return $this->Name;
   }

   function setIdCourse($idCourse) {
       $this->idCourse = $idCourse;
   }

   function setPath($Path) {
       $this->Path = $Path;
   }

   function setName($Name) {
       $this->Name = $Name;
   }


}



?>