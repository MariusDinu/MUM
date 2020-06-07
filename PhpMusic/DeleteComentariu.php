<?php 
include '/xampp/htdocs/MUM/PhpRegister/connect.php';
function delComentariu(){
    $user_value=$_POST['user'];
   
    $id=$_POST['id'];
    $bazaUser= new BD();
    $b=verify();
    if($b=='0')

    {$sqlUser = "DELETE FROM `commentmusic` WHERE Id='$id' and UserName='$user_value'";}
    else if($b=='1'){$sqlUser = "DELETE FROM `commentmusic` WHERE Id='$id'";}
   
    $cerUser = $bazaUser::obtine_conexiune();
    $cerereUser=$cerUser->prepare($sqlUser);
   
    if( $cerereUser->execute()){
        return 1;
    }
    else return 2;
    



}
function verify(){
    $user=$_POST['user'];
    
    $baza= new BD();
    $sql = "SELECT * from register where UserName='$user'";
    $cer = $baza::obtine_conexiune();
    $cerere=$cer->prepare($sql);
    $cerere->execute();
    if($cerere->rowCount()==1)
    foreach ($cer->query($sql) as $row)
    {
        if($row['AdminLevel']==1)
        return 1;
        else return 0;
       
    }
    else return 3;
    }
?>

<?php 
$a=delComentariu();
if($a==1)
echo '1';
else echo '2';
?>