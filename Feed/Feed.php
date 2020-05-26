<?php 


$bazaAdmin= new BD();
$sqlAdmin = "SELECT * FROM music ORDER BY Date limit 13";
$cerAdmin = $bazaAdmin::obtine_conexiune();
$cerereAdmin=$cerAdmin->prepare($sqlAdmin);
$cerereAdmin->execute();
$abc=$cerereAdmin->fetchAll();

echo "<?xml version='1.0' encoding='UTF-8'?> <?xml-stylesheet type='text/css' href='/MUM/Css/Feed.css' ?>".PHP_EOL;
echo "<rss version='2.0'>" . PHP_EOL;
echo "<channel>";
echo "<title>Cele mai noi melodii </title>";
echo "<description>asdasdasdasd</description>";
echo "<language> en-us</language>";



foreach( $cerAdmin->query($sqlAdmin) as $row){

echo "<item xmlns:dc='".$row['Id']."'>";
echo "<title>".$row['Name']."</title>";
echo "</item>";
}


echo "</channel>";
echo "</rss>";
?>