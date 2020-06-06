<header class="site-header">
        <div class="logo2">
            <a >
                <svg class="icon-logo-text">
                <a href="/MUM/Pages/HomePage.php"> Logo </a>
            </svg>
            </a>
            
            
</div>
<button class='buttonLogout' id='Logout' onclick='logout()' >Logout </button>

<?php

echo "  <div class='baraButoane'>
        <button id='refresh' class='buttonInsert' onclick='history.go(0)'>Refresh</button>
      
        <button class='buttonInsert' id='Insert' data-toggle='modal' data-target='#music-Settings' onclick='insertMelodie()' >Melodie</button> 
        <button class='buttonInsert' id='AddLista' onclick='insertLista()' >Lista</button>
        </div>
        <br></br>";
      ?>
 
            
 
    
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
                        <svg id='icon-nav-account' viewBox='0 0 100 100'><path d='M35.12 78.4L20.2 86.54a14.14 14.14 0 00-2.39 1.7 50 50 0 0064.2.17 13.57 13.57 0 00-2.63-1.76l-16-8A6.09 6.09 0 0160 73.21v-6.27A23 23 0 0061.55 65a37 37 0 005-10 5 5 0 003.56-4.77v-6.7a5 5 0 00-1.67-3.71v-9.67s2-15-18.4-15-18.43 15-18.43 15v9.67a5 5 0 00-1.67 3.71v6.69a5 5 0 002.31 4.21 33.09 33.09 0 006 12.51v6.12a6.09 6.09 0 01-3.13 5.34z' fill='#edeada'></path><path d='M50.86 0a50 50 0 00-33 88.22 13 13 0 012.37-1.69l14.89-8.13a6.08 6.08 0 003.17-5.34v-6.12a33.19 33.19 0 01-6-12.51 5 5 0 01-2.31-4.21v-6.69a5 5 0 011.67-3.71v-9.67s-2-15.06 18.4-15.06S68.4 30.15 68.4 30.15v9.67a5 5 0 011.67 3.71v6.69A5 5 0 0166.51 55a36.72 36.72 0 01-5 10c-.55.77-1.06 1.43-1.51 1.94v6.27a6.1 6.1 0 003.37 5.45l16 8A13.06 13.06 0 0182 88.41 50 50 0 0050.86 0z' fill='#8bc34a'></path></svg><span> Useri</span>
               
                          
                        </a>

                    </li>
                    <li class='Home' >
                    <a id='ContUser' onclick='ContAdmin()'>
                    <svg id='icon-nav-account' viewBox='0 0 100 100'><path d='M35.12 78.4L20.2 86.54a14.14 14.14 0 00-2.39 1.7 50 50 0 0064.2.17 13.57 13.57 0 00-2.63-1.76l-16-8A6.09 6.09 0 0160 73.21v-6.27A23 23 0 0061.55 65a37 37 0 005-10 5 5 0 003.56-4.77v-6.7a5 5 0 00-1.67-3.71v-9.67s2-15-18.4-15-18.43 15-18.43 15v9.67a5 5 0 00-1.67 3.71v6.69a5 5 0 002.31 4.21 33.09 33.09 0 006 12.51v6.12a6.09 6.09 0 01-3.13 5.34z' fill='#edeada'></path><path d='M50.86 0a50 50 0 00-33 88.22 13 13 0 012.37-1.69l14.89-8.13a6.08 6.08 0 003.17-5.34v-6.12a33.19 33.19 0 01-6-12.51 5 5 0 01-2.31-4.21v-6.69a5 5 0 011.67-3.71v-9.67s-2-15.06 18.4-15.06S68.4 30.15 68.4 30.15v9.67a5 5 0 011.67 3.71v6.69A5 5 0 0166.51 55a36.72 36.72 0 01-5 10c-.55.77-1.06 1.43-1.51 1.94v6.27a6.1 6.1 0 003.37 5.45l16 8A13.06 13.06 0 0182 88.41 50 50 0 0050.86 0z' fill='#8bc34a'></path></svg><span> Cont: ".$_GET['user']."</span>
                   
                    </a>
                </li>
                   



                </ul>

                </div>
</div>
        <div class='search' role='search' id='search-area'>
          <label for='Search'> Cautare</label>      
        <input type='search' required='required' placeholder='Scrie ce vrei sa cauti' name='Search' id='Search' class='search-field' value=''>
       
       
                   
                  
               
            </div> 
   
</div>
</div> 
            </div>
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
                <svg id='icon-nav-account' viewBox='0 0 100 100'><path d='M35.12 78.4L20.2 86.54a14.14 14.14 0 00-2.39 1.7 50 50 0 0064.2.17 13.57 13.57 0 00-2.63-1.76l-16-8A6.09 6.09 0 0160 73.21v-6.27A23 23 0 0061.55 65a37 37 0 005-10 5 5 0 003.56-4.77v-6.7a5 5 0 00-1.67-3.71v-9.67s2-15-18.4-15-18.43 15-18.43 15v9.67a5 5 0 00-1.67 3.71v6.69a5 5 0 002.31 4.21 33.09 33.09 0 006 12.51v6.12a6.09 6.09 0 01-3.13 5.34z' fill='#edeada'></path><path d='M50.86 0a50 50 0 00-33 88.22 13 13 0 012.37-1.69l14.89-8.13a6.08 6.08 0 003.17-5.34v-6.12a33.19 33.19 0 01-6-12.51 5 5 0 01-2.31-4.21v-6.69a5 5 0 011.67-3.71v-9.67s-2-15.06 18.4-15.06S68.4 30.15 68.4 30.15v9.67a5 5 0 011.67 3.71v6.69A5 5 0 0166.51 55a36.72 36.72 0 01-5 10c-.55.77-1.06 1.43-1.51 1.94v6.27a6.1 6.1 0 003.37 5.45l16 8A13.06 13.06 0 0182 88.41 50 50 0 0050.86 0z' fill='#8bc34a'></path></svg><span> Cont: ".$_GET['user']."</span>
                </a>
            </li>
            <li class='Home'>
                    <a id='Favorite'>
                    <svg id='icon-nav-articles' viewBox='0 0 100 100'><path d='M8.93 100A8.81 8.81 0 010 91.38V51.72h17.86v39.66A8.81 8.81 0 018.93 100z' fill='#e26b00'></path><path d='M17.86 0H100v18.97H17.86z' fill='#cec9ae'></path><path d='M17.86 60.34v31A8.81 8.81 0 018.93 100h82.16a8.76 8.76 0 008.91-8.6v-69H17.86z' fill='#ff8200'></path><path d='M17.86 18.97H100v3.45H17.86z' fill='#f4f3ed'></path><path d='M28.58 27.86h21.43v23.47H28.58z' fill='#cec9ae'></path><g fill='#edeada'><path d='M86.21 31.31H58.62a1.73 1.73 0 010-3.45h27.59a1.73 1.73 0 010 3.45zM86.21 41.32H58.62a1.73 1.73 0 010-3.45h27.59a1.73 1.73 0 010 3.45zM86.21 51.33H58.62a1.72 1.72 0 110-3.44h27.59a1.72 1.72 0 110 3.44zM86.24 61.34h-56a1.72 1.72 0 010-3.44h56a1.72 1.72 0 010 3.44zM57.15 71.36H30.36a1.73 1.73 0 110-3.45h26.79a1.73 1.73 0 110 3.45zM57.15 81.37H30.36a1.73 1.73 0 110-3.45h26.79a1.73 1.73 0 110 3.45zM57.15 91.38H30.36a1.73 1.73 0 110-3.45h26.79a1.73 1.73 0 110 3.45z'></path></g><path d='M67.24 67.91h20.69v23.8H67.24z' fill='#cec9ae'></path><path d='M31.19 6h48.27a3.44 3.44 0 013.45 3.4 3.45 3.45 0 01-3.45 3.45H31.19a3.46 3.46 0 01-3.45-3.45A3.45 3.45 0 0131.19 6z' fill='#606060'></path></svg> <span class>Favorite</span>
                    </a>
                </li>
                    </ul>
                    </div>
                    </div>
                    
       
                    <div class='search' role='search' id='search-area'>
                    <label for='Search'> Cautare</label>  
                    <input type='search' required='required' placeholder='Scrie ce vrei sa cauti' name='Search' id='Search' class='search-field' value=''>
                   
                    
               
            </div>            
                    ";
                   
                   









        }
        else {echo "error";}
?>

</header> 



      <?php 
      if(verify($_GET['user'])==0){ echo  "
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
        <script src='/MUM/Js/AfisareGenuri.js'></script>
        <script src='/MUM/Js/AfisareArtisti.js'></script>
        <script src='/MUM/Js/AfisareAlbume.js'></script>
        <script src='/MUM/Js/AfisareAlbumSolo.js'></script>
        <script src='/MUM/Js/AfisareFavorite.js'></script>
       
        
       
<script src='/MUM/Js/AfisareMelodii.js'></script>
<script src='/MUM/Js/InserareMelodie.js'></script>
<script src='/MUM/Js/Search.js'></script>
<script>
function insertLista(){
    var modal = document.getElementById('myModalInsertLista');
   
    
    var span = document.getElementsByClassName('closeInsertLista')[0];
    var insert=document.getElementById('InserareListaNoua');
    modal.style.display = 'block';
    
    span.onclick = function() {
      modal.style.display = 'none';
    }

    insert.onclick = function() {var name=document.getElementById('ListaNouaInserare').value;var user=$('#user').attr('value');
        modal.style.display = 'none';
    event.preventDefault(); 
    $.ajax({
    type: 'POST',
    //Data will be sent to 
    url: '/MUM/PhpMusic/AddLista.php',
    //Data, that will be sent
    data: {
        user: user,
        name: name 
    },
    //If result found, this funtion will be called.
    success: function(html) {
        console.log(html);
        if (html == 1) {

            alert('Succes!');
            
    
    
        } else if (html == 2) {
            alert('Fail!');
        }
        var a=document.createElement('script');
             a.src='/Mum/Js/AfisareFavoriteAll.js';
             document.body.appendChild(a);
    }
});  }


    
    window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = 'none';
        }
      }

    }
</script>
<script>
function afisarefav(current){
 var modal = document.getElementById('myModalFav');
 var btn = document.getElementById('myBtn');
 var id=current.value;
 var span = document.getElementsByClassName('closeFav')[0];
 var salvare=document.getElementById('AdaugareFav');
 modal.style.display = 'block';
 
 span.onclick = function() {
   modal.style.display = 'none';
 }

salvare.onclick=function (){
  modal.style.display = 'none';
var lista=document.getElementById('Lista').value;
var user=$('#user').attr('value');event.preventDefault();
if(document.getElementById('SearchConfirmNumber').value == '1')
  {
$.ajax({

type: 'POST',
//Data will be sent to 
url: '/MUM/PhpMusic/AddFavorite.php',
//Data, that will be sent
data: {
    id: id,
    user: user,
    lista: lista

},
//If result found, this funtion will be called.
success: function(html) {
    console.log(html);
    if (html == 1) {

        alert('Succes!');
        


    } else if (html == 2) {
        alert('Fail!');
    }
    var a=document.createElement('script');
             a.src='/Mum/Js/Search.js';
             document.body.appendChild(a);
             $('#Search').keyup();
            $('#tabelFavorite').hide();
            $('#tabelAfisare').hide();

}
});
  }
  else 
  if((document.getElementById('SearchConfirmNumber').value == '0')||(document.getElementById('MelodieConfirmNumber').value == '1') || (document.getElementById('AlbumConfirmNumber').value = '1') ||
  (document.getElementById('GenConfirmNumber').value == '1') ||
  (document.getElementById('ArtistConfirmNumber').value == '1') ||
  (document.getElementById('FavoriteConfirmNumber').value == '1')) { $.ajax({

        type: 'POST',
        //Data will be sent to 
        url: '/MUM/PhpMusic/AddFavorite.php',
        //Data, that will be sent
        data: {
            id: id,
            user: user,
            lista: lista

        },
        //If result found, this funtion will be called.
        success: function(html) {
            console.log(html);
            if (html == 1) {

                alert('Succes!');



            } else if (html == 2) {
                alert('Fail!');
            }
            var a=document.createElement('script');
             a.src='/Mum/Js/AfisareMelodii.js';
             document.body.appendChild(a);
            $('#tabelFavorite').hide();
            $('#tabelSearch').hide();

        }
    });} 
}
 window.onclick = function(event) {
   if (event.target == modal) {
     modal.style.display = 'none';
   }
 }

}

</script>
<script>
function logout(){

    window.location.href = 'http://localhost/MUM/Pages/HomePage.php';
}
function AddFavorite() {


    var id = name;
    var user ='".$_GET['user']."';
    console.log(user);
  if(document.getElementById('SearchConfirmNumber').value == '1')
  {
    $.ajax({

        type: 'POST',
        //Data will be sent to 
        url: '/MUM/PhpMusic/AddFavorite.php',
        //Data, that will be sent
        data: {
            id: id,
            user: user

        },
        //If result found, this funtion will be called.
        success: function(html) {
            console.log(html);
            if (html == 1) {

                alert('Succes!');



            } else if (html == 2) {
                alert('Fail!');
            }
            var a=document.createElement('script');
             a.src='/Mum/Js/Search.js';
             document.body.appendChild(a);
             $('#Search').keyup();
            $('#tabelFavorite').hide();
            $('#tabelAfisare').hide();

        }
    });

}

  
  else  if((document.getElementById('SearchConfirmNumber').value == '0')||(document.getElementById('MelodieConfirmNumber').value == '1') || (document.getElementById('AlbumConfirmNumber').value = '1') ||
  (document.getElementById('GenConfirmNumber').value == '1') ||
  (document.getElementById('ArtistConfirmNumber').value == '1') ||
  (document.getElementById('FavoriteConfirmNumber').value == '1')) { $.ajax({

        type: 'POST',
        //Data will be sent to 
        url: '/MUM/PhpMusic/AddFavorite.php',
        //Data, that will be sent
        data: {
            id: id,
            user: user

        },
        //If result found, this funtion will be called.
        success: function(html) {
            console.log(html);
            if (html == 1) {

                alert('Succes!');



            } else if (html == 2) {
                alert('Fail!');
            }
            var a=document.createElement('script');
             a.src='/Mum/Js/AfisareMelodii.js';
             document.body.appendChild(a);
            $('#tabelFavorite').hide();
            $('#tabelSearch').hide();

        }
    });} 
}
function deleteFavorite(current) {
    var music = current.value;
    var musicA ='".$_GET['user']."';
  
 if(document.getElementById('FavoriteConfirmNumber').value == '1'){
     $.ajax({

        type: 'POST',

        url: '/MUM/PhpMusic/DeleteFavorite.php',

        data: {
            user: musicA,
            musicIdDelete: music
        },
        //If result found, this funtion will be called.
        success: function(html) {
            console.log(html);
            var a=document.createElement('script');
            a.src='/Mum/Js/AfisareFavoriteAll.js';
            document.body.appendChild(a);
       
            $('#tabelAfisare').hide();
            $('#tabelSearch').hide();

           
           
        }
    });} else if(document.getElementById('MelodieConfirmNumber').value == '1') {
        
        $.ajax({

            type: 'POST',
    
            url: '/MUM/PhpMusic/DeleteFavoriteAfisare.php',
    
            data: {
                user: musicA,
                musicIdDelete: music
            },
            //If result found, this funtion will be called.
            success: function(html) {
                console.log(html);
                var a=document.createElement('script');
                a.src='/Mum/Js/AfisareMelodii.js';
                document.body.appendChild(a);
                $('#tabelFavorite').hide();
                $('#tabelSearch').hide();
    
               
               
            }
        });
    } else if(document.getElementById('SearchConfirmNumber').value == '1')
    {
        $.ajax({

            type: 'POST',
    
            url: '/MUM/PhpMusic/DeleteFavoriteAfisare.php',
    
            data: {
                user: musicA,
                musicIdDelete: music
            },
            //If result found, this funtion will be called.
            success: function(html) {
                console.log(html);
                var a=document.createElement('script');
                a.src='/Mum/Js/Search.js';
                document.body.appendChild(a);
                $('#Search').keyup();
                $('#tabelFavorite').hide();
                $('#tabelSearch').show();
    
               
               
            }
        });
  
  }
      

}
 </script>
        <script src='/MUM/Js/UserDetails.js'></script>
       ";}
      else if(verify($_GET['user'])==1){echo "
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
        <script src='/MUM/Js/AdminDetails.js'></script>
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
