
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta name="viewport">
    <link href="/MUM/Css/Layout.css" rel="stylesheet">
    
    <link href="/MUM/Css/site.css" rel="stylesheet">
    <link href="/MUM/Css/purecookie.css" rel="stylesheet">
    <link href="/MUM/Css/register.css" rel="stylesheet">
</head>
<header class="site-header">
       
      
            <div class="logo2" ></div>
  
        
      


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

        
    </header>
<body>
   <main> 
    <div class="container">
        <div class="login-register-form-section">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="login">

                <form class="form-horizontal2">
              
                    <div class="reg" >
                       Registration
                    </div>
            
                </form>
                    <form class="form-horizontal" method="post" >
                        <label for="email"><b>Email: </b></label>
                        <input type="text" placeholder="Enter Email" id="email"  name="email" required="required"> 
                        <div id="display"></div>
                        <label for="Username"><b>Username: </b></label>
                        <input type="text" placeholder="Enter Username" id="username" name="username" value="" required="required" >
                        <div id="displayUser"></div>
                        <label for="psw"><b>Password: </b></label>
                        <input type="password" placeholder="Enter Password" id="password"  name="password" required="required" >
                        <div id="password-error"></div>
                        <label for="psw-repeat"><b>Repeat Password: </b></label>
                        <input type="password" placeholder="Repeat Password" id="confirmPassword"  name="confirmPassword" required="required">
                        <div id="message"></div>
                        <hr>
                        <p>By creating an account you agree to our <a href="#">Terms &amp; Privacy</a>.</p>
                        <p>
                        <label for="country" >Choose a Country:</label>
                        <select id="country" name="country"> 
                <option value="italia">Italia</option>
                <option value="spania">Spania</option>
                <option value="china">China</option>
                <option value="belgia">Belgia</option>
              </select> </p>
              <div class="center">
                        <button type="submit" id="register" value="register" class="button-Start">Register</button>
                </div>
                </div>

                <div class="container signin ">
                    <p>Already have an account? <a href="# ">Sign in</a>.</p>
                </div>
                </form>
            </div>
        </div>
    </div>
</main>
</body>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js "></script>
<script src="/MUM/Js/cautaEmail.js"></script>
<script src="/MUM/Js/cautaUsername.js"></script>
<script src="/MUM/Js/inregistrare.js"></script>
<script src="/MUM/Js/verificareParole.js"></script>
<script>
    $(document).ready(function() {
    //On pressing a key on "Search box" in "search.php" file. This function will be called.
    $("#logo32323232").click(function() {
        window.location.href='/MUM/Pages/HomePage.php';
        cursor:pointer;

    });
});
    </script>
</html>