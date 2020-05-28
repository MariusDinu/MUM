$(document).ready(function() {

    if (document.getElementById("FavoriteConfirmNumber").value == 1)
        document.getElementById('butonFavorit').innerHTML = "<button class='buttonInsert' id='Insert' data-toggle='modal' data-target='#music-Settings' onclick='insertMelodie()' >Adaugare Lista</button> ";

});