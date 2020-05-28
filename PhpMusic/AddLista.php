<?php 
include "../PhpRegister/connect.php";
function addLista(){
$user_value=$_POST['user'];
$lista=$_POST['name'];
$baza= new BD();
 $sql= "INSERT INTO `favorite`( `NumeMelodie`, `UserName`, `ListaFavorite`, `Album`, `Gen`, `Artist`, `Local`) VALUES ('','$user_value','$lista','','','','')";
 $cerere = $baza::obtine_conexiune()->prepare($sql);
 if($cerere->execute())
        return 1;
        else return 2;

}
?>
<?php
$a=addLista();
if($a==1)
echo '1';
else echo '2';
?>