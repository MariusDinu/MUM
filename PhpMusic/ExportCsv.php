<?php
include '/xampp/htdocs/MUM/PhpRegister/connect.php';
$user_value=$_GET['user'];
$lista=$_GET['lista'];
header('Content-Type: text/csv;charset=utf-8');
header('Content-Disposition: attachment;filename='.$lista.'.csv');
header("Pragma: no-cache");
header("Expires: 0");
ob_end_clean();
$output=fopen("php://output","w");
fputcsv($output,array('Id','NumeMelodie','ListaFavorite','Album','Gen','Artist'));
$sql="SELECT Id,NumeMelodie,ListaFavorite,Album,Gen,Artist from favorite where ListaFavorite='$lista' and UserName='$user_value'";
$bazaUser= new BD();
$cerUser = $bazaUser::obtine_conexiune();
$cerereUser=$cerUser->prepare($sql);
$cerereUser->execute();
while($row=$cerereUser->fetch(PDO::FETCH_ASSOC)){
    if($row['NumeMelodie']!='')
{if($output!='')fputcsv($output,$row);}
}
fclose($output);

?>
