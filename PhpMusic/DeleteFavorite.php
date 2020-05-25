<?php 
include "AfisareMelodii.php";

function deleteMelodie(){
  
  $musicId=$_POST['musicIdDelete'];
  $user_value=$_POST['user'];
  $bazaDelete= new BD();
  $sqlDelete = "DELETE FROM `favorite` WHERE id='$musicId' and UserName='$user_value'";
  $cerDelete = $bazaDelete::obtine_conexiune();
  $cerereAdmin=$cerDelete->prepare($sqlDelete);
  $cerereAdmin->execute();

  
  
}
?>

<?php
deleteMelodie();
?>

<?php  ?>