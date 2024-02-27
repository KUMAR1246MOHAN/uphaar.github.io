<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

// Database connection code here (replace with your actual database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$database = "welfare";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_SESSION["username"];

$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Extract data from $row and display it in a testimonial format
    echo "<div class='testimonial'>";
    echo "<h3>" . $row["first_name"] . "</h3>";
    // Add more fields for other details
    echo "</div>";
} else {
    // Handle if user data is not found
    echo "User not found.";
}

$conn->close();
?>
