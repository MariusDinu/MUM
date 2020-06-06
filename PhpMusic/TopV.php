<?php
require_once '../vendor/autoload.php';

include '/xampp/htdocs/MUM/PhpRegister/connect.php';
if($_GET['button']=='csv')
{

header('Content-Type: text/csv;charset=utf-8');
header('Content-Disposition: attachment;filename=Top10.csv');
header("Pragma: no-cache");
header("Expires: 0");
ob_end_clean();
$output=fopen("php://output","w");
fputcsv($output,array('Id','NumeMelodie','ListaFavorite','Album','Gen','Artist'));
$sql="SELECT Id,count(*)as number,IdMelodie FROM `views` group by IdMelodie order by number DESC Limit 6";
$bazaUser= new BD();
$cerUser = $bazaUser::obtine_conexiune();
$cerereUser=$cerUser->prepare($sql);
$cerereUser->execute();
foreach( $cerUser->query($sql) as $row){
$id=$row['IdMelodie'];
$sqlMusic="Select * from music where Id='$id'";
foreach( $cerUser->query($sqlMusic) as $row){
while($row=$cerereUser->fetch(PDO::FETCH_ASSOC)){
{if($output!='')fputcsv($output,$row);}
}}}
fclose($output);
}
else 
if($_GET['button']=='pdf')
{
   
    $mpdf = new \Mpdf\Mpdf();
  
    
    $sql = "SELECT Id,count(*)as number,IdMelodie FROM `views` group by IdMelodie order by number DESC Limit 6";
    $bazaUser= new BD();
    $cerUser = $bazaUser::obtine_conexiune();
    $cerereUser=$cerUser->prepare($sql);
    $cerereUser->execute();
    $data.='<strong>Top 6 la Vizualizari</strong> <br /> <br />';
    while($row=$cerereUser->fetch(PDO::FETCH_ASSOC)){
        $id=$row['IdMelodie'];
        $sqlMusic="Select * from music where Id='$id'";
        foreach( $cerUser->query($sqlMusic) as $row){
        
    $data .=' <strong>Name</strong> '.$row['Name']."<br />";
    $data .=' <strong>Artist</strong> '.$row['Artist']."<br />";
    $data .=' <strong>Gen</strong> '.$row['Gen']."<br />";
    $data .=' <strong>Album</strong> '.$row['Album']."<br />";
    $data .=' <strong>Data</strong> '.$row['Date']."<br />";
    $data .=' <strong>Local</strong> '.$row['Local']."<br /> <br />";}
    }
    $mpdf->WriteHTML($data);
    $mpdf->Output('top10Views.pdf','D');

}

?>
