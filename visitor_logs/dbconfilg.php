<?php 
// Database configuration 
        $db=mysqli_connect('localhost','root');
        mysqli_select_db($db,'welfare');
 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}
?>
