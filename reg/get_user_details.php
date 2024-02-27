<?php
// Database connection code here (same as in user_profiles.php)

if (isset($_POST["user_id"])) {
    $userId = $_POST["user_id"];
    $sql = "SELECT * FROM users WHERE user_id = $userId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Display user details in a popup or modal
        echo "<div class='user-popup'>";
        echo "<h2>" . $row["first_name"] . " " . $row["last_name"] . "</h2>";
        echo "<p>Email: " . $row["email"] . "</p>";
        echo "<p>Phone Number: " . $row["phone_number"] . "</p>";
        // Add more fields as needed
        echo "</div>";
    } else {
        echo "User not found.";
    }
}

$conn->close();
?>
