<!DOCTYPE html>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js "></script>
    
   
    <link href="/Mum/Css/App.css" rel="stylesheet">
    <link href="/MUM/Css/Layout.css" rel="stylesheet">
    </head>
<body>



<?php 
include 'TemplateNav.php';
?>
       
<?php    if(isset($_GET['user']))
echo "<div class='"."Admin"."' id='user' value='".$_GET['user']."'>Numele adminului:".$_GET['user']."</div>"
?>




<?php 

include 'TemplateModal.php';


?>








<div class="outer" >
<div class="wrap" id="tabelAfisare" value="1"> 


</div>
<div class="wrap" id="tabelSearch" value="1"> 
                </div>
<div class="wrap" id="tabelAlbume" value="1"> 
                </div>
                <div class="wrap" id="tabelUseri" value="1"> 
                </div>   
<div class="wrap" id="tabelArtisti" value="1"> 
                </div>    
<div class="wrap" id="tabelGenuri" value="1"> 
                </div>           
</div>  

<div class="pozitionare">
<div class="video-player-inner-wrap" id="video-player-inner-wrap">
                  <div class="redare" id="redare"></div>
                  
</div>
    </div>
<div id="UseriVer" ></div>
<div id="UserConfirmNumber" ></div>
    <div id="AlbumConfirmNumber">

    </div>
    <div id="ArtistConfirmNumber">

    </div>
    <div id="GenConfirmNumber">

    </div>
    <div id="MelodieConfirmNumber">

    </div>

<div class='userDetails' id='userDetails'>    </div>
  <div id="Alb">
  
  </div>  
</body>

<script>
function goBack() {
  window.history.back();
}
function ArtisitiConf(){
  
<?php 

include 'AfisareArtisiti.php';


?>

}
</script>





<script>
function playMusic(current){
var play=current.id;
var redarea=document.getElementById("redare");
var clasaVideo=document.getElementById("video-player-inner-wrap");
clasaVideo.innerHTML="<iframe class='"+"video-player-embed js-player"+"' width='"+"400"+"' height='"+"300"+"' class='"+"yvideo"+"' id='"+"video"+"' src='"+play+"' frameborder='"+"0"+"' allow='"+"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"+"' allowfullscreen></iframe>"+"<button onclick='"+"closePlayer()"+"' class='"+"closeVideo"+"' id='"+"closeVideo"+"'>Close</button>";

}

function closePlayer(){
document.getElementById("video").remove();
document.getElementById("closeVideo").remove();


}

</script>


<script>


// When the user clicks anywhere outside of the modal, close it






</script>

</html>