<?php

class Usuario{
    
   private $idUser;
   private $idPerson;
   private $User;
   private $Password;
   private $Estado;
   
 
   function getIdUser() {
       return $this->idUser;
   }

   function getIdPerson() {
       return $this->idPerson;
   }

   function getUser() {
       return $this->User;
   }

   function getPassword() {
       return $this->Password;
   }

   function getEstado() {
       return $this->Estado;
   }

   function setIdUser($idUser) {
       $this->idUser = $idUser;
   }

   function setIdPerson($idPerson) {
       $this->idPerson = $idPerson;
   }

   function setUser($User) {
       $this->User = $User;
   }

   function setPassword($Password) {
       $this->Password = $Password;
   }

   function setEstado($Estado) {
       $this->Estado = $Estado;
   }
}
