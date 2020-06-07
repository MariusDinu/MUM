<?php 
include '/xampp/htdocs/MUM/PhpRegister/connect.php';
function showNewList(){
$bazaUsere= new BD();
$a=$_POST['user'];
$sqlSearch="Select * from favorite where UserName='$a' group by ListaFavorite ";
$cerUsere = $bazaUsere::obtine_conexiune();
$cerereUsere=$cerUsere->prepare($sqlSearch);
$cerereUsere->execute(); 
$abc=$cerereUsere->fetchAll();
foreach($cerUsere->query($sqlSearch) as $row){ 
$b=$row['ListaFavorite'];
echo "<option value='$b'> $b </option> ";
}}
?>
<?php
showNewList();
?>