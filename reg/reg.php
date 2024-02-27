<!-- registration.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Widow Registration</title>
    <link rel="stylesheet" href="style.css">

    <!--===== Logo =====-->
    <link rel="shourtcut icon" href="../assets/images/OIP (3).jpeg">
    
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
  


    <style>
   /* style.css */

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
      

/* Form Container */
.form-container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f0f0f0;
    border: 1px solid #ddd;
    border-radius: 5px;
}

/* Form Header */
.form-header {
    text-align: center;
    color: #333;
}

/* Form Sections */
.form-section {
    margin-bottom: 20px;
    padding: 10px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
}

/* Section Headings */
.form-section h3 {
    background-color: #007bff;
    color: #fff;
    padding: 10px;
    margin: 0;
    border-radius: 5px 5px 0 0;
}

/* Form Groups */
.form-group {
    margin-bottom: 20px;
}

/* Labels */
label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

/* Text Input Fields */
input[type="text"],
input[type="date"],
input[type="email"],
input[type="tel"],
input[type="number"],
textarea,
select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Checkbox */
input[type="checkbox"] {
    margin-right: 5px;
    vertical-align: middle;
}

/* File Input */
input[type="file"] {
    width: 100%;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #fff;
}

/* Submit Button */
input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

/* Add some spacing to make the form more readable */
.form-container form {
    margin-top: 20px;
}

    </style>
</head>
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
          <li class="nav-item"><a href="../uphaar/reg/card.php" class="nav-link">Widow Information</a></li>
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
  



    <div class="form-container">
        <h2 class="form-header">Widow Registration Form</h2>
        <form action="server.php" method="POST" enctype="multipart/form-data">
            <!-- Full Name Section -->
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="middle_name">Middle Name (if applicable):</label>
                <input type="text" id="middle_name" name="middle_name">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>

            <!-- Date of Birth -->
            <div class="form-group">
                <label for="date_of_birth">Date of Birth:</label>
                <input type="date" id="date_of_birth" name="date_of_birth" >
            </div>

            <!-- Gender -->
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>

          
   
            <!-- Contact Information -->
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" id="city" name="city" required>
            </div>
            <div class="form-group">
                <label for="state_province">State/Province:</label>
                <input type="text" id="state_province" name="state_province" required>
            </div>
            <div class="form-group">
                <label for="zip_code">Zip Code:</label>
                <input type="text" id="zip_code" name="zip_code" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number:</label>
                <input type="tel" id="phone_number" name="phone_number" required>
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
         <!-- Spouse's Full Name -->
         <div class="form-group">
                <label for="spouse_name">Spouse's Full Name:</label>
                <input type="text" id="spouse_name" name="spouse_name">
            </div>

            <!-- Date of Spouse's Death -->
            <div class="form-group">
                <label for="date_of_spouse_death">Date of Spouse's Death:</label>
                <input type="date" id="date_of_spouse_death" name="date_of_spouse_death">
            </div>


            <div class="form-group">
                <label for="citizenship">Citizenship/Nationality:</label>
                <input type="text" id="citizenship" name="citizenship" required>
            </div>

            <!-- Religion -->
            <div class="form-group">
                <label for="religion">Religion:</label>
                <input type="text" id="religion" name="religion">
            </div>

            <!-- Number of Dependents -->
            <div class="form-group">
                <label for="dependents">Number of Dependents (e.g., children or other family members who rely on the widow for support):</label>
                <input type="number" id="dependents" name="dependents" required>
            </div>

            <!-- Employment Status -->
            <div class="form-group">
                <label for="employment_status">Employment Status (e.g., Employed, Unemployed, Retired):</label>
                <input type="text" id="employment_status" name="employment_status" required>
            </div>

            <!-- Occupation -->
            <div class="form-group">
                <label for="occupation">Occupation:</label>
                <input type="text" id="occupation" name="occupation">
            </div>

            <!-- Income Details -->
            <div class="form-group">
                <label for="income_details">Income Details (including any pension or survivor benefits):</label>
                <textarea id="income_details" name="income_details"></textarea>
            </div>

            <!-- Health Information -->
            <div class="form-group">
                <label for="health_information">Health Information (e.g., any specific health conditions or disabilities):</label>
                <textarea id="health_information" name="health_information"></textarea>
            </div>

            <!-- Educational Background -->
            <div class="form-group">
                <label for="educational_background">Educational Background:</label>
                <textarea id="educational_background" name="educational_background"></textarea>
            </div>

            <!-- Legal Documents -->
            <div class="form-group">
                <label for="proof_of_widowhood">Proof of Widowhood (e.g., Death Certificate of Spouse):</label>
                <input type="file" id="proof_of_widowhood" name="proof_of_widowhood" accept=".pdf, .jpg, .png" required>
            </div>

            <div class="form-group">
                <label for="identification_documents">Identification Documents (e.g., Passport, Driver's License):</label>
                <input type="file" id="identification_documents" name="identification_documents" accept=".pdf, .jpg, .png" >
            </div>

            <div class="form-group">
                <label for="aadhar_card_number">Aadhar Card Number (if applicable):</label>
                <input type="text" id="aadhar_card_number" name="aadhar_card_number">
            </div>

            <!-- Financial Information -->
            <div class="form-group">
                <label for="bank_account_details">Bank Account Details:</label>
                <input type="text" id="bank_account_details" name="bank_account_details">
            </div>

            <!-- Declaration -->
            <div class="form-group">
                <label for="declaration">Declaration:</label>
                <input type="checkbox" id="declaration" name="declaration" required>
                I acknowledge the accuracy of the information provided and agree to abide by any applicable laws and regulations.
            </div>

            

            <input type="submit" value="Register">
            <div class="register-link">
            <p>Don't have an account? <a href="login.php">login</a></p>
        </div>
                </form>
    </div>

    
</body>
</html>
