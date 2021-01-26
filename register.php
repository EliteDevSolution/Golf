<?php
include_once './db-connectgolf.php';

if(isset($_POST['name'])){
  $a = $_POST['name'];
  $b = $_POST['email'];
  $c = $_POST['password'];
  $d = $_POST['repassword'];

  if($c == $d){
    //check if user exist
    $sql = "SELECT Email from pelanggan WHERE Email = '$b' LIMIT 1";
    $result = mysqli_query($con,$sql) or die("error");
    $count_email = mysqli_num_rows($result);

    // echo $count_email;

    // check if user dah ada
    if($count_email > 0){
      echo "<script>
      alert('This Email Has Been Taken');
      document.location.href='register.php';
      </script>"; 
    }
    else{
      $sql = "INSERT INTO `pelanggan`(`Nama`, `PKataLaluan`, `Email`) VALUES ('$a','$c','$b')";
      mysqli_query($con,$sql) or die("error");
      echo "<script>
      alert('Succesfully Registered, Login With Your New Account');
      document.location.href='loginuser.php';
      </script>"; 
    }
  }else{
      echo '<script>alert("Password Unmatch with Repassword")</script>'; 
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Register Page</title>

    <link rel="icon" href="https://lh3.googleusercontent.com/proxy/AJu9IUBuL0Qsqnj5HahPnv_WaOPHj0dlL6Dzmj9_6FqfBCkaKGIRPjiI-7b2gZ11CCLtkAF1KDvVAHtbtu2e6DO-eCIJJrCt4HzL_KAObXGDwrCsIVZD" type="image/icon type">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/templatemo-style.css" />
  </head>

  <body id="aboutPage">
    <div class="parallax-window" data-parallax="scroll" data-image-src="img/bg-01.jpg">
      <div class="container-fluid">
        <div class="row tm-brand-row">
          <div class="col-lg-4 col-11">
            <div class="tm-brand-container tm-bg-white-transparent">
              <i class="fas fa-3x fa-golf-ball tm-brand-icon"></i>
              <div class="tm-brand-texts">
                <h1 class="text-uppercase tm-brand-name">Marimbo</h1>
                <p class="small">Golf Club Booking System</p>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-1">
            <div class="tm-nav">
              <nav class="navbar navbar-expand-lg navbar-light tm-bg-white-transparent tm-navbar">
                <button
                  class="navbar-toggler"
                  type="button"
                  data-toggle="collapse"
                  data-target="#navbarNav"
                  aria-controls="navbarNav"
                  aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item green-highlight active">
                      <div class="tm-nav-link-highlight"></div>
                      <a class="nav-link" href="#">Register <span class="sr-only">(current)</span></a>
                    </li>
                  </ul>
                </div>
              </nav>
              <br>
              <h5 style="color: #FFF"><strong>You will be returned to login page after u register.</strong></h5>
            </div>
          </div>
        </div>

        <!-- About -->
        <section class="row" id="tmHome">
        <div class="log_form">
          <h3 style="color: #FFFFFF">Sign Up</h3>

          <form action="register.php?p=RegisterUser" method="post" >
            <fieldset class="row row-fluid">
              <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                    <input type="name" name="name" id="Nama" class="form-control" placeholder="Name" size="100" required>
                  </div>
                  <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                    <input type="email" name="email" id="Email" class="form-control" placeholder="Email" size="100" required>
                  </div>
                  <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="password" id="PKataLaluan" class="form-control" placeholder="Password" size="100" required>
                  </div>
                  <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                    <input type="password" name="repassword" id="" class="form-control" placeholder="Confirm Password" size="100" required>
                  </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <button type="submit" value="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block subt" href="#">Register</button>
              </div>
            </fieldset>
          </form>

        </div>
      </section>

      <!-- Features -->
      <div class="row" id="tmFeatures">
        <div class="col-lg-4">
          <div class="tm-bg-white-transparent tm-feature-box">
            <h3 class="tm-feature-name">Fast & Efficient</h3>
            <div class="tm-feature-icon-container"><i class="fas fa-3x fa-rocket"></i></div>
            <p class="text-center">Efficiency and effectiveness can both improve your booking efficiency, on-time transaction, and various other process. A booking system that guarantee a customer satisfactory to the fullest.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="tm-bg-white-transparent tm-feature-box">
            <h3 class="tm-feature-name">24/7 Customer Service</h3>
            <div class="tm-feature-icon-container"><i class="fas fa-3x fa-headset"></i></div>
            <p class="text-center">Customer service available 24 hours a day all week long, you are welcome to report any issue to us at any time, be it during the day or night.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="tm-bg-white-transparent tm-feature-box">
            <h3 class="tm-feature-name">Member Benefits</h3>
            <div class="tm-feature-icon-container"><i class="fas fa-3x fa-users"></i></div>
            <p class="text-center">Members receive benefits which include FREE merchandise for eligible purchases, a buffet during lunchtime for each booking made, unlimited golf play time, and many more.</p>
          </div>
        </div>
      </div>


        <!-- Page footer -->
        <footer class="row">
          <p class="col-12 text-white text-center tm-copyright-text">
            Copyright &copy; 2020 System Landing Page. 
            Designed by <a href="#" class="tm-copyright-link">Alexandra</a>
          </p>
        </footer>
      </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
