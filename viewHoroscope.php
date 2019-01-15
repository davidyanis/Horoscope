<?php 
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if ($_SESSION == !null) {
            echo ($_SESSION["horoscope"]);
        } else {
            echo "Du har redan sparat ett horoskop";
        }
    }
?>