<?php 


$bazaAdmin= new BD();
$sqlAdmin = "SELECT * FROM commentmusic ORDER BY Date Asc limit 10";
$cerAdmin = $bazaAdmin::obtine_conexiune();
$cerereAdmin=$cerAdmin->prepare($sqlAdmin);
$cerereAdmin->execute();
$abc=$cerereAdmin->fetchAll();

echo "<?xml version='1.0' encoding='UTF-8'?> <?xml-stylesheet type='text/css' href='/MUM/Css/Feed.css' ?>".PHP_EOL;
echo "<rss version='2.0'>" . PHP_EOL;
echo "<channel>";
echo "<title>Cele mai noi comentarii </title>";
echo "<description>asdasdasdasd</description>";
echo "<language> en-us</language>";



foreach( $cerAdmin->query($sqlAdmin) as $row){

echo "<item xmlns:dc='".$row['Id']."'>";  
$id=$row['IdMusic']; 
$user=$row['UserName']; 
$comm=$row['Comment'];
$sqlMusic = "SELECT * FROM music where Id=$id";
$cerereMusic=$cerAdmin->prepare($sqlMusic);
$cerereMusic->execute();
$abc=$cerereMusic->fetchAll();
foreach( $cerAdmin->query($sqlMusic) as $row){
//echo '1';
echo "<title>User:$user $comm pentru ".$row['Name']."</title>";
}
echo "</item>";
}


echo "</channel>";
echo "</rss>";
?>