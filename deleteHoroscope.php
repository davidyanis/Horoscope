<?php 
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
        if(!isset($_SESSION["horoscope"])) {
            echo "<p>Det finns inget att ta bort</p>";
        } else {
            session_destroy();
            echo "<p>Ditt horoskop är nu raderad.</p>";
        }
    }
?>