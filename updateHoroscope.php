<?php
    parse_str(file_get_contents("php://input"), $_PUT);
    session_start();

    if (isset($_SERVER["REQUEST_METHOD"]) == "PUT") {

        if (isset($_SESSION["horoscope"]) == null) {
            echo "Inget horoskop sparat!";
        } else {
            $_POST["birthDate"] = $_PUT["birthDate"];

            include "./calculateHoroscope.php";
            
            $error = $horoscope->sign();
        }
        if($error) {
            $_SESSION["horoscope"] = $horoscope->sign();
            $true = true;
            echo $true;
        } else {
            echo $error;
            session_destroy();
        }
    }
?>