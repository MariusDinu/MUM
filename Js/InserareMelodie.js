function insertMelodie() {


    var musicA = document.getElementById("user").value;
    var modal = document.getElementById("myModalInsert");
    var btn = document.getElementById("myBtn");

    var span = document.getElementsByClassName("closeInsert")[0];
    var inserare = document.getElementById("Inserare");

    modal.style.display = "block";

    span.onclick = function() {
        modal.style.display = "none";
    }


    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    $('#Inserare').click(function(event) {
        event.preventDefault();
        var name = document.getElementById("numeleMelodieiInserare").value;
        var artist = document.getElementById("artistInserare").value;
        var gen = document.getElementById("genInserare").value;
        var link = document.getElementById("linkInserare").value;
        var local = document.getElementById("audiofile").value.split(/(\\|\/)/g).pop();
        var album = document.getElementById("albumInserare").value;
        var zi = document.getElementById("ziInserare").value;
        var luna = document.getElementById("lunaInserare").value;
        var an = document.getElementById("anInserare").value;

        if ((name == "") || (gen == "") || (zi == "") || (luna == "") || (an = "")) {} else {
            modal.style.display = "none";
            var data = zi + "-" + luna + "-" + an;
            var prop = document.getElementById("audiofile").value.split(/(\\|\/)/g).pop();
            var form_data = new FormData();
            form_data.append("audiofile", prop);
            $.ajax({

                type: "POST",
                //Data will be sent to "ajax.php".
                url: "/MUM/PhpMusic/InserareMelodie.php",
                //Data, that will be sent to "ajax.php".
                data: {
                    nameM: name,
                    artistM: artist,
                    genM: gen,
                    local: local,
                    albumM: album,
                    dataM: data,
                    musicAdmin: musicA,


                },
                form_data,
                //If result found, this funtion will be called.
                success: function(html) {

                    if (html == 1) {


                        alert("Succes!");


                    } else if (html == 2) {
                        alert("Fail!");
                    }


                }
            });





        }






    });

















};