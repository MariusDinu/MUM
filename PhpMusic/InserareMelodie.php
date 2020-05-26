<?php
include "/xampp/htdocs/MUM/PhpRegister/connect.php";
function adaugaMelodie(){
  
    $name=$_POST['nameM'];
    $artist=$_POST['artistM'];
    $gen=$_POST['genM'];
    $link=$_POST['local'];
    $album=$_POST['albumM'];
    $data=$_POST['dataM'];
    $local=$_POST['local'];

     $baza= new BD();
      $sqlLink = "INSERT INTO `music`( `Name`, `Artist`, `Album`, `Gen`, `Date`, `Local`) VALUES ('$name','$artist','$album','$gen','$data','$link')";
      $adresa="/MUM/PhpMusic/uploads/".$local;
      $sqlLocal = "INSERT INTO `music`( `Name`, `Artist`, `Album`, `Gen`, `Date`, `Local`) VALUES ('$name','$artist','$album','$gen','$data','$adresa')";
    
      
     
       
        $cerere = $baza::obtine_conexiune()->prepare($sqlLink);
        if($cerere->execute())
        return 1;
        else return 2;
       


      
}

 ?>
 <?php
 $a=adaugaMelodie();
if ($a==1)
echo '1';
else echo '2';
 
 
?>