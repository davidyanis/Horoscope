
    /* Visa om det finns ett horoskop sparat */
    function viewHoroscope() {
    $.ajax({
        url: "./viewHoroscope.php",
        method: "GET",
        success: function(results) {
            $(".myHoroscope").html(results);
        }
    })
    }

    /* Lägger till horoskop om inget finns */
    function addHoroscope() {
        $.ajax({
            url: "./addHoroscope.php",
            method: "POST",
            data: {
                "birthDate": $("#inputValue").val()
            },
            success: function(results) {
                if (results == "true") {
                    viewHoroscope();
                } else {
                    $(".myHoroscope").html(results);
                }
            }
        });
    }

    /* Uppdaterar om man skriver in ett nytt födelsedatum */
    function updateHoroscope() {
        $.ajax({
            url: "./updateHoroscope.php",
            method: "PUT",
            data: {
                "birthDate": $("#inputValue").val()
            },
            success: function(results) {
                if (results == true) {
                    viewHoroscope()
                } else {
                    $(".myHoroscope").html(results);
                }
            }
        })
    }

    /* Raderar horoskop */
    function deleteHoroscope() {
        $.ajax({
            url: "./deleteHoroscope.php",
            method: "DELETE",
            data: {
                "birthDate": $("#inputValue").val()
            },
            success: function(results) {
                if (results == true) {
                    viewHoroscope()
                } else {
                    $(".myHoroscope").html(results);
                }
            }
        })
        
    }



