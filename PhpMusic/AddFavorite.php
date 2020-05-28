<?php 
include '/xampp/htdocs/MUM/PhpRegister/connect.php';
function addFavorite(){
    $user_value=$_POST['user'];
    $favorit=$_POST['id'];
    $lista=$_POST['lista'];
    $bazaUser= new BD();
    $sqlUser = "SELECT * FROM music where Id='$favorit'";
   
    $cerUser = $bazaUser::obtine_conexiune();
    $cerereUser=$cerUser->prepare($sqlUser);
    $cerereUser->execute();
    $abc=$cerereUser->fetchAll();
    foreach( $cerUser->query($sqlUser) as $row){
        $name=$row['Name'];
        $artist=$row['Artist'];
        $gen=$row['Gen'];
        $album=$row['Album'];
        $local=$row['Local'];
         $sqlFavorit = "INSERT INTO `favorite`(`NumeMelodie`, `UserName`, `ListaFavorite`, `Album`, `Gen`, `Artist`, `Local`) VALUES ('$name','$user_value','$lista','$album','$gen','$artist','$local')";
        $cerereUser=$cerUser->prepare($sqlFavorit);
        if($cerereUser->execute())
        return 1;
        else return 2;

    }



}

?>

<?php
$user_value=$_POST['user'];
$a=addFavorite();
if($a==1)
echo '1';
else echo '2';
?>