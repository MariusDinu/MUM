<!DOCTYPE html>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js "></script>
    
    
    <link href="/Mum/Css/App.css" rel="stylesheet">
    </head>
<body>

<header class="site-header">
        <div class="logo2">
            <a href="/">
                <svg class="icon-logo-text">
                <a href="HomePage.html"> </a>
            </svg>
            </a>
        </div>


        <div class="header-middle-area">
            <div class="main-nav">
                <ul class="main-sections">
                    
                </ul>

            </div>
        </div>

        <div class="search" role="search" id="search-area">
            <div class="chw-widget">
                <form role="search" method="get" id="searchform" class="search-form" action="https://css-tricks.com/">
                    <label class="screen-reader-text" id="search-label" for="search-input">Search for:</label>
                    <input type="search" required="" name="s" id="search-input" class="search-field" value="">
                    <input type="hidden" name="orderby" value="relevance">
                    <input type="hidden" name="post_type" value="post,page,guide">
                    <button type="submit" class="button-search">
                        <span class="screen-reader-text">Search</span>
                        <svg class="icon-search" width="26px" height="26px">
                            <use xlink:href="#icon-search"></use>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </header>
<?php    if(isset($_GET['user']))
echo "<div class='"."Admin"."' id='"."user"."' value='".$_GET['user']."'>".$_GET['user']."</div>"
?>
<div class="video-player-inner-wrap" id="video-player-inner-wrap">
                  <div class="redare" id="redare"></div>
                  
</div>



<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <form action="" onsubmit="" class="room-settings" id="roomSettings" method="post">
                    <fieldset>
                        <p>
                            <label for="Name">Numele melodiei</label>
                            <input id="numeleMelodiei" name="numeleMelodiei" placeholder="Introdu noul nume" type="text">
                        </p>
                        <p>
                            <label for="Artist">Artist</label>
                            <input id="artist" name="artist" placeholder="Introdu noul artist" type="text">
                        </p>
                        <p>
                            <label for="spec">Gen</label>
                            <input id="gen" name="gen" placeholder="Introdu noul gen" type="text">
                        </p>
                        <p>
                            <label for="spec">Album</label>
                            <input id="album" name="album" placeholder="Introdu noul Album" type="text">
                        </p>
                        <p>
                            <label for="idle">Data lansarii</label>
<select id="zi" name="zi">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28</option>
  <option value="29">29</option>
  <option value="30">30</option>
  <option value="31" selected="selected">31</option>
</select>

 <select id="luna" name="luna">
  <option value="1">Ianuarie</option>
  <option value="2">Februarie</option>
  <option value="3">Martie</option>
  <option value="4">Aprilie</option>
  <option value="5">Mai</option>
  <option value="6">Iunie</option>
  <option value="7">Iulie</option>
  <option value="8">August</option>
  <option value="9">Septembrie</option>
  <option value="10">Octombrie</option>
  <option value="11">Noiembrie</option>
  <option value="12" selected="selected" >Decembrie</option>
</select>

<select id="zi" name="zi">
  <option value="1990">1990</option>
  <option value="1991">1991</option>
  <option value="1992">1992</option>
  <option value="1993">1993</option>
  <option value="1994">1994</option>
  <option value="1995">1995</option>
  <option value="1996">1996</option>
  <option value="1997">1997</option>
  <option value="1998">1998</option>
  <option value="1999">1999</option>
  <option value="2000">2000</option>
  <option value="2001">2001</option>
  <option value="2002">2002</option>
  <option value="2003">2003</option>
  <option value="2004">2004</option>
  <option value="2005">2005</option>
  <option value="2006">2006</option>
  <option value="2007">2007</option>
  <option value="2008">2008</option>
  <option value="2009">2009</option>
  <option value="2010">2010</option>
  <option value="2011">2011</option>
  <option value="2012">2012</option>
  <option value="2013">2013</option>
  <option value="2014">2014</option>
  <option value="2015">2015</option>
  <option value="2016">2016</option>
  <option value="2017">2017</option>
  <option value="2018">2018</option>
  <option value="2019">2019</option>
  <option value="2020" selected="selected">2020</option>
</select>

                        </p>
                        <p>
                            <label for="spec">Link</label>
                            <input id="link" name="link" placeholder="Introdu noul link" type="text">
                        </p>
                    
                        <button class="btn btn-success" id="Salvare" type="submit">Salvare</button>
                    </fieldset>
                </form>
  </div>

</div>

<div class="container" >
<div class="tabel" id="tabel" value="1"> 
<ol class="c" id="tabel1" value="1">
    

</ol>

</div>
                </div>
                <button onclick="goBack()">Go Back</button>
               
</body>

<script>
function goBack() {
  window.history.back();
}
</script>




</script>

<script>
function deleteMelodie(current) {
    var music = current.value;
    var musicA = document.getElementById("user").value;
    $.ajax({
        //AJAX type is "Post".
        type: "POST",
        //Data will be sent to "ajax.php".
        url: "/MUM/DeleteMelodii.php",
        //Data, that will be sent to "ajax.php".
        data: {
            musicAdmin: musicA,
            musicIdDelete: music
        },
        //If result found, this funtion will be called.
        success: function(html) {
            //Assigning result to "display" div in "search.php" file.
            $("#tabel1").html(html).show();


        }
    });


}</script>

<script>
function modifyMelodie(current){
var music=current.value;
var musicA=document.getElementById("user").value;
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var salvare=document.getElementById("Salvare");
// When the user clicks the button, open the modal 
  modal.style.display = "block";


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
salvare.onclick=function(){
     modal.style.display = "none";
     var name=document.getElementById("numeleMelodiei").value;
     var artist=document.getElementById("artist").value;
     var gen=document.getElementById("gen").value;
     var link=document.getElementById("link").value;
     var album=document.getElementById("album").value;
     var zi=document.getElementById("zi").value;
     var luna=document.getElementById("luna").value;
     var an=document.getElementById("an").value;
     var data=zi+"-"+luna+"-"+an;
    
    $.ajax({
            //AJAX type is "Post".
            type: "POST",
            //Data will be sent to "ajax.php".
            url: "/MUM/ModifyMelodii.php",
            //Data, that will be sent to "ajax.php".
            data: {
                nameM: name,
               // artistM: artist,
                //genM: gen,
               // linkM: link,
                //albumM: album,
                //dataM: data,
                musicAdmin: musicA,
                musicIdDelete: music
            },
            //If result found, this funtion will be called.
            success: function(html) {
                //Assigning result to "display" div in "search.php" file.
                $("#tabel1").html(html).show();
                

            }
        });

}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


}


function playMusic(current){
var play=current.id;
var redarea=document.getElementById("redare");
var clasaVideo=document.getElementById("video-player-inner-wrap");
clasaVideo.innerHTML="<iframe class='"+"video-player-embed js-player"+"' width='"+"560"+"' height='"+"443"+"' class='"+"yvideo"+"' id='"+"video"+"' src='"+play+"' frameborder='"+"0"+"' allow='"+"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"+"' allowfullscreen></iframe>"+"<button onclick='"+"closePlayer()"+"' class='"+"closeVideo"+"' id='"+"closeVideo"+"'>Close</button>";

}

function closePlayer(){
document.getElementById("video").remove();
document.getElementById("closeVideo").remove();


}


</script>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal

</script>
<script src="/MUM/Js/AfisareMelodii.js"></script>
<script src="/MUM/Js/DeleteMelodii.js"></script>
</html>