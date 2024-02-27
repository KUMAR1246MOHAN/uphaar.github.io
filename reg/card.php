<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--===== Logo =====-->
    <link rel="shourtcut icon" href="../assets/images/OIP (3).jpeg">
    <title>User Profiles</title>
    <link rel="stylesheet" href="styles.css"> <!-- Include your CSS file -->

    

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    
    <!--====== flaticon css ======-->
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    
    <!--====== odometer css ======-->
    <link rel="stylesheet" href="../assets/css/odometer.min.css">
    
    <!--====== magnific popup css ======-->
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    
    <!--====== animate css ======-->
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="../assets/css/slick.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="../assets/css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="../assets/css/style.css">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="../assets/css/style1.css">
  
</head>
<style>
    /* Existing styles... */

    body {
            background-image: url(images/bg1.jpg); /* Replace with your background image URL */
            background-size: cover;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #333; /* Change the background color of the navbar */
            padding: 10px 0;
        }

        .navbar-brand {
            font-size: 24px; /* Adjust the font size of the navbar brand */
            color: #fff; /* Change the text color of the navbar brand */
        }

        .navbar-toggler-icon {
            background-color: red; /* Change the color of the navbar toggler icon */
        }

        .navbar-nav .nav-link {
            color: #fff; /* Change the text color of the navigation links */
        }

        .bgimg {
            background-color: rgba(0, 0, 0, 0.5); /* Add a semi-transparent background to the content */
            padding: 20px;
            color: #fff;
        }

    /* New styles for profile cards */
    .user-cards {
        display: flex;
        flex-wrap: wrap; /* Allow cards to wrap to the next row if there's not enough space */
        justify-content: center; /* Center the cards horizontally */
    }

    .profile-card {
        background-color: #fff;
        padding: 20px;
        margin: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        width: 300px; /* Adjust the width as needed */
    }

    .profile-card img {
        max-width: 100%; /* Ensure the image fits within the card */
        max-height: 200px; /* Limit the maximum height of the image */
        margin-bottom: 10px; /* Add some space between the image and text */
    }

    .profile-card h2 {
        font-size: 24px;
        color: #333;
    }

    .profile-card p {
        font-size: 18px;
        color: #666;
    }

    /* Donation button */
    .donate-button {
        background-color: #FF5733;
        color: #fff;
        font-size: 18px;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
        text-decoration: none; /* Remove the default button styling */
    }
</style>

<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="#">UPHAAR</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav">
                    <span class="navbar-toggler-icon"></span> Menu
                </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="../index.php ?>" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="../about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="../amount.php" class="nav-link">PAYMENT LIST</a></li>
          <li class="nav-item"><a href="https://cosmofeed.com/vp/64f9c218e21171001ec7a0ed" class="nav-link">Donate Anonymously</a></li>
          <li class="nav-item"><a href="card.php" class="nav-link">Widow Information</a></li>
          <li class="nav-item"><a href="../gallery.php" class="nav-link">Gallery </a></li>
          <li class="nav-item"><a href="../contect/contect.php" class="nav-link">Contact </a></li>
                        <li class="visit-count">
                            <i class="fa-regular fa-user"></i>
                            <?php
                                $count_page = ("hitcount.txt"); 
                                $hits = file($count_page);
                                $hits[0] ++;
                                $fp = fopen($count_page, "w");
                                fputs($fp, "$hits[0]");
                                fclose($fp);
                                echo " " . $hits[0];
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
  





    <div class="container">
        <center><h1>Widow Profiles</h1></center>
        <div class="user-cards">
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

            // Fetch user data from the 'users' table
            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Display user data as clickable profile cards
                    echo "<div class='profile-card' data-user-id='" . $row["user_id"] . "'>";
                    echo "<img src='" . $row["identification_documents"] . "' alt='" . $row["first_name"] . "' class='profile-photo'>";
                    echo "<h2>" . $row["first_name"] . " " . $row["last_name"] . "</h2>";
                    echo "<p>Email: " . $row["email"] . "</p>";
                    echo "<p>Phone Number: " . $row["phone_number"] . "</p>";
                    echo "<a href='https://cosmofeed.com/vp/64f9c218e21171001ec7a0ed' class='donate-button'>Donate</a>"; // Donation button with link
                    // Add more fields as needed
                    echo "</div>";
                }
            } else {
                echo "No user data found.";
            }

            $conn->close();
            ?>
        </div>
    </div>

    <div class="user-details">
        <!-- User details will be displayed here when a profile card is clicked -->
    </div>

    <script>
        // JavaScript/jQuery code to handle click events and display user details
        $(document).ready(function() {
            $(".profile-card").click(function() {
                var userId = $(this).data("user-id");
                $.ajax({
                    url: "get_user_details.php", // Create a new PHP file to fetch user details by user ID
                    type: "POST",
                    data: { user_id: userId },
                    success: function(data) {
                        $(".user-details").html(data);
                    }
                });
            });
        });
    </script>
</body>
</html>
