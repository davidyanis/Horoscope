<?php

    class Person {

        private $horoscope;

         function __construct($sign) {

            $this->sign = $sign;

            if(strlen($sign) < 4) {    
                echo false;
            } 
            else if($sign >= '0120' && $sign <= '0218'){            
                $this->horoscope = "<p>Ditt horoskop är <b>Vattumannen</b></p>";          
            } 
            else if($sign >= '0219' && $sign <= '0320') {             
                $this->horoscope = "<p>Ditt horoskop är <b>Fiskarna</b>";              
            } 
            else if($sign >= '0321' && $sign <= '0419') {                
                $this->horoscope = "<p>Ditt horoskop är <b>Väduren</b>";                 
            } 
            else if($sign >= '0420' && $sign <= '0520') {                
                $this->horoscope = "<p>Ditt horoskop är <b>Oxen</b>";                  
            } 
            else if($sign >= '0521' && $sign <= '0621') {
                $this->horoscope = "<p>Ditt horoskop är <b>Tvillingarna</b>";                  
            } 
            else if($sign >= '0622' && $sign <= '0722'){               
                $this->horoscope = "<p>Ditt horoskop är <b> Kräftan </b>";           
            } 
            else if($sign >= '0723' && $sign <= '0822') {       
                $this->horoscope = "<p>Ditt horoskop är <b>Lejonet</b>";          
            } 
            else if($sign >= '0823' && $sign <= '0922') {       
                $this->horoscope = "<p>Ditt horoskop är <b>Jungfrun</b>";      
            } 
            else if($sign >= '0923' && $sign <= '1022') {             
                $this->horoscope = "<p>Ditt horoskop är <b>Vågen</b>";               
            } 
            else if($sign >= '1023' && $sign <= '1121') {               
                $this->horoscope = "<p>Ditt horoskop <b>Skorpionen</b>";                 
            } 
            else if($sign >= '1122' && $sign <= '1221') {              
                $this->horoscope = "<p>Ditt horoskop är <b>Skytten</b>";
            } 
            else if($sign >= '1222' && $sign <= '0119') { 
                $this->horoscope = "<p>Ditt horoskop är <b>Stenbocken</b>";             
            }
            else {
                echo false;
            }
        }
        
        public function echoSign() {
            return $this->horoscope;
        }
        
    }
    $sign = substr($_POST["birthDate"], -4, 4);
    $horoscope = new Person($sign);
?>