<?php require_once "connection.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Car Types</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            margin: 0 auto;
            padding: 20px 0;
        }
        .heading {
            text-align: center;
            margin-bottom: 20px;
            font-size: 2em;
            color: #333;
        }
        .vehicle-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .vehicle-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
            margin: 10px;
            text-align: center;
            padding: 15px;
            box-sizing: border-box;
        }
        .vehicle-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .vehicle-card h3 {
            font-size: 1.2em;
            margin: 10px 0;
        }
        .vehicle-card p {
            margin: 8px 0;
            color: #555;
        }
        .order-btn {
            background-color: #ff5c5c;
            border: none;
            padding: 10px 20px;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .order-btn:hover {
            background-color: #e04444;
        }
    </style>
</head>
<body>


    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo.png" alt="Rental Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="vehicles.php">vehicles</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Starts Here -->


<div class="container">
    <h2 class="heading">Vehicle Types</h2>
    <div class="vehicle-grid">
        <?php
        // Fetch data from vehicle table
        $sql = "SELECT id, name, description, daily_price, image_name FROM vehicle  where category_id=2;";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<div class='vehicle-card'>
                        <img src='images/" . $row["image_name"] . "' alt='Vehicle Image'>
                        <h3>" . $row["name"] . "</h3>
                        <p>Daily Price: Rs." . number_format($row["daily_price"], 2) . "</p>
                        <p>" . $row["description"] . "</p>
                        <a href='order.php?vehicle_id=" . $row["id"] . "' class='order-btn'>Order Now</a>
                      </div>";
            }
        } else {
            echo "<p>No vehicles found.</p>";
        }
        // Close the connection
        $conn->close();
        ?>
    </div>
</div>



<?php require_once "footer.php";?>
</body>
</html>