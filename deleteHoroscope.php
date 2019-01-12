<?php 
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
        if(isset($_SESSION["currentSession"]) == null) {
            echo "Det finns inget att ta bort";
        } else {
            session_destroy();
            echo "Horoskop borttaget";
        }
    }
?>