<?php 
include '/xampp/htdocs/MUM/PhpRegister/connect.php';
function addComentariu(){
    $user_value=$_POST['user'];
    $text=$_POST['text'];
    $id=$_POST['music'];
    $bazaUser= new BD();
    $sqlUser = "INSERT INTO `commentmusic`( `IdMusic`, `UserName`, `Comment`, `Date`) VALUES ($id,'$user_value','$text',CURRENT_DATE)";
   
    $cerUser = $bazaUser::obtine_conexiune();
    $cerereUser=$cerUser->prepare($sqlUser);
   
    if( $cerereUser->execute()){
        return 1;
    }
    else return 2;
    



}

?>

<?php 
$a=addComentariu();
if($a==1)
echo '1';
else echo '2';
?>