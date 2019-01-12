<?php
    session_start();

    /* Bara POST request */
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       include "./calculateHoroscope.php";

       $error = $horoscope->sign();
   
    /* Om mindre än 6 siffror, skicka felmeddelande */
    if ($_POST["födelsedatum"] < 6 || null) {
        echo "Ange födelsedatum med 6 siffror";
    }
    
    else if ($_SESSION["currentSession"] != null) {
        echo "Du har redan sparat ett horoskop";
    }



    /* Om inte sidan begärs genom POST, skriv ut error */ 
    } else {
        http_response_code(405);
        die(); 
    }
?>