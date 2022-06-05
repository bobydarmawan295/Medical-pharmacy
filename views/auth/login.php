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
          <div class="login">LOGIN</div>

          <form class="login100-form validate-form" action="../farmasi/home.php">
            <div class="wrap-input100 validate-input m-b-26" >
              <span class="label-input100">Email</span>
              <input class="input100" type="text" name="username" placeholder="Enter Email" />
              <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input m-b-18" >
              <span class="label-input100">Password</span>
              <input class="input100" type="password" name="pass" placeholder="Enter password" />
              <span class="focus-input100"></span>
            </div>

            <div class="flex-sb-m w-full p-b-30">
              <div class="contact100-form-checkbox">
                <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me" />
                <label class="label-checkbox100" for="ckb1"> Remember me </label>
              </div>

              <div>
                <a href="#" class="txt1"> Forgot Password? </a>
              </div>
            </div>

            <div class="container-login100-form-btn">           
              <a href=""><button class="login100-form-btn">Login</button></a>

            </div>
          </form>
        </div>
      </div>
    </div>
    
  </body>
</html>
