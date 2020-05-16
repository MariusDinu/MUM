<?php
include "/xampp/htdocs/MUM/PhpRegister/connect.php";
function cautaUsername(){
                            $user_name=$_POST['username'];
                             $baza= new BD();
                             $sql = "SELECT * FROM Register where UserName='$user_name'";
                             $cerere = $baza::obtine_conexiune()->prepare($sql);
                             $cerere->execute();
                       if($cerere->rowCount()==1)
                        {return 1;}
                       else {return 2;}
}
if (isset($_POST['username'])) 
 { $b=cautaUsername();
?>
                        
 <a onclick="fillUsername()">
<?php  if($b==1) 
echo 'Acest User este deja folosit!'; 
 else echo 'Userul este ok!'
  ?>
 </a>
 <?php }?>