
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
  
  

   
    
    <!--====== GUIDE PART ENDS ======-->

    <!--====== NEWS PART START ======-->
    
    
    <style>
        /* Add your inline CSS styles here */
        body {
            background-image: url(images/bg1.jpg); /* Replace with your background image URL */
            background-size: cover;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #333; /* Change the background color of the navbar */
            padding: 10px 0;
        }

        .navbar-brand {
            font-size: 24px; /* Adjust the font size of the navbar brand */
            color: #fff; /* Change the text color of the navbar brand */
        }

        .navbar-toggler-icon {
            background-color: red; /* Change the color of the navbar toggler icon */
        }

        .navbar-nav .nav-link {
            color: #fff; /* Change the text color of the navigation links */
        }

        .bgimg {
            background-color: rgba(0, 0, 0, 0.5); /* Add a semi-transparent background to the content */
            padding: 20px;
            color: #fff;
        }

        h6 {
            color: cyan; /* Change the color of the headings */
        }
        h3 {
            color: mediumblue; /* Change the color of the headings */
        }
        h5 {
            color: blue; /* Change the color of the headings */
        }

       
        li{
            color: black;
        }
    </style>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="#">UPHAAR</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav">
                    <span class="navbar-toggler-icon"></span> Menu
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
                        <li class="visit-count">
                            <i class="fa-regular fa-user"></i>
                            <?php
                                $count_page = ("hitcount.txt"); 
                                $hits = file($count_page);
                                $hits[0] ++;
                                $fp = fopen($count_page, "w");
                                fputs($fp, "$hits[0]");
                                fclose($fp);
                                echo " " . $hits[0];
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
  

  
        <div class="footer-area bg_cover" style="background-image: url(assets/images/mic1.jpg);">
    <table style="margin: 0 auto; width: 80%; padding: 20px;">
        <tr>
            <td>
                <h1 style="font-size: 36px; color: black;">Please read and accept the terms and conditions before proceeding with your application for donations</h1>

                <h3 style="font-size: 24px;">Terms and Conditions</h3>
                <ol style="font-size: 18px;">
                    <li>Donations are only applicable to Widows of Ex-Army Officers or Widows whose family income is less than 25,000.</li>
                    <li>Applicants must have been residing in India for more than 5 years preceding the date of application.</li>
                    <li>Applicants must have a 'singly-operated' account in any bank for receiving the payment through an electronic clearing system.</li>
                    <li>Widows applying for donations for Disabled children must have a legitimate certificate of Disability from the Central/State Government.</li>
                    <li>Applicants must provide legitimate Details of Bank A/c No and IFS Code (For Widows of Ex-Army Officers).</li>
                    <li>Applicants must have the Death Certificate of the Husband.</li>
                </ol>

                <h3 style="font-size: 24px;">Documents Required</h3>
                <ul style="font-size: 18px;">
                    <li>Adhaar Card</li>
                    <li>Bank Account Number</li>
                    <li>Residential Address</li>
                    <li>Contact No (2)</li>
                    <li>Email Address</li>
                    <li>Husband Death Certificate</li>
                    <li>Family Income</li>
                    <li>Mark-sheet / School Progress Card (For Widows Applying for Donations for higher educations)</li>
                    <li>Disability Certificate for Child (For Widows Applying for Donations for Child Disability)</li>
                    <li>Service Document/Discharge Book of ESM of the Husband (For Ex-Army Widows)</li>
                </ul>

                <form id="termsForm">
                    <label for="agreeCheckbox">
                        <input type="checkbox" id="agreeCheckbox" required>
                        I have read and agree to the terms and conditions above.
                    </label>

                    <br>

                    <button type="button" id="proceedButton" disabled style="font-size: 24px;">
                        Proceed to Application 
                    </button>
                </form>
            </td>
        </tr>
    </table>
</div>
<script>
document.getElementById("agreeCheckbox").addEventListener("click", function() {
    var checkbox = document.getElementById("agreeCheckbox");
    var proceedButton = document.getElementById("proceedButton");

    if (checkbox.checked) {
        proceedButton.removeAttribute("disabled");

    } else {
        proceedButton.setAttribute("disabled", "disabled");
    }
});
document.getElementById("proceedButton").addEventListener("click", function() {
    // Redirect to the registration page (replace 'registration.html' with the actual URL)
    window.location.href = "/uphaar/reg/reg.php";
});
</script>

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

</body>

</html>
