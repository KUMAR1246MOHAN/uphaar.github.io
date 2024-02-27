<!DOCTYPE html>
<html lang="en">
  <head>
    <title>UPHAAR </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

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
   <nav class="navbar navbar-expand-lg navbar-light ftco_navbar bg-light ftco-navbar-dark" id="ftco-navbar">
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
<style>
body {
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>


<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="donationdatabase.php" method="post">
        <div text-center> <h3>DONATE ANONYMOUSLY</h3></div>
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i ></i> Full Name</label>
            <input type="text" name="name" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text"  name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text"  name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text"  name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" = placeholder="NY" name="state">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text"  = placeholder="10001" name="zip">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text"  name="cardnumber" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" name="cnumber"   placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text"   name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text"  name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text"  name="cvv" placeholder="352">
              </div>
               <div class="col-50">
                <label for="amount">amount</label>
                <input type="text"  name="amount" placeholder="50,000">
              </div>
            </div>
          </div>
          
        </div>
        
        <input type="submit" class="btn" name="donation"><a href="index.php" >
      </form>
    </div>
  </div>

</body>
</html>



