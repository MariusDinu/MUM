$(document).ready(function() {
    function fillRegister(Value) {

        //Hiding "display" div in "search.php" file.
        $('#show-registration').hide();
    }
    var reg = document.getElementById('register');
    reg.onclick = function() {


        var emailButton = document.getElementById("email").value;
        var userButton = document.getElementById("username").value;
        var passButton = document.getElementById("password").value;
        var passConfirmButton = document.getElementById("confirmPassword").value;
        var countryButton = document.getElementById("country").value;
        //If name is not empty.
        //AJAX is called.
        $.ajax({
            //AJAX type is "Post".
            type: "POST",
            //Data will be sent to "ajax.php".
            url: "/MUM/PhpRegister/inregistrare.php",
            //Data, that will be sent to "ajax.php".
            data: {

                email: emailButton,
                username: userButton,
                password: passButton,
                confirmPassword: passConfirmButton,
                country: countryButton

            },
            //If result found, this funtion will be called.
            success: function(html) {
                console.log(html);
                if (html == 1) {
                    window.location.href = "/MUM/Pages/Succes.php";
                } else
                    alert(html);


            }
        });



    }
});