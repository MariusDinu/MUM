<!DOCTYPE html>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js "></script>
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

<form action="/MUM/Pages/Music.php"method="POST" >
<div class="container" >
<div class="tabel" id="tabel" value="1"> 
<ol class="c" id="tabel1" value="1">
    

</ol>
<ol class="c" id="tabel2" value="1">
 <a onclick=showMusic() href="/MUM/Pages/Music.php"> <li>Coffee</li> </a>
  <li>Tea</li>
  <li>Coca Cola</li>

</ol>
</div>
                </div>
                <button onclick="goBack()">Go Back</button>
                <iframe src="https://open.spotify.com/embed/album/1DFixLWuPkv3KT3TnV35m3" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
</form>
</body>

<script>
function goBack() {
  window.history.back();
}
</script>
<script src="/MUM/Js/AfisareMelodii.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js "></script>

</script>

<script>



</script>

</html>