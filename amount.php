<!DOCTYPE html>
<html lang="en">
<head>


    <!--===== Logo =====-->
    <link rel="shourtcut icon" href="assets/images/OIP (3).jpeg">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment List</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }

        /* Container Styles */
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Header Styles */
        h1 {
            font-size: 28px;
            margin-bottom: 20px;
            text-align: center;
            color: #007bff;
        }

        /* Payment List Styles */
        .payment-list {
            list-style-type: none;
            padding: 0;
        }

        .payment-item {
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 5px;
            background-color: #f9f9f9;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .payment-item h3 {
            margin: 0;
            font-size: 20px;
            color: #007bff;
        }

        .payment-details {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
        }

        /* Total Donation Styles */
        .total-donation {
            font-size: 24px;
            text-align: right;
            margin-top: 20px;
            color: #333;
        }

        /* Donate Button Styles */
        .donate-button {
            display: block;
            width: 100%;
            padding: 15px;
            background-color: #007bff;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        .donate-button:hover {
            background-color: #0056b3;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Payment List</h1>
        <ul class="payment-list">
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

            // Query to fetch payment data from the database
            $sql = "SELECT * FROM payments";
            $result = $conn->query($sql);

            $totalDonation = 0;

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<li class='payment-item'>";
                    echo "<h3>" . $row["product_name"] . "</h3>";
                    echo "<div class='payment-details'>";
                    echo "<span>Donation Amount: ₹" . $row["paid_by_customer"] . "</span>";
                    echo "<span>Status: " . $row["status"] . "</span>";
                    echo "</div>";
                    echo "<p>Date: " . $row["payment_date"] . "</p>";
                    // Add more fields as needed

                    // Calculate and accumulate the total donation amount
                    $totalDonation += $row["earned_amount"];

                    echo "</li>";
                }
            } else {
                echo "No payments found.";
            }

            $conn->close();
            ?>
        </ul>
        <div class="total-donation">
            Total Donation: <?php echo number_format($totalDonation, 2); ?>
        </div>
        <button id="proceedButton" class="donate-button">Make a Donation   </button> 
        
    </div>
    <script>

document.getElementById("proceedButton").addEventListener("click", function() {
    // Redirect to the registration page (replace 'registration.html' with the actual URL)
    window.location.href = "https://cosmofeed.com/vp/64f9c218e21171001ec7a0ed";
});
</script>
</body>
</html>
