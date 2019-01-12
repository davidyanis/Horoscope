<?php
    parse_str(file_get_contents("php://input"), $_PUT);
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "PUT") {

        if (isset($_SESSION["currentSession"]) == null()) {
            echo "Inget horoskop sparat!";
        } else {
            $_POST["födelsedatum"] = $_PUT["födelsedatum"];

            include "./calculateHoroscope.php";
            
            $error = $horoscope->sign();
        }
        if($error) {
            $_SESSION["currentSession"] = $horoscope->sign();
            echo true;
        } else {
            echo $error;

            session_destroy();
        }
    }
?>