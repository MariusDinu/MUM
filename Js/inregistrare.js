$(document).ready(function() {
    function fillRegister(Value) {

        //Hiding "display" div in "search.php" file.
        $('#show-registration').hide();
    }
    $("#register").click(function() {

        var registerButton = $('#register').val();
        var emailButton = $('email').val();
        var userButton = $('username').val();
        var passButton = $('password').val();
        var passConfirmButton = $('confirmPassword').val();
        var countryButton = $('country').val();
        //If name is not empty.
        {
            //AJAX is called.
            $.ajax({
                //AJAX type is "Post".
                type: "POST",
                //Data will be sent to "ajax.php".
                url: "/MUM/PhpRegister/inregistrare.php",
                //Data, that will be sent to "ajax.php".
                data: {
                    register: registerButton,
                    email: emailButton,
                    username: userButton,
                    password: passButton,
                    confirmPassword: passConfirmButton,
                    country: countryButton

                },
                //If result found, this funtion will be called.
                success: function(html) {

                    $("show-registration").html(html).show();

                }
            });
        }
    });
});