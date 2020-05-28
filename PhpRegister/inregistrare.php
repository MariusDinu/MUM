<?php

include '../PhpRegister/connect.php';
function inregistrare(){
    
     $email_value=$_POST['email'];
     $user_value=$_POST['username'];
     $pass_value=$_POST['password'];
     $passConfirm_value=$_POST['confirmPassword'];
     $country=$_POST['country'];
    
      $baza= new BD();
      $sql = "INSERT INTO register(Email,UserName,UserPassword,ConfirmUserPassword,Country,AdminLevel) values (:email,:username,:pass,:passConfirm,:country,:adminLevel)";
      $cerere = $baza::obtine_conexiune()->prepare($sql);
      if( $cerere->execute([
   'email' => $email_value,
   'username' => $user_value,
   'pass'=> $pass_value,
   'passConfirm'=>$passConfirm_value,
   'country'=>$country,
   'adminLevel'=>0]))
   return 1;
   else return 2;
}
 
 
?>

<?php
 $a=inregistrare();
 if($a==1)
 echo '1';
 else echo '2';


  ?>
 
 
