<?php 
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if ($_SESSION == !null) {
            echo ($_SESSION["currentSession"]);
        } else {
            echo "Inget har sparats, vänligen fyll i födelsedatumet i YYMMDD format";
        }
    }
?>