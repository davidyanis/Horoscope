<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $json_str = file_get_contents("./horoscope.json");
        $horoscope = json_decode($json_str);

    if (isset($horoscope->horoscopeList)) {
        $horoscope->horoscopeList = [];
    }
    }
?>