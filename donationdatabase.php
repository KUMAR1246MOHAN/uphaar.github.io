<?php
$id="";
    $name="";
  $email="";
  $address="";
  $city="";
  $zip="";
  $cardnumber="";
  
  $cnumber="";
  $expmonth="";
  $expyear="";
  
  $cvv="";
  $amount="";
    $con=mysqli_connect('localhost','root');
    mysqli_select_db($con,'welfare');
    if (isset($_POST['donation'])) {
  // receive all input values from the form
  $name = $_POST['name'];
  $email = $_POST['email'];
    $address = $_POST['address'];
      $city =$_POST['city'];
        $zip = $_POST['zip'];
        $cardnumber = $_POST['cardnumber'];
         $cnumber =$_POST['cnumber'];
  $expmonth = $_POST['expmonth'];
    $expyear = $_POST['expyear'];
      $cvv = $_POST['cvv'];
        $amount = $_POST['amount'];
    }




$sql="INSERT INTO `donation`(id, name, `email`, `address`, `city`, `zip`, `cardnumber`, `cnumber`, `expmonth`, `expyear`, `cvv`, `amount`) VALUES ('$id','$name','$email','$address','$city','$zip','$cardnumber','$cnumber','$expmonth','$expyear','$cvv','$amount')";
/*INSERT INTO donation (name,email,address, city, zip, cardnumber, cnumber, expmonth, expyear, cvv,amount) VALUES ($name','$email','$address','$city','$zip','$cardnumber','cnumber'$expmonth','$expyear','$cvv','$amount')*/
$result=mysqli_query($con,$sql);
if($result){
header('location: index.php');
}else{
  echo"record was not inserted sucessfully because of this error  ".mysqli_error($con);
}


?>