$(document).ready(function() {


    var gen = document.getElementById('GenConfirm');
    gen.onclick = function() {
        document.getElementById("AlbumConfirmNumber").value = "0";
        document.getElementById("ArtistConfirmNumber").value = "0";
        document.getElementById("MelodieConfirmNumber").value = "0";
        var musicA = $("#user").attr('value');
        $.ajax({
            //AJAX type is "Post".
            type: "POST",
            //Data will be sent to "ajax.php".
            url: "/MUM/PhpMusic/AfisareGenuri.php",
            //Data, that will be sent to "ajax.php".
            data: {
                verify: musicA

            },
            //If result found, this funtion will be called.
            success: function(html) {

                $("#tabelAfisare ").hide();
                $("#tabelSearch").hide();
                $("#tabelAlbume").hide();
                $("#tabelArtisti").hide();
                $("#tabelGenuri").html(html).show();
                //Assigning result to "display" div in "search.php" file.

                document.getElementById("GenConfirmNumber").value = "1";




            }
        });






    }


});