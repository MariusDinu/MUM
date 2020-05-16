<?php 
include "AfisareMelodii.php";

function deleteMelodie(){
  
  $musicId=$_POST['musicIdDelete'];
  $bazaDelete= new BD();
  $sqlDelete = "DELETE FROM `music` WHERE id='$musicId'";
  $cerDelete = $bazaDelete::obtine_conexiune();
  $cerereAdmin=$cerDelete->prepare($sqlDelete);
  $cerereAdmin->execute();

  
  
}
?>

<?php
deleteMelodie();
?>

<?php  ?>