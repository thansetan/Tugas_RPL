<!DOCTYPE html>
<html lang="en">

<head>
  <title>Halaman Login</title>
  <base href="<?php echo base_url() ?>">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="login/images/icons/favicon.ico" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login/css/util.css" />
  <link rel="stylesheet" type="text/css" href="login/css/main.css" />
  <!--===============================================================================================-->
  <script type="text/javascript" src="assets/dist/js/site.min.js"></script>

</head>

<body>
  <div class="limiter">
    <div class="container-login100" style="background-image: url('login/images/img-01.jpg');">
      <div class="wrap-login100 p-t-190 p-b-30">
        <form class="login100-form validate-form" role="form" action="app/login" method="post">
          <div class="login100-form-avatar">
            <img src="resources/img/logobig.jpeg" alt="AVATAR" />
          </div>

          <span class="login100-form-title p-t-20 p-b-45">
            PT Garment UwU Sejahtera
          </span>

          <div class="wrap-input100 validate-input m-b-10" data-validate="Username is required">
            <input class="input100" type="text" name="username" id="username" placeholder="Username" />
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input m-b-10" data-validate="Password is required">
            <input class="input100" type="password" name="password" id="password" placeholder="Password" />
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock"></i>
            </span>
          </div>

          <div class="container-login100-form-btn p-t-10">
            <button class="login100-form-btn" type="submit">
              Login
            </button>
          </div>

        </form>
      </div>
    </div>
  </div>

  <!--===============================================================================================-->
  <script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="login/vendor/bootstrap/js/popper.js"></script>
  <script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="login/vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
  <script src="login/js/main.js"></script>
</body>

</html>