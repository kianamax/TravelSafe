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
    $country_name = $_POST["country_name"];
    $advisory_text = $_POST["advisory_text"];

    // Prepare and execute the SQL statement
    $sql = "INSERT INTO countries (country_name, advisory_text) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $country_name, $advisory_text);

    if ($stmt->execute()) {
        echo "Country details added successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!-- HTML form to add country details -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Country Name: <input type="text" name="country_name" required><br>
    Advisory Text: <textarea name="advisory_text" required></textarea><br>
    <input type="submit" value="Submit">
</form>