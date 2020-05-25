<?php 
include '../PhpRegister/connect.php';

function deleteMelodie(){
  
  $musicId=$_POST['musicIdDelete'];
  $user_value=$_POST['user'];
  $bazaDelete= new BD();
$sqlSearch="SELECT * FROM music where Id=$musicId";

  $cerDelete = $bazaDelete::obtine_conexiune();
  $cerereAdmin=$cerDelete->prepare($sqlSearch);
  foreach( $cerDelete->query($sqlSearch) as $row){
      $name=$row['Name'];
$sqlDelete = "DELETE FROM `favorite` WHERE NumeMelodie='$name' and UserName='$user_value'";
  $cerereAdmin=$cerDelete->prepare($sqlDelete);  
$cerereAdmin->execute();

}
 

  
  
}
?>

<?php
deleteMelodie();

?>

<?php  ?>