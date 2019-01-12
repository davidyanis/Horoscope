<?php
   class calculateHoroscope {
       private $horoscope;

            function _construct($sign) {

                $this->sign = $sign;

                if ($sign >= "0120" && $sign <= "0218") {
                    $this->horoscope = "Din stjärntecken är Vattumannen";
                }
                if ($sign >= "0219" && $sign <= "0320") {
                    $this->horoscope = "Din stjärntecken är Fiskarna";
                }
                if ($sign >= "0321" && $sign <= "0419") {
                    $this->horoscope = "Din stjärntecken är Väduren";
                }
                if ($sign >= "0420" && $sign <= "0520") {
                    $this->horoscope = "Din stjärntecken är Oxen";
                }
                if ($sign >= "0521" && $sign <= "0621") {
                    $this->horoscope = "Din stjärntecken är Tvillingarna";
                }
                if ($sign >= "0622" && $sign <= "0722") {
                    $this->horoscope = "Din stjärntecken är Kräftan";
                }
                if ($sign >= "0723" && $sign <= "0822") {
                    $this->horoscope = "Din stjärntecken är Lejonet";
                }
                if ($sign >= "0823" && $sign <= "0922") {
                    $this->horoscope = "Din stjärntecken är Jungfrun";
                }
                if ($sign >= "0923" && $sign <= "1022") {
                    $this->horoscope = "Din stjärntecken är Vågen";
                }
                if ($sign >= "1023" && $sign <= "1121") {
                    $this->horoscope = "Din stjärntecken är Skorpionen";
                }
                if ($sign >= "1122" && $sign <= "1221") {
                    $this->horoscope = "Din stjärntecken är Skytten";
                }
                if ($sign >= "1223" && $sign <= "0119") {
                    $this->horoscope = "Din stjärntecken är Stenbocken";
                }

            }

            public function sign() {
                return $this->horoscope;
            }
   }

            $sign = substr($_POST["födelsedatum"], -4, 4);
            $horoscope = new User($sign);
?>
     