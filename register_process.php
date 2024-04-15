<?php  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); 
    $email = $_POST["email"];
    $country = $_POST["country"];

    
    $checkQuery = "SELECT * FROM registration WHERE username = '$username'";
    $checkResult = $conn->query($checkQuery);

    if ($checkResult->num_rows > 0) {
        echo "Username already exists. Please choose a different username.";
    } else {
        
        $sql = "INSERT INTO registration (username, password, email, country) VALUES ('$username', '$password','$email', '$country')";

        if ($conn->query($sql) === TRUE) {
            echo "Registration successful!";
            
            header("Location: login.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
