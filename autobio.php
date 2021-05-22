<?php
// session_start();

//  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
//    header("location: login.php");
//    exit;
//  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Autobiography</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Company - v2.2.1
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
   .custom__Functionality{
        margin: 10px;
    }
    .project__Input{
        
        min-height: 250px;
        
    }
    .input__header{
        
        
        font-family: 'Montserrat', sans-serif;
        font-size: 2rem;
        font-weight: 600;
        margin-bottom: 30px;
        border-bottom: 1px solid gray;
    }
    .project__Input form{
        
        width: 100%;
        /* background-color: #ECECEC; */
        min-height: 250px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin-top: 20px;
        margin-bottom: auto;
        align-items: center;
        
    }
    .project__innerDiv{
        margin-bottom: 20px;
        display: flex;
        flex-direction: row;
    }
    .project__innerDiv input{
        padding: 5px;
        outline: none;
        border-radius: 4px;
       
        
        margin-left: 5px;
    }
    .project__innerDiv label {
        margin-left: 20px;
        font-size: 1.2rem;
    }
    .desc__input{
        display: flex;
        justify-content:center;
        align-items: center;
        margin-bottom: 15px;
    }
    .desc__input textarea{
        padding: 5px;
        outline: none;
        border-radius: 4px;
    }
    .desc__input label{
        margin-right: 10px;
        font-size: 1.2rem;
    }
     .tech__input label{
        font-size: 1.2rem;
    }
    .tech__input input{
        padding: 5px;
        outline: none;
        border-radius: 4px;
        margin-left: 5px;
        
    }
    
    .container-fluid{
        display: flex;
        justify-content:center;
        
    }
    .post__innerContainer{
        
        width: 75%;
        
    }
    .card{
        border: none !important;
        background-color: #ECECEC;
        border-radius: 6px !important;
    }
    .card-body h4{
        font-size: 1.7rem;
        font-weight: 600;
        
        margin: 3px;
    }
    .card-body h5{
        font-size: 1.2rem;
        font-weight: 400;
        color:#8F8F8F;
        margin-bottom: 20px;
    }
    .card-body .project__desc{
        margin-bottom: 4px;
    }
    .bi-suit-heart{
        margin-right: 5px;
    }
    .action__btns a{
        text-decoration: none;
    }
    .comment__action{
        position: relative;

    }
    .comment__action span{
       position: absolute;
       left: 15px;
    }
    .project__actionBtn{
        font-size: 1.3rem !important;
    }
    .project__comment{
        margin-top: 5px;
    }
    .project__comment input{
        padding: 5px;
        outline: none;
        border-radius: 4px;
        margin-left: 5px;
    }

    .user__comment{
        display: flex;
        
        
    }
    .user__comment p{
        font-size: 1rem;
        font-weight: 600;
        margin-right: 10px;
        margin-bottom: 5px;
    }
    .user__comment span{
        padding: 2px;
        font-size: 0.9rem;
        font-weight: 400;
        
    }

    </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html"><span>Quality </span>Education</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="">Home</a></li>
          <li class="active"><a href="">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Book Recommendation</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Book Recommendation</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

      <div class="hd">	
<img src="{{ user_image }}" >
</div><hr>
<div class="book">
	<p>Showing results for: <b>{{ search_name }}</b></p>
<!-- <div class="tooltip">
	<div class="card">
 		<img src="https://images.gr-assets.com/books/1503066414m/19501.jpg" style="width:60%;height: auto;" />
  <span class="tooltiptext"><img src="https://images.gr-assets.com/books/1503066414m/19501.jpg" style="width:auto;height: auto;">Written by <b>{{authr}} </b>{{dsc}} <b>download over here:</b><br>{{ dw|urlize(20, true) }} </span>
  <div class="container">
    <h4><b>{{txt}}</b></h4> 
    <p><b>{{rat}}</b></p> 
  </div>
</div>
            		       
</div> -->

<div class="tooltip">
  <div class="card">
<img src="https://images.gr-assets.com/books/1503066414m/19501.jpg" style="width:60%;height: auto;" />

   <span class="tooltiptext">Written by <b>{{book_author[0]}} </b>{{book_desc[0]}} <b>download over here:</b><br>{{ book_file[0]|urlize(20, true) }} </span>
  <div class="container">
    <h4><b>{{book_names[0]}}</b></h4> 
    <p><b>{{book_rating[0]}}</b></p> 
  </div>
</div>
</div>

</div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>About Us</h4>
            <p>
            By providing every student with a quality education, and the materials they need to study and explore various facilities being available on our website, we can help students from all backgrounds learn and thrive.
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Link</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contact Us</a></li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
             
              <li><i class="bx bx-chevron-right"></i> <a href="grade.php">Grade Tally</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="ptojectShpwcase.php">Project Hub</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Search with Recommendation</a></li> 
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>View our Newsletter to get Updated with us</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Company</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
          </a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>