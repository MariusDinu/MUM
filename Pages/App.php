<!DOCTYPE html>
<html lang="en">

    <head>

    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="John Doe">
 <?php
 header('Cache-Control: max-age=31536000,public');?>
  
 <link rel="preload" href="/Mum/Css/App.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="styles.css"></noscript>
   
    <link type="text/css" href="/MUM/Css/Layout.css" rel="stylesheet" />
  
    </head>
<body>
<main>
<?php    if(isset($_GET['user']))
echo "<div class='"."Admin"."' id='user' value='".$_GET['user']."'></div>";
if(isset($_GET['code']))
echo "<div class='"."Admin"."' id='code' value='".$_GET['code']."'></div>";
?>
<?php 
include 'TemplateNav.php';
?>
<div class='mycontainer'>
<?php

echo "  <div class='baraButoane'>
<div class='buttonUtil'>        

        <button id='refresh' class='refreshButton' onclick='history.go(0)'>Refresh</button>
      
        <button class='refreshButton' id='Insert' data-toggle='modal' data-target='#music-Settings' onclick='insertMelodie()' >Adaugare Melodie</button> 
        <button class='refreshButton' id='AddLista' onclick='insertLista()' >Adaugare Lista</button> </div>
        <div class='buttonDownload' >
        <button class='TopM' id='buttonTopM' onclick='TopM()'>Top10</button>
        <button class='TopV' onclick='TopV()'>TopViews</button>
        <button class='TopC' onclick='TopC()'>TopComments</button></div>
          <br><br> </div>
        ";
      ?>
  <div class='rss'> 
  
<?php
include '../Feed/FeedViews.php';
echo "<br>";
include '../Feed/Feed.php';echo "<br>";
include '../Feed/FeedComments.php';

?></div>
       





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
<div class="wrap" id="tabelFavorite" value="1"> 
                </div>
 <div id="Alb">
  
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
    <div id="FavoriteConfirmNumber">

    </div>
    <div id="SearchConfirmNumber">

</div>

<div class='userDetails' id='userDetails'>    </div>
  
  
</div>
  
  </main>
 
  
<footer><p>Author: Hege Refsnes</p></footer>
</body>


<script>
function goBack() {
  window.history.back();
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
function TopM(){
var modal = document.getElementById('TopM');
 var btn = document.getElementById('myBtn');
 
 var span = document.getElementsByClassName('closeTopM')[0];
var csv=document.getElementById('buttonCsvTopM');
var pdf=document.getElementById('buttonPdfTopM');
 modal.style.display = 'block';
 
 span.onclick = function() {
   modal.style.display = 'none';
 }
csv.onclick=function(){
  modal.style.display = 'none';

}
pdf.onclick=function(){
  modal.style.display = 'none';
}
window.onclick = function(event) {
   if (event.target == modal) {
     modal.style.display = 'none';
   }
 }


}
function TopV(){
var modal = document.getElementById('TopV');
 var btn = document.getElementById('myBtn');
 
 var span = document.getElementsByClassName('closeTopV')[0];
var csv=document.getElementById('buttonCsvTopV');
var pdf=document.getElementById('buttonPdfTopV');
 modal.style.display = 'block';
 
 span.onclick = function() {
   modal.style.display = 'none';
 }
csv.onclick=function(){
  modal.style.display = 'none';

}
pdf.onclick=function(){
  modal.style.display = 'none';
}
window.onclick = function(event) {
   if (event.target == modal) {
     modal.style.display = 'none';
   }
 }


}
function TopC(){
var modal = document.getElementById('TopC');
 var btn = document.getElementById('myBtn');
 
 var span = document.getElementsByClassName('closeTopC')[0];
var csv=document.getElementById('buttonCsvTopC');
var pdf=document.getElementById('buttonPdfTopC');
 modal.style.display = 'block';
 
 span.onclick = function() {
   modal.style.display = 'none';
 }
csv.onclick=function(){
  modal.style.display = 'none';

}
pdf.onclick=function(){
  modal.style.display = 'none';
}
window.onclick = function(event) {
   if (event.target == modal) {
     modal.style.display = 'none';
   }
 }


}

</script>


<script>


// When the user clicks anywhere outside of the modal, close it






</script>

</html>