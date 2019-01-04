<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      
       include "./calculateHoroscope.php";

   
  
    if (!isset($_SESSION["horoscope"]) ) {
       $_SESSION["horoscope"] = $horoscope;
       echo "Successfully saved horoscope";
    } else {
        echo "Failed to save horoscope";
    }

    /* Om inte sidan begärs genom POST, skriv ut error */ 
    } else {
        http_response_code(405);
        die(); 
    }
?>