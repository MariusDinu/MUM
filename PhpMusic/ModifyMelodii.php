<?php 
include "AfisareMelodii.php";

function modifyMelodie(){


  $name=$_POST['nameM'];
  $artist=$_POST['artistM'];
  $gen=$_POST['genM'];
  $album=$_POST['albumM'];
  $link=$_POST['linkM'];
  $data=$_POST['dataM'];
  $musicAdmin=$_POST['musicAdmin'];
  $musicId=$_POST['musicIdDelete'];
  $bazaDelete= new BD();
  
  $sqlname = "  UPDATE `music` SET `Name`='$name' WHERE id='$musicId'";
  $sqlartist = "  UPDATE `music` SET `Artist`='$artist' WHERE id='$musicId'";
  $sqlalbum = "  UPDATE `music` SET `Album`='$album' WHERE id='$musicId'";
  $sqlgen = "  UPDATE `music` SET `Gen`='$gen' WHERE id='$musicId'";
  $sqlartist = "  UPDATE `music` SET `Artist`='$artist' WHERE id='$musicId'";
  $sqllink = "  UPDATE `music` SET `Local`='$link' WHERE id='$musicId'";
  $sqldata = "UPDATE `music` SET `Date` ='$data' where id='$musicId'";

  $cerDelete = $bazaDelete::obtine_conexiune();
   
if($name==""){}
    else {$cerereAdmin=$cerDelete->prepare($sqlname);
     $cerereAdmin->execute();}

if($artist==""){}
   else
     {$cerereAdmin=$cerDelete->prepare($sqlartist);
     $cerereAdmin->execute();}

if($gen==""){}
   else
     {$cerereAdmin=$cerDelete->prepare($sqlgen);
     $cerereAdmin->execute();}

if($album==""){}
   else
     {$cerereAdmin=$cerDelete->prepare($sqlalbum);
     $cerereAdmin->execute();}

if($link==""){}
   else
     {$cerereAdmin=$cerDelete->prepare($sqllink);
     $cerereAdmin->execute();}

if($data==""){}
  else{$cerereAdmin=$cerDelete->prepare($sqldata);
    $cerereAdmin->execute();}
   
  
  
  
 
}
?>





<?php
modifyMelodie();   
?>
<script>
var admin = $("#user").attr('value');
 $.ajax({
            //AJAX type is "Post".
            type: "POST",
            //Data will be sent to "ajax.php".
            url: "/MUM/PhpMusic/AfisareMelodii.php",
            //Data, that will be sent to "ajax.php".
            data: {
                verify: admin
            },
            //If result found, this funtion will be called.
            success: function(html) {
                //Assigning result to "display" div in "search.php" file.
                $("#tabelAfisare").html(html).show();
                

            }
        });


</script>
<?php  ?>