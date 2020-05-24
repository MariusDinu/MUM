$(document).ready(function() {

    //On pressing a key on "Search box" in "search.php" file. This function will be called.
    $("#SearchUser").keyup(function() {

        //Assigning search box value to javascript variable named as "name".
        var search = $('#SearchUser').val();
        var admin = $("#user").attr('value');
        //Validating, if "name" is empty.
        if (search == "") {

            if (document.getElementById("UserConfirmNumber").value == 1) {
                $("#tabelSearch").hide();
                $("#tabelAfisare").hide();
                $("#tabelUseri").show();
            } else if (document.getElementById("MelodieConfirmNumber").value == 1) {
                $("#tabelSearch").hide();
                $("#tableUseri").hide();
                $("#tabelAfisare").show();
            }
        }

        //If name is not empty.s
        else {
            //AJAX is called.
            $.ajax({
                //AJAX type is "Post".
                type: "POST",
                //Data will be sent to "ajax.php".
                url: "/MUM/PhpRegister/SearchUser.php",
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