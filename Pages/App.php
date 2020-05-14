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
<div class="video-player-inner-wrap">
                  <div class="redare" id="redare"></div>
                <button class="
                    video-player-close
                    js-close-player
                ">Close</button>
            
        

        


</div>




<div class="container" >
<div class="tabel" id="tabel" value="1"> 
<ol class="c" id="tabel1" value="1">
    

</ol>

</div>
                </div>
                <button onclick="goBack()">Go Back</button>
                <iframe src="https://open.spotify.com/embed/album/1DFixLWuPkv3KT3TnV35m3" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>

</body>

<script>
function goBack() {
  window.history.back();
}
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js "></script>

</script>

<script>
function deleteMelodie(current){
var music=current.value;
var musicA=document.getElementById("user").value;
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


}


function playMusic(current){
var play=current.id;
var redarea=document.getElementById("redare");


redarea.innerHTML="<iframe class='"+"video-player-embed js-player"+"' width='"+"560"+"' height='"+"443"+"' class='"+"yvideo"+"' id='"+"p1QgNF6J1h0"+"' src='"+play+"' frameborder='"+"0"+"' allow='"+"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"+"' allowfullscreen></iframe>;";

}



</script>
<script src="/MUM/Js/AfisareMelodii.js"></script>
<script src="/MUM/Js/DeleteMelodii.js"></script>
</html>