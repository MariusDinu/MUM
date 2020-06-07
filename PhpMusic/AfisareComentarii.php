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
    $b=verify();
    if($b=='0'){
    foreach( $cerUser->query($sqlUser) as $row){
        $verify=$row['UserName'];
        if($user_value==$verify)
        { echo "<div class='comment' id='".$row['Id']."'>
           <div id='right'>".$row['UserName']." : ".$row['Comment']." <button class='deleteComment' id='deleteComment' value='".$row['Id']."'onclick='deleteComentariu(this)'>&times;</button> <p class='DateRight'>".$row['Date']."</p></div></div> ";}
        else {echo "<div class='comment' id='".$row['Id']."'>
           <div id='left'>".$row['UserName']." : ".$row['Comment']." <p class='DateLeft'>".$row['Date']."</p></div></div>";}
    }}else if($b=='1'){
        foreach( $cerUser->query($sqlUser) as $row){
            $verify=$row['UserName'];
            if($user_value==$verify)
            { echo "<div class='comment' id='".$row['Id']."'>
               <div id='right'>".$row['UserName']." : ".$row['Comment']." <button class='deleteComment' id='deleteComment' value='".$row['Id']."'onclick='deleteComentariu(this)'>&times;</button> <p class='DateRight'>".$row['Date']."</p></div></div> ";}
            else {echo "<div class='comment' id='".$row['Id']."'>
               <div id='left'>".$row['UserName']." : ".$row['Comment']." <button class='deleteComment' id='deleteComment' value='".$row['Id']."'onclick='deleteComentariu(this)'>&times;</button><p class='DateLeft'>".$row['Date']."</p></div></div>";}
        }



    }
}
function verify(){
    $user=$_POST['user'];
    
    $baza= new BD();
    $sql = "SELECT * from register where UserName='$user'";
    $cer = $baza::obtine_conexiune();
    $cerere=$cer->prepare($sql);
    $cerere->execute();
    if($cerere->rowCount()==1)
    foreach ($cer->query($sql) as $row)
    {
        if($row['AdminLevel']==1)
        return 1;
        else return 0;
       
    }
    else return 3;
    }
?>

<?php
afisareComentarii();
?>