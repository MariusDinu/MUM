<?php 
include "AfisareMelodii.php";

function deleteMelodie(){
  $musicAdmin=$_POST['musicAdmin'];
  $musicId=$_POST['musicIdDelete'];
  $bazaDelete= new BD();
  $sqlDelete = "DELETE FROM `music` WHERE id='$musicId'";
  $cerDelete = $bazaDelete::obtine_conexiune();
  $cerereAdmin=$cerDelete->prepare($sqlDelete);
  $cerereAdmin->execute();

  
  
}
?>

<?php
deleteMelodie();   
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