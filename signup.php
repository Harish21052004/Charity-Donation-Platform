<?php
// Establish database connection (replace with your actual database details)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logi";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input from the form
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Perform basic input validation (you should do more robust validation)
$username = mysqli_real_escape_string($conn, $username);
$email = mysqli_real_escape_string($conn, $email);
$password = mysqli_real_escape_string($conn, $password);

// Insert user data into the database
$query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

if ($conn->query($query) === TRUE) {
    echo "Registration successful. You can now log in.";
    header("Location: login.html");
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>
