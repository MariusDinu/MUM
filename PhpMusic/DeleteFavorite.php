<?php 
include '../PhpRegister/connect.php';

function deleteMelodie(){
  
  $musicId=$_POST['musicIdDelete'];
  $user_value=$_POST['user'];
  $bazaDelete= new BD();
  $sqlDelete = "DELETE FROM `favorite` WHERE NumeMelodie='$musicId' and UserName='$user_value'";
  $cerDelete = $bazaDelete::obtine_conexiune();
  $cerereAdmin=$cerDelete->prepare($sqlDelete);
 if( $cerereAdmin->execute())
 return 1;
 else return 2;

  
  
}
?>

<?php
$b=deleteMelodie();
if($b==1)
echo '1';
else echo '2';
?>

<?php  ?>