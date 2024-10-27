
<?php require_once 'header.php'; ?>	
<?php require_once "connection.php"; ?>

<section class="food-menu">
        <div class="container">
            <h2 class="text-center">Vehicle Types</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/car1.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Car</h4>
                    <p class="food-price">Daily Price<p>
                    <p class="food-price">Rs.<?php echo $vehicle ? $vehicle['daily_price'] : '0'; ?>  </p>
                    <p class="food-detail"><?php echo $vehicle ? $vehicle['description'] : '0'; ?></p>
                    </p>
                    <br>

                    <a href="order.php?vehicle_id=1" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/car1.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Car</h4>
                    <?php $vehicle_id= 2; ?>
                    <p class="food-price">Daily Price<p>
                    <p class="food-price">Rs.<?php echo $vehicle ? $vehicle['daily_price'] : '0'; ?></p>
                    <p class="food-detail"><?php echo $vehicle ? $vehicle['description'] : '0'; ?> </p>
                       
                    </p>
                    <br>

                    <a href="order.php?vehicle_id=1" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/car1.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Car</h4>
                    <p class="food-price">Daily Price<p>
                    <p class="food-price">Rs.<?php echo $vehicle ? $vehicle['daily_price'] : '0'; ?></p>
                    <p class="food-detail">
                    <?php echo $vehicle ? $vehicle['description'] : '0'; ?>
                    </p>
                    <br>

                    <a href="order.php?vehicle_id=1" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/car1.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Car</h4>
                    <p class="food-price">Daily Price<p>
                    <p class="food-price">Rs<?php echo $vehicle ? $vehicle['daily_price'] : '0'; ?></p>
                    <p class="food-detail">
                    <?php echo $vehicle ? $vehicle['description'] : '0'; ?>
                    </p>
                    <br>

                    <a href="order.php?vehicle_id=1" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/car1.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Car</h4>
                    <p class="food-price">Daily Price<p>
                    <p class="food-price">Rs.<?php echo $vehicle ? $vehicle['daily_price'] : '0'; ?></p>
                    <p class="food-detail">
                    <?php echo $vehicle ? $vehicle['description'] : '0'; ?>
                    </p>
                    <br>

                    <a href="order.php?vehicle_id=1" class="btn btn-primary">Order Now</a>
                </div>
            </div>

        </div>
    </section>

<?php require_once 'footer.php'; ?>