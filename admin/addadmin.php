<?php
$con = new mysqli('localhost','root','','logi');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adminName = $_POST['adminName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO admins (name, email, password) VALUES ('$adminName', '$email', '$password')";

    if ($con->query($sql) === TRUE) {
        header("location:index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();
}
?>
