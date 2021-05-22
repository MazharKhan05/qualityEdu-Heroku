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
</head>

<body>
    <script>
        function total(){
            var sub1 = parseInt(document.getElementById("g1").value);
            var sub2 = parseInt(document.getElementById("g2").value);
            var sub3 = parseInt(document.getElementById("g3").value);
            var sub4 = parseInt(document.getElementById("g4").value);
        
            var totol=sub1+sub2+sub3+sub4;
            var ave=totol/4;
            var percent=ave*9.5;
            document.getElementById("average").innerHTML="your average grade is: "+ave;
            document.getElementById("percentage").innerHTML="your average percentage is: "+percent;
        // 	// if(sub1>10 || sub2>10 || sub3>10 || sub4>10 || sub5>10 || sub6>10 || sub7>10 || sub8>10 ){
        // // 	alert("please enter grade in the range of 10");
        // // }
        if (ave>9)
             {
             document.getElementById("perform").innerHTML="Your Performance is: Excellent ";
             }
             else if (ave>7)
             {
                 document.getElementById("perform1").innerHTML="Your Performance is: Good";
             }
             else if (ave>6)
             {
                 document.getElementById("perform2").innerHTML="Your Performance is: Average";
             }
             else if(ave<5)
             {
                 document.getElementById("perform3").innerHTML="You Have to Work Hard ";
            }
        
        }
        </script>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto"><a href="index.html"><span>Quality </span>Education</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li class="active"><a href="index.php">About Us</a></li>
          <li><a href="index.php">Services</a></li>
          <li><a href="index.php">Portfolio</a></li>
          <li><a href="index.php">Contact</a></li>
          <li><a href="logout.php">Logout</a></li>
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
          <h2>Grade Tally</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Grade Tally</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="row">
	
            <div class="col-md-7">
              <table class="table table-bordered">
            <thead class="thead-dark">
                  <tr><th colspan="2"><center><b>Enter your Details:</b></center></th></tr>
                  </thead>
                  <div class="form-group">
                  <tr>
                      <td><b>Semester 1</b></td>
                      <td><input type="text" class="form-control" name="g1" id="g1" placeholder="Enter your Sem1 Grade"></td>
                  </tr>
                  </div>
                  <div class="form-group">
                  <tr>
                      <td><b>Semester 2</b></td>
                      <td><input type="text" class="form-control" name="g2" id="g2" placeholder="Enter your Sem2 Grade"></td>
                  </tr>
                  </div>
                  <div class="form-group">
                  <tr>
                      <td><b>Semester 3</b></td>
                      <td><input type="text" class="form-control" name="g3" id="g3" placeholder="Enter your Sem3 Grade"></td>
                  </tr>
                  </div>
                  <div class="form-group">
                  <tr>
                      <td><b>Semester 4</b></td>
                      <td><input type="text" class="form-control" name="g4" id="g4" placeholder="Enter your Sem4 Grade"></td>
                  </tr>
                  </div>
                  <tr>
                  <div class="form-group">
                      <td colspan="2"><center><button class="btn btn-success" onclick="total()">Average </button></center></td>
                      </div>
                  </tr>
                  
              </table>
              </div>
              <div class="col-md-4">
              <center><div id ="result" class="card text-white bg-dark mb-3" style="width: 20rem;top:15%;position:absolute;left:50%">
          <div class="card-body">
              <h2 class="card-title"><center>Result</center></h2>
             
              <div id="average"></div>
              <div id="percentage"></div>
              <div id="perform"></div>
              <div id="perform1"></div>
              <div id="perform2"></div>
              <div id="perform3"></div>
            </div>
              </div>
              </center>
              </div>
          </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->

  </main><!-- End #main -->

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