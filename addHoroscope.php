<?php
    session_start();

    /* Bara POST request */
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       include "./calculateHoroscope.php";

       $error = $horoscope->echoSign();
   
    /* Om mindre än 6 siffror, skicka felmeddelande */
    if ($_POST["birthDate"] < 6 || null) {
        echo "Ange födelsedatum med 6 siffror";
    }

    else if (isset($_SESSION["horoscope"]) == null) {

        if ($error != "Fel nummer") {
                $_SESSION["horoscope"] = $horoscope->echoSign();
                $true = true;
                echo "true";
        } else {
                echo $error;
        }
    } else if ($_SESSION["horoscope"] != null) {
        echo "Du har redan sparat ett horoskop, ta bort nuvarande för att lägga till";
    }
    
    } 
?>