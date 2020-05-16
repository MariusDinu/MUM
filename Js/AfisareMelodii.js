function fillMusic(Value) {
    //Assigning value to "search" div in "search.php" file.
    $('#tabel').val(Value);
    //Hiding "display" div in "search.php" file.
    $('#tabel1').hide();
}



$(document).ready(function() {
    //On pressing a key on "Search box" in "search.php" file. This function will be called.

    //Assigning search box value to javascript variable named as "name".

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
                $("#tabel1").html(html).show();


            }
        });

    }
});