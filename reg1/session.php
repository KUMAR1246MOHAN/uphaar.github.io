<?php
session_start();

$host = "localhost";
$username = "root";
$password = "";
$database = "welfare";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Registration
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
    $name = $_POST["name"];
    $email = $_POST["reg_email"];
    $password = password_hash($_POST["reg_password"], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO doner (name, email, password) VALUES (:name, :email, :password)");
    $stmt->bindParam(":name", $name, PDO::PARAM_STR);
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);
    $stmt->bindParam(":password", $password, PDO::PARAM_STR);

    try {
        $stmt->execute();
        $_SESSION['user_id'] = $pdo->lastInsertId();
        $_SESSION['user_name'] = $name;
        $_SESSION['user_email'] = $email;

        header("Location:  ../reg/card.php");
        exit();
    } catch (PDOException $e) {
        $_SESSION['error_message'] = "Registration failed: " . $e->getMessage();
        header("Location: ../error.php");
        exit();
    }
}

// Login
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $email = $_POST["email"];
    $entered_password = $_POST["password"];

    $stmt = $pdo->prepare("SELECT * FROM doner WHERE email = :email");
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($entered_password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['user_email'] = $user['email'];

        header("Location:  ../reg/card.php");
        exit();
    } else {
        $_SESSION['error_message'] = "Invalid email or password. Please try again.";
        header("Location: error.php");
        exit();
    }
}

// Logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: ../index.php");
    exit();
}
?>
