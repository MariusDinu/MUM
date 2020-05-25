<?php
include "/xampp/htdocs/MUM/PhpRegister/connect.php";
function adaugaMelodie(){
    
    $name=$_POST['nameM'];
    $artist=$_POST['artistM'];
    $gen=$_POST['genM'];
    $link=$_POST['linkM'];
    $album=$_POST['albumM'];
    $data=$_POST['dataM'];
    $local=$_POST['local'];

      $baza= new BD();
      $sqlLink = "INSERT INTO `music`( `Name`, `Artist`, `Album`, `Gen`, `Date`, `Local`) VALUES ('$name','$artist','$album','$gen','$data','$link')";
      $adresa="/MUM/PhpMusic/uploads/".$local;
      $sqlLocal = "INSERT INTO `music`( `Name`, `Artist`, `Album`, `Gen`, `Date`, `Local`) VALUES ('$name','$artist','$album','$gen','$data','$adresa')";
     /* if($local=="")
      {$cerere = $baza::obtine_conexiune()->prepare($sqlLink);
      if($cerere->execute())
      return 1;
      else return 2;}
      else {*/
       
        $cerere = $baza::obtine_conexiune()->prepare($sqlLocal);
        if($cerere->execute())
        return 1;
        else return 2;
        

    /*  }*/
}

 ?>
 <?php
 $b=adaugaMelodie();
 if($b==1) 
{ echo '1'  ;} 
 else echo '2';
 
 
?>