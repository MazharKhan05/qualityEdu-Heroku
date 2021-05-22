
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pricing - Company Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
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
.hd{
text-align: center;  
padding: 15px;  
border: 2px ; 
  background-color: rgba(149, 165, 166, 1);
} 
img {
  max-width: 60%;  
height: auto; 

}
h1{
        margin-top: auto;
        padding-bottom: 20px;
        font-family: sans-serif;
        text-align: center;
    }
h2{
    font-family: cursive;
}
.card {
  background-color:rgba(44, 62, 80, 1); 
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  min-width: 300px;
  text-align: center;
  font-family: arial;
  border-top: 6px solid lightseagreen;
  margin-top: 20px;
  margin-left: 100px;
  margin-bottom: 20px;
  margin-right: 40px;
  transition: 0.3s;
  display: inline-block;
  width: auto;
  color: white;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
.tooltip {
  position: relative;
  display: inline-block;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 600px;
  height: auto;
  background-color: rgba(228, 233, 237, 1);
  color: black;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position:absolute;
  z-index: 1;
  bottom: 100%;
  left: 50%;
  margin-left: -60px;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}
.book{
        height: 70vh;
        margin-top: 15vh;
        margin-bottom: 15vh;
        margin-right: 5vh;
        margin-left: 5vh;
        display: block;
        background-color: white;
        border-radius: 20px;
        padding: 1em;
        width: auto;
        box-shadow: 0px -10px 20px -5px #E2E2E2;
        text-align: center;
    }

    @media screen and (max-width:600px) {
        .book{
            margin-top: 12vh;
            margin-bottom: 12vh;
        }
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

  <div class="tooltip">
  <div class="card">
  <img src="https://images.gr-assets.com/books/1358276407m/48855.jpg" style="width:60%; height: auto;">

   <span class="tooltiptext">Written by <b>{{book_author[0]}} </b>{{book_desc[0]}} <b>download over here:</b><br>{{ book_file[0]|urlize(20, true) }} </span>
  <div class="container">
    <h4><b>{{book_names[0]}}</b></h4> 
    <p><b>{{book_rating[0]}}</b></p> 
  </div>
</div>
</div>
                       
<div class="tooltip">
  <div class="card">
<img src="https://images.gr-assets.com/books/1298411339m/34.jpg" style="width:60%; height: auto;">

   <span class="tooltiptext">Written by <b>{{book_author[1]}} </b>{{book_desc[1]}} <b>download over here:</b><br>{{ book_file[1]|urlize(20, true) }} </span>
  <div class="container">
    <h4><b>{{book_names[1]}}</b></h4> 
    <p><b>{{book_rating[1]}}</b></p> 
  </div>
</div>
</div>
                       
<div class="tooltip">
  <div class="card">
<img src="https://images.gr-assets.com/books/1342493368m/3636.jpg" style="width:60%; height: auto;">

  <span class="tooltiptext">Written by <b>{{book_author[2]}} </b>{{book_desc[2]}} <b>download over here:</b><br>{{ book_file[2]|urlize(20, true) }} </span>
  <div class="container">
    <h4><b>{{book_names[2]}}</b></h4> 
    <p><b>{{book_rating[2]}}</b></p> 
  </div>
</div>
</div>

<div class="tooltip">
  <div class="card">
<img src="https://images.gr-assets.com/books/1353029077m/100915.jpg" style="width:60%; height: auto;">

  <span class="tooltiptext">Written by <b>{{book_author[3]}} </b>{{book_desc[3]}} <b>download over here:</b><br>{{ book_file[3]|urlize(20, true) }} </span>
  <div class="container">
    <h4><b>{{book_names[3]}}</b></h4> 
    <p><b>{{book_rating[3]}}</b></p> 
  </div>
</div>
</div>

<div class="tooltip">
  <div class="card">
<img src="https://s.gr-assets.com/assets/nophoto/book/111x148-bcc042a9c91a29c1d680899eff700a03.png" style="width:60%; height: auto;">

  <span class="tooltiptext">Written by <b>{{book_author[4]}} </b>{{book_desc[4]}} <b>download over here:</b><br>{{ book_file[4]|urlize(20, true) }} </span>
  <div class="container">
    <h4><b>{{book_names[4]}}</b></h4> 
    <p><b>{{book_rating[4]}}</b></p> 
  </div>
</div>
</div>

<div class="tooltip">
  <div class="card">
<img src="https://images.gr-assets.com/books/1327867269m/10210.jpg" style="width:60%; height: auto;">

  <span class="tooltiptext">Written by <b>{{book_author[5]}} </b>{{book_desc[5]}} <b>download over here:</b><br>{{ book_file[5]|urlize(20, true) }} </span>
  <div class="container">
    <h4><b>{{book_names[5]}}</b></h4> 
    <p><b>{{book_rating[5]}}</b></p> 
  </div>
</div>
</div>

<div class="tooltip">
  <div class="card">
<img src="https://images.gr-assets.com/books/1390053681m/19063.jpg" style="width:60%; height: auto;">

  <span class="tooltiptext">Written by <b>{{book_author[6]}} </b>{{book_desc[6]}} <b>download over here:</b><br>{{ book_file[6]|urlize(20, true) }} </span>
  <div class="container">
    <h4><b>{{book_names[6]}}</b></h4> 
    <p><b>{{book_rating[6]}}</b></p> 
  </div>
</div>
</div>

<div class="tooltip">
  <div class="card">
<img src="https://images.gr-assets.com/books/1327656754m/11.jpg" style="width:60%; height: auto;">

  <span class="tooltiptext">Written by <b>{{book_author[7]}} </b>{{book_desc[7]}} <b>download over here:</b><br>{{ book_file[7]|urlize(20, true) }} </span>
  <div class="container">
    <h4><b>{{book_names[7]}}</b></h4> 
    <p><b>{{book_rating[7]}}</b></p> 
  </div>
</div>
</div>

<div class="tooltip">
  <div class="card">
<img src="https://images.gr-assets.com/books/1473454532m/37435.jpg" style="width:60%; height: auto;">

  <span class="tooltiptext">Written by <b>{{book_author[8]}} </b>{{book_desc[8]}} <b>download over here:</b><br>{{ book_file[8]|urlize(20, true) }} </span>
  <div class="container">
    <h4><b>{{book_names[8]}}</b></h4> 
    <p><b>{{book_rating[8]}}</b></p> 
  </div>
</div>
</div>

<div class="tooltip">
  <div class="card">
<img src="https://images.gr-assets.com/books/1439632243m/24178.jpg" style="width:60%; height: auto;">

  <span class="tooltiptext">Written by <b>{{book_author[9]}} </b>{{book_desc[9]}} <b>download over here:</b><br>{{ book_file[9]|urlize(20, true) }} </span>
  <div class="container">
    <h4><b>{{book_names[9]}}</b></h4> 
    <p><b>{{book_rating[9]}}</b></p> 
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
            <h3>Company</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
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
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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
</body>
</html>
