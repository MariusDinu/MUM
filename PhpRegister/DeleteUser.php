<?php 
include '../PhpRegister/connect.php';

function deleteUser(){
  
  $Id=$_POST['userIdDelete'];
  $bazaDelete= new BD();
  $sqlDelete = "DELETE FROM `register` WHERE id='$Id'";
  $cerDelete = $bazaDelete::obtine_conexiune();
  $cerereAdmin=$cerDelete->prepare($sqlDelete);
  $cerereAdmin->execute();

  
  
}
?>

<?php
deleteUser();
?>

<?php  ?>