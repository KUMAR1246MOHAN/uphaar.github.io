<!doctype html>
<html lang="en">

<head>
   


    <!--===== Logo =====-->
    <link rel="shourtcut icon" href="assets/images/OIP (3).jpeg">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!--====== flaticon css ======-->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    
    <!--====== odometer css ======-->
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    
    <!--====== magnific popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    
    <!--====== animate css ======-->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">
        <!--====== Style css ======-->
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
   
  
          
      
    <div class="together-area bg_cover"  style="background-image: url('assets/images/bg1.jpg');" data-stellar-background-ratio="0.9">

    <div>
      <br><br><br> <br><br><br><br><br><br><br><br>
     <h1  style="text-align:center;"> Meet Our Team Members </h1>
                </div>
    </div>

    
    

    <!--====== TEAM PART START ======-->
    
 

            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title section-title-2 text-center">
                      
                        <h3 class="title">Meet Our Team Members</h3>
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

</body>

</html>
