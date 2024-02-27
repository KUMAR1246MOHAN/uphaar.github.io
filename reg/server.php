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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form inputs
    $first_name = mysqli_real_escape_string($conn, $_POST["first_name"]);
    $middle_name = mysqli_real_escape_string($conn, $_POST["middle_name"]);
    $last_name = mysqli_real_escape_string($conn, $_POST["last_name"]);
    $username_p = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password
    $date_of_birth = $_POST["date_of_birth"];
    $gender = $_POST["gender"];
    $address = mysqli_real_escape_string($conn, $_POST["address"]);
    $city = mysqli_real_escape_string($conn, $_POST["city"]);
    $state_province = mysqli_real_escape_string($conn, $_POST["state_province"]);
    $zip_code = mysqli_real_escape_string($conn, $_POST["zip_code"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone_number = mysqli_real_escape_string($conn, $_POST["phone_number"]);
    $spouse_name = mysqli_real_escape_string($conn, $_POST["spouse_name"]);
    $date_of_spouse_death = $_POST["date_of_spouse_death"];
    $citizenship = mysqli_real_escape_string($conn, $_POST["citizenship"]);
    $religion = mysqli_real_escape_string($conn, $_POST["religion"]);
    $dependents = intval($_POST["dependents"]);
    $employment_status = mysqli_real_escape_string($conn, $_POST["employment_status"]);
    $occupation = mysqli_real_escape_string($conn, $_POST["occupation"]);
    $income_details = mysqli_real_escape_string($conn, $_POST["income_details"]);
    $health_information = mysqli_real_escape_string($conn, $_POST["health_information"]);
    $educational_background = mysqli_real_escape_string($conn, $_POST["educational_background"]);

    // Check if the email already exists
    $email_check_sql = "SELECT * FROM users WHERE email = '$email'";
    $email_check_result = $conn->query($email_check_sql);

    // Check if the username already exists
    $username_check_sql = "SELECT * FROM users WHERE username = '$username_p'";
    $username_check_result = $conn->query($username_check_sql);

    if ($email_check_result->num_rows > 0) {
        // Email already exists, show alert and redirect
        echo "<script>alert('Email already exists. Please choose a different email.');</script>";
        echo "<script>window.location.href='/uphaar/reg/reg.php';</script>";
        exit;
    } elseif ($username_check_result->num_rows > 0) {
        // Username already exists, show alert and redirect
        echo "<script>alert('Username already exists. Please choose a different username.');</script>";
        echo "<script>window.location.href='/uphaar/reg/reg.php';</script>";
        exit;
    } else {
        // File uploads, insert data into the database, and handle success/error
        $target_directory = "uploads/";
        $proof_of_widowhood_path = $target_directory . basename($_FILES["proof_of_widowhood"]["name"]);
        $identification_documents_path = $target_directory . basename($_FILES["identification_documents"]["name"]);

        if (move_uploaded_file($_FILES["proof_of_widowhood"]["tmp_name"], $proof_of_widowhood_path) &&
            move_uploaded_file($_FILES["identification_documents"]["tmp_name"], $identification_documents_path)) {
            // File uploads successful

            // Insert data into the database
            $sql = "INSERT INTO users (first_name, middle_name, last_name, username, password, date_of_birth, gender, address, city, state_province, zip_code, email, phone_number, spouse_name, date_of_spouse_death, citizenship, religion, dependents, employment_status, occupation, income_details, health_information, educational_background, proof_of_widowhood, identification_documents)
                    VALUES ('$first_name', '$middle_name', '$last_name', '$username_p', '$password', '$date_of_birth', '$gender', '$address', '$city', '$state_province', '$zip_code', '$email', '$phone_number', '$spouse_name', '$date_of_spouse_death', '$citizenship', '$religion', $dependents, '$employment_status', '$occupation', '$income_details', '$health_information', '$educational_background', '$proof_of_widowhood_path', '$identification_documents_path')";

            if ($conn->query($sql) === TRUE) {
                // Registration successful
                // Redirect to a success page or display a success message
                header("Location: card.php");
                exit;
            } else {
                // Handle database insertion error
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            // Handle file upload error
            echo "Error uploading one or more files.";
        }
    }
}

$conn->close();
?>
