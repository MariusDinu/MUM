<?php
include '/xampp/htdocs/MUM/PhpRegister/connect.php';
$user_value=$_GET['user'];
$lista=$_GET['lista'];
header('Content-Type: text/csv;charset=utf-8');
header('Content-Disposition: attachment;filename='.$lista.'.xspf');
header("Pragma: no-cache");
header("Expires: 0");
ob_end_clean();
$output=fopen("php://output","w");
fwrite($output, "<?xml version='1.0' encoding='UTF-8'?> \n");
fwrite($output, "<playlist version='1' xmlns='http://xspf.org/ns/0/'>\n");
fwrite($output,"<trackList> \n");
  
   
$sql="SELECT Id,NumeMelodie,ListaFavorite,Album,Gen,Artist,Local from favorite where ListaFavorite='$lista' and UserName='$user_value'";
$bazaUser= new BD();
$cerUser = $bazaUser::obtine_conexiune();
$cerereUser=$cerUser->prepare($sql);
$cerereUser->execute();
while($row=$cerereUser->fetch(PDO::FETCH_ASSOC)){
{  if($row['NumeMelodie']!='')
   { $text="<track>".$row['Local']."</track> \n";
    fwrite($output,$text);}}
}
fwrite($output,"</trackList>\n");
fwrite($output,"</playlist>\n");
fclose($output);

?>
