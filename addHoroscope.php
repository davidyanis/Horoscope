<?php
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $json_str = file_get_contents("./horoscope.json");
        $horoscope = json_decode($json_str);

    /* Om horoscopen inte finns */
    if (!isset($horoscope->horoscopeList)) {
        $horoscope->horoscopeList = [];
    }

        $newHoroscope = new stdClass();
        $newHoroscope->birthDate = $_POST['birthdate'];

    foreach ($horoscope->horoscopeList as $user) {
        if ($user->birthDate === $newHoroscope->birthDate) {
            echo "Already exists";
            exit;
        }
    }

        $horoscope->horoscopeList[] = $newHoroscope;

  
        file_put_contents("./horoscope.json", json_encode($horoscope));
        echo $_POST['birthdate'];
    

}
?>