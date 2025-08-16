<?php
// Database connection
$servername = "localhost:3306"; // Change this if your MySQL server is running on a different host
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$dbname = "form"; // Change this to your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetching form data
if (isset($_POST['username'])) {
    $username = $_POST['username'];
} else {
    $username = ''; // Default value if the key is not set
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $email = ''; // Default value if the key is not set
}

if (isset($_POST['password'])) {
    $password = $_POST['password'];
} else {
    $password = ''; // Default value if the key is not set
}

// Inserting data into database
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>