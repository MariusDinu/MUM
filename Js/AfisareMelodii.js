function fillMusic(Value) {
    //Assigning value to "search" div in "search.php" file.
    $('#tabel').val(Value);
    //Hiding "display" div in "search.php" file.
    $('#tabel1').hide();
}
$(document).ready(function() {
    //On pressing a key on "Search box" in "search.php" file. This function will be called.

    //Assigning search box value to javascript variable named as "name".

    //Validating, if "name" is empty.

    //AJAX is called.
    $.ajax({
        //AJAX type is "Post".
        type: "POST",
        //Data will be sent to "ajax.php".
        url: "/MUM/Melodii.php",
        //Data, that will be sent to "ajax.php".
        data: {

        },
        //If result found, this funtion will be called.
        success: function(html) {
            //Assigning result to "display" div in "search.php" file.
            $("#tabel1").html(html).show();
        }
    });


});