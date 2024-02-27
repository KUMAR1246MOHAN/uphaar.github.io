<!doctype html>
<html lang="en">

<head>
   
    <!--===== Logo =====-->
    <link rel="shourtcut icon" href="../assets/images/OIP (3).jpeg">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    
    <!--====== flaticon css ======-->
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    
    <!--====== odometer css ======-->
    <link rel="stylesheet" href="../assets/css/odometer.min.css">
    
    <!--====== magnific popup css ======-->
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    
    <!--====== animate css ======-->
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="../assets/css/slick.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="../assets/css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="../assets/css/style.css">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="../assets/css/style1.css">
  
  
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
        <li class="nav-item active"><a href="../index.php ?>" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="../about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="../amount.php" class="nav-link">PAYMENT LIST</a></li>
          <li class="nav-item"><a href="https://cosmofeed.com/vp/64f9c218e21171001ec7a0ed" class="nav-link">Donate Anonymously</a></li>
          <li class="nav-item"><a href="../reg/card.php" class="nav-link">Widow Information</a></li>
          <li class="nav-item"><a href="../gallery.php" class="nav-link">Gallery </a></li>
          <li class="nav-item"><a href="../contect/contect.php" class="nav-link">Contact </a></li>

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
   
   
    <!--====== PAGE TITLE PART START ======-->
    
    <section class="page-title-area bg_cover" style="background-image: url(../assets/images/page-title-bg.jpg);height: 78%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-content">
                        
                        <nav aria-label="breadcrumb">
                           
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--====== PAGE TITLE PART ENDS ======-->

    <!--====== CONTACT FORM PART START ======-->
    
    <section class="contact-form-area">
     <div class="background-iamge bg_cover" style="background-image: url(../assets/images/wel1.jpg);">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <span>Contact With Us Now</span>
                        <h3 class="title">Write a Message</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                <form id="contact-form" action="server.php" method="post">
    <div class="conact-form-item">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="input-box mt-20">
                    <input type="text" placeholder="First Name" name="first_name" required>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="input-box mt-20">
                    <input type="text" placeholder="Last Name" name="last_name" required>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="input-box mt-20">
                    <input type="email" placeholder="Email Address" name="email" required>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="input-box mt-20">
                    <input type="text" placeholder="Phone Number" name="phone_number">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="input-box mt-20">
                    <textarea id="#" cols="30" rows="10" placeholder="Write Message" name="message" required></textarea>
                </div>
                <div class="input-box mt-20 text-center">
                    <button id="submit-button" class="main-btn" type="submit">Submit message</button>
                </div>
            </div>
        </div>
    </div>
</form>
<script src="../assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="../assets/js/vendor/jquery-3.5.1.min.js"></script>

   
    <script>
        document.getElementById("submit-button").addEventListener("click", function () {
            document.getElementById("contact-form").submit();
        });
    </script>
                </div>
            </div>
        </div>
    </section>
    
    <!--====== CONTACT FORM PART ENDS ======-->

    <!--====== CONTACT INFO PART START ======-->
    
    
    <section class="contact-info-area">
        <div class="container-fluid p-0">
            <div class="row no-gutters justify-content-center">
                <div class="col-lg-4 col-md-9">
                    <div class="contact-info-item">
                        <div class="icon">
                            <i class="flaticon-entrepreneur-1"></i>
                        </div>
                        <h4 class="title">JNVU</h4>
                        <p>Jai Narain Vyas University Jodhpur was established<br> in 1962. It is a state university. JNVU Jodhpur has<br> been recognised by UGC</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-9">
                    <div class="contact-info-item item-2">
                        <div class="icon">
                            <i class="flaticon-location"></i>
                        </div>
                        <h4 class="title">About JNVU</h4>
                        <ul>
                            <li>Central Office, JNV University, Residency Road, Jodhpur.</li>
                            <li>Rajasthan, India </li>
                            <li> Phone: 0291-2649733</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-9">
                    <div class="contact-info-item item-3">
                        <div class="icon">
                            <i class="flaticon-contact"></i>
                        </div>
                        <h4 class="title">Mail Id's</h4>
                        <ul>
                            <li>VC Mail:- vcjnvu@gmail.com</li>
                            <li>Registrar Mail:- jnvuregistrar@.com</li>
                            <li>Examination Mail:-  examjnvu@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== CONTACT INFO PART ENDS ======-->

    <!--====== CONTACT INFO PART ENDS ======-->

    <div class="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14314.611358119613!2d73.0063168464936!3d26.240467415433862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39418c7554c1c997%3A0xcf2cf5ff1e5aa3db!2sJai%20Narayan%20Vyas%20University%20-%20New%20Campus!5e0!3m2!1sen!2sin!4v1696764449578!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
    </div>

    <!--====== CONTACT INFO PART ENDS ======-->

    <<!--====== FOOTER PART START ======-->
    
    <footer class="footer-area bg_cover" style="background-image: url(../assets/images/footer-bg.jpg); height: 78%;">
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
    <script src="../assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="../assets/js/vendor/jquery-3.5.1.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    
    <!--====== ajax contact js ======-->
    <script src="../assets/js/ajax-contact.js"></script>
    
    <!--====== odometer js ======-->
    <script src="../assets/js/odometer.min.js"></script>
    <script src="../assets/js/jquery.appear.min.js"></script>
    
    <!--====== magnific popup js ======-->
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="../assets/js/slick.min.js"></script>
    
    <!--====== Main js ======-->
    <script src="../assets/js/main.js"></script>

</body>

</html>
