<?php 
    session_start();

    $errormessage = "Inget har sparats, vänligen fyll i födelsedatumet i YYMMDD format";

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if ($SESSION == !null()) {
            echo ($_SESSION["currentSession"]);
        } else {
            echo $errormessage;
        }
    }
?>