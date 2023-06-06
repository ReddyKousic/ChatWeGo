<?php
session_start();
$error = "";

    include("classes/connect.php");
    include("classes/login.php");
    $user="";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $login = new Login();
        $result1 = $login->evaluate($_POST);
        if ($result1 != "") {
          $error = $result1;
        }else
        {
          header("Location: /p1/home/");
          die;
        }
        $user= $_POST['user'];
    }


?>









<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ChatWeGo | Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
  </head>

    <body>

      <div class="login-box">
        <h2>ChatWeGo Login</h2>
        <form method="POST">
          <div class="user-box">
            <input type="text" name="user" required="">
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="password" name="pass" required="">
            <label>Password</label>
          </div>
         
          <input type="submit" value="Login" class="sub">
          
          <p id="h66"><?php echo($error); ?></p>
          <style>
            #h66{
              color: white;
            }
          </style>
  </form>
  <p id="h66">Don't have an account. <a href="/signup">Click Here </a>to create one.</p>
</div>
        
        <script src="" async defer></script>
    </body>
</html>