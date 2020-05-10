<?php
include "connect.php";

function afisareMelodii(){
  
    $baza= new BD();
    $sql = "SELECT * FROM music order by id";
    $cer = $baza::obtine_conexiune();
    $cerere=$cer->prepare($sql);
    $cerere->execute();
    $abc=$cerere->fetchAll();
    foreach( $cer->query($sql) as $row){
      echo "<a href='/MUM/Pages/Music.php?id=".$row['Id']."&user=".$row['Name']."'>". $row['Id'],$row['Name']."</a> ";
      
    }
}
?>
<a onclick="showMusic()">
<?php
afisareMelodii(); ?>  
</a>
<?php  ?>