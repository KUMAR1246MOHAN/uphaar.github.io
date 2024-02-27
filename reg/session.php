<?php
session_start();

// Database connection code here (replace with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$database = "welfare";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the user is already logged in, and redirect to the profile page if necessary
if (isset($_SESSION["username"])) {
    header("Location: profile.php");
    exit;
}

// Check if the login form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username_p = $_POST["username"];
    $password = $_POST["password"];

    // Sanitize and validate inputs (implement your own validation logic)
    $username = mysqli_real_escape_string($conn, $username_p);

    // Hash the user-entered password for comparison
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Query the database using prepared statement to check user credentials
    $sql = "SELECT username, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($db_username, $db_password);
    $stmt->fetch();
    $stmt->close();

    if ($db_username && password_verify($password, $db_password)) {
        // User authentication successful
        // Set session variables
        $_SESSION["username"] = $db_username;
        // Redirect to the profile page
        header("Location: profile.php");
        exit;
    } else {
        $error = "Invalid username or password!";
    }
}

$conn->close();
?>
