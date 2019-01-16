<?php
    parse_str(file_get_contents("php://input"), $_PUT);

    session_start();

    if (isset($_SERVER["REQUEST_METHOD"]) == "PUT") {

        /* Om inte session finns, echo ut */
        if (!isset($_SESSION["horoscope"])) {
            echo 'Du har inget horoskop sparat.</p>';
        } else {
            $_POST["birthDate"] = $_PUT["birthDate"];

            include "./calculateHoroscope.php";
        
            $goHoroscopeList = $horoscope->echoSign();
        }
        
        if ($goHoroscopeList) {
            $_SESSION["horoscope"] = $goHoroscopeList;
            echo "true";
        } else {
            echo false;
        }
        
    }
?>