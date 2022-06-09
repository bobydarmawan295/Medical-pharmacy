<?php 
require_once '../farmasi/functions.php';

    if(isset( $_POST['register'] )){

        if( (register($_POST)) > 0 ){
            echo "<script type='text/javascript'>
            alert('berhasil');
            document.location.href = 'login.php'; 
            </script>";
                
        }else{
            echo pg_last_error($conn);
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login V15</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/util.css" />
    <link rel="stylesheet" type="text/css" href="../../assets/css/main.css" />
    
  </head>
  <body>
    <div class="limiter">
      <div class="container-login100">
        <div class="wrap-login100">
          <div class="login100-form-title" style="background-image: url(../../assets/images/logo.png)"></div>
          <div class="login">Register</div>

          <form class="login100-form validate-form" action="" method="post">
            <div class="wrap-input100 validate-input m-b-26" >
              <span class="label-input100">username</span>
              <input class="input100" type="text" name="username" placeholder="Enter Email" required/>
              <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input m-b-18" >
              <span class="label-input100">Password</span>
              <input class="input100" type="password" name="password" placeholder="Enter password" />
              <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input m-b-18" >
              <span class="label-input100">Konfirmasi password</span>
              <input class="input100" type="password" name="password2" placeholder="Enter password" />
              <span class="focus-input100"></span>
            </div>

            <div class="container-login100-form-btn">           
              <a href=""><button class="login100-form-btn" name="register">Register</button></a>
              <a href="login.php">Login</a>

            </div>
          </form>
        </div>
      </div>
    </div>
    
  </body>
</html>
