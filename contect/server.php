<?php
// Database connection code here (replace with your actual database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$database = "welfare";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$phone_number = $_POST["phone_number"];
$message = $_POST["message"];

// Insert data into the database
$sql = "INSERT INTO contact_form (first_name, last_name, email, phone_number, message) 
        VALUES ('$first_name', '$last_name', '$email', '$phone_number', '$message')";

if ($conn->query($sql) === TRUE) {
    // Data inserted successfully, redirect to the thank you page
    header("Location: /uphaar/contect/thankyou.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
