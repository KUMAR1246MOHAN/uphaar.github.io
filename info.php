<!DOCTYPE html>
<html lang="en">
  <head>
    <title>UPHAAR </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--===== Logo =====-->
    <link rel="shourtcut icon" href="assets/images/OIP (3).jpeg">

    <script src="https://kit.fontawesome.com/3ee3a7c552.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="bgimg">
   <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark" id="ftco-navbar">
    <div class="container">
<!-- 
     <a class="navbar-brand" href="donation.php">
    <img src="/images/bg_1.jpg" style="width:40px;">
  </a> -->
      <a class="navbar-brand" href="#">
  
  </a>
      <a href="" class="navbar-brand font-weight-bold">UPHAAR</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" >
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.php ?>" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="/welfare/registration for patient/profile.php" class="nav-link">Causes</a></li>
          <li class="nav-item"><a href="donation.php" class="nav-link">Donate Anonymously</a></li>
          <li class="nav-item"><a href="hospital.php" class="nav-link">Hospital Information</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact </a></li>
          <li class="visit-count"  >
          <i class="fa-regular fa-user"></i><?php

$count_page = ("hitcount.txt"); 
$hits = file($count_page);
$hits[0] ++;
 
$fp = fopen($count_page , "w");
fputs($fp , "$hits[0]");
fclose($fp);
echo " ".$hits[0];
 
?>
         </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
    <!-- END nav -->
<section id="main">
<br>
    <h3>  1 -<a href="https://rarediseases.org/for-patients-and-families/help-access-medications/patient-assistance-programs-2/#:~:text=The%20NORD%20COVID-19%20Critical%20Relief%20Program%20is%20designed,assistance%20with%20insurance%20premiums%20and%20limited%20medical%20expenses."> NORD (National Organization for Rare Disorders)</a> </h3>
    <p>NORD has provided assistance programs to help patients obtain life-saving or life-sustaining medication they could not otherwise afford. These programs provide medication, financial assistance with insurance premiums and co-pays, diagnostic testing assistance, and travel assistance for clinical trials or consultation with disease specialists.</p>
<br>

    <h3>  2 - <a href="https://rarediseases.nhp.gov.in/">Rare Diseases NPH </a></h3>
    <p>Digital Portal for Crowdfunding & Voluntary donations for Patients of Rare Diseases.<p>
<br>
    <h3>3 - <a href="https://www.helpageindia.org/donate/now">Rare Diseases at FDA</a></h3>
    <p>The FDA works with many people and groups, such as patients, caregivers, and drug and device manufactures, to support rare disease product development. <br>
<br>
    <h3>  4 -<a href="https://rarediseases.org/for-patients-and-families/help-access-medications/patient-assistance-programs-2/#:~:text=The%20NORD%20COVID-19%20Critical%20Relief%20Program%20is%20designed,assistance%20with%20insurance%20premiums%20and%20limited%20medical%20expenses."> NORD (National Organization for Rare Disorders)</a> </h3>
    <p>Alliance of patient associations dedicated to improving the quality of life of all people living with rare diseases in Europe.</p>
<br>
<h3>4 - Human Growth Foundation</h3>
    <p>Information about growth-related disorders through education, research, and advocacy. Member driven organization.</p>
<br>
   <h3>6 - Kindler Syndrome</h3>
   <p>An article and case study of this rare disease. Includes links.</p>
<br>
   <h3>7 - Office of Rare Diseases</h3>
   <p>Information on more than 6000 rare diseases, including current research, publications from scientific and medical journals, completed research, ongoing studies, and patient support groups.</p>
		</p>
    <br>
    </section>  
		
<section class="ftco-section-3 img" style="background-image: url(images/bg.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row d-md-flex">
        <div class="col-md-6 d-flex ftco-animate">
          <div class="img img-2 align-self-stretch" style="background-image: url(images/bg.jpg);"></div>
        </div>
        <div class="col-md-6 volunteer pl-md-5 ftco-animate">
          <h3 class="mb-3">CONTACT US </h3>
          <form action="#" class="volunter-form">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-white py-3 px-5">
            </div>
          </form>
        </div>          
        </div>
      </div>
    </section>

    
    
  

  

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>