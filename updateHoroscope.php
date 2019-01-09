<?php
    parse_str(file_get_contents("php://input"), $_PUT);
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
        if (isset($_SESSION["currentSession"]) == null()) {
            echo "Inget horoskop sparat!";
        } else {
            $_POST["födelsedatum"] = $_PUT["födelsedatum"];

            include "./calculateHoroscope.php";
            
            $error = $currentsession->stjärntecken();
        }
        if($error) {
            $_SESSION["currentSession"] = $currentsession->stjärntecken();
            echo true;
        } else {
            echo $error;

            session_destroy();
        }
    }
?>