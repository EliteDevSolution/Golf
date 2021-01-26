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
    <title>Golf Field Page</title>

    <link rel="icon" href="https://lh3.googleusercontent.com/proxy/AJu9IUBuL0Qsqnj5HahPnv_WaOPHj0dlL6Dzmj9_6FqfBCkaKGIRPjiI-7b2gZ11CCLtkAF1KDvVAHtbtu2e6DO-eCIJJrCt4HzL_KAObXGDwrCsIVZD" type="image/icon type">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
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
              <nav
                class="navbar navbar-expand-lg navbar-light tm-bg-white-transparent tm-navbar">
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
                      <a class="nav-link" href="homeuser.php"
                        >Home</a>
                    </li>
                    <li class="nav-item green-highlight active">
                      <div class="tm-nav-link-highlight"></div>
                      <a class="nav-link" href="#">Golf Field <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <div class="tm-nav-link-highlight"></div>
                      <a class="nav-link" href="booking.php">Booking</a>
                    </li>
                    <li class="nav-item">
                      <div class="tm-nav-link-highlight"></div>
                      <a class="nav-link" href="listuser.php">List Of Booking</a>
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

        <!-- Services header -->
        <section class="row" id="tmServices">
          <div class="col-12">
            <div class="parallax-window tm-services-parallax-header"
                 data-parallax="scroll"
                 data-z-index="101"
                 data-image-src="img/golfcourse.jpg">

                 <div class="tm-bg-black-transparent text-center tm-services-header">
                    <h2 class="text-uppercase tm-services-page-title">Our Golf Field</h2>
                    <p class="tm-services-description mb-0 small">
                        A golf course without features or challenges won’t engage the better golfer. Therefore, it’s the architect’s goal to create a valuable golf experience that will challenge every golfer to a degree equal to his ability. Each project and site requires distinct choices and a different tact to implement the appropriate level of challenge, recreation, quality and beauty. Good golf architecture isn’t swiftly identifiable, but it’s most certainly felt.   
                    </p>
                </div>
            </div>
          </div>  

          <div class="col-12 tm-tabs-container">
              <div class="tm-tab-links">
                    <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                        <li><a href="#tab1" class="">
                            <div class="icon-wrap"><i class="fas fa-2x"><span>&#127810;</span></i></div>
                            Link Golf Course                       
                        </a></li>
                        <li><a href="#tab2" class="">
                            <div class="icon-wrap"><i class="fab fa-2x"><span>&#127794;</span></i></div>
                            Parkland Golf Course           
                        </a></li>
                        <li><a href="#tab3" class="">
                            <div class="icon-wrap"><i class="fab fa-2x"><span>&#127797;</span></i></div>
                            Desert Golf Course          
                        </a></li>                    
                    </ul>
                </div>  
                <div class="tm-tab-contents">
                    <div id="first-tab-group" class="tabgroup">
                        <div id="tab1">                            
                            <div class="text-content">
                                <h2 class="tm-service-tab-title">Link Golf Course</h2>
                                <p class="tm-service-tab-p">Links courses remain most common in Ireland and Great Britain, especially in Scotland. The Open Championship is always played on links courses, and this is one of the main features which differentiates it from the three major championships held in the United States.
                                </p>                            
                                <p class="mb-0">The 2015 U.S. Open was played at Chambers Bay, a British links-style course in University Place, Washington. Royal Adelaide Golf Club is a links course in Adelaide, South Australia, and was partly designed by Alister MacKenzie
                                </p>
                            </div>
                        </div>
                        <div id="tab2">
                            <div class="text-content">
                                <h3 class="tm-service-tab-title">Parkland Golf Course</h3>
                                <p class="tm-service-tab-p">The most famous parkland golf course in the world is probably Augusta National. The course is very historic and obviously hosts one of the most important golf tournaments every year. The fast greens and abundance of trees to deal with make it a very challenging parkland golf course               
                                </p>                            
                                <p class="mb-0">A parkland golf course is usually heavily wooded and can be pretty flat in some cases. Some of the most elite parkland golf courses have a lot of trees and rolling fairways to make them extra hard.  
                                </p>
                            </div>
                        </div>
                        <div id="tab3">
                            <div class="text-content">
                                <h3 class="tm-service-tab-title">Desert Golf Course</h3>
                                <p class="tm-service-tab-p">A desert golf course is built in an area with a natural desert. It is constructed amongst the sand dunes and natural desert features. The only grass found on this type of course is on the tee box, fairways and putting greens. These courses are mostly found in the American southwest and in the Middle East.
                                </p>                            
                                <p class="mb-0">The Stadium Course at TPC Scottsdale might be the most famous golf course in the professional golf world. There has been so many iconic moments on the PGA Tour at that golf course and TPC Scottsdale is also an incredible place to plan a golf trip to.
                                </p>
                            </div>
                        </div>

                    </div>
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
        });
        
    </script>
  </body>
</html>