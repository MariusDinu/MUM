<?php



 
 
$name = $_FILES['audiofile']['name'];

$temp_name = $_FILES['audiofile']['tmp_name']; // tmp_name

if(isset($name)){
if(!empty($name)){

$location = '../uploads/';
}
if(move_uploaded_file($temp_name, $location.$name)){
echo 'uploaded';
}
}  else {
echo 'please uploaded';
}
?>

