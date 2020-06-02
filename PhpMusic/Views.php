<?php 
include '/xampp/htdocs/MUM/PhpRegister/connect.php';
function addView(){
    $user_value=$_POST['user'];
    
    $id=$_POST['id'];
    $baza= new BD();
    
    $sqlSearchUser="Select * from `views` where IdMelodie='$id' and UserView='$user_value'";
    
    $cer = $baza::obtine_conexiune();
    $cerere=$cer->prepare($sqlSearchUser);
    $cerere->execute();
    if($cerere->rowCount()==1){
             showView($id);
        }
    
    else {
        $a=insertView($id,$user_value);
        if($a==1)
           showView($id);
else echo 'error';

    }
    



}

function showView($id){
    $baza= new BD();
    $cer = $baza::obtine_conexiune();
    $sqlAfisare="Select count(*) as number from `views` where IdMelodie='$id'";
    $cerereAfisare=$cer->prepare($sqlAfisare);
    $cerereAfisare->execute();
    foreach( $cer->query($sqlAfisare) as $row){
        echo $row['number'];
    }}
function insertView($id,$user_value){
    $baza= new BD();
    $sql = "INSERT INTO `views`( `IdMelodie`, `UserView`) VALUES ('$id','$user_value')";
    $cer = $baza::obtine_conexiune();
    $cerere=$cer->prepare($sql);
    if($cerere->execute())
    return 1;
    else return 2;
}


?>

<?php 
addView();


?>