<?php 


$bazaAdmin= new BD();
$sqlViews = "SELECT Id,count(*)as number,IdMelodie FROM `views` group by IdMelodie order by number DESC Limit 3";
$cerAdmin = $bazaAdmin::obtine_conexiune();
$cerereAdmin=$cerAdmin->prepare($sqlViews);
$cerereAdmin->execute();
$abc=$cerereAdmin->fetchAll();

echo "<?xml version='1.0' encoding='UTF-8'?> <?xml-stylesheet type='text/css' href='/MUM/Css/Feed.css' ?>".PHP_EOL;
echo "<rss version='2.0'>" . PHP_EOL;
echo "<channel>";
echo "<title>Cele mai noi melodii </title>";
echo "<description>asdasdasdasd</description>";
echo "<language> en-us</language>";



foreach( $cerAdmin->query($sqlViews) as $row){

echo "<item xmlns:dc='".$row['Id']."'>";
$id=$row['IdMelodie'];
$view=$row['number'];
$sqlMusic="Select * from music where Id='$id'";
foreach( $cerAdmin->query($sqlMusic) as $row){
echo "<title>Nume: ".$row['Name']." Views: ".$view."</title>";}
echo "</item>";
}


echo "</channel>";
echo "</rss>";
?>