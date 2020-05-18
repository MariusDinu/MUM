$(document).ready(function() {


    var artist = document.getElementById('ArtistConfirm');
    artist.onclick = function() {
        document.getElementById("AlbumConfirmNumber").value = "0";
        document.getElementById("GenConfirmNumber").value = "0";
        document.getElementById("MelodieConfirmNumber").value = "0";
        var musicA = $("#user").attr('value');
        $.ajax({
            //AJAX type is "Post".
            type: "POST",
            //Data will be sent to "ajax.php".
            url: "/MUM/PhpMusic/AfisareArtisti.php",
            //Data, that will be sent to "ajax.php".
            data: {
                verify: musicA

            },
            //If result found, this funtion will be called.
            success: function(html) {

                $("#tabelAfisare ").hide();
                $("#tabelSearch").hide();
                $("#tabelAlbume").hide();
                $("#tabelGenuri").hide();
                $("#Alb").hide();
                $("#tabelArtisti").html(html).show();
                //Assigning result to "display" div in "search.php" file.

                document.getElementById("ArtistConfirmNumber").value = "1";





            }
        });






    }


});