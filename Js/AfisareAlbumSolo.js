function AfisareAlbum(current) {
    var name = current.id;

    document.getElementById("Alb").innerHTML = "<div class='showOneAlbum' id='showOneAlbum'> Nume Album: " +
        name + "</div> " +
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

            document.getElementById("AlbumConfirmNumber").value = "1";





        }
    });

}

function AfisareGen(current) {

    var name = current.id;

    document.getElementById("Alb").innerHTML = "<div class='showOneGen' id='showOneGen'> Nume Gen:" +
        name + "</div>" +
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
            $("#tabelArtisti ").hide();
            $("#tabelAfisare ").hide();
            $("#tabelSearch").hide();
            $("#tabelAlbume").hide();
            $("#tabelGenuri").hide();
            $("#tabelFavorite").hide();
            $("#userDetails").hide();
            $("#Alb").show();
            $("#listGenMusic").html(html).show();
            //Assigning result to "display" div in "search.php" file.

            document.getElementById("GenConfirmNumber").value = "1";





        }
    });

}

function AfisareArtist(current) {

    var name = current.id;


    document.getElementById("Alb").innerHTML = "<div class='showOneArtist' id='showOneArtist'> Nume Artist: " +
        name + "</div> " +
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

function deleteComentariu(current) {
    var comment = current.value;
    var user = $("#user").attr('value');
    var music = $('#IdOneView').attr('value');
    console.log(comment);
    $.ajax({
        type: "POST",
        //Data will be sent to "ajax.php".
        url: "/MUM/PhpMusic/DeleteComentariu.php",
        //Data, that will be sent to "ajax.php".
        data: {
            id: comment,
            user: user

        },
        success: function(html) {
            console.log(html);
            $('#showMelodieComments').html(html).show();

            $.ajax({
                type: "POST",
                //Data will be sent to "ajax.php".
                url: "/MUM/PhpMusic/AfisareComentarii.php",
                //Data, that will be sent to "ajax.php".
                data: {
                    id: music,
                    user: user

                },
                success: function(html) {
                    console.log('Succes');
                    $('#showMelodieComments').html(html).show();
                    document.getElementById('adaugareComentariu').value = '';


                }



            });

        }





    });

}

function adaugareComentariu() {
    var text = document.getElementById('adaugareComentariu').value;
    var user = $("#user").attr('value');
    var music = $('#IdOneView').attr('value');
    $.ajax({
        type: "POST",
        //Data will be sent to "ajax.php".
        url: "/MUM/PhpMusic/AdaugareComentariu.php",
        //Data, that will be sent to "ajax.php".
        data: {
            music: music,
            user: user,
            text: text

        },
        success: function(html) {
            console.log('Succes');

            $.ajax({
                type: "POST",
                //Data will be sent to "ajax.php".
                url: "/MUM/PhpMusic/AfisareComentarii.php",
                //Data, that will be sent to "ajax.php".
                data: {
                    id: music,
                    user: user

                },
                success: function(html) {
                    console.log('Succes');
                    $('#showMelodieComments').html(html).show();
                    document.getElementById('adaugareComentariu').value = '';


                }



            });
        }

    });
}



function AfisareMelodie(current) {

    var name = current.id;
    var user = $("#user").attr('value');

    $("#tabelArtisti").hide();
    $("#tabelAfisare").hide();
    $("#tabelSearch").hide();
    $("#tabelGenuri").hide();
    $("#tabelFavorite").hide();
    $("#tabelAlbume").hide();
    $("#userDetails").hide();
    $("#Alb").show();
    document.getElementById("Alb").innerHTML = "<div class='showOneMelodie' id='showOneMelodie'><div class='showDetailsMelodie' id='showDetailsMelodie'>" +
        "</div><br><br><label class='rec' for='rec'>Recomandate</label><div class='outer'> <div class='wrap' id='recommendedMusic'> </div></div> <div class='boxComments' id='boxComments'><div class= 'showMelodieComments' id ='showMelodieComments'> " + " </div> " +
        "<input class='adaugareComentariu' id='adaugareComentariu' name='adaugareComentariu' placeholder='Scrie un comentariu nou...' type='text' > " +
        " <button class='buttonComentariu' id = 'buttonComentariu' onclick='adaugareComentariu()' > Adaugare Comentariu </button> </div>" +
        " </div > ";
    $.ajax({
        type: "POST",
        //Data will be sent to "ajax.php".
        url: "/MUM/PhpMusic/AfisareComentarii.php",
        //Data, that will be sent to "ajax.php".
        data: {
            id: name,
            user: user

        },
        success: function(html) {
            console.log(html);
            $('#showMelodieComments').html(html).show();



        }





    });
    $.ajax({
        type: "POST",
        //Data will be sent to "ajax.php".
        url: "/MUM/PhpMusic/Melodie.php",
        //Data, that will be sent to "ajax.php".
        data: {
            id: name,
            user: user

        },
        success: function(html) {
            console.log(html);
            $('#showDetailsMelodie').html(html).show();



        }





    });
    $.ajax({
        type: "POST",
        //Data will be sent to "ajax.php".
        url: "/MUM/PhpMusic/Views.php",
        //Data, that will be sent to "ajax.php".
        data: {
            id: name,
            user: user

        },
        success: function(html) {
            console.log(html);
            $('#Views').html(html).show();



        }





    });

    $.ajax({
        type: "POST",
        //Data will be sent to "ajax.php".
        url: "/MUM/PhpMusic/News.php",
        //Data, that will be sent to "ajax.php".
        data: {
            id: name,
            user: user


        },
        success: function(html) {
            console.log(html);
            $('#recommendedMusic').html(html).show();



        }





    });



}

function AfisareListaFavorite(current) {

    var lista = current.id;
    var user = $('#user').attr('value');
    $.ajax({

        type: 'POST',
        //Data will be sent to 
        url: '/MUM/PhpMusic/AfisareListaFavorite.php',
        //Data, that will be sent
        data: {
            lista: lista,
            user: user

        },
        //If result found, this funtion will be called.
        success: function(html) {


            $('#tabelFavorite').html(html).show();
            $('#tabelAfisare').hide();

        }
    });



}