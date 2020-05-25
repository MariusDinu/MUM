<?php

function add(){
$dir='uploads/';
$audio=$dir.basename($_FILES['audiofile']['name']);
if(move_uploaded_file($_FILES['audiofile']['tmp_name'],$audio))
return 1;
else return 2;

}

?>
<?php 
add();
?>