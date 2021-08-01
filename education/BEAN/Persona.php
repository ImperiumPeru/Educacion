<?php

class Persona{
    
   private $idPerson;
   private $Name;
   private $ApePat;
   private $ApeMat;
   private $Email;
   private $Dni;
   private $NumberPhone;
   private $Sex;
   

   function getIdPerson() {
       return $this->idPerson;
   }

   function getName() {
       return $this->Name;
   }

   function getApePat() {
       return $this->ApePat;
   }

   function getApeMat() {
       return $this->ApeMat;
   }

   function getEmail() {
       return $this->Email;
   }

   function getDni() {
       return $this->Dni;
   }

   function getNumberPhone() {
       return $this->NumberPhone;
   }

   function getSex() {
       return $this->Sex;
   }

   function setIdPerson($idPerson) {
       $this->idPerson = $idPerson;
   }

   function setName($Name) {
       $this->Name = $Name;
   }

   function setApePat($ApePat) {
       $this->ApePat = $ApePat;
   }

   function setApeMat($ApeMat) {
       $this->ApeMat = $ApeMat;
   }

   function setEmail($Email) {
       $this->Email = $Email;
   }

   function setDni($Dni) {
       $this->Dni = $Dni;
   }

   function setNumberPhone($NumberPhone) {
       $this->NumberPhone = $NumberPhone;
   }

   function setSex($Sex) {
       $this->Sex = $Sex;
   }

}


?>