function ContAdmin() {


    var modal = document.getElementById("myModalModifyAdmin");
    var contA = $("#user").attr('value');
    var span = document.getElementsByClassName("closeAdmin")[0];
    var salvare = document.getElementById("SalvareAdmin");
    modal.style.display = "block";
    span.onclick = function() {
        modal.style.display = "none";
    }
    salvare.onclick = function() {

        modal.style.display = "none";
        var name = document.getElementById("numelenouAdmin").value;
        var email = document.getElementById("emailnouAdmin").value;
        var parola = document.getElementById("parolanouaAdmin").value;
        var tara = document.getElementById("countryAdmin").value;

        console.log(name);
        console.log(contA);
        $.ajax({
            //AJAX type is "Post".
            type: "POST",
            //Data will be sent to "ajax.php".
            url: "/MUM/PhpRegister/AdminDetails.php",
            //Data, that will be sent to "ajax.php".
            data: {
                user: contA,
                name: name,
                email: email,
                parola: parola,
                tara: tara

            },
            //If result found, this funtion will be called.
            success: function(html) {
                console.log(html);
                if (html == 2) {
                    alert("Email folosit deja de alt utilizator!");
                } else if (html == 3) {
                    alert("Nume folosit deja de alt utilizator!");
                } else
                if (html == 1) {
                    window.location.replace("http://localhost/MUM/Pages/App.php?user=" + name);
                }

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