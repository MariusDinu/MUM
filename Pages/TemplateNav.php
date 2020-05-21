<header class="site-header">
        <div class="logo2">
            <a href="/">
                <svg class="icon-logo-text">
                <a href="/MUM/Pages/HomePage.php"> </a>
            </svg>
            </a>
            
 <div class="search" role="search" id="search-area">
                
                <input type="search" required="required" name="" id="Search" class="search-field" value="">
               
                <button type="submit" class="button-search">
                    <span class="screen-reader-text">Search</span>
                    
                </button>
           
        </div>
    </div>
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
foreach ($cer->query($sql) as $row)
{
    if($row['Admin']==1)
    return 1;
    else return 0;
   
}

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
                        <a href='/MUM/Pages/HomePage.php'>
                            <svg id='icon-nav-videos' viewBox='0 0 40 40'><g clip-path='url(#clip0)'><path d='M20 39c10.493 0 19-8.507 19-19S30.493 1 20 1 1 9.507 1 20s8.507 19 19 19z'></path><path d='M20 33c7.18 0 13-5.82 13-13S27.18 7 20 7 7 12.82 7 20s5.82 13 13 13z'></path><path d='M17.1 17v6.6c0 .8.8 1.2 1.5.9l6-3.3c.7-.4.7-1.4 0-1.7l-6-3.3c-.7-.4-1.5 0-1.5.8z'></path></g></svg>
                            <span>Useri</span>
                        </a>
                    </li>
                    <li class='Home'>
                        <a href='/MUM/Pages/HomePage.php'>
                            <svg id='icon-nav-videos' viewBox='0 0 40 40'><g clip-path='url(#clip0)'><path d='M20 39c10.493 0 19-8.507 19-19S30.493 1 20 1 1 9.507 1 20s8.507 19 19 19z'></path><path d='M20 33c7.18 0 13-5.82 13-13S27.18 7 20 7 7 12.82 7 20s5.82 13 13 13z'></path><path d='M17.1 17v6.6c0 .8.8 1.2 1.5.9l6-3.3c.7-.4.7-1.4 0-1.7l-6-3.3c-.7-.4-1.5 0-1.5.8z'></path></g></svg>
                            <span>Admin:".$_GET['user']."</span>
                        </a>
                    </li>
                   





                </ul>

            </div>
        </div>";
    
    
    }
        else {

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
                    </div>";

                    echo"<script src='/MUM/Js/AfisareGenuri.js'></script>
                    <script src='/MUM/Js/AfisareArtisti.js'></script>
                    <script src='/MUM/Js/AfisareAlbume.js'></script>
                   ";









        }
?>
</header>