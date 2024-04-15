<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project2";

// Create a new database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve medical facilities
$sql = "SELECT facility_name, address, phone, location FROM medical_facilities";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Initialize an empty array to store facilities
    $facilities = array();

    // Fetch facilities and add them to the array
    while ($row = $result->fetch_assoc()) {
        $facilities[] = $row;
    }

    // Encode the array as JSON and output it
    echo json_encode($facilities);
} else {
    echo json_encode(array('message' => 'No medical facilities found.'));
}

$conn->close();
?>
