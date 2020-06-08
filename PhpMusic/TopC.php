<?php 
require_once '../vendor/autoload.php';
include '../PhpRegister/connect.php';
if($_GET['button']=='csv')
{

header('Content-Type: text/csv;charset=utf-8');
header('Content-Disposition: attachment;filename=Top10.csv');
header("Pragma: no-cache");
header("Expires: 0");
ob_end_clean();
$output=fopen("php://output","w");
fputcsv($output,array('Id','NumeMelodie','ListaFavorite','Album','Gen','Artist'));
$sql="SELECT * FROM commentmusic ORDER BY Date Asc limit 10";
$bazaUser= new BD();
$cerUser = $bazaUser::obtine_conexiune();
$cerereUser=$cerUser->prepare($sql);
$cerereUser->execute();
while($row=$cerereUser->fetch(PDO::FETCH_ASSOC)){
{if($output!='')fputcsv($output,$row);}
}
fclose($output);
}
else 
if($_GET['button']=='pdf')
{$mpdf = new \Mpdf\Mpdf();
$bazaAdmin= new BD();
$sqlAdmin = "SELECT * FROM commentmusic ORDER BY Date Asc limit 10";
$cer = $bazaAdmin::obtine_conexiune();
$cerere=$cer->prepare($sqlAdmin);
$cerere->execute();



$data ='<strong>Top 10 Comentarii</strong> <br /> <br />';
while($row=$cerere->fetch(PDO::FETCH_ASSOC)){
    $data .=' <strong>UserName</strong> '.$row['UserName']."<br />";
    $data .='<strong>Comentariu</strong> '.$row['Comment']."<br />";
    $id=$row['IdMusic'];
    $sqlMusic="Select * from music where Id='$id'";
    foreach( $cer->query($sqlMusic) as $row){
    
$data .=' <strong>Name</strong> '.$row['Name']."<br />";
$data .=' <strong>Artist</strong> '.$row['Artist']."<br />";
$data .=' <strong>Gen</strong> '.$row['Gen']."<br />";
$data .=' <strong>Album</strong> '.$row['Album']."<br />";
$data .=' <strong>Data</strong> '.$row['Date']."<br />";
$data .=' <strong>Local</strong> '.$row['Local']."<br /> <br />";}
}

$mpdf->WriteHTML($data);
$mpdf->Output('top10Comments.pdf','D');


}

?>