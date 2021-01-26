<?php
include_once './db-connectgolf.php';

session_start();
$name = $_SESSION['user_name'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>List Page</title>

    <link rel="icon" href="https://lh3.googleusercontent.com/proxy/AJu9IUBuL0Qsqnj5HahPnv_WaOPHj0dlL6Dzmj9_6FqfBCkaKGIRPjiI-7b2gZ11CCLtkAF1KDvVAHtbtu2e6DO-eCIJJrCt4HzL_KAObXGDwrCsIVZD" type="image/icon type">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>    
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/templatemo-style.css" />
  </head>
<!--
Parallo Template
https://templatemo.com/tm-534-parallo
-->
  <body id="servicesPage">
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
                    <li class="nav-item">
                      <div class="tm-nav-link-highlight"></div>
                      <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item green-highlight active">
                      <div class="tm-nav-link-highlight"></div>
                      <a class="nav-link" href="#">Booking List<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <div class="tm-nav-link-highlight"></div>
                      <a class="nav-link" href="logout.php">Logout</a>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
        <br><br>

        <!-- Testimonials header -->
        <table action="#" width="100%" class="table">
                <table action="#" width="100%" class="table">
                  <div>
                     <thead> 
                     <tr>
                     <td width="2%" style="color: #FFF"><b>ID</b></td>
                     <td width="7%" style="color: #FFF"><b>Email</b></td>
                     <td width="5%" style="color: #FFF"><b>Golf Course</b></td>
                     <td width="5%" style="color: #FFF"><b>Time</b></td>
                     <td width="5%" style="color: #FFF"><b>Date</b></td>
                     <td width="3%" style="color: #FFF"><b>Action</b></td>                      
                     </thead>
                     <tbody>
              <?php
              $sql = "SELECT * FROM tempahan";
              $result = mysqli_query($con,$sql);
              $i = 1;
              while ($row = mysqli_fetch_array($result)) {?>

                <?php
                ?>
                      <tr>
                        <th style="color: #FFF"><?php echo $i++ ?></th>
                        <td style="color: #FFF"><?php echo $row['user_email']; ?></td>
                        <td style="color: #FFF"><?php echo $row['padanggolf']; ?></td>
                        <td style="color: #FFF"><?php echo $row['masa']; ?></td>
                        <td style="color: #FFF"><?php echo $row['tarikh']; ?></td>
                        <td style="color: #FFF"><a style="color: #00ccff" href="updatebooking.php?id=<?=$row['Id']?>">Edit</a>&nbsp;|&nbsp;<a style="color: #ff0000" href="del.php?id=<?=$row['Id']?>" onclick="return confirm('Are you sure you want to delete?');">Delete</a></td>
                    </tr>
              <?php } ?>            
                    </tbody>
                  </div>
                  </div>
        </table>
       
        <!-- Call to Action -->
        <br><br><br><br><br><br><br><br>
        <section class="row tm-testimonials-cta" id="tmCallToAction">
          <div class="col-12 tm-call-to-action-col">
            <img src="https://i.pinimg.com/originals/2e/cb/95/2ecb95ec5b10eea602f2d17e0cbf35a6.jpg"  alt="Image" class="img-fluid tm-call-to-action-image col-7" />
            <div class="tm-bg-white tm-call-to-action-text">
              <h2 class="tm-call-to-action-title" alt="quote">Tiger Woods Once Said:</h2>
              <p class="tm-call-to-action-description"><q>If you are given a chance to be a role model, I think you should always take it because you can influence a person's life in a positive light, and that's what I want to do. That's what it's all about.</q>
              <p class="text">- Tiger Woods</p></p>
            </div>
          </div>
        </section>

        <!-- Page footer -->
        <footer class="row">
          <p class="col-12 text-white text-center tm-copyright-text">
            Copyright &copy; 2020 System Landing Page. 
            Designed by <a href="#" class="tm-copyright-link">Alexandra</a>
          </p>
        </footer>
      </div>
      <!-- .container-fluid -->
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script>
        $(function(){
            $('.tabgroup > div').hide();
            $('.tabgroup > div:first-of-type').show();  
            $('.tabs a').click(function(e){
              e.preventDefault();
              var $this = $(this),
                  tabgroup = '#'+$this.parents('.tabs').data('tabgroup'),
                  others = $this.closest('li').siblings().children('a'),
                  target = $this.attr('href');
              others.removeClass('active');
              $this.addClass('active');
              $(tabgroup).children('div').hide();
              $(target).show();

              // Scroll to tab content (for mobile)
              if($(window).width() < 992) {
                  $('html, body').animate({
                      scrollTop: $("#first-tab-group").offset().top
                  }, 200);    
              }              
            })

            $('.tm-carousel').slick({
                dots: true,
                  infinite: false,
                  arrows: false,
                  speed: 300,
                  slidesToShow: 3,
                  slidesToScroll: 2,
                  responsive: [
                    {
                      breakpoint: 1024,
                      settings: {
                          arrows: false,
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                      }
                    },
                    {
                      breakpoint: 600,
                      settings: {
                          arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1
                      }
                    },
                    {
                      breakpoint: 480,
                      settings: {
                          arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1
                      }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                  ]
            });  
        });
    </script>
  </body>
</html>