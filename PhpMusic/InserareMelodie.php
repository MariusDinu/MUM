<?php
include "/xampp/htdocs/MUM/PhpRegister/connect.php";
function adaugaMelodie(){
  
    $name=$_POST['nameM'];
    $artist=$_POST['artistM'];
    $gen=$_POST['genM'];
    $link='a';
    $album=$_POST['albumM'];
    $data=$_POST['dataM'];
    $local=$_POST['local'];

     $baza= new BD();
      $sqlLink = "INSERT INTO `music`( `Name`, `Artist`, `Album`, `Gen`, `Date`, `Local`) VALUES ('$name','$artist','$album','$gen','$data','$link')";
      $adresa="/MUM/PhpMusic/uploads/".$local;
      $sqlLocal = "INSERT INTO `music`( `Name`, `Artist`, `Album`, `Gen`, `Date`, `Local`) VALUES ('$name','$artist','$album','$gen','$data','$adresa')";
    
      
     
       
        $cerere = $baza::obtine_conexiune()->prepare($sqlLocal);
        $cerere->execute();
       


      
}

 ?>
 <?php
 adaugaMelodie();

 
 
?>