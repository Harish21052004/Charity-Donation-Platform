<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['eventName']) && isset($_POST['details']) && isset($_POST['date']) && isset($_POST['link'])) {
    $eventName = $_POST['eventName'];
    $details = $_POST['details'];
    $date = $_POST['date'];
    $link = $_POST['link'];

    $sql = "INSERT INTO events (event_name, event_details, event_date, event_link) VALUES ('$eventName', '$details', '$date', '$link')";

    if ($conn->query($sql) === TRUE) {
        echo "Event added successfully.";
        header("location:index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
