<?php
// Database connection details
$servername = "localhost"; // Your database server name
$username = "root";        // Your database username
$password = "";            // Your database password
$dbname = "carla";         // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$vehicle_id = isset($_GET['vehicle_id']) ? intval($_GET['vehicle_id']) : 0;

// Fetch vehicle details from the database if needed
$vehicle = null;
if ($vehicle_id > 0) {
    $result = $conn->query("SELECT * FROM vehicle WHERE id = $vehicle_id;");
    if ($result && $result->num_rows > 0) {
        $vehicle = $result->fetch_assoc();
    } else {
        echo "Vehicle not found!";
    }
}
?>