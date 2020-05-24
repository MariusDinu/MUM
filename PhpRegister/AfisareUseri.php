<?php
include '../PhpRegister/connect.php';

function afisareAdmin(){
      $bazaAdmin= new BD();
      $sqlAdmin = "SELECT * FROM register where AdminLevel=0";
      $cerAdmin = $bazaAdmin::obtine_conexiune();
      $cerereUser=$cerAdmin->prepare($sqlAdmin);
    $cerereUser->execute();
    $abc=$cerereUser->fetchAll();
    if($cerereUser->rowCount()>0){
    foreach( $cerAdmin->query($sqlAdmin) as $row){
        echo 
        "<div class='"."Melodie"."' id='".$row['Id']."'>".
        "<div class='"."first"."'>
        <button class='"."buttonAdmin"."'"." id='".$row['Id']."' onclick='deleteUser(this)' value='".$row['Id']."'>Delete</button> 
    </div>
        <div class='second' id='Id' value='".$row['Id']."'>".
        "<table style='"."width:100%"."'>".
        "<tr> <th id='Nume:".$row['UserName']."'>User: ".$row['UserName']."</th></tr>".
        "<tr> <th id='Artist:".$row['Email']."'>Email: ".$row['Email']."</th></tr>".
        "<tr> <th id='Gen:".$row['Country']."'>Country: ".$row['Country']."</th></tr>".
        "<tr> <th id='Album:".$row['UserPassword']."'>UserPass: ".$row['UserPassword']."</th></tr>"
       ."</table></div></a>".
       
       
       "</div></div> <br></br>";
       
        
      }}}
?>
<?php
afisareAdmin();
?>