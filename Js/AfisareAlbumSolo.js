function AfisareAlbum(current) {
    var name = current.id;

    document.getElementById("Alb").innerHTML = "<div class='showOneAlbum' id='showOneAlbum'> Nume Album: " +
        name + "</div> <div class='nameArtist' id='nameArtist'> Katy Perry </div> <div class='detailsArtist' id='detailsArtist'> aty Perry (born Katheryn Elizabeth Hudson, October 25, 1984) is a singer/songwriter from Santa Barbara, California, United States. Perry's success was so sudden in 2008 it seemed as if she was an overnight success when the opposite was true. Daughter of Pentecostal pastors, Katy was raised by born-agai</div>" +
        "<div class='outer'><div  class='wrap' id='listMusic'> </div></div> ";
    $.ajax({
        //AJAX type is "Post".
        type: "POST",
        //Data will be sent to "ajax.php".
        url: "/MUM/PhpMusic/AfisareAlbumMusic.php",
        //Data, that will be sent to "ajax.php".
        data: {
            albumVal: name

        },
        //If result found, this funtion will be called.
        success: function(html) {

            $("#tabelAfisare ").hide();
            $("#tabelSearch").hide();
            $("#tabelAlbume").hide();
            $("#tabelFavorite").hide();
            $("#tabelGenuri").hide();
            $("#userDetails").hide();
            $("#Alb").show();
            $("#listMusic").html(html).show();
            //Assigning result to "display" div in "search.php" file.

            document.getElementById("ArtistConfirmNumber").value = "1";





        }
    });

}

function AfisareGen(current) {

    var name = current.id;

    document.getElementById("Alb").innerHTML = "<div class='showOneGen' id='showOneGen'> Nume Gen:" +
        name + "</div><div class='nameArtist' id='nameArtist'> Katy Perry </div> <div class='detailsArtist' id='detailsArtist'> aty Perry (born Katheryn Elizabeth Hudson, October 25, 1984) is a singer/songwriter from Santa Barbara, California, United States. Perry's success was so sudden in 2008 it seemed as if she was an overnight success when the opposite was true. Daughter of Pentecostal pastors, Katy was raised by born-agai</div>" +
        "<div class='outer'><div  class='wrap' id='listGenMusic'> </div></div> ";
    $.ajax({
        //AJAX type is "Post".
        type: "POST",
        //Data will be sent to "ajax.php".
        url: "/MUM/PhpMusic/AfisareGenMusic.php",
        //Data, that will be sent to "ajax.php".
        data: {
            genVal: name

        },
        //If result found, this funtion will be called.
        success: function(html) {

            $("#tabelAfisare ").hide();
            $("#tabelSearch").hide();
            $("#tabelAlbume").hide();
            $("#tabelGenuri").hide();
            $("#tabelFavorite").hide();
            $("#userDetails").hide();
            $("#Alb").show();
            $("#listGenMusic").html(html).show();
            //Assigning result to "display" div in "search.php" file.

            document.getElementById("ArtistConfirmNumber").value = "1";





        }
    });

}

function AfisareArtist(current) {

    var name = current.id;


    document.getElementById("Alb").innerHTML = "<div class='showOneArtist' id='showOneArtist'> Nume Artist: " +
        name + "</div><div class='nameArtist' id='nameArtist'> Katy Perry </div> <div class='detailsArtist' id='detailsArtist'> aty Perry (born Katheryn Elizabeth Hudson, October 25, 1984) is a singer/songwriter from Santa Barbara, California, United States. Perry's success was so sudden in 2008 it seemed as if she was an overnight success when the opposite was true. Daughter of Pentecostal pastors, Katy was raised by born-agai</div>" +
        "<div class='outer'><div  class='wrap' id='listArtistMusic'> </div></div> ";
    $.ajax({
        //AJAX type is "Post".
        type: "POST",
        //Data will be sent to "ajax.php".
        url: "/MUM/PhpMusic/AfisareArtistMusic.php",
        //Data, that will be sent to "ajax.php".
        data: {
            artistVal: name

        },
        //If result found, this funtion will be called.
        success: function(html) {
            $("#tabelArtisti").hide();
            $("#tabelAfisare ").hide();
            $("#tabelSearch").hide();
            $("#tabelAlbume").hide();
            $("#tabelFavorite").hide();
            $("#tabelGenuri").hide();
            $("#userDetails").hide();
            $("#Alb").show();
            $("#listArtistMusic").html(html).show();
            //Assigning result to "display" div in "search.php" file.

            document.getElementById("ArtistConfirmNumber").value = "1";





        }
    });

}

function AfisareMelodie(current) {

    var name = current.id;
    $("#tabelArtisti").hide();
    $("#tabelAfisare").hide();
    $("#tabelSearch").hide();
    $("#tabelGenuri").hide();
    $("#tabelFavorite").hide();
    $("#tabelAlbume").hide();
    $("#userDetails").hide();
    $("#Alb").show();
    document.getElementById("Alb").innerHTML = "<div class='showOneMelodie' id='showOneMelodie'> " +
        name + "</div>";


}