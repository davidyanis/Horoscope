<?php
    session_start();

    $error = "<h3>Räkna ut ditt horoskop</h3>";

    if($_SERVER["REQUEST_METHOD"] == "GET"){
        if($_SESSION){
            echo ($_SESSION["horoscope"]);
        } else {
            echo $error;
        }
    };
?>