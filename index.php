<!doctype html>
<html lang="en">

<head>
   
    <!--===== Logo =====-->
    <link rel="shourtcut icon" href="assets/images/OIP (3).jpeg">
   
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/flaticon.css">
    
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      
    <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/slick.css">
       
    <link rel="stylesheet" href="assets/css/default.css">
    
    <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/style1.css">
  
  
</head>

<body>

<div class="bgimg">
   <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">

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
          <li class="nav-item"><a href="amount.php" class="nav-link">PAYMENT LIST</a></li>
          <li class="nav-item"><a href="https://cosmofeed.com/vp/64f9c218e21171001ec7a0ed" class="nav-link">Donate Anonymously</a></li>
          <li class="nav-item"><a href="../uphaar/reg/card.php" class="nav-link">Widow Information</a></li>
          <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery </a></li>
          <li class="nav-item"><a href="contect/contect.php" class="nav-link">Contact </a></li>

          <li class="visit-count"  >
          <i class="fa-regular fa-user"></i>
          <?php

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
   
<?php

// Include visitor log script

include_once 'visitor_logs/log.php';

?>

          
      
    <div class="together-area bg_cover"  style="background-image: url('assets/images/bg-2123.jpg');" data-stellar-background-ratio="0.9">

 
    </div>

    <section class="ftco-counter ftco-intro" id="section-counter">
    	<div class="container">
    		
        <div class="main-btn" style="padding-left : 20px;">
                         <div>
                            <br>
                            <h4 class="mb-4" >Government Schemes </h4>
                        	<h6> schemes provided by Government</h6>
                            <a href="projects-1.html">click here </a>
                        </div>
                </div>
              
                

                <div class="main-btn" style="padding-left : 20px;">
                         <div>
                            <br>
                            <h4 class="mb-4" > Be a Doner </h4>
                        	<h6> Helps one's who are in need</h6>
                            <a href="reg1/home.php">click here </a>
                        </div>
                </div>
                <div class="main-btn" style="padding-left : 20px;">
                         <div>
                            <br>
                            <h4 class="mb-4" >Apply for Donation </h4>
                        	<h6> Apply here to get donation   </h6>
                            <a href="term.php">click here </a>
                        </div>
                </div>
    	</div>
    </section>	

    

    

   <!--====== HEADER PART START ======-->
   

    

   

    <!--====== CATEGORIES PART START ======-->

    
    
    <!--====== CATEGORIES PART ENDS ======-->

    <!--====== CTA PART START ======-->

    
    <!--====== CTA PART ENDS ======-->

    <!--====== EXPLORE PROJECTS PART START ======-->
    
    <section class="explore-projects-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <span>Pepole who need your support </span>
                        <h3 class="title">Widows</h3>
                    </div>
                </div>
            </div>
            <div class="row explore-project-active">
                <div class="col-lg-4">
                    <div class="explore-projects-item mt-30">
                        <div class="explore-projects-thumb">
                            <img src="assets/images/p9.jpg" alt="explore-projects" height="235">
                            <a href="#"><i class="fa fa-heart"></i></a>
                        </div>
                        <div class="explore-projects-content">
                            <div class="item d-flex align-items-center">
                                <span>Design</span>
                                <p><i class="fa fa-clock-o"></i> 20 Days Left</p>
                            </div>
                            <a href="single-project.html"><h3 class="title">Ankita Gehlot</h3></a>
                            <div class="projects-range">
                                <div class="projects-range-content">
                                    <ul>
                                        <li>Raised:</li>
                                        <li>23%</li>
                                    </ul>
                                    <div class="range"></div>
                                </div>
                            </div>
                            <div class="projects-goal">
                                <span>Goal: <span>360000.00 INR</span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="explore-projects-item mt-30">
                        <div class="explore-projects-thumb">
                            <img src="assets/images/p6.jpeg" alt="explore-projects" height="235">
                            <a href="#"><i class="fa fa-heart"></i></a>
                        </div>
                        <div class="explore-projects-content">
                            <div class="item d-flex align-items-center">
                                <span>Design</span>
                                <p><i class="fa fa-clock-o"></i> 20 Days Left</p>
                            </div>
                            <a href="single-project.html"><h3 class="title">Sankiti Gour </h3></a>
                            <div class="projects-range">
                                <div class="projects-range-content">
                                    <ul>
                                        <li>Raised:</li>
                                        <li>23%</li>
                                    </ul>
                                    <div class="range"></div>
                                </div>
                            </div>
                            <div class="projects-goal">
                                <span>Goal: <span>450000.00 INR</span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="explore-projects-item mt-30">
                        <div class="explore-projects-thumb">
                            <img src="assets/images/p5.jpg" alt="explore-projects" height="235">
                            <a href="#"><i class="fa fa-heart"></i></a>
                        </div>
                        <div class="explore-projects-content">
                            <div class="item d-flex align-items-center">
                                <span>Design</span>
                                <p><i class="fa fa-clock-o"></i> 20 Days Left</p>
                            </div>
                            <a href="single-project.html"><h3 class="title">Moti_na </h3></a>
                            <div class="projects-range">
                                <div class="projects-range-content">
                                    <ul>
                                        <li>Raised:</li>
                                        <li>23%</li>
                                    </ul>
                                    <div class="range"></div>
                                </div>
                            </div>
                            <div class="projects-goal">
                                <span>Goal: <span>932000.00 INR</span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="explore-projects-item mt-30">
                        <div class="explore-projects-thumb">
                            <img src="assets/images/p4.jpg" alt="explore-projects" height="235">
                            <a href="#"><i class="fa fa-heart"></i></a>
                        </div>
                        <div class="explore-projects-content">
                            <div class="item d-flex align-items-center">
                                <span>Design</span>
                                <p><i class="fa fa-clock-o"></i> 20 Days Left</p>
                            </div>
                            <a href="single-project.html"><h3 class="title">Jaspali Sharma </h3></a>
                            <div class="projects-range">
                                <div class="projects-range-content">
                                    <ul>
                                        <li>Raised:</li>
                                        <li>23%</li>
                                    </ul>
                                    <div class="range"></div>
                                </div>
                            </div>
                            <div class="projects-goal">
                                <span>Goal: <span>78600.00 INR</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    
    <section class="together-area bg_cover" style="background-image: url(assets/images/p4.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="together-content text-center">
                        <span>World is Full with Creativity</span>
                        <h3 class="title">Together We can Bring More Creativity into the World</h3>
                        <a class="main-btn" href="reg1/home.php">Start a donation</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    
    <section class="fun-facts-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="fun-facts-item text-center">
                        <div class="icon">
                            <i class="flaticon-scrum"></i>
                        </div><br>
                        <h4 class="title odometer" data-count="690">00</h4>
                        <span>Projects Completed</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="fun-facts-item text-center">
                        <div class="icon">
                            <i class="flaticon-mission"></i>
                        </div><br>
                        <h4 class="title odometer" data-count="8080">00</h4>
                        <span>Projects Completed</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="fun-facts-item text-center">
                        <div class="icon">
                            <i class="flaticon-team"></i>
                        </div><br>
                        <h4 class="title odometer" data-count="440">00</h4>
                        <span>Projects Completed</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="fun-facts-item text-center last-item">
                        <div class="icon">
                            <i class="flaticon-increment"></i>
                        </div><br>
                        <h4 class="title odometer" data-count="2870">00</h4>
                        <span>Projects Completed</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="fun-facts-shape-1">
            <img src="assets/images/fun-facts-shape-1.png" alt="">
        </div>
        <div class="fun-facts-shape-2">
            <img src="assets/images/fun-facts-shape-2.png" style="height: 10%;" alt="">
        </div>
    </section>
    
    <!--====== FUN FACTS PART ENDS ======-->

    

    <!--====== TEAM PART START ======-->
    
    <section class="team-area bg_cover" style="background-image: url(assets/images/CDK5500.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title section-title-2 text-center">
                        <span>Meet Our Team Members</span>
                        <h3 class="title">Team Members</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="team-main-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7">
                    <div class="team-item mt-30">
                        <div class="team-thumb">
                            <img src="assets/images/team-1.jpeg" alt="team">
                            <div class="share">
                                <i class="fa fa-share-alt"></i>
                                <ul>
                                    <li><a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook-official"></i></a></li>
                                    <li><a href="https://in.pinterest.com/login/"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="https://www.instagram.com/accounts/login/?hl=en"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h5 class="title">MOHAN</h5>
                            <span>Founder</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="team-item mt-30">
                        <div class="team-thumb">
                            <img src="assets/images/yogi2.jpg" alt="team">
                            <div class="share">
                                <i class="fa fa-share-alt"></i>
                                <ul>
                                    <li><a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook-official"></i></a></li>
                                    <li><a href="https://in.pinterest.com/login/"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="https://www.instagram.com/accounts/login/?hl=en"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h5 class="title">YOGEETA</h5>
                            <span>Founder</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="team-item mt-30">
                        <div class="team-thumb">
                            <img src="assets/images/ANKIT.jpeg" alt="team">
                            <div class="share">
                                <i class="fa fa-share-alt"></i>
                                <ul>
                                    <li><a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook-official"></i></a></li>
                                    <li><a href="https://in.pinterest.com/login/"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="https://www.instagram.com/accounts/login/?hl=en"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h5 class="title">ANKIT</h5>
                            <span>Founder</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--====== TEAM PART ENDS ======-->
     <!--====== GUIDE PART START ======-->
    
     <section class="guide-area bg_cover" style="background-image: url(assets/images/guide-bg.jpg);height: 50%;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <span>Get Our Complete</span>
                        <h3 class="title">Donation Guide</h3>
                        <form action="#">
                            <div class="input-box">
                                <input type="text" placeholder="Email address">
                                <div class="together-content text-center">
                        
                        <a class="main-btn" href="thankyou.php">sing up</a>
                    </div>
                                
                    

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
         
    <!--====== GUIDE PART ENDS ======-->

    <!--====== NEWS PART START ======-->
    
    
    
    <!--====== NEWS PART ENDS ======-->

   

    <!--====== FOOTER PART START ======-->
    
    <footer class="footer-area bg_cover" style="background-image: url(assets/images/footer-bg.jpg); height: 78%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="footer-about mt-30">
                        <a href="index.html"></a>
                        <p>Don't be sunlight in someone's bright hours, try to be moonlight in someone's dark hours.</p>
                        <ul>
                            <li><a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook-official"></i></a></li>
                            <li><a href="https://in.pinterest.com/login/"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="https://www.instagram.com/accounts/login/?hl=en"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-list mt-30">
                        <div class="footer-title">
                            <h4 class="title">Company</h4>
                            <ul>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">How It Works</a></li>
                                <li><a href="#">Knowledge hub</a></li>
                                <li><a href="#">Success Stories</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-list mt-30">
                        <div class="footer-title">
                            <h4 class="title">Fundraising Idea</h4>
                            <ul>
                                <li><a href="#">Make Contact</a></li>
                                <li><a href="#">Good Communication</a></li>
                                <li><a href="#">Gratitude</a></li>
                                <li><a href="#">Progress Updates</a></li>
                                <li><a href="#">Content</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="footer-newsletter mt-30">
                        <div class="footer-title">
                            <h4 class="title">Newsletter</h4>
                        </div>
                        <form action="#">
                            <div  class="input-box" >
                                <input type="text" placeholder="Email Address" >
                                <button><i class="fa fa-envelope"></i></button>
                            </div>
                        </form>
                        <p>Sign up for our latest news & articles. We won’t give you spam mails.</p>
                    </div>
                </div>
            </div>
            <p>© Copyright 2023 by Mohan Yogeeta Ankit</p>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copyright text-center">
                        <p>© Copyright 2023 by Mohan Yogeeta Ankit</p>
                    </div>
                </div>
            </div>
</div>
</div>
                  </footer>
    
    <!--====== FOOTER PART ENDS ======-->
    
    




    
    

    
    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    
    <!--====== ajax contact js ======-->
    <script src="assets/js/ajax-contact.js"></script>
    
    <!--====== odometer js ======-->
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    
    <!--====== magnific popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>
    
    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
       <script>
    // Get a reference to the button element by its id
    var signupButton = document.getElementById('signup-button');

    // Add a click event listener to the button
    signupButton.addEventListener('click', function() {
        // Redirect to the "thank you" page
        window.location.href = 'thankyou.php';
    });
</script>

</body>

</html>
