<?php
    session_start();

    /* Bara POST request */
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        include "./calculateHoroscope.php";

        $goHoroscopeList = $horoscope->echoSign();
   
        /* Om ett horoskop redan finns */  
        if (isset($_SESSION["horoscope"])) {
            echo "<p>Du har redan ett horoskop, radera för att lägga till en ny.</p>";
        }
        
        /* Skapa sessionen */
        else if ($goHoroscopeList) {
            $_SESSION["horoscope"] = $goHoroscopeList;
            echo "true";
        } 
    }
?>