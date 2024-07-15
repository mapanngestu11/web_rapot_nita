<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo base_url() . "assets/login/"; ?>fonts/icomoon/style.css">

  <link rel="stylesheet" href="<?php echo base_url() . "assets/login/"; ?>css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url() . "assets/login/"; ?>css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="<?php echo base_url() . "assets/login/"; ?>css/style.css">

  <link rel="shortcut icon" href="<?php echo base_url() . "assets/login/"; ?>images/logo.png" type="image/png">
  <title>LOGIN E-RAPOT | SMK BANI USMAN MANUNGGAL</title>
</head>
<body>



  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="<?php echo base_url() . "assets/login/"; ?>images/undraw_blog_post_re_fy5x.svg" alt="Image" class="img-fluid">
        </div>
        <style type="text/css">
          .icon_sekolah{
            width: 100px;
            padding-bottom: 10px;
          }
        </style>
        <div class="col-md-6 contents mt-4">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
                <img src="<?php echo base_url() . "assets/login/"; ?>images/logo.png" alt="navbar brand" class="icon_sekolah">
                <h3>Login E-RAPORT</h3>
                <h5 style="font-weight: bold;">SMK BANI USMAN MANUNGGAL</h5>
                <p class="mb-4">Login menggunakan akun terdaftar</p>
              </div>
              <form action="<?php echo site_url() . 'Login/auth' ?>" method="POST">
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" name="username" id="username" autocomplete="off" required="">

                </div>
                <div class="form-group last mb-4">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" id="password" autocomplete="off" required="">

                </div>

                <div class="d-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                    <input type="checkbox" checked="checked"/>
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
                </div>
                <button type="submit" class="btn btn-block btn-primary">Log In</button>
                <!-- <input type="submit" value="Log In" class="btn btn-block btn-primary"> -->
              </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>



  
  <script src="<?php echo base_url() . "assets/login/"; ?>js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url() . "assets/login/"; ?>js/popper.min.js"></script>
  <script src="<?php echo base_url() . "assets/login/"; ?>js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() . "assets/login/"; ?>js/main.js"></script>
</body>
</html>