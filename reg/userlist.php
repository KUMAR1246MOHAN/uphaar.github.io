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

// Fetch the list of all users from the database
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>User List</h2>";
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>";
        echo "<a href='profile.php?username=" . $row["username"] . "'>" . $row["first_name"] . " " . $row["last_name"] . "</a>";
        echo "</li>";
    }
    echo "</ul>";
} else {
    echo "No users found.";
}

$conn->close();
?>
