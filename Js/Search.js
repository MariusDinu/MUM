$(document).ready(function() {
    //On pressing a key on "Search box" in "search.php" file. This function will be called.
    $("#Search").keyup(function() {
        //Assigning search box value to javascript variable named as "name".
        var search = $('#Search').val();
        var admin = $("#user").attr('value');
        //Validating, if "name" is empty.
        if (admin == "") {
            //Assigning empty value to "display" div in "search.php" file.
            $("#Search").html("");
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
                    $("#tabelAfisare").hide();
                    $("#tabelSearch").html(html).show();
                    /*$("#tabelAfisare").html(html).show();*/

                }
            });
        }
    });
});