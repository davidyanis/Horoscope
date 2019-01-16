
    /* On load */
    showHoroscope();

    /* Om det finns ett horoskop, visa den */
    function showHoroscope() {
        $.ajax({
            url: "viewHoroscope.php",
            method: "GET",
            success: function(results) {
                    $(".myHoroscope").html(results);
            }
        })
    }

    /* Sparar horoskop om den är tom */
    function addHoroscope() {
        $.ajax({
            url: "./addHoroscope.php",
            method: "POST",
            data: {
                "birthDate": $("#inputValue").val()
            },
            success: function(results) {
                /* Om resultatet har kommit till echo "true" i addHoroscope.php */
                if (results == "true") {
                    showHoroscope();
                } else {
                    $(".myHoroscope").html(results);
                }

            }
        })
    };

    /* Visar sparat horoskop */
    function updateHoroscope() {
        $.ajax({
            url: "updateHoroscope.php",
            method: "PUT",
            data: {
                "birthDate": $("#inputValue").val()
            },
            success: function(results) {
                if (results == "true") {
                    showHoroscope();
                } else {
                    $(".myHoroscope").html(results);
                }
            }
        })
    }


    /* Tar bort horoskop om den finns */
    function deleteHoroscope() {
        $.ajax({
            url: "deleteHoroscope.php",
            method: "DELETE",
            data: {
                "birthDate": $("#inputValue").val()
            },
            success: function(results) {           
                    $(".myHoroscope").html(results);
            }
        })
    }

    $("h3").fadeOut("slow");
    console.log("lewf")







