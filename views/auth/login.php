<?php 
  session_start();
  require_once '../farmasi/functions.php';

  if(isset($_POST['login'])){

    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $result = pg_query($conn, "SELECT * FROM users WHERE username = '$username'");
 
    if(pg_num_rows($result)){
      $row = pg_fetch_assoc($result);
        if(password_verify($password, $row['password'])){
          $level = $row["level"];
          $_SESSION["level"] = $level;
          if($row['level'] == "admin"){
            header("Location: ../farmasi/home.php");
            exit;
          }else{
            header("Location: ../puskesmas/stokPuskesmas.php");
            exit;
          }

        }
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
          <div class="login" style="color: #3333">LOGIN</div>

          <form class="login100-form validate-form" method="post">
            <div class="wrap-input100 validate-input m-b-26" >
              <span class="label-input100">Email</span>
              <input class="input100" type="text" name="username" placeholder="Enter Email" />
              <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input m-b-18" >
              <span class="label-input100">Password</span>
              <input class="input100" type="password" name="password" placeholder="Enter password" />
              <span class="focus-input100"></span>
            </div>

            <div class="flex-sb-m w-full p-b-30">
              <div class="contact100-form-checkbox">
             
                <a href="registrasi.php" class="txt1"> Registrasi </a>
               
              </div>

              
            </div>

            <div class="container-login100-form-btn">           
              <a href=""><button class="login100-form-btn" type="submit" name="login">Login</button></a>

            </div>
          </form>
        </div>
      </div>
    </div>
    
  </body>
</html>
