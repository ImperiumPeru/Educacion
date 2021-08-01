<?php

class Status{
    
   private $User;
   private $OptionList;
   private $Number;
   
   function getUser() {
       return $this->User;
   }

   function getOptionList() {
       return $this->OptionList;
   }

   function getNumber() {
       return $this->Number;
   }

   function setUser($User) {
       $this->User = $User;
   }

   function setOptionList($OptionList) {
       $this->OptionList = $OptionList;
   }

   function setNumber($Number) {
       $this->Number = $Number;
   }


}



?>