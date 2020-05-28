$(document).ready(function() {
    //On pressing a key on "Search box" in "search.php" file. This function will be called.
    var log = document.getElementById('Login');
    log.onclick = function(event) {

        //Assigning search box value to javascript variable named as "name".
        var userM = document.getElementById("user").value;
        var passM = document.getElementById("password").value;
        //Validating, if "name" is empty.
        console.log(userM);


        //AJAX is called.
        $.ajax({

            //AJAX type is "Post".
            type: "POST",
            //Data will be sent to "ajax.php".
            url: "/MUM/PhpRegister/Login.php",
            //Data, that will be sent to "ajax.php".
            data: {
                user: userM,
                password: passM
            },
            //If result found, this funtion will be called.
            success: function(html) {
                //Assigning result to "display" div in "search.php" file.
                console.log(html);

                if (html == 0) {

                    $("#errorLoginPass").html('Parola sau user incorect!').show();


                } else if (html == 1) {
                    window.location.href = "/MUM/Pages/App.php?user=" + userM;
                }





            }

        });
        event.preventDefault();

    }

});