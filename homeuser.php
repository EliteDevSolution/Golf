<?php
include_once './db-connectgolf.php';

session_start();
$name = $_SESSION['user_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home Page</title>
  <link rel="icon" href="https://lh3.googleusercontent.com/proxy/AJu9IUBuL0Qsqnj5HahPnv_WaOPHj0dlL6Dzmj9_6FqfBCkaKGIRPjiI-7b2gZ11CCLtkAF1KDvVAHtbtu2e6DO-eCIJJrCt4HzL_KAObXGDwrCsIVZD" type="image/icon type">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/templatemo-style.css">
</head>
<body>
  <div class="parallax-window" data-parallax="scroll" data-image-src="img/bg-01.jpg">
    <div class="container-fluid">
      <div class="row tm-brand-row">
        <div class="col-lg-4 col-11">
          <div class="tm-brand-container tm-bg-white-transparent">
            <i class="fas fa-3x fa-golf-ball tm-brand-icon"></i>
            <div class="tm-brand-texts">
              <h1 class="text-uppercase tm-brand-name">Marimbo</h1>
              <p class="small">Golf Club Booking System</p>
              <p class="small">Welcome <?php echo $name; ?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-1">
          <div class="tm-nav">
            <nav class="navbar navbar-expand-lg navbar-light tm-bg-white-transparent tm-navbar">
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item green-highlight active">
                    <div class="tm-nav-link-highlight"></div><a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div><a class="nav-link" href="field.php">Golf Field</a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div><a class="nav-link" href="booking.php">Booking</a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div><a class="nav-link" href="listuser.php">List Of Booking</a>
                  </li>
                  <li class="nav-item">
                      <div class="tm-nav-link-highlight"></div>
                      <a class="nav-link" href="logoutuser.php">Logout</a>
                    </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>

      <section class="row" id="tmHome">
        <div class="col-12 tm-home-container">
            <div class="text-white tm-home-left">
              <p style="color: #d9d9d9" class="text-uppercase tm-slogan">Do You know what is golf?</p>
              <hr class="tm-home-hr" />
              <p class="tm-home-text" style="color: #FFFFFF">
                Golf is an individual sport played by hitting a ball with a club from a tee into a hole. The object is to get the ball into the hole with the least number of swings or strokes of the club. Golf is a hugely popular sport that is enjoyed by people of all ages. Golf is often played competitively, but can also be played for relaxation and just to enjoy the outdoors.
              </p>
              <a href="#tmFeatures" class="btn btn-primary">Learn More</a>
            </div>
            <div class="tm-home-right">
              <img width="500" height="500" src="https://c.tenor.com/5aDobZDkvAoAAAAi/golf-play-golf.gif" />
            </div>
          </div>
      </section>


      <div class="col-12">
            <div class="tm-bg-black-transparent tm-services-detail-box">
                <p>
                  <h1>Fact About Golf</h1>
                    Playing golf is fantastic cardiovascular exercise which brings numerous physical and mental health benefits. Swinging a golf club builds muscle and strengthens your core and if you pull or carry your golf bag instead of opting for the buggy you’ll be getting an even better workout. 
                </p>
            </div>
          </div> 

      <footer class="row">
        <p class="col-12 text-white text-center tm-copyright-text">Copyright © 2020 System Landing Page. Designed by <a href="#" class="tm-copyright-link">Alexandra</a></p>
      </footer>
    </div><!-- .container-fluid -->
  </div>
  <script src="js/jquery.min.js"></script> 
  <script src="js/parallax.min.js"></script> 
  <script src="js/bootstrap.min.js"></script>
</body>
</html>