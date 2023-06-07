<?php
session_start();
    include("../classes/connect.php");
    include ("../classes/login.php");
    include ("../classes/dopost.php");
    $dopost = new Dopost();
    $posty = $dopost->get_posts();  
    $xdb = new Database();
    $xdb->connect();
    $login = new Login();
    $user_data = $login->check_login($_SESSION['muzuox_userid']);
    $user111 = $user_data['user'];
    $t = $user_data['userid'];
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){        
        $post = new Dopost();        
        $post->create_post($_POST,$user111,$t);       
    }
?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ChatWeGo</title>
  <link rel="stylesheet" href="style.css" />
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap"
    rel="stylesheet"
  />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Moon+Dance&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
</head>
<body>    
  <nav class="navbar">
    <ul class="navbar-nav">
      <li class="logo">
        <a href="#" class="nav-link">
          <span class="link-text logo-text">ChatWeGo☢</span>
          <svg
            aria-hidden="true"
            focusable="false"
            data-prefix="fad"
            data-icon="angle-double-right"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 448 512"
            class="svg-inline--fa fa-angle-double-right fa-w-14 fa-5x"
          >
            <g class="fa-group">
              <path
                fill="currentColor"
                d="M224 273L88.37 409a23.78 23.78 0 0 1-33.8 0L32 386.36a23.94 23.94 0 0 1 0-33.89l96.13-96.37L32 159.73a23.94 23.94 0 0 1 0-33.89l22.44-22.79a23.78 23.78 0 0 1 33.8 0L223.88 239a23.94 23.94 0 0 1 .1 34z"
                class="fa-secondary"
              ></path>
              <path
                fill="currentColor"
                d="M415.89 273L280.34 409a23.77 23.77 0 0 1-33.79 0L224 386.26a23.94 23.94 0 0 1 0-33.89L320.11 256l-96-96.47a23.94 23.94 0 0 1 0-33.89l22.52-22.59a23.77 23.77 0 0 1 33.79 0L416 239a24 24 0 0 1-.11 34z"
                class="fa-primary"
              ></path>
            </g>
          </svg>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="users" role="img" xmlns="http://www.w3.org/2000/svg"  viewBox="0 96 960 960" class="svg-inline--fa fa-users fa-w-20 fa-3x"><path fill="currentColor" d="m140 256 74 152h130l-74-152h89l74 152h130l-74-152h89l74 152h130l-74-152h112q24 0 42 18t18 42v520q0 24-18 42t-42 18H140q-24 0-42-18t-18-42V316q0-24 18-42t42-18Zm0 212v368h680V468H140Zm0 0v368-368Z" class="fa-secondary"></path></svg>
          <span class="link-text">Movies</span>
        </a>
      </li>
      <li class="nav-item">
          <a href="#" class="nav-link">
          <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="wpexplorer" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-wpexplorer fa-w-16 fa-3x"><path fill="currentColor" d="M512 256c0 141.2-114.7 256-256 256C114.8 512 0 397.3 0 256S114.7 0 256 0s256 114.7 256 256zm-32 0c0-123.2-100.3-224-224-224C132.5 32 32 132.5 32 256s100.5 224 224 224 224-100.5 224-224zM160.9 124.6l86.9 37.1-37.1 86.9-86.9-37.1 37.1-86.9zm110 169.1l46.6 94h-14.6l-50-100-48.9 100h-14l51.1-106.9-22.3-9.4 6-14 68.6 29.1-6 14.3-16.5-7.1zm-11.8-116.3l68.6 29.4-29.4 68.3L230 246l29.1-68.6zm80.3 42.9l54.6 23.1-23.4 54.3-54.3-23.1 23.1-54.3z" class="fa-secondary"></path></svg>
              
              <span class="link-text">Anime</span>
          </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
        <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="comment-alt-dots" role="img" xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48" class="svg-inline--fa fa-comment-alt-dots fa-w-16 fa-3x"><path fill="currentColor" d="M200 976V176h60v84h580l-81 193 81 193H260v330h-60Zm60-656v266-266Zm241.212 205Q531 525 552 503.788q21-21.213 21-51Q573 423 551.788 402q-21.213-21-51-21Q471 381 450 402.212q-21 21.213-21 51Q429 483 450.212 504q21.213 21 51 21ZM260 586h491l-55-133 55-133H260v266Z" class="fa-primary"></path></svg>
          <span class="link-text">Porn</span>
        </a>
      </li>
      <!--<li class="nav-item">
        <a href="#" class="nav-link">
        <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="acorn" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-acorn fa-w-14 fa-3x"><g class="fa-group"><path fill="currentColor" d="M32 256h384a258.87 258.87 0 0 1-143.11 231.55L224 512l-48.89-24.45A258.87 258.87 0 0 1 32 256z" class="fa-secondary"></path><path fill="currentColor" d="M448 160v32a32 32 0 0 1-32 32H32a32 32 0 0 1-32-32v-32a96 96 0 0 1 96-96h106a132.41 132.41 0 0 1 29.41-58.64 15.7 15.7 0 0 1 11.31-5.3 15.44 15.44 0 0 1 12 4.72L266 16.1a16 16 0 0 1 .66 21.9 84.32 84.32 0 0 0-15.16 26H352a96 96 0 0 1 96 96z" class="fa-primary"></path></g></svg>
          <span class="link-text">Nuts</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cogs" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-cogs fa-w-20 fa-3x"><path fill="currentColor" d="M512.1 191l-8.2 14.3c-3 5.3-9.4 7.5-15.1 5.4-11.8-4.4-22.6-10.7-32.1-18.6-4.6-3.8-5.8-10.5-2.8-15.7l8.2-14.3c-6.9-8-12.3-17.3-15.9-27.4h-16.5c-6 0-11.2-4.3-12.2-10.3-2-12-2.1-24.6 0-37.1 1-6 6.2-10.4 12.2-10.4h16.5c3.6-10.1 9-19.4 15.9-27.4l-8.2-14.3c-3-5.2-1.9-11.9 2.8-15.7 9.5-7.9 20.4-14.2 32.1-18.6 5.7-2.1 12.1.1 15.1 5.4l8.2 14.3c10.5-1.9 21.2-1.9 31.7 0L552 6.3c3-5.3 9.4-7.5 15.1-5.4 11.8 4.4 22.6 10.7 32.1 18.6 4.6 3.8 5.8 10.5 2.8 15.7l-8.2 14.3c6.9 8 12.3 17.3 15.9 27.4h16.5c6 0 11.2 4.3 12.2 10.3 2 12 2.1 24.6 0 37.1-1 6-6.2 10.4-12.2 10.4h-16.5c-3.6 10.1-9 19.4-15.9 27.4l8.2 14.3c3 5.2 1.9 11.9-2.8 15.7-9.5 7.9-20.4 14.2-32.1 18.6-5.7 2.1-12.1-.1-15.1-5.4l-8.2-14.3c-10.4 1.9-21.2 1.9-31.7 0zm-10.5-58.8c38.5 29.6 82.4-14.3 52.8-52.8-38.5-29.7-82.4 14.3-52.8 52.8zM386.3 286.1l33.7 16.8c10.1 5.8 14.5 18.1 10.5 29.1-8.9 24.2-26.4 46.4-42.6 65.8-7.4 8.9-20.2 11.1-30.3 5.3l-29.1-16.8c-16 13.7-34.6 24.6-54.9 31.7v33.6c0 11.6-8.3 21.6-19.7 23.6-24.6 4.2-50.4 4.4-75.9 0-11.5-2-20-11.9-20-23.6V418c-20.3-7.2-38.9-18-54.9-31.7L74 403c-10 5.8-22.9 3.6-30.3-5.3-16.2-19.4-33.3-41.6-42.2-65.7-4-10.9.4-23.2 10.5-29.1l33.3-16.8c-3.9-20.9-3.9-42.4 0-63.4L12 205.8c-10.1-5.8-14.6-18.1-10.5-29 8.9-24.2 26-46.4 42.2-65.8 7.4-8.9 20.2-11.1 30.3-5.3l29.1 16.8c16-13.7 34.6-24.6 54.9-31.7V57.1c0-11.5 8.2-21.5 19.6-23.5 24.6-4.2 50.5-4.4 76-.1 11.5 2 20 11.9 20 23.6v33.6c20.3 7.2 38.9 18 54.9 31.7l29.1-16.8c10-5.8 22.9-3.6 30.3 5.3 16.2 19.4 33.2 41.6 42.1 65.8 4 10.9.1 23.2-10 29.1l-33.7 16.8c3.9 21 3.9 42.5 0 63.5zm-117.6 21.1c59.2-77-28.7-164.9-105.7-105.7-59.2 77 28.7 164.9 105.7 105.7zm243.4 182.7l-8.2 14.3c-3 5.3-9.4 7.5-15.1 5.4-11.8-4.4-22.6-10.7-32.1-18.6-4.6-3.8-5.8-10.5-2.8-15.7l8.2-14.3c-6.9-8-12.3-17.3-15.9-27.4h-16.5c-6 0-11.2-4.3-12.2-10.3-2-12-2.1-24.6 0-37.1 1-6 6.2-10.4 12.2-10.4h16.5c3.6-10.1 9-19.4 15.9-27.4l-8.2-14.3c-3-5.2-1.9-11.9 2.8-15.7 9.5-7.9 20.4-14.2 32.1-18.6 5.7-2.1 12.1.1 15.1 5.4l8.2 14.3c10.5-1.9 21.2-1.9 31.7 0l8.2-14.3c3-5.3 9.4-7.5 15.1-5.4 11.8 4.4 22.6 10.7 32.1 18.6 4.6 3.8 5.8 10.5 2.8 15.7l-8.2 14.3c6.9 8 12.3 17.3 15.9 27.4h16.5c6 0 11.2 4.3 12.2 10.3 2 12 2.1 24.6 0 37.1-1 6-6.2 10.4-12.2 10.4h-16.5c-3.6 10.1-9 19.4-15.9 27.4l8.2 14.3c3 5.2 1.9 11.9-2.8 15.7-9.5 7.9-20.4 14.2-32.1 18.6-5.7 2.1-12.1-.1-15.1-5.4l-8.2-14.3c-10.4 1.9-21.2 1.9-31.7 0zM501.6 431c38.5 29.6 82.4-14.3 52.8-52.8-38.5-29.6-82.4 14.3-52.8 52.8z" class="fa-primary"></path></svg>
          <span class="link-text">Settings</span>
        </a>
      </li>-->      
      <li class="nav-item">
        <a href="/p1/out" class="nav-link">
        <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="sign-out" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-sign-out fa-w-16 fa-3x"><path fill="currentColor" d="M48 64h132c6.6 0 12 5.4 12 12v8c0 6.6-5.4 12-12 12H48c-8.8 0-16 7.2-16 16v288c0 8.8 7.2 16 16 16h132c6.6 0 12 5.4 12 12v8c0 6.6-5.4 12-12 12H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48zm279 19.5l-7.1 7.1c-4.7 4.7-4.7 12.3 0 17l132 131.4H172c-6.6 0-12 5.4-12 12v10c0 6.6 5.4 12 12 12h279.9L320 404.4c-4.7 4.7-4.7 12.3 0 17l7.1 7.1c4.7 4.7 12.3 4.7 17 0l164.5-164c4.7-4.7 4.7-12.3 0-17L344 83.5c-4.7-4.7-12.3-4.7-17 0z" class="fa-secondary"></path></svg>
          <span class="link-text">Jump Out</span>
        </a>
      </li>     
    </ul>
  </nav>
  <main>
    <h2>Public Chat :</h2>
    <div>
        <form method  ="POST">
          <textarea name="postpub" id="pppp" placeholder="Type Here...."  required></textarea><br>
          <input type="submit" id="inpsub" value="Post">
        </form>        
    </div>
    <div id="dvpstd">    
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // Function to fetch and update the data
        function fetchData() {
            $.ajax({
                url: 'fetch_data.php',
                method: 'GET',
                success: function(data) {
                    $('#dvpstd').html(data);
                }
            });
        }
        // Call the fetchData function initially
        fetchData();
        // Refresh the data every 5 seconds
        setInterval(fetchData, 5000);
    });
</script>    
  </main>
<script>
    document.addEventListener('keydown', (event) => {
    if(event.ctrlKey && event.key == "Enter") {
        document.getElementById("inpsub").click();
  }
});
</script>
</body>


</html>
