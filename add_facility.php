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

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $facility_name = $_POST["facility_name"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $location = $_POST["location"];


    // Prepare and execute the SQL statement
$sql = "INSERT INTO medical_facilities (facility_name, address, phone, location) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $facility_name, $address, $phone, $location);


    if ($stmt->execute()) {
        echo "facility details added successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!-- HTML form to add country details -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Facility Name: <input type="text" name="facility_name" required><br>
     Address: <input type="text" name="address" required><br>
      Phone: <input type="text" name="phone" required><br>
       Location: <input type="text" name="location" required><br>
    <input type="submit" value="Submit">
</form>