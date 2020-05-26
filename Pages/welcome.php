<?php
require '../vendor/autoload.php';

$session = new SpotifyWebAPI\Session(
    '837fd9b8712f46baaafd664afd936b86',
    '9f535727302040839d7bb4a0a3d3c038',
    'http://localhost/MUM/Pages/welcome.php'
);

$api = new SpotifyWebAPI\SpotifyWebAPI();

if (isset($_GET['code'])) {
    include '../PhpRegister/connect.php';
    $session->requestAccessToken($_GET['code']);
    $api->setAccessToken($session->getAccessToken());
    $baza= new BD();
    $a=$_GET['code'];
    $sqlCautare="Select * from register where UserName='$a'";
    $sql = "INSERT INTO register(Email,UserName,UserPassword,ConfirmUserPassword,Country,AdminLevel) values (' ','$a',' ',' ',' ',0)";
    $cerere = $baza::obtine_conexiune()->prepare($sqlCautare);
    $cerere->execute();
    $user=substr($a,1,30);
    if($cerere->rowCount()==1)
    {include 'App.php';
        echo '<script type="text/javascript">
        window.location = "http://localhost/MUM/Pages/App.php?user='.$user.'";
   </script>';

    }
   else { $cerere = $baza::obtine_conexiune()->prepare($sql); $cerere->execute();   echo '<script type="text/javascript">
    window.location = "http://localhost/MUM/Pages/App.php?user='.$user.'";
</script>';}
   




    
} else {
    $options = [
        'scope' => [
            'user-read-email',
        ],
    ];

    header('Location: ' . $session->getAuthorizeUrl($options));
    die();
} ?>