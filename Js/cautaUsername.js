function fillUsername(Value) {
    //Assigning value to "search" div in "search.php" file.
    $('#username').val(Value);
    //Hiding "display" div in "search.php" file.
    $('#displayUser').hide();
}

$(document).ready(function() {
    //On pressing a key on "Search box" in "search.php" file. This function will be called.
    $("#username").keyup(function() {
        //Assigning search box value to javascript variable named as "name".
        var username2 = $('#username').val();
        //Validating, if "name" is empty.
        if (username2 == "") {
            //Assigning empty value to "display" div in "search.php" file.
            $("#displayUser").html("");
        }
        //If name is not empty.
        else {
            //AJAX is called.
            $.ajax({
                //AJAX type is "Post".
                type: "POST",
                //Data will be sent to "ajax.php".
                url: "/MUM/PhpRegister/User.php",
                //Data, that will be sent to "ajax.php".
                data: {
                    //Assigning value of "name" into "search" variable.
                    username: username2
                },
                //If result found, this funtion will be called.
                success: function(html) {
                    //Assigning result to "display" div in "search.php" file.
                    $("#displayUser").html(html).show();
                }
            });
        }
    });
});