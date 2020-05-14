
<!DOCTYPE html>
<html>
<?php require '../vendor/autoload.php';?>
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
                        <a href="HomePage.html">
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
        <div class="login-register-form-section">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="login">

                    <form class="form-horizontal" style="text-align:center;">
                        <div>
                            Login
                </div>
                <div id="show-registration"> </div>
                    </form>
                    <form class="form-horizontal" method="get" action="/MUM//Pages/App.php">
                    
                        <label for="Username"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" id="user" name="user" value="" required="" >
                       
                        <div id="displayUser"></div>
                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" id="password_login"  name="password_login" required="" >
                        <div id="password-error"></div>
                        <div class="center">
                        <button type="submit" id="login"  value="login" class="button-Start">Login</button>
                         </div>

                         <div>
                            <a href="/MUM/Pages/welcome.php"> <p>Login with Spotify?</p> </a>
                         </div>
                        </form>
            </div>
        </div>
                </div>





</div>

    <footer>

    </footer>

    <script src="/MUM/Js/purecookie.js"></script>
               <script>
function validate(){







}




               </script>

</body>


</html>
