<?php
// Establish database connection (replace with your actual database details)
include 'dbconnect.php';

// Get user input from the form
$email = $_POST['email'];
$password = $_POST['password'];

// Perform basic input validation (you should do more robust validation)
$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);

// Query to check if the user exists in the database
$query = "SELECT * FROM admins WHERE email='$email' AND password='$password'";
$result = $con->query($query);

if ($result->num_rows == 1) {
    header("Location: index.php?'.$email[0].'");
} else {
    echo "Invalid credentials. Please try again.";
}

$conn->close();
?>
