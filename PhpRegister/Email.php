<?php
include "connect.php";
function cautaEmail(){
     $email_value=$_POST['email'];
      $baza= new BD();
      $sql = "SELECT * FROM Register where Email='$email_value'";
      $cerere = $baza::obtine_conexiune()->prepare($sql);
      $cerere->execute();
if($cerere->rowCount()==1)
 {return 1;}
else {return 2;}
                           }
  if (isset($_POST['email'])) 
 { $a=cautaEmail();
?>
                        
 <a onclick="fillEmail()">
<?php  if($a==1) 
echo 'Acest email este deja folosit!'; 
 else echo 'Emailul este ok!'
  ?>
 </a>
 <?php } ?>
                        