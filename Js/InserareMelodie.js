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




    inserare.onclick = function() {
        var name = document.getElementById("numeleMelodieiInserare").value;
        var artist = document.getElementById("artistInserare").value;
        var gen = document.getElementById("genInserare").value;
        var link = document.getElementById("linkInserare").value;
        var album = document.getElementById("albumInserare").value;
        var zi = document.getElementById("ziInserare").value;
        var luna = document.getElementById("lunaInserare").value;
        var an = document.getElementById("anInserare").value;

        if ((gen == "") || (link == "") || (zi == "") || (luna == "") || (an = "")) {} else {
            modal.style.display = "none";
            var data = zi + "-" + luna + "-" + an;
            console.log(data);
            $.ajax({
                //AJAX type is "Post".
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
                    if (html == 1)
                    //Assigning result to "display" div in "search.php" file.
                        alert("Am inserat!");
                    else
                        alert("Inserarea a esuat!");


                }
            });
        }
    }
}