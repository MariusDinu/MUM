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
  

   ?>

<head>
<link href="/Mum/Css/Layout.css" rel="stylesheet">
    <link href="/Mum/Css/Plus.css" rel="stylesheet">
    <link href="/Mum/Css/site.css" rel="stylesheet">
    <link href="/Mum/Css/purecookie.css" rel="stylesheet">
    <link href="/Mum/Css/register.css" rel="stylesheet">
   </head>
<body>
<header class="site-header">
<div class="logo2">
            <a href="/">
                <svg class="icon-logo-text">
                <a href="HomePage.html"> </a>
            </svg>
            </a>
        </div>
       <div class="header-middle-area">
            <div class="main-nav">
                <ul class="main-sections">
                    <li class="Home">
                        <a href="/MUM/Pages/HomePage.php">
                            <svg id="icon-nav-videos" viewBox="0 0 40 40"><g clip-path="url(#clip0)"><path d="M20 39c10.493 0 19-8.507 19-19S30.493 1 20 1 1 9.507 1 20s8.507 19 19 19z"></path><path d="M20 33c7.18 0 13-5.82 13-13S27.18 7 20 7 7 12.82 7 20s5.82 13 13 13z"></path><path d="M17.1 17v6.6c0 .8.8 1.2 1.5.9l6-3.3c.7-.4.7-1.4 0-1.7l-6-3.3c-.7-.4-1.5 0-1.5.8z"></path></g></svg>
                            <span>Home</span>
                        </a>
                    </li>

                    <li class="Sign-up">
                        <a href="/MUM/Pages/Registration.php">
                            <svg id="icon-nav-videos" viewBox="0 0 40 40"><g clip-path="url(#clip0)"><path d="M20 39c10.493 0 19-8.507 19-19S30.493 1 20 1 1 9.507 1 20s8.507 19 19 19z"></path><path d="M20 33c7.18 0 13-5.82 13-13S27.18 7 20 7 7 12.82 7 20s5.82 13 13 13z"></path><path d="M17.1 17v6.6c0 .8.8 1.2 1.5.9l6-3.3c.7-.4.7-1.4 0-1.7l-6-3.3c-.7-.4-1.5 0-1.5.8z"></path></g></svg>
                            <span>SignUP</span>


                        </a>

                    </li>


                    <li class="Sign-in">
                        <a href="/MUM/Pages/Login.php">
                            <svg id="icon-nav-videos" viewBox="0 0 40 40"><g clip-path="url(#clip0)"><path d="M20 39c10.493 0 19-8.507 19-19S30.493 1 20 1 1 9.507 1 20s8.507 19 19 19z"></path><path d="M20 33c7.18 0 13-5.82 13-13S27.18 7 20 7 7 12.82 7 20s5.82 13 13 13z"></path><path d="M17.1 17v6.6c0 .8.8 1.2 1.5.9l6-3.3c.7-.4.7-1.4 0-1.7l-6-3.3c-.7-.4-1.5 0-1.5.8z"></path></g></svg>
                            <span>Sign in</span>
                        </a>
                    </li>
                    <li class="About">
                        <a href="HomePage.html">
                            <svg id="icon-nav-videos" viewBox="0 0 40 40"><g clip-path="url(#clip0)"><path d="M20 39c10.493 0 19-8.507 19-19S30.493 1 20 1 1 9.507 1 20s8.507 19 19 19z"></path><path d="M20 33c7.18 0 13-5.82 13-13S27.18 7 20 7 7 12.82 7 20s5.82 13 13 13z"></path><path d="M17.1 17v6.6c0 .8.8 1.2 1.5.9l6-3.3c.7-.4.7-1.4 0-1.7l-6-3.3c-.7-.4-1.5 0-1.5.8z"></path></g></svg>
                            <span>About</span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>

        <div class="search" role="search" id="search-area">
            <div class="chw-widget">
                <form role="search" method="get" id="searchform" class="search-form" action="https://css-tricks.com/">
                    <label class="screen-reader-text" id="search-label" for="search-input">Search for:</label>
                    <input type="search" required="" name="s" id="search-input" class="search-field" value="">
                    <input type="hidden" name="orderby" value="relevance">
                    <input type="hidden" name="post_type" value="post,page,guide">
                    <button type="submit" class="button-search">
                        <span class="screen-reader-text">Search</span>
                        <svg class="icon-search" width="26px" height="26px">
                            <use xlink:href="#icon-search"></use>
                        </svg>
                    </button>
                </form>
            </div>
        </div>

</header>


<div class="container">




</div>
  <img src="/MUM/Images/Pulsefinal.png" />

</body>
 
  
 
   <?php
} else {
    $options = [
        'scope' => [
            'user-read-email',
        ],
    ];

    header('Location: ' . $session->getAuthorizeUrl($options));
    die();
} ?>