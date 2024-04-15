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

// Retrieve country advisories from the database
$sql = "SELECT country_name, advisory_text FROM countries";
$result = $conn->query($sql);

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Health Advisory</title>
    <!-- Include Tailwind CSS and Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        .navbar-brand img {
            height: 30px;
            margin-right: 10px;
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Navigation Bar -->
    <!-- ... (same as before) ... -->

    <!-- Main content -->
    <div class="container my-5 pt-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h1 class="text-3xl font-bold mb-4">Travel Health Advisory</h1>

                    <!-- Country selection -->
                    <div class="mb-4">
                        <label for="country" class="block font-medium mb-2">Select a country:</label>
                        <select id="country" class="form-control">
                            <option value="">Select a country</option>
                            <?php
                            // Populate the country select options
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $country_name = $row["country_name"];
                                    echo "<option value='$country_name'>$country_name</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <!-- Health advisory section -->
                    <div id="advisory-section" class="hidden">
                        <h2 class="text-2xl font-bold mb-2">Health Advisory</h2>
                        <div id="advisory-content" class="p-4 bg-gray-100 rounded">
                            <!-- Health advisory content will be displayed here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Include your JavaScript file -->
    <script src="app.js"></script>
</body>
</html>