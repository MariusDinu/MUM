<?php
include "/xampp/htdocs/MUM/PhpRegister/connect.php";
function adaugaMelodie(){
    
    $name=$_POST['nameM'];
    $artist=$_POST['artistM'];
    $gen=$_POST['genM'];
    $link=$_POST['linkM'];
    $album=$_POST['albumM'];
    $data=$_POST['dataM'];
    $musicA=$_POST['musicAdmin'];

      $baza= new BD();
      $sql = "INSERT INTO `music`( `Name`, `Artist`, `Album`, `Gen`, `Date`, `Local`) VALUES ('$name','$artist','$album','$gen','$data','$link')";
      $cerere = $baza::obtine_conexiune()->prepare($sql);
      $cerere->execute();
      return 1;
}
 ?>
 <?php
 adaugaMelodie();
?>