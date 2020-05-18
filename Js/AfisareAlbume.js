$(document).ready(function() {


    var album = document.getElementById('AlbumConfirm');
    album.onclick = function() {
        document.getElementById("ArtistConfirmNumber").value = "0";
        document.getElementById("GenConfirmNumber").value = "0";
        document.getElementById("MelodieConfirmNumber").value = "0";

        var musicA = $("#user").attr('value');
        $.ajax({
            //AJAX type is "Post".
            type: "POST",
            //Data will be sent to "ajax.php".
            url: "/MUM/PhpMusic/AfisareAlbume.php",
            //Data, that will be sent to "ajax.php".
            data: {
                verify: musicA

            },
            //If result found, this funtion will be called.
            success: function(html) {
                $("#tabelArtisti").hide();
                $("#tabelAfisare").hide();
                $("#tabelSearch").hide();
                $("#tabelGenuri").hide();
                $("#Alb").hide();
                $("#userDetails").hide();
                $("#tabelAlbume").html(html).show();
                //Assigning result to "display" div in "search.php" file.


                document.getElementById("AlbumConfirmNumber").value = "1";





            }
        });






    }





});