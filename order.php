<?php require_once "header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Rental Service</title>
    <style>
        body{
            background-image: url("images/back3.jfif");
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
    </style>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
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
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="categories.html">Categories</a>
                    </li>
                    <li>
                        <a href="vehicles.html">Foods</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <?php require_once "orderFun.php"; ?>
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="order.php" class="order">
                <fieldset>
                    <legend>Selected Vehicle</legend>

                    <div class="food-menu-img">
                        <img src="images/van1.jfif" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                    </div>
    
                    <div class="food-menu-desc">
                    <h3>Vehicle Title: <?php echo $vehicle ? $vehicle['name'] : 'Unknown Vehicle'; ?></h3>
                        <p class="food-price">Rs.<?php echo $vehicle ? $vehicle['daily_price'] : '0'; ?></p>

                        
                        <div class="food-menu-desc">
                        <input type="hidden" name="vehicle_id" value="<?php echo $vehicle_id; ?>">

                        <div class="order-label">pickup Date</div>
                        <input type="date" name="pickup_date" class="input-responsive"  required>
                        
                        <div class="order-label">pickup place</div>
                    <input type="text" name="pickup_place" placeholder="E.g. Beliatta town" class="input-responsive" required>

                    <div class="order-label">Dropoff date</div>
                    <input type="date" name="dropoff_date" class="input-responsive" required>

                    <div class="order-label">Dropoff place</div>
                    <input type="text" name="dropoff_place" placeholder="E.g. Beliatta town" class="input-responsive" required>
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full_name" placeholder="E.g. Neranjana Rajapaksha" class="input-responsive" required>

                    <div class="order-label">NIC</div>
                    <input type="text" name="nic" placeholder="E.g. 200065100000" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 07143xxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. hi@neranjana.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>

        </div>
    </section>
    
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- social Section Starts Here -->

<?php require_once "footer.php"; ?>