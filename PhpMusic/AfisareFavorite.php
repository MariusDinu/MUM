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
  $user_value=$_POST['verify'];
    $sqlUser = "SELECT * FROM favorite  where UserName='$user_value' group by ListaFavorite";
    $cerUser = $bazaUser::obtine_conexiune();
    $cerereUser=$cerUser->prepare($sqlUser);
    $cerereUser->execute();
    $abc=$cerereUser->fetchAll();
    
    foreach( $cerUser->query($sqlUser) as $row){
     
    
      echo   "<div class='"."Melodie"."' id='".$row['ListaFavorite']."'>".
      "<a class='"."form-inline"."' id='".$row['ListaFavorite']."' onclick='AfisareListaFavorite(this)'>".
      "<div class='second' id='Id' value='".$row['ListaFavorite']."'>".
      "<table style='"."width:100%"."'>".
      "<tr><th id='Nume'>Nume Lista: ".$row['ListaFavorite']."</th></tr>"
     ."</table></div></a>".
    "<a class='buttonExport' id='".$row['ListaFavorite']."' href='/MUM/PhpMusic/Export.php?user=".$user_value."&lista=".$row['ListaFavorite']."'> Export </a>";
     echo "</div> <br></br>";
     
      
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
           
              afisareUser();
            

    }

    
}
?>

<?php
afisareMelodii();
 ?>  