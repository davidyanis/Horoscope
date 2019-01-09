<?php
   class calculateHoroscope {
       function horoscopeList($sign) {

           if ($sign >= "0120" && $sign <= "0218") {
               $this->printOut = "Din stjärntecken är Vattumannen";
           }
           if ($sign >= "0219" && $sign <= "0320") {
               $this->printOut = "Din stjärntecken är Fiskarna";
           }
           if ($sign >= "0321" && $sign <= "0419") {
               $this->printOut = "Din stjärntecken är Väduren";
           }
           if ($sign >= "0420" && $sign <= "0520") {
               $this->printOut = "Din stjärntecken är Oxen";
           }
           if ($sign >= "0521" && $sign <= "0621") {
               $this->printOut = "Din stjärntecken är Tvillingarna";
           }
           if ($sign >= "0622" && $sign <= "0722") {
               $this->printOut = "Din stjärntecken är Kräftan";
           }
           if ($sign >= "0723" && $sign <= "0822") {
               $this->printOut = "Din stjärntecken är Lejonet";
           }
           if ($sign >= "0823" && $sign <= "0922") {
               $this->printOut = "Din stjärntecken är Jungfrun";
           }
           if ($sign >= "0923" && $sign <= "1022") {
               $this->printOut = "Din stjärntecken är Vågen";
           }
           if ($sign >= "1023" && $sign <= "1121") {
               $this->printOut = "Din stjärntecken är Skorpionen";
           }
           if ($sign >= "1122" && $sign <= "1221") {
               $this->printOut = "Din stjärntecken är Skytten";
           }
           if ($sign >= "1223" && $sign <= "0119") {
               $this->printOut = "Din stjärntecken är Stenbocken";
           }

        }
   }
?>
     