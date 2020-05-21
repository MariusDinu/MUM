<?php 

include '../PhpRegister/connect.php';
function detailsUser(){

    $user=$_POST['user'];
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $parola=$_POST['parola'];
    $tara=$_POST['tara'];
    $baza= new BD();
   $sql="SELECT * from register where UserName like '$user'";
   
   $cer= $baza::obtine_conexiune();
   $cerere=$cer->prepare($sql);
   $cerere->execute();
   $abc=$cerere->fetchAll();
   foreach( $cer->query($sql) as $row){
   $sqlname = "UPDATE `register` SET `UserName`='$name' WHERE Id='".$row['Id']."'";
      

    $sqlemail = "  UPDATE `register` SET `Email`='$email' WHERE Id='".$row['Id']."'";
    $sqlparola = "  UPDATE `register` SET `UserPassword`='$parola' WHERE Id='".$row['Id']."'";
    $sqltara = "  UPDATE `register` SET `Country`='$tara' WHERE Id='".$row['Id']."'";
    $sqlparolaConfirm="  UPDATE `register` SET `ConfirmUserPassword`='$parola' WHERE Id='".$row['Id']."'";
     
 if($name==""){}else
   {$cerereAdmin=$cer->prepare($sqlname);
       $cerereAdmin->execute();}
  if($email==""){}
     else
       {$cerereAdmin=$cer->prepare($sqlemail);
       $cerereAdmin->execute();}
  
  if($parola==""){}
     else
       {$cerereAdmin=$cer->prepare($sqlparola);
       $cerereAdmin->execute();
       $cerereAdmin=$cer->prepare($sqlparolaConfirm);
       $cerereAdmin->execute();
    
    }
  
  if($tara==""){}
     else
       {$cerereAdmin=$cer->prepare($sqltara);
       $cerereAdmin->execute();}
  
     
    
}
    
   
  }


  
  ?>





?>
<?php

detailsUser();


?>