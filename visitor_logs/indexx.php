<?php

// Include visitor log script

include_once 'log.php';

?>

<!DOCTYPE html>

<html lang="en-US">

<head>

 <meta charset="utf-8">

<!- Stylesheet file -->

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="container">
	

<?php $created="";?>

<div class="cw-info-box">

<h2>Visitor's activity will be logged!</h2>

<div class="log-data"> <p><b>Current Page URL:</b> <?php echo $currentURL; ?></p> <p><b>Referrer URL:</b> <?php echo $referrer_url; ?></p> <p><b>IP Address:</b> <?php echo $user_ip_address; ?></p> <p><b>User Agent:</b> <?php echo $user_agent; ?></p> <p><b>time:</b> <?php echo $created; ?></p>

</div>

</div>

</div>

</body>

</html>