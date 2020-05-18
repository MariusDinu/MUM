<?php 

include "connect.php";


function detailsUser(){

    /*$user=$_POST['user'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $parola=$_POST['parola'];
    $tara=$_POST['tara'];*/
    $baza= new BD();
    
   
   $cer= $baza::obtine_conexiune();
 
   
   
    $sqlname = "   UPDATE `register` SET `Name`='asdasdasdasdasd' WHERE Id='1' ";
  //  $sqlemail = "  UPDATE `register` SET `Email`='$name' WHERE UserName='b'";
  //  $sqlparola = "  UPDATE `register` SET `UserPassword`='$parola' WHERE UserName='b'";
  ///  $sqltara = "  UPDATE `register` SET `Country`='$name' WHERE UserName='b'";
  //  $sqlparolaConfirm="  UPDATE `register` SET `ConfirmUserPassword`='$parola' WHERE UserName='b'";
     
 
  
 /* if($email==""){}
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
  */$cerereAdmin=$cer->prepare($sqlname);
       $cerereAdmin->execute();
     
    
    
    
   
  }


  detailsUser();
  ?>





