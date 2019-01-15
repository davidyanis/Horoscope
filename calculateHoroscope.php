<?php
   class Person {
       
       private $horoscope;

            function _construct($sign) {

                $this->sign = $sign;

                if(strlen($sign) < 4) {
                    $this->horoscope = "Fel nummer";
                }

                else if ($sign >= "0120" && $sign <= "0218") {
                    $this->horoscope = "Din stjärntecken är Vattumannen";
                }
                else if ($sign >= "0219" && $sign <= "0320") {
                    $this->horoscope = "Din stjärntecken är Fiskarna";
                }
                else if ($sign >= "0321" && $sign <= "0419") {
                    $this->horoscope = "Din stjärntecken är Väduren";
                }
                else if ($sign >= "0420" && $sign <= "0520") {
                    $this->horoscope = "Din stjärntecken är Oxen";
                }
                else if ($sign >= "0521" && $sign <= "0621") {
                    $this->horoscope = "Din stjärntecken är Tvillingarna";
                }
                else if ($sign >= "0622" && $sign <= "0722") {
                    $this->horoscope = "Din stjärntecken är Kräftan";
                }
                else if ($sign >= "0723" && $sign <= "0822") {
                    $this->horoscope = "Din stjärntecken är Lejonet";
                }
                else if ($sign >= "0823" && $sign <= "0922") {
                    $this->horoscope = "Din stjärntecken är Jungfrun";
                }
                else if ($sign >= "0923" && $sign <= "1022") {
                    $this->horoscope = "Din stjärntecken är Vågen";
                }
                else if ($sign >= "1023" && $sign <= "1121") {
                    $this->horoscope = "Din stjärntecken är Skorpionen";
                }
                else if ($sign >= "1122" && $sign <= "1221") {
                    $this->horoscope = "Din stjärntecken är Skytten";
                }
                else if ($sign >= "1222" && $sign <= "0119") {
                    $this->horoscope = "Din stjärntecken är Stenbocken";
                }

                else {
                    $this->horoscope = "Fel nummer";
                }
            }

            public function echoSign() {
                return $this->horoscope;
            }
   }

    $sign = substr($_POST["birthDate"], -4, 4);
    $horoscope = new Person($sign);
?>
     