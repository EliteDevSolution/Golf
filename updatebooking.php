<?php
include_once './db-connectgolf.php';

session_start();
$name = $_SESSION['user_name'];

$id=$_GET['id'];
if(!isset($id)) 
{
  echo "Access error!";
  exit;
}

if(isset($_POST['email'])){
  $a = $_POST['email'];
  $b = $_POST['jenis'];
  $c = $_POST['method'];
  $d = $_POST['bank'];
  $e = $_POST['masa'];
  $f = $_POST['tarikh'];

  
  $sql = "Update tempahan set user_email='$a', padanggolf='$b', masa='$e', tarikh='$f', method='$c', bank='$d' where Id='$id'";
  mysqli_query($con,$sql) or die("error");
  echo "<script>
  alert('Booking Updated Succesfully');
  document.location.href='list.php';
  </script>"; 
} else 
{
  $sql = "Select * from tempahan where Id='$id'";
  $res = mysqli_query($con,$sql) or die("error");
  $result =  mysqli_fetch_assoc($res);
  
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Booking Page</title>

    <link rel="icon" href="https://lh3.googleusercontent.com/proxy/AJu9IUBuL0Qsqnj5HahPnv_WaOPHj0dlL6Dzmj9_6FqfBCkaKGIRPjiI-7b2gZ11CCLtkAF1KDvVAHtbtu2e6DO-eCIJJrCt4HzL_KAObXGDwrCsIVZD" type="image/icon type">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>    
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/templatemo-style.css" />
    <style>
    h2 {text-align: center;}
    </style>
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
                      <a class="nav-link" href="list.php">Booking List<span class="sr-only">(current)</span></a>
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

        <!-- Testimonials header -->
        <br><br>
        <section class="row" id="tmServices">
          <div class="col-12" size >
            <fieldset class="row row-fluid">
              
              <div class="col-lg-8 tm-contact-col-left">
                <h4 class="text-center text-white">Edit booking</h4>
                <form method="POST" id="tmContactForm" class="tm-bg-black-transparent tm-contact-form">
                
                  <div class="form-group">
                    <input type="email" id="contact_email" name="email" value="<?=$result['user_email']?>" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Enter your email" required>
                  </div>

                   <div class="form-group">
                  <label>Jenis Padang Golf: </label>
                  <select name="jenis" required>
                    <option value="Link" <?php echo $result['padanggolf'] == 'Link' ? 'selected' : '';?>>Link Course</option>
                    <option value="Dessert" <?php echo $result['padanggolf'] == 'Dessert' ? 'selected' : '';?>>Dessert Course</option>
                    <option value="Parkland" <?php echo $result['padanggolf'] == 'Parkland' ? 'selected' : '';?>>Parkland Course</option>
                   </select>
                 </div>

                <div class="form-group">
                  <label>Date: </label>
                  <input type="date" min="2021-01-01" max="2021-12-31" name="tarikh" required value="<?=$result['tarikh']?>">
                </div>

                   <div class="form-group">
                  <label>Time Period: </label>
                  <input type="time" min="09:00" max="17:00" name="masa" required value="<?=$result['masa']?>">
                   </input>
                 </div>

                  <div class="form-group">

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" <?php echo $result['method'] == 'Online Banking' ? 'checked' : '';?> type="radio" name="method" id="inlineRadio1" value="Online Banking" required>
                      <label class="form-check-label" for="inlineRadio1">Online Banking</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="method" id="inlineRadio2" value="Cash" required <?php echo $result['method'] == 'Cash' ? 'checked' : '';?>>
                      <label class="form-check-label" for="inlineRadio2">Cash</label>
                    </div>
                  </div>

                  <div class="form-group">
                  <label>Choices of Bank: </label>
                  <select name="bank" required  >
                    <option value="Maybank" <?php echo $result['bank'] == 'Maybank' ? 'selected' : '';?> >Maybank</option>
                    <option value="Cimb Bank" <?php echo $result['bank'] == 'Cimb Bank' ? 'selected' : '';?> >Cimb Bank</option>
                    <option value="Bank Islam" <?php echo $result['bank'] == 'Bank Islam' ? 'selected' : '';?> >Bank Islam</option>
                    <option value="Am Bank" <?php echo $result['bank'] == 'Am Bank' ? 'selected' : '';?> >Am Bank</option>
                    <option value="RHB Bank" <?php echo $result['bank'] == 'RHB Bank' ? 'selected' : '';?> >RHB Bank</option>
                    <option value="Public Bank" <?php echo $result['bank'] == 'Public Bank' ? 'selected' : '';?> >Public Bank</option>
                    <option value="Hong Leong Bank" <?php echo $result['bank'] == 'Hong Leong Bank' ? 'selected' : '';?> >Hong Leong Bank</option>
                   </select>
                 </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary tm-btn-submit rounded-0" >
                      Submit
                    </button>
                  </div>

                </form>

            </div>
            </fieldset>
          </div>   
        </section>
        <br><br>


          <h2 style="color: #FFFFFF" cen>- Our Staff -</h2> 
        <section class="row tm-testimonials-section">   
            <div class="col-12 tm-carousel" align="text-center">    
                <div class="tm-bg-black-transparent tm-testimonial-box text-center">                    
                  <div class="tm-person-img-container">
                    <img src="img/lee.jpg" alt="Image" class="img-fluid mx-auto"/>
                  </div>              
                  <h3 class="tm-about-name tm-uppercase">Lee Gon</h3>
                  <p class="tm-about-description">
                    3 words. Handsome, young, nerdy.He did not talk too much but still one of the best at his job, female customers likely to spend their time with him on the call rather than booking.
                  </p>
                </div>

                <div class="tm-bg-black-transparent tm-testimonial-box text-center">
                  <div class="tm-person-img-container">
                    <img src="img/siti.jpg" alt="Image" class="img-fluid mx-auto"/>
                  </div>              
                  <h3 class="tm-about-name tm-uppercase">Siti Aisyah</h3>
                  <p class="tm-about-description">
                      The most beautiful and kindest receptionist you will ever met, don't ever mess with her because deeply inside she is more fierce than Mia is, very scarrryyy. 
                  </p>
                </div>

                <div class="tm-bg-black-transparent tm-testimonial-box text-center">
                  <div class="tm-person-img-container">
                    <img src="img/peter.jpg" alt="Image" class="img-fluid mx-auto"/>
                  </div>              
                  <h3 class="tm-about-name tm-uppercase">Peter Parker</h3>
                  <p class="tm-about-description">
                    He's your friendly receptionist, been a receptionist for 3 years and competing with Jichu for employee of the month title, Peter is so competitive and generous in doing his job.
                  </p>
                </div>

                <div class="tm-bg-black-transparent tm-testimonial-box text-center">
                  <div class="tm-person-img-container">
                    <img src="img/ahmad.jpg" alt="Image" class="img-fluid mx-auto"/>
                  </div>              
                  <h3 class="tm-about-name tm-uppercase">Ahmad Itqan</h3>
                  <p class="tm-about-description">
                    A thoughtful and harmonious employee, has shown that he's capable of helping other employee and customer in a various ways with great attitude.
                  </p>
                </div>    
                <div class="tm-bg-black-transparent tm-testimonial-box text-center">
                  <div class="tm-person-img-container">
                    <img src="img/person-2.png" alt="Image" class="img-fluid mx-auto"/>
                  </div>              
                  <h3 class="tm-about-name tm-uppercase">Mia Adriana</h3>
                  <p class="tm-about-description">
                      A ferocious yet very gentle and sweet inside, Mia has been able to solve all of customers' as soon as she receives a complaint or report made from customer.
                  </p>
                </div>

                <div class="tm-bg-black-transparent tm-testimonial-box text-center">
                  <div class="tm-person-img-container">
                    <img src="img/jichu.jpg" alt="Image" class="img-fluid mx-auto"/>
                  </div>              
                  <h3 class="tm-about-name tm-uppercase">Jichu Miu</h3>
                  <p class="tm-about-description">
                    Head of receptionist, a true example of a leader and dedicated employee been working for 5years and has been employee of the month for 5 months straight.
                  </p>
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