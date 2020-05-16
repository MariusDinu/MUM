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

        var name = document.getElementById("numeleMelodieiInserare").value;
        var artist = document.getElementById("artistInserare").value;
        var gen = document.getElementById("genInserare").value;
        var link = document.getElementById("linkInserare").value;
        var album = document.getElementById("albumInserare").value;
        var zi = document.getElementById("ziInserare").value;
        var luna = document.getElementById("lunaInserare").value;
        var an = document.getElementById("anInserare").value;

        if ((name == "") || (gen == "") || (link == "") || (zi == "") || (luna == "") || (an = "")) {} else {
            modal.style.display = "none";
            var data = zi + "-" + luna + "-" + an;

            $.ajax({

                type: "POST",
                //Data will be sent to "ajax.php".
                url: "/MUM/PhpMusic/InserareMelodie.php",
                //Data, that will be sent to "ajax.php".
                data: {
                    nameM: name,
                    artistM: artist,
                    genM: gen,
                    linkM: link,
                    albumM: album,
                    dataM: data,
                    musicAdmin: musicA

                },
                //If result found, this funtion will be called.
                success: function(html) {

                    if (html == 1) {

                        alert("Succes!");


                    } else if (html == 2) {
                        alert("Fail!");
                    }



                    event.preventDefault();
                }
            });

        }

    });
}