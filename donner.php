<!DOCTYPE html>
<html>
<head>
  <title>User Authentication</title>
  <style>
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    select {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    p {
      text-align: center;
    }

    a {
      text-decoration: none;
      color: #4caf50;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>User Authentication</h1>

    <?php
    session_start();

    // Establish database connection
    $host = "localhost";
    $db = "welfare";
    $user = "root";
    $password = "";

    $conn = mysqli_connect($host, $user, $password, $db);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    // Handle registration form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"]) && $_POST["action"] == "register") {
      $username = $_POST["username"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      $gender = $_POST["gender"];
      $mobile = $_POST["mobile"];
      $file = $_FILES["file"]["tmp_name"];

      // Save the file to the server
      $fileContent = file_get_contents($file);

      // Prepare and execute the SQL query
      $stmt = $conn->prepare("INSERT INTO donersingin (username, email, password, gender, mobile, file) VALUES (?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("sssssb", $username, $email, $password, $gender, $mobile, $fileContent);

      if ($stmt->execute()) {
        $_SESSION["username"] = $username;
        header("Location: welcome.php");
        exit();
      } else {
        echo "Error: " . $stmt->error;
      }

      $stmt->close();
    }

    // Handle login form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"]) && $_POST["action"] == "login") {
      $username = $_POST["username"];
      $password = $_POST["password"];

      // Prepare and execute the SQL query
      $stmt = $conn->prepare("SELECT * FROM donersingin WHERE username = ? AND password = ?");
      $stmt->bind_param("ss", $username, $password);
      $stmt->execute();
      $result = $stmt->get_result();

      if ($result->num_rows === 1) {
        $_SESSION["username"] = $username;
        header("Location: welcome.php");
        exit();
      } else {
        echo "Invalid username or password.";
      }

      $stmt->close();
    }

    // Handle password reset form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"]) && $_POST["action"] == "reset_password") {
      $email = $_POST["email"];

      // Check if the email exists in the database
      $stmt = $conn->prepare("SELECT * FROM donersingin WHERE email = ?");
      $stmt->bind_param("s", $email);
      $stmt->execute();
      $result = $stmt->get_result();

      if ($result->num_rows === 1) {
        // Generate a random password
        $newPassword = bin2hex(random_bytes(6));

        // Update the user's password
        $stmt = $conn->prepare("UPDATE donersingin SET password = ? WHERE email = ?");
        $stmt->bind_param("ss", $newPassword, $email);
        $stmt->execute();

        // Send the new password to the user's email (implementation not included here)

        echo "Your password has been reset. Please check your email for the new password.";
      } else {
        echo "Invalid email.";
      }

      $stmt->close();
    }

    // Handle logout
    if (isset($_GET["action"]) && $_GET["action"] == "logout") {
      session_destroy();
      header("Location: login.html");
      exit();
    }

    mysqli_close($conn);
    ?>

    <!-- Registration form -->
    <form action="" method="POST" enctype="multipart/form-data">
      <h2>Registration</h2>
      <input type="hidden" name="action" value="register">
      <input type="text" name="username" placeholder="Username" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <label for="gender">Gender:</label>
      <select name="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
      <input type="text" name="mobile" placeholder="Mobile" required>
      <input type="file" name="file" required>
      <input type="submit" value="Register">
    </form>

    <!-- Login form -->
    <form action="" method="POST">
      <h2>Login</h2>
      <input type="hidden" name="action" value="login">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" value="Login">
    </form>

    <!-- Password reset form -->
    <form action="" method="POST">
      <h2>Password Reset</h2>
      <input type="hidden" name="action" value="reset_password">
      <input type="email" name="email" placeholder="Email" required>
      <input type="submit" value="Reset Password">
    </form>

    <p>Already have an account? <a href="login.html">Login here</a>.</p>
  </div>
</body>
</html>
