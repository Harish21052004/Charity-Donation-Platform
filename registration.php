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

// Function to validate and sanitize input data
function validateInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = validateInput($_POST['full_name']);
    $email = validateInput($_POST['email']);
    $phoneNumber = validateInput($_POST['phone_number']);
    $streetAddress = validateInput($_POST['street_address']);
    $country = validateInput($_POST['country']);
    $city = validateInput($_POST['city']);
    $region = validateInput($_POST['region']);
    $postalCode = validateInput($_POST['postal_code']);
    $amount = validateInput($_POST['amount']);

    // Insert validated data into the database
    $query = "INSERT INTO regdata (full_name, email, phone_number, street_address, country, city, region, postal_code, amount)
              VALUES ('$fullName', '$email', '$phoneNumber', '$streetAddress', '$country', '$city', '$region', '$postalCode', '$amount')";

    if ($conn->query($query) === TRUE) {
        echo "Data stored successfully!";
        header("Location: success.html");
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
        header("Location: failure.html");
    }
}

$conn->close();
?>
