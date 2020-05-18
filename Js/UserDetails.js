function ContUser() {

    document.getElementById("AlbumConfirmNumber").value = "0";
    document.getElementById("GenConfirmNumber").value = "0";
    document.getElementById("MelodieConfirmNumber").value = "0";
    var modal = document.getElementById("myModalModifyUser");
    var contA = $("#user").attr('value');
    var span = document.getElementsByClassName("closeUser")[0];
    var salvare = document.getElementById("SalvareUser");
    modal.style.display = "block";
    span.onclick = function() {
        modal.style.display = "none";
    }
    salvare.onclick = function() {

        modal.style.display = "none";
        var name = document.getElementById("numelenou").value;
        var email = document.getElementById("emailnou").value;
        var parola = document.getElementById("parolanoua").value;
        var tara = document.getElementById("country").value;

        console.log(name);
        console.log(contA);
        $.ajax({
            //AJAX type is "Post".
            type: "POST",
            //Data will be sent to "ajax.php".
            url: "/MUM/PhpRegister/UserDetails.php",
            //Data, that will be sent to "ajax.php".
            data: {
                user: contA,
                name: name,
                email: email,
                parola: parola,
                tara: tara

            },
            //If result found, this funtion will be called.
            success: function() {

                window.location.replace("http://localhost/MUM/Pages/App.php?user=" + name);

            }








        });

        event.preventDefault();




    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
};