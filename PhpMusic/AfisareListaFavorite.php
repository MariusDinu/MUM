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

function afisareUser(){
    $bazaUser= new BD();
  $user_value=$_POST['user'];
  $lista_value=$_POST['lista'];
    $sqlUser = "SELECT * FROM favorite  where UserName='$user_value' and ListaFavorite='$lista_value'";
    $cerUser = $bazaUser::obtine_conexiune();
    $cerereUser=$cerUser->prepare($sqlUser);
    $cerereUser->execute();
    $abc=$cerereUser->fetchAll();
    foreach($cerUser->query($sqlUser) as $row){
     
  verify($row['NumeMelodie']);
 
   
      
    }}

function verify($input){ 
   
    $bazaUsere= new BD();
    $sqlSearch="Select * from music where Name='$input'";
    $cerUsere = $bazaUsere::obtine_conexiune();
    $cerereUsere=$cerUsere->prepare($sqlSearch);
    $cerereUsere->execute(); 
    $abc=$cerereUsere->fetchAll();
    foreach($cerUsere->query($sqlSearch) as $row){ 
       if($row['Name']=='')
       {}
       else{
        echo   "<div class='"."Melodie"."' id='".$row['Id']."'>".
        "<a class='"."form-inline"."' id='".$row['Id']."' onclick='AfisareMelodie(this)'>".
        "<div class='second' id='Id' value='".$row['Id']."'>".
        "<table style='"."width:100%"."'>".
        "<tr><th id='Nume:".$row['Name']."'>Nume Melodie: ".$row['Name']."</th></tr>".
        "<tr><th id='Artist:".$row['Artist']."'>Artist:".$row['Artist']."</th></tr>".
        "<tr><th id='Gen:".$row['Gen']."'>Gen: ".$row['Gen']."</th></tr>".
        "<tr><th id='Album:".$row['Album']."'>Album: ".$row['Album']."</th></tr>"
       ."</table></div></a>";
      echo   "<div class='"."first"."'>".
        "<button onclick='playMusic(this)' id='".$row['Local']."' title='"."Play"."' class='Play b8 b9 ba ao bb bc bd be bf bg bh bi bj'><svg viewBox='"."0 0 26 26"."' xmlns='"."http://www.w3.org/2000/svg"."' style='"."width: 100%; height: 100%; "."'><title>Play</title><path d='"."M7.712 22.04a.732.732 0 0 1-.806.007.767.767 0 0 1-.406-.703V4.656c0-.31.135-.544.406-.703.271-.16.54-.157.806.006l14.458 8.332c.266.163.4.4.4.709 0 .31-.134.546-.4.71L7.712 22.04z"."' fill='"."currentColor"."' fill-rule='"."evenodd"."'></path></svg></button></div>".
       "<button class='"."buttonFavoriteAdded"."'"." id='".$row['Name']."' onclick='deleteFavorite(this)' value='".$row['Name']."'><span>Adaugat</span></button></div> ";
       
       
       echo "</div> <br></br>";}
       
    }
}

?>

<?php
afisareUser();
 ?>  