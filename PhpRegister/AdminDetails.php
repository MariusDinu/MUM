<?php 

include '../PhpRegister/connect.php';
function detailsAdmin(){

    $user=$_POST['user'];
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $parola=$_POST['parola'];
    $tara=$_POST['tara'];
    $baza= new BD();
   $sql="SELECT * from register where UserName like '$user'";
   $sqlVerifyName="SELECT * from register where UserName like '$name'";
   $sqlVerifyEmail="SELECT * from register where Email like '$email'";
 
   $cer = $baza::obtine_conexiune();
   $abc=$cer->prepare($sqlVerifyName);
   $abc->execute();
   if($abc->rowCount()==1)
{return 3;}
else

{ 
    $abc=$cer->prepare($sqlVerifyEmail);
    $abc->execute();
    if($abc->rowCount()==1){return 2;}
  else 
   {
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
  
     
  return 1;
}
    
}


}
  }


  
  ?>






<?php

$a=detailsAdmin();
if($a==1)
{echo '1';}
else if($a==3)
{echo'3';}
else {echo '2';}


?>