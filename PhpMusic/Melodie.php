<?php
class BD{
  private static $conexiune_bd = NULL;
  public static function obtine_conexiune(){
      if (is_null(self::$conexiune_bd))
      {
          self::$conexiune_bd = new PDO('mysql:host=localhost;dbname=projectdatabase', 'marius', 'marius');
      }
      return self::$conexiune_bd;
  } 
  public static function close(){
      self::$conexiune_bd->close();
  }   
}

function afisareMelodie(){
    $id_value=$_POST['id'];
    $bazaUser= new BD();
    $sqlUser = "SELECT * FROM music where Id='$id_value' ";
    $cerUser = $bazaUser::obtine_conexiune();
    $cerereUser=$cerUser->prepare($sqlUser);
    $cerereUser->execute();
    $abc=$cerereUser->fetchAll();
    foreach( $cerUser->query($sqlUser) as $row){
     
    
      echo   "<button onclick='playMusic(this)' id='".$row['Id']."' title='"."Play"."' class='Play b8 b9 ba ao bb bc bd be bf bg bh bi bj'><svg viewBox='"."0 0 26 26"."' xmlns='"."http://www.w3.org/2000/svg"."' style='"."width: 100%; height: 100%; "."'><title>Play</title><path d='"."M7.712 22.04a.732.732 0 0 1-.806.007.767.767 0 0 1-.406-.703V4.656c0-.31.135-.544.406-.703.271-.16.54-.157.806.006l14.458 8.332c.266.163.4.4.4.709 0 .31-.134.546-.4.71L7.712 22.04z"."' fill='"."currentColor"."' fill-rule='"."evenodd"."'></path></svg></button></div>".

      "<div class='second' id='Details' >".
      "<table style='"."width:100%"."'>".
      "<tr><th id='IdOneView' value='".$row['Id']."'>".$row['Id']."</th></tr>".
      "<tr><th id='NumeOneView'>Nume: ".$row['Name']."</th></tr>".
      "<tr><th id='ArtistOneView'>Artist: ".$row['Artist']."</th></tr>".
      "<tr><th id='AlbumOneView'>Album: ".$row['Album']."</th></tr>".
      "<tr><th id='GenOneView'>Gen: ".$row['Gen']."</th></tr>".
      "<tr><th id='Data-lansareOneView".$row['Date']."'>Data-lansare: ".$row['Date']."</th></tr>".
      
      
      

     "</table></div>
     <div class='Views' id='View'> Vizualizari: <div id='Views'></div> </div>".
     
     
     
     
     "</div> <br></br>";
     
      
    }}
    ?>

    <?php 
    
    afisareMelodie();
    ?>