<?php
require '../vendor/autoload.php';

$session = new SpotifyWebAPI\Session(
    '837fd9b8712f46baaafd664afd936b86',
    '9f535727302040839d7bb4a0a3d3c038',
    'http://localhost/MUM/Pages/welcome.php'
);

$api = new SpotifyWebAPI\SpotifyWebAPI();

if (isset($_GET['code'])) {
    $session->requestAccessToken($_GET['code']);
    $api->setAccessToken($session->getAccessToken());
  
   print_r ($api->me());
    
} else {
    $options = [
        'scope' => [
            'user-read-email',
        ],
    ];

    header('Location: ' . $session->getAuthorizeUrl($options));
    die();
} ?>