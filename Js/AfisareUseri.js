$(document).ready(function() {

    var ver = document.getElementById('UseriVer').value;
    if (ver == 1) {
        $.ajax({
            //AJAX type is "Post".
            type: "POST",
            //Data will be sent to "ajax.php".
            url: "/MUM/PhpRegister/AfisareUseri.php",
            //Data, that will be sent to "ajax.php".
            data: {


            },
            //If result found, this funtion will be called.
            success: function(html) {
                console.log(html);
                $("#tabelAfisare").hide();
                $("#tabelSearch").hide();

                $("#Alb").hide();
                $("#userDetails").hide();

                $("#tabelUseri").html(html).show();
                //Assigning result to "display" div in "search.php" file.







            }
        });

    } else {
        var user = document.getElementById('Useri');
        user.onclick = function() {

            $("#search-area").hide();
            $("#user-search-area").show();
            var a = document.createElement('script');
            a.src = '/Mum/Js/SearchUser.js';
            document.body.appendChild(a);
            $.ajax({
                //AJAX type is "Post".
                type: "POST",
                //Data will be sent to "ajax.php".
                url: "/MUM/PhpRegister/AfisareUseri.php",
                //Data, that will be sent to "ajax.php".
                data: {


                },
                //If result found, this funtion will be called.
                success: function(html) {
                    console.log(html);
                    $("#tabelAfisare").hide();
                    $("#tabelSearch").hide();

                    $("#Alb").hide();
                    $("#userDetails").hide();

                    $("#tabelUseri").html(html).show();
                    //Assigning result to "display" div in "search.php" file.

                    document.getElementById("UserConfirmNumber").value = '1';





                }
            });

        }




    }





});