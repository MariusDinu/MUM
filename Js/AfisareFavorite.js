function fillMusic(Value) {
    //Assigning value to "search" div in "search.php" file.
    $('#tabel').val(Value);
    //Hiding "display" div in "search.php" file.
    $('#tabel1').hide();
}



$(document).ready(function() {
    //On pressing a key on "Search box" in "search.php" file. This function will be called.

    var mel = document.getElementById('Favorite');
    mel.onclick = function() {
        $("#search-area").show();
        $("#user-search-area").hide();
        document.getElementById("AlbumConfirmNumber").value = "0";
        document.getElementById("GenConfirmNumber").value = "0";
        document.getElementById("ArtistConfirmNumber").value = "0";
        document.getElementById("MelodieConfirmNumber").value = "0";
        var musicA = $("#user").attr('value');
        $.ajax({
            //AJAX type is "Post".
            type: "POST",
            //Data will be sent to "ajax.php".
            url: "/MUM/PhpMusic/AfisareFavorite.php",
            //Data, that will be sent to "ajax.php".
            data: {
                verify: musicA

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
                $("#tabelAfisare").hide();
                $("#tabelFavorite").html(html).show();
                //Assigning result to "display" div in "search.php" file.

                document.getElementById("FavoriteConfirmNumber").value = "1";





            }
        });






    }

});