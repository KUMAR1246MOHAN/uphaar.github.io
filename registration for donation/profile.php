<!-- donors.php -->
<html lang="en">
  <head>
    <title>Donor Portfolio</title>
    <!--===== Logo =====-->
    <link rel="shourtcut icon" href="assets/images/OIP (3).jpeg">

    <style>
      .header {
        text-align: center;
        margin-bottom: 20px;
      }

      .donor-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        grid-gap: 20px;
        margin-top: 20px;
      }

      .donor-card {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
        background-color: #f9f9f9;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
      }

      .donor-image {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        overflow: hidden;
      }

      .donor-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .donor-details {
        margin-top: 20px;
      }

      .donor-details h3 {
        margin: 0;
      }

      .donor-details p {
        margin: 5px 0;
      }

      .buttons {
        display: flex;
        justify-content: center;
        margin-top: 20px;
      }

      .buttons button {
        margin: 0 10px;
        padding: 10px 20px;
        background-color: #333;
        color: #fff;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        cursor: pointer;
      }

      .buttons button:hover {
        background-color: #555;
      }
    </style>
  </head>
  <body>
    <div class="header">
      <h2>Donor Portfolio</h2>
    </div>

    <div class="donor-grid">
      <?php
        // Fetch donor details from the database and display them in cards
        $db = mysqli_connect('localhost', 'root', '', 'welfare');
        $query = "SELECT * FROM donersingin";
        $result = mysqli_query($db, $query);

        while ($row = mysqli_fetch_assoc($result)) {
          $image = $row['file'];
          $username = $row['username'];
          $email = $row['email'];
          $gender = $row['gender'];
          $mobile = $row['mobile'];
      ?>
      <div class="donor-card">
        <div class="donor-image">
          <img src="data:image/jpeg;base64, <?php echo base64_encode($image); ?>" alt="Donor Image">
        </div>
        <div class="donor-details">
          <h3><?php echo $username; ?></h3>
          <p>Email: <?php echo $email; ?></p>
          <p>Gender: <?php echo $gender; ?></p>
          <p>Mobile: <?php echo $mobile; ?></p>
        </div>
      </div>
      <?php } ?>
    </div>

    <div class="buttons">
      <button onclick="window.location.href = '../index.php';">Go to Home Page</button>
      <button onclick="window.location.href = '../donation.php';">Go to Donation Page</button>
    </div>
  </body>
</html>
