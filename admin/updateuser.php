<?php
include 'dbconnect.php';
$id=$_GET['updateid'];
$sqli = "select * from `users` where id=$id";
$result=mysqli_query($con,$sqli);
$row=mysqli_fetch_assoc($result);
$name=$row['username'];
$email = $row['email'];
$password = $row['password'];

if (isset($_GET['updateid']) && isset($_POST['update'])) {
    $id = $_GET['updateid'];
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE `users` SET username='$userName', email='$email', password='$password' WHERE id=$id";

    if ($con->query($sql) === TRUE) {
        header("location:index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body, html {
            height: 100%;
        }

        .center-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        .half-width {
            width: 50%;
        }
    </style>
</head>
<body>
    <div class="center-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form class="form form-responsive" action="" method="post">
                        <h3 class="mb-4">Update User</h3>
                        <div class="form-group">
                            <label for="exampleInputname1">User Name</label>
                            <input type="text" class="form-control" id="exampleInputname1" name="userName" value="<?php echo $name; ?>" placeholder="Enter admin name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email"  value="<?php echo $email;?>" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password"  value="<?php echo $password;?>" placeholder="Password">
                        </div>
                        <input type="hidden" name="update" value="true">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
