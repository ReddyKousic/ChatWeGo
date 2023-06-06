<?php
   include("../classes/connect.php");
   include("../classes/signup.php");
   $failure = "";
   $user ="";
   $email = "";
   if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      $data_bed = $_POST;
      $user = $data_bed['user'];
      $email = $data_bed['email'];
      
      if ($data_bed['pass1']==$data_bed['pass2'] AND strlen($data_bed['pass1']) > 10 AND strlen($data_bed['user']) > 8)
      {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
          $v = $data_bed['user'];
          $p = $data_bed['email'];
          //echo($v);
          //echo($p);

          $query1 = "select * from users where user = '$v'";
          $query2 = "select * from users where email = '$p'";
          //echo($query1);
          //echo($query2);

          $DB1 = new Database();
	        $rooka1 = $DB1->read($query1);
          $rooka2 = $DB1->read($query2);
          //var_dump($rooka1);
          //var_dump($rooka2);
          if ($rooka1 == 0 AND $rooka2 == 0) {
            
            $signup = new Signup();
            $result = $signup->create_user($_POST);
            echo('Account Created Successfully. Now Please <a href="../index.php">Click Here</a> To Login');
            die;
          }else{
            $failure = "Given Username Or Email Already Exist In Our Records.";
            
          }


          
        }else {
          $failure = "A Valid Email Should Be Supplied.";
        }
        
      }else
      {
        $failure = "Password Should Contain Atleast Eleven Characters And Username Should Contain Atleast Nine Characters. Both Passwords Shouls Match.";
      }
        
        
      
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
        <title>ChatWeGo | SignUp</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
      <div class="login-box">
        <h2>ChatWeGo!</h2>
        <form method="POST">
          <div class="user-box">
            <input type="text" name="user" value='<?php echo($user);?>' required="">
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="text" name="email" value='<?php echo($email);?>' required="">
            <label>Email</label>
          </div>
          <div class="user-box">
            <input type="password" name="pass1" required="">
            <label>Password</label>
          </div>
          
          <div class="user-box">
            <input type="password" name="pass2" required="">
            <label>Re-Type Password</label>
          </div>
          <input type="submit" class="sub">
          <p id="h66"><?php echo($failure); ?></p>
          <style>
            #h66{
              color: white;
            }
          </style>
  </form>
  <p id="h66">Don't have an account. <a href="../">Click Here </a>to create one.</p>
</div>
        
        <script src="" async defer></script>
    </body>
</html>