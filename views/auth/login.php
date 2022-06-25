<?php 
  session_start();
  require_once '../farmasi/functions.php';

  if(isset($_SESSION["login"])){
    header("Location: ../farmasi/home.php");
    exit;
  }

  if(isset($_POST['login'])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = pg_query($conn, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");
    
    if(pg_num_rows($result)){
      $row = pg_fetch_assoc($result);
      $_SESSION["login"] = true;
      if($row["level"] == "admin"){
        $_SESSION["level"] = "admin";
          header("Location: ../farmasi/home.php");
      }else{
           $_SESSION["level"] = "user";
          header("Location: ../puskesmas/stokPuskesmas.php");
      }
    }
    $error = true;
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
          <div class="login" style="color: black;">LOGIN</div>

          <?php if( isset($error)) : ?>
            <p style="color:red; font-style:bold;font-size:1.5em;" class="text-center pt-2">Username / password salah</p>
          <?php endif; ?>
       

          <form class="login100-form validate-form" method="post">
            <div class="wrap-input100 validate-input m-b-26" >
              <span class="label-input100">Email</span>
              <input class="input100" type="text" name="username" placeholder="Masukkan username" required/>
              <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input m-b-18" >
              <span class="label-input100">Password</span>
              <input class="input100" type="password" name="password" placeholder="Masukkan Password" required/>
              <span class="focus-input100"></span>
            </div>

            <div class="flex-sb-m w-full p-b-30">
              <!-- <div class="contact100-form-checkbox">
             
                <a href="registrasi.php" class="txt1"> Registrasi </a>
               
              </div> -->
            </div>

            <div class="col-md-12 text-center ml-5">
            <button class="login100-form-btn " type="submit" name="login">Login</button>
             </div>


          </form>
        </div>
      </div>
    </div>
    
  </body>
</html>
