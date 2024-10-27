
    <?php require_once "header.php"; ?>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            
            <form action="index.php" method="GET">
                <input type="search" name="search" placeholder="Search for Vehicles.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <?php
if (isset($_GET['search'])) {
    // Get the input from the form
    $search = strtolower(trim($_GET['search']));

    // Redirect to the corresponding page based on the vehicle type
    switch ($search) {
        
        case 'car':
            if (file_exists('car1.php')) {
                header('Location: car1.php');
            } else {
                echo "car.php not found";
            }
            break;
        case 'bus':
            header('Location: bus.php');
            break;
        case 'van':
            header('Location: van.php');
            break;
        case 'bike':
            header('Location: bike.php');
            break;
        default:
            // Redirect to a default page if the input does not match any vehicle type
            header('Location: not_found.php');
            break;
    }
    exit;
}
?>

 
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- CAtegories Section Starts Here -->
    <?php require_once "categories.php";?>
    
    <!-- Categories Section Ends Here -->

    <!-- fOOD MEnu Section Starts Here -->
    <?php require_once "vehicles.php";?>   
    <!-- fOOD Menu Section Ends Here -->

    <!-- social Section Starts Here -->
    <?php require_once "footer.php";?>