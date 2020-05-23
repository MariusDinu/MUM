$(document).ready(function() {


    var user = document.getElementById('Useri');
    user.onclick = function() {



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

                $("#tabelAfisare").hide();
                $("#tabelSearch").hide();

                $("#Alb").hide();
                $("#userDetails").hide();

                $("#tabelUseri").html(html).show();
                //Assigning result to "display" div in "search.php" file.







            }
        });






    }





});