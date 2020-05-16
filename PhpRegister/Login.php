<?php
include "/xampp/htdocs/MUM/PhpRegister/connect.php";
function cautaEmailAndPass(){
      $user_value=$_POST['user'];
      $pass_value=$_POST['password'];
      $baza= new BD();
      $sql = "SELECT * FROM Register where UserName='$user_value' and UserPassword='$pass_value'";
      $cerere = $baza::obtine_conexiune()->prepare($sql);
      $cerere->execute();
if($cerere->rowCount()==1)
 {return 1;}
else {return 2;}
                           }
  if (isset($_POST['user'])) 
 { $a=cautaEmailAndPass();
?>
                        
 
 
<?php  if($a==1) 
{ echo '1'  ;} 
 else echo '0'
  ?>

 <?php } ?>
                 