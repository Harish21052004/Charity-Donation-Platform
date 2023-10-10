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
$email = $_POST['email'];
$password = $_POST['password'];

// Perform basic input validation (you should do more robust validation)
$email = mysqli_real_escape_string($conn, $email);
$password = mysqli_real_escape_string($conn, $password);

// Query to check if the user exists in the database
$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $conn->query($query);

if ($result->num_rows == 1) {
    // User exists, show success message and redirect to Google main page
    // echo "Successfully logged in!";
    // header("Location: index.html");
    header("Location: main.php?name=Log-Out");
} else {
    // User does not exist or invalid credentials, display error message
    echo "Invalid credentials. Please try again.";
    // header("Location: index.html");
}

$conn->close();
?>
