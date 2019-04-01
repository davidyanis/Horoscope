<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Find your horoscope</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <div class="container">
            <div class="myHoroscope">

            </div>
            <input id="inputValue" value="" type="text" placeholder="YYMMDD" maxlength="6">
            <button class="save" onclick="addHoroscope()">Spara mitt horoskop</button>
            <button class="update" onclick="updateHoroscope()">Uppdatera mitt horoskop</button>
            <button class="delete" onclick="deleteHoroscope()">Radera mitt horoskop</button>
    </div>
</body>
</html>