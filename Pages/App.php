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


<button onclick="history.go(0)">Refresh</button>
<button onclick="goBack()">Go Back</button>
<button class="buttonInsert" id="Insert" data-toggle="modal" data-target="#music-Settings" onclick="insertMelodie()" >Adaugare</button> 
<br></br>

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


    <div id="AlbumConfirmNumber">

    </div>
    <div id="ArtistConfirmNumber">

    </div>
    <div id="GenConfirmNumber">

    </div>
    <div id="MelodieConfirmNumber">

    </div>
</body>

<script>
function goBack() {
  window.history.back();
}
</script>






<script>
function deleteMelodie(current) {
    var music = current.value;
    var musicA = document.getElementById("user").value;
    $.ajax({
        //AJAX type is "Post".
        type: "POST",
        //Data will be sent to "ajax.php".
        url: "/MUM/PhpMusic/DeleteMelodii.php",
        //Data, that will be sent to "ajax.php".
        data: {
            musicAdmin: musicA,
            musicIdDelete: music
        },
        //If result found, this funtion will be called.
        success: function(html) {
            //Assigning result to "display" div in "search.php" file.
            /*$("#tabelAfisare").html(html).show();*/
             /*location.reload();*/
            var a=document.createElement("script");
            a.src="/Mum/Js/AfisareMelodii.js";
            document.body.appendChild(a);
            
           
             

        }
    });


}</script>

<script>
function modifyMelodie(current){
var music=current.value;
var musicA=document.getElementById("user").value;
var modal = document.getElementById("myModalModify");
var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];
var salvare=document.getElementById("Salvare");

  modal.style.display = "block";

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
     if(zi==""&&luna==""&&an=="") var data="";
     else {var data=zi+"-"+luna+"-"+an;}
     console.log(data);
    $.ajax({
            //AJAX type is "Post".
            type: "POST",
            //Data will be sent to "ajax.php".
            url: "/MUM/PhpMusic/ModifyMelodii.php",
            //Data, that will be sent to "ajax.php".
            data: {
                nameM: name,
                artistM: artist,
                genM: gen,
                linkM: link,
                albumM: album,
                dataM: data,
                musicAdmin: musicA,
                musicIdDelete: music
            },
            //If result found, this funtion will be called.
            success: function(html) {

                document.getElementById("casa").innerHTML=html;
                //Assigning result to "display" div in "search.php" file.
               
                

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

<script src="/MUM/Js/AfisareMelodii.js"></script>
<script src='/MUM/Js/InserareMelodie.js'></script>
<script src="/MUM/Js/Search.js"></script>
</html>