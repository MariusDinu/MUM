<header class="site-header">
        <div class="logo2">
            <a href="/">
                <svg class="icon-logo-text">
                <a href="/MUM/Pages/HomePage.php"> </a>
            </svg>
            </a>
</div>
            
 
    
<?php
include '../PhpRegister/connect.php';
function verify(){
$user=$_GET['user'];

$baza= new BD();
$sql = "SELECT * from register where UserName='$user'";
$cer = $baza::obtine_conexiune();
$cerere=$cer->prepare($sql);
$cerere->execute();
if($cerere->rowCount()==1)
foreach ($cer->query($sql) as $row)
{
    if($row['AdminLevel']==1)
    return 1;
    else return 0;
   
}
else return 3;
}
?>
        <?php    if(verify($_GET['user'])==1)
{
     echo   "<div class='header-middle-area'>
            <div class='main-nav'>
                <ul class='main-sections'>
                <li class='Home'>
                        <a id='MelodieConfirm' >
                            <svg id='icon-nav-videos' viewBox='0 0 40 40'><g clip-path='url(#clip0)'><path d='M20 39c10.493 0 19-8.507 19-19S30.493 1 20 1 1 9.507 1 20s8.507 19 19 19z'></path><path d='M20 33c7.18 0 13-5.82 13-13S27.18 7 20 7 7 12.82 7 20s5.82 13 13 13z'></path><path d='M17.1 17v6.6c0 .8.8 1.2 1.5.9l6-3.3c.7-.4.7-1.4 0-1.7l-6-3.3c-.7-.4-1.5 0-1.5.8z'></path></g></svg>
                            <span>Melodii</span>
                        </a>
                    </li>
                    <li class='Home'>
                        <a id='Useri'  >
                            <svg id='icon-nav-videos' viewBox='0 0 40 40'><g clip-path='url(#clip0)'><path d='M20 39c10.493 0 19-8.507 19-19S30.493 1 20 1 1 9.507 1 20s8.507 19 19 19z'></path><path d='M20 33c7.18 0 13-5.82 13-13S27.18 7 20 7 7 12.82 7 20s5.82 13 13 13z'></path><path d='M17.1 17v6.6c0 .8.8 1.2 1.5.9l6-3.3c.7-.4.7-1.4 0-1.7l-6-3.3c-.7-.4-1.5 0-1.5.8z'></path></g></svg>
                            <span>Useri</span>
                        </a>
                    </li>
                    <li class='Home' >
                    <a id='ContUser' onclick='ContAdmin()'>
                        <svg id='icon-nav-videos' viewBox='0 0 40 40'><g clip-path='url(#clip0)'><path d='M20 39c10.493 0 19-8.507 19-19S30.493 1 20 1 1 9.507 1 20s8.507 19 19 19z'></path><path d='M20 33c7.18 0 13-5.82 13-13S27.18 7 20 7 7 12.82 7 20s5.82 13 13 13z'></path><path d='M17.1 17v6.6c0 .8.8 1.2 1.5.9l6-3.3c.7-.4.7-1.4 0-1.7l-6-3.3c-.7-.4-1.5 0-1.5.8z'></path></g></svg>
                        <span> Cont: ".$_GET['user']."</span>
                    </a>
                </li>
                   





                </ul>

            </div>
        </div>
        <div class='search' role='search' id='search-area'>
                
        <input type='search' required='required' name='' id='Search' class='search-field' value=''>
       
        <button type='submit' class='button-search'>
            <span class='screen-reader-text'>Search</span>
            
        </button>
   
</div>
        <div class='search' role='search' id='user-search-area'>
                
                    <input type='search' required='required' name='' id='SearchUser' class='search-field' value=''>
                   
                    <button type='submit' class='button-search'>
                        <span class='screen-reader-text'>Search</span>
                        
                    </button>
               
            </div>         
        ";
       
      
    
    
    }
        else if(verify($_GET['user'])==0){

          echo  "<div class='header-middle-area'>
            <div class='main-nav'>
                <ul class='main-sections'>
                    <li class='Home'>
                        <a id='MelodieConfirm'>
                            <svg id='icon-nav-videos' viewBox='0 0 40 40'><g clip-path='url(#clip0)'><path d='M20 39c10.493 0 19-8.507 19-19S30.493 1 20 1 1 9.507 1 20s8.507 19 19 19z'></path><path d='M20 33c7.18 0 13-5.82 13-13S27.18 7 20 7 7 12.82 7 20s5.82 13 13 13z'></path><path d='M17.1 17v6.6c0 .8.8 1.2 1.5.9l6-3.3c.7-.4.7-1.4 0-1.7l-6-3.3c-.7-.4-1.5 0-1.5.8z'></path></g></svg>
                            <span>Melodii</span>
                        </a>
                    </li>
                    <li class='Home'>
                        <a id='AlbumConfirm' >
                            <svg id='icon-nav-videos' viewBox='0 0 40 40'><g clip-path='url(#clip0)'><path d='M20 39c10.493 0 19-8.507 19-19S30.493 1 20 1 1 9.507 1 20s8.507 19 19 19z'></path><path d='M20 33c7.18 0 13-5.82 13-13S27.18 7 20 7 7 12.82 7 20s5.82 13 13 13z'></path><path d='M17.1 17v6.6c0 .8.8 1.2 1.5.9l6-3.3c.7-.4.7-1.4 0-1.7l-6-3.3c-.7-.4-1.5 0-1.5.8z'></path></g></svg>
                            <span class>Albume</span>
                        </a>
                    </li>
                    <li class='Home'>
                    <a id='GenConfirm'>
                        <svg id='icon-nav-videos' viewBox='0 0 40 40'><g clip-path='url(#clip0)'><path d='M20 39c10.493 0 19-8.507 19-19S30.493 1 20 1 1 9.507 1 20s8.507 19 19 19z'></path><path d='M20 33c7.18 0 13-5.82 13-13S27.18 7 20 7 7 12.82 7 20s5.82 13 13 13z'></path><path d='M17.1 17v6.6c0 .8.8 1.2 1.5.9l6-3.3c.7-.4.7-1.4 0-1.7l-6-3.3c-.7-.4-1.5 0-1.5.8z'></path></g></svg>
                        <span class>Genuri</span>
                    </a>
                </li>
                <li class='Home'>
                    <a id='ArtistConfirm'>
                        <svg id='icon-nav-videos' viewBox='0 0 40 40'><g clip-path='url(#clip0)'><path d='M20 39c10.493 0 19-8.507 19-19S30.493 1 20 1 1 9.507 1 20s8.507 19 19 19z'></path><path d='M20 33c7.18 0 13-5.82 13-13S27.18 7 20 7 7 12.82 7 20s5.82 13 13 13z'></path><path d='M17.1 17v6.6c0 .8.8 1.2 1.5.9l6-3.3c.7-.4.7-1.4 0-1.7l-6-3.3c-.7-.4-1.5 0-1.5.8z'></path></g></svg>
                        <span class>Artisti</span>
                    </a>
                </li>
                <li class='Home' >
                <a id='ContUser' onclick='ContUser()'>
                    <svg id='icon-nav-videos' viewBox='0 0 40 40'><g clip-path='url(#clip0)'><path d='M20 39c10.493 0 19-8.507 19-19S30.493 1 20 1 1 9.507 1 20s8.507 19 19 19z'></path><path d='M20 33c7.18 0 13-5.82 13-13S27.18 7 20 7 7 12.82 7 20s5.82 13 13 13z'></path><path d='M17.1 17v6.6c0 .8.8 1.2 1.5.9l6-3.3c.7-.4.7-1.4 0-1.7l-6-3.3c-.7-.4-1.5 0-1.5.8z'></path></g></svg>
                    <span> Cont: ".$_GET['user']."</span>
                </a>
            </li>
                    </ul>
                    </div>
                    </div>
                    
                    <div class='search' role='search' id='search-area'>
                
                    <input type='search' required='required' name='' id='Search' class='search-field' value=''>
                   
                    <button type='submit' class='button-search'>
                        <span class='screen-reader-text'>Search</span>
                        
                    </button>
               
            </div>            
                    ";
                   
                   









        }
        else {echo "error";}
?>

</header> 

<?php

echo "<button onclick='history.go(0)'>Refresh</button>
        <button onclick='goBack()'>Go Back</button>
        <button class='buttonInsert' id='Insert' data-toggle='modal' data-target='#music-Settings' onclick='insertMelodie()' >Adaugare</button> 
        <br></br>";
      ?>

      <?php 
      if(verify($_GET['user'])==0){ echo  "<script src='/MUM/Js/AfisareGenuri.js'></script>
        <script src='/MUM/Js/AfisareArtisti.js'></script>
        <script src='/MUM/Js/AfisareAlbume.js'></script>
        <script src='/MUM/Js/AfisareAlbumSolo.js'></script>
<script src='/MUM/Js/AfisareMelodii.js'></script>
<script src='/MUM/Js/InserareMelodie.js'></script>
<script src='/MUM/Js/Search.js'></script>
        <script src='/MUM/Js/UserDetails.js'></script>
       ";}
      else if(verify($_GET['user'])==1){echo "<script src='/MUM/Js/AdminDetails.js'></script>
        <script src='/MUM/Js/AfisareAlbumSolo.js'></script>
 <script src='/MUM/Js/AfisareMelodii.js'></script>
 <script src='/MUM/Js/InserareMelodie.js'></script>
 <script src='/MUM/Js/Search.js'></script>
 <script src='/MUM/Js/AfisareUseri.js'></script>
 <script>
 function deleteMelodie(current) {
     var music = current.value;
     var musicA = document.getElementById('user').value;
     $.ajax({
        
         type: 'POST',
        
         url: '/MUM/PhpMusic/DeleteMelodii.php',
        
         data: {
             musicAdmin: musicA,
             musicIdDelete: music
         },
         //If result found, this funtion will be called.
         success: function(html) {
             //Assigning result to display div in search.php file.
             /*$('#tabelAfisare').html(html).show();*/
              /*location.reload();*/
             var a=document.createElement('script');
             a.src='/Mum/Js/AfisareMelodii.js';
             document.body.appendChild(a);
            
             $('#tabelSearch').hide();
            
              
 
         }
     });
 
 
 }</script>
 <script>
 function deleteUser(current) {
     var id = current.value;
     
     $.ajax({
        
         type: 'POST',
        
         url: '/MUM/PhpRegister/DeleteUser.php',
        
         data: {
            
             userIdDelete: id
         },
         //If result found, this funtion will be called.
         success: function(html) {
             console.log(html);
             
             document.getElementById('UseriVer').value='1';
             var a=document.createElement('script');
             a.src='/Mum/Js/AfisareUseri.js';
             document.body.appendChild(a);
            
             
 
         }
     });
 
 
 }</script>
 
 <script>
 function modifyMelodie(current){
 var music=current.value;
 var musicA=document.getElementById('user').value;
 var modal = document.getElementById('myModalModify');
 var btn = document.getElementById('myBtn');
 
 var span = document.getElementsByClassName('close')[0];
 var salvare=document.getElementById('Salvare');
 
   modal.style.display = 'block';
 
 span.onclick = function() {
   modal.style.display = 'none';
 }
 
 
 salvare.onclick=function(){
      modal.style.display = 'none';
      var name=document.getElementById('numeleMelodiei').value;
      var artist=document.getElementById('artist').value;
      var gen=document.getElementById('gen').value;
      var link=document.getElementById('link').value;
      var album=document.getElementById('album').value;
      var zi=document.getElementById('zi').value;
      var luna=document.getElementById('luna').value;
      var an=document.getElementById('an').value;
      if(zi==''&&luna==''&&an=='') var data='';
      else {var data=zi+'-'+luna+'-'+an;}
      console.log(data);
     $.ajax({
             //AJAX type is
             type: 'POST',
             //Data will be sent to 
             url: '/MUM/PhpMusic/ModifyMelodii.php',
             //Data, that will be sent to 
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
 
                 document.getElementById('casa').innerHTML=html;
                 //Assigning result to 
                
                 
 
             }
         });
         
 
 }
 
 // When the user clicks anywhere outside of the modal, close it
 window.onclick = function(event) {
   if (event.target == modal) {
     modal.style.display = 'none';
   }
 }
 
 
 }
 </script>
         ";}
      
      
      ?>
