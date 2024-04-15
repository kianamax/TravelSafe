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

// Get the country parameter from the URL
$country = isset($_GET['country']) ? $_GET['country'] : '';

// Retrieve advisory text for the selected country
$sql = "SELECT advisory_text FROM countries WHERE country_name = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $country);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $advisory_text = $row['advisory_text'];
    echo $advisory_text; // Output the advisory text
} else {
    echo "No advisory found for the selected country.";
}

$stmt->close();
$conn->close();
?>