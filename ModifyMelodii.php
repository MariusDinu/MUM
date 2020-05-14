<?php 
include "AfisareMelodii.php";
function modifyMelodie(){


  $name=$_POST['nameM'];
 // $artist=$_POST['artistM'];
  //$gen=$_POST['genM'];
  //$album=$_POST['albumM'];
 // $link=$_POST['linkM'];
 // $data=$_POST['dataM'];
  $musicAdmin=$_POST['musicAdmin'];
  $musicId=$_POST['musicIdDelete'];
  $bazaDelete= new BD();
  
  //$sqlname = "  UPDATE `music` SET `Name`='$name' WHERE id='$musicId'";
 // $sqlartist = "  UPDATE `music` SET `Artist`='$artist' WHERE id='$musicId'";
  //$sqlalbum = "  UPDATE `music` SET `Album`='$album' WHERE id='$musicId'";
 // $sqlgen = "  UPDATE `music` SET `Gen`='$gen' WHERE id='$musicId'";
  //$sqlartist = "  UPDATE `music` SET `Artist`='$artist' WHERE id='$musicId'";
  //$sqllink = "  UPDATE `music` SET `Link`='$link' WHERE id='$musicId'";
  $sql = "UPDATE `music` SET `Date` = "+"1111"+" where Name='11'";

  $cerDelete = $bazaDelete::obtine_conexiune();
   $cerereAdmin=$cerDelete->prepare($sql);
    $cerereAdmin->execute();

//if($data==""){}
 // else
   
  
  
  
 
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
            url: "/MUM/AfisareMelodii.php",
            //Data, that will be sent to "ajax.php".
            data: {
                verify: admin
            },
            //If result found, this funtion will be called.
            success: function(html) {
                //Assigning result to "display" div in "search.php" file.
                $("#tabel1").html(html).show();
                

            }
        });


</script>
<?php  ?>