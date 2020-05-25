$(document).ready(function() {

    //On pressing a key on "Search box" in "search.php" file. This function will be called.
    $("#Search").keyup(function() {

        //Assigning search box value to javascript variable named as "name".
        var search = $('#Search').val();
        var admin = $("#user").attr('value');
        //Validating, if "name" is empty.
        if (search == "") {

            if (document.getElementById("AlbumConfirmNumber").value == 1) //Assigning empty value to "display" div in "search.php" file. {
            {
                $("#tabelSearch").hide();
                $("#tabelAfisare").hide();
                $("#tabelAlbume").show();
                $("#tabelFavorite").hide();
                $("#tabelArtisti").hide();
                $("#tabelGenuri").hide();
            } else if (document.getElementById("ArtistConfirmNumber").value == 1) {
                $("#tabelSearch").hide();
                $("#tabelAfisare").hide();
                $("#tabelAlbume").hide();
                $("#tabelFavorite").hide();
                $("#tabelArtisti").show();
                $("#tabelGenuri").hide();
            } else if (document.getElementById("GenConfirmNumber").value == 1) {
                $("#tabelSearch").hide();
                $("#tabelAlbume").hide();
                $("#tabelArtisti").hide();
                $("#tabelFavorite").hide();
                $("#tabelGenuri").show();
                $("#tableAfisare").hide();
            } else if (document.getElementById("MelodieConfirmNumber").value == 1) {
                $("#tabelSearch").hide();
                $("#tabelAlbume").hide();
                $("#tabelArtisti").hide();
                $("#tabelGenuri").hide();
                $("#tabelFavorite").hide();
                $("#tabelAfisare").show();
            } else if (document.getElementById("FavoriteConfirmNumber").value == 1) {
                $("#tabelSearch").hide();
                $("#tabelAlbume").hide();
                $("#tabelArtisti").hide();
                $("#tabelGenuri").hide();
                $("#tabelAfisare").hide();
                $("#tabelFavorite").show();
            }
        }

        //If name is not empty.s
        else {
            //AJAX is called.
            $.ajax({
                //AJAX type is "Post".
                type: "POST",
                //Data will be sent to "ajax.php".
                url: "/MUM/PhpMusic/Search.php",
                //Data, that will be sent to "ajax.php".
                data: {
                    //Assigning value of "name" into "search" variable.
                    admin: admin,
                    search: search
                },
                //If result found, this funtion will be called.
                success: function(html) {
                    //Assigning result to "display" div in "search.php" file.

                    $("#tabelArtisti").hide();
                    $("#tabelAfisare").hide();
                    $("#tabelAlbume").hide();
                    $("#tabelGenuri").hide();
                    $("#tabelUseri").hide();
                    $("#tabelSearch").html(html).show();

                    /*$("#tabelAfisare").html(html).show();*/

                }
            });

        }



    });
});