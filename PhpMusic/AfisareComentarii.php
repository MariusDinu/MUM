<?php
include '../PhpRegister/connect.php';


function afisareComentarii(){
    $user_value=$_POST['user'];
    $musicId=$_POST['id'];
   
    $bazaUser= new BD();
    $sqlUser = "SELECT * FROM commentmusic where IdMusic='$musicId' order by Date DESC";
    $cerUser = $bazaUser::obtine_conexiune();
    $cerereUser=$cerUser->prepare($sqlUser);
    $cerereUser->execute();
    $abc=$cerereUser->fetchAll();
    foreach( $cerUser->query($sqlUser) as $row){
        $verify=$row['UserName'];
        if($user_value==$verify)
        { echo "<div class='comment' id='".$row['Id']."'>
           <div id='right'>".$row['UserName']." : ".$row['Comment']."  <p class='DateRight'>".$row['Date']."</p></div></div>";}
        else {echo "<div class='comment' id='".$row['Id']."'>
           <div id='left'>".$row['UserName']." : ".$row['Comment']." <p class='DateLeft'>".$row['Date']."</p></div></div>";}
    }
}
?>

<?php
afisareComentarii();
?>