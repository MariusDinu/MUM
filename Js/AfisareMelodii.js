function fillMusic(Value) {
    //Assigning value to "search" div in "search.php" file.
    $('#tabel').val(Value);
    //Hiding "display" div in "search.php" file.
    $('#tabel1').hide();
}



$(document).ready(function() {
    //On pressing a key on "Search box" in "search.php" file. This function will be called.

    //Assigning search box value to javascript variable named as "name".
    $("#search-area").show();
    $("#user-search-area").hide();
    var admin = $("#user").attr('value');
    //Validating, if "name" is empty.
    if (admin == "") {
        //Assigning empty value to "display" div in "search.php" file.
        $("#user").html("asdasd").show();
    } else if (admin != "") {

        //AJAX is called.
        $.ajax({
            //AJAX type is "Post".
            type: "POST",
            //Data will be sent to "ajax.php".
            url: "/MUM/PhpMusic/AfisareMelodii.php",
            //Data, that will be sent to "ajax.php".
            data: {
                verify: admin
            },
            //If result found, this funtion will be called.
            success: function(html) {
                //Assigning result to "display" div in "search.php" file.
                {
                    document.getElementById("MelodieConfirmNumber").value = "1";
                    $("#tabelAfisare").html(html).show();

                }
            }
        });

    }

    var mel = document.getElementById('MelodieConfirm');
    mel.onclick = function() {
        $("#search-area").show();
        $("#user-search-area").hide();
        document.getElementById("AlbumConfirmNumber").value = "0";
        document.getElementById("GenConfirmNumber").value = "0";
        document.getElementById("ArtistConfirmNumber").value = "0";
        document.getElementById("FavoriteConfirmNumber").value = "0";
        var musicA = $("#user").attr('value');
        console.log(musicA);
        $.ajax({
            //AJAX type is "Post".
            type: "POST",
            //Data will be sent to "ajax.php".
            url: "/MUM/PhpMusic/AfisareMelodii.php",
            //Data, that will be sent to "ajax.php".
            data: {
                verify: admin

            },
            //If result found, this funtion will be called.
            success: function(html) {


                $("#tabelSearch").hide();
                $("#tabelAlbume").hide();
                $("#tabelArtisti").hide();
                $("#tabelGenuri").hide();
                $("#Alb").hide();
                $("#userDetails").hide();
                $("#tabelUseri").hide();
                $("#tabelFavorite").hide();
                $("#tabelAfisare").html(html).show();
                //Assigning result to "display" div in "search.php" file.

                document.getElementById("MelodieConfirmNumber").value = "1";





            }

        });






    }

});