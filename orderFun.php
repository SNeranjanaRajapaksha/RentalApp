<?php require_once "connection.php"?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['submit'])) {
    // Get the input values from the form
    $vehicle_id = intval($_GET['vehicle_id']);
    $pickup_date = $conn->real_escape_string(trim($_GET['pickup_date']));
    $pickup_place = $conn->real_escape_string(trim($_GET['pickup_place']));
    $dropoff_date = $conn->real_escape_string(trim($_GET['dropoff_date']));
    $dropoff_place = $conn->real_escape_string(trim($_GET['dropoff_place']));
    $full_name = $conn->real_escape_string(trim($_GET['full_name']));
    $nic = $conn->real_escape_string(trim($_GET['nic']));
    $contact = $conn->real_escape_string(trim($_GET['contact']));
    $email = $conn->real_escape_string(trim($_GET['email']));
    $address = $conn->real_escape_string(trim($_GET['address']));
    
    // Example value for vehicle_id and status; adjust as needed
    
    $status = 'pending'; // Set order status appropriately

    // Insert query
   // Correct SQL query with backticks around the table name `order`
$sql = "INSERT INTO `order` (vehicle_id, pickup_place, pickup_date, dropoff_date, dropoff_place, username, nic, user_contact, user_mail, user_address, status) 
VALUES ('$vehicle_id', '$pickup_place', '$pickup_date', '$dropoff_date', '$dropoff_place', '$full_name', '$nic', '$contact', '$email', '$address', '$status');";


    echo "SQL Query: " . $sql . "<br>";


// Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();

?>

