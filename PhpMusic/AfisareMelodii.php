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
    $sqlUser = "SELECT * FROM music order by id";
    $cerUser = $bazaUser::obtine_conexiune();
    $cerereUser=$cerUser->prepare($sqlUser);
    $cerereUser->execute();
    $abc=$cerereUser->fetchAll();
    foreach( $cerUser->query($sqlUser) as $row){
     
    
      echo   "<div class='"."Melodie"."' id='".$row['Id']."'>".
      "<a class='"."form-inline"."' id='".$row['Id']."' onclick='AfisareMelodie(this)'>".
      "<div class='second' id='".$row['Id']."' value='".$row['Id']."'>".
      "<table style='"."width:100%"."'>".
      "<tr><th id='Nume:".$row['Name']."'>Nume Melodie: ".$row['Name']."</th></tr>".
      "<tr><th id='Artist:".$row['Artist']."'>Artist:".$row['Artist']."</th></tr>".
      "<tr><th id='Gen:".$row['Gen']."'>Gen: ".$row['Gen']."</th></tr>".
      "<tr><th id='Album:".$row['Album']."'>Album: ".$row['Album']."</th></tr>"
     ."</table></div></a> <div class='"."first"."'>".
     "<button onclick='playMusic(this)' id='".$row['Local']."' title='"."Play"."' class='Play b8 b9 ba ao bb bc bd be bf bg bh bi bj'><svg viewBox='"."0 0 26 26"."' xmlns='"."http://www.w3.org/2000/svg"."' style='"."width: 100%; height: 100%; "."'><title>Play</title><path d='"."M7.712 22.04a.732.732 0 0 1-.806.007.767.767 0 0 1-.406-.703V4.656c0-.31.135-.544.406-.703.271-.16.54-.157.806.006l14.458 8.332c.266.163.4.4.4.709 0 .31-.134.546-.4.71L7.712 22.04z"."' fill='"."currentColor"."' fill-rule='"."evenodd"."'></path></svg></button></div>"
     ;
     if(verifyButton($row['Name'])==1)
     {
       echo  "<button class='"."buttonFavoritAdd"."'"." id='".$row['Id']."' data-toggle='"."modal"."' data-target='"."#room-settings"."' onclick='afisarefav(this)' value='".$row['Id']."'>Adaugare la favorite</button> ";
     }
     else {echo  "<button class='"."buttonFavoriteAdded"."'"." id='".$row['Id']."' onclick='deleteFavorite(this)' value='".$row['Id']."'><span>Adaugat</span></button> ";};
     
     
     echo "</div> <br></br>";
     
      
    }}
function afisareAdmin(){
      $bazaAdmin= new BD();
      $sqlAdmin = "SELECT * FROM music order by id";
      $cerAdmin = $bazaAdmin::obtine_conexiune();
      $cerereAdmin=$cerAdmin->prepare($sqlAdmin);
      $cerereAdmin->execute();
      $abc=$cerereAdmin->fetchAll();
      foreach( $cerAdmin->query($sqlAdmin) as $row){
       
      
        echo 
        "<div class='"."Melodie"."' id='".$row['Id']."'>".
       
       
        "<a class='"."form-inline"."' id='".$row['Id']."' onclick='AfisareMelodie(this)'>".
        "<div class='second' ' value='".$row['Id']."'>".
        "<table style='"."width:100%"."'>".
        "<tr> <th id='Nume:".$row['Name']."'>Nume Melodie: ".$row['Name']."</th></tr>".
        "<tr> <th id='Artist:".$row['Artist']."'>Artist: ".$row['Artist']."</th></tr>".
        "<tr> <th id='Gen:".$row['Gen']."'>Gen: ".$row['Gen']."</th></tr>".
        "<tr> <th id='Album:".$row['Album']."'>Album: ".$row['Album']."</th></tr>"
       ."</table></div></a>".
       "<div class='"."first"."'>".
        
       "<button class='"."buttonAdmin"."'"." id='".$row['Id']."' data-toggle='"."modal"."' data-target='"."#room-settings"."' onclick='modifyMelodie(this)' value='".$row['Id']."'>Modify</button> ".
       "<button class='"."buttonAdmin"."'"." id='".$row['Id']."' onclick='deleteMelodie(this)' value='".$row['Id']."'>Delete</button>".
       
       "<button onclick='playMusic(this)' id='".$row['Local']."' title='"."Play"."' class='Play b8 b9 ba ao bb bc bd be bf bg bh bi bj'><svg viewBox='"."0 0 26 26"."' xmlns='"."http://www.w3.org/2000/svg"."' style='"."width: 100%; height: 100%; "."'><title>Play</title><path d='"."M7.712 22.04a.732.732 0 0 1-.806.007.767.767 0 0 1-.406-.703V4.656c0-.31.135-.544.406-.703.271-.16.54-.157.806.006l14.458 8.332c.266.163.4.4.4.709 0 .31-.134.546-.4.71L7.712 22.04z"."' fill='"."currentColor"."' fill-rule='"."evenodd"."'></path></svg></button></div>".
       
       "</div> <br></br>";
       
        
      }}
function verifyButton($input){
  $user_value=$_POST['verify'];
  $baza= new BD();
  $sql = "SELECT * FROM favorite where UserName='$user_value' and NumeMelodie='$input'";
  $cer = $baza::obtine_conexiune();
  $cerere=$cer->prepare($sql);
  $cerere->execute();
  if($cerere->rowCount()==1)
 {return 2;}
else {return 1;}

}
function afisareMelodii(){
    $user_value=$_POST['verify'];
    $baza= new BD();
    $sql_user="SELECT * FROM register where UserName='$user_value'";
    $cer = $baza::obtine_conexiune();
    $cerere=$cer->prepare($sql_user);
    $cerere->execute();
    $ver_user=$cerere->fetchAll();
    foreach($cer->query($sql_user) as $row)
    {
            if($row['AdminLevel']==1)
            {
              afisareAdmin();
            }
            else {
              afisareUser();
            }

    }

    
}
?>

<?php
afisareMelodii();
 ?>  
   
   
    
  

<?php  ?>