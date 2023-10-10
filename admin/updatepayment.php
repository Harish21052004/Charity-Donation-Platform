<?php
include 'dbconnect.php';
$id=$_GET['updateid'];
$sqli = "select * from `regdata` where id=$id";
$result=mysqli_query($con,$sqli);
    $row=mysqli_fetch_assoc($result);
    $name = $row['full_name'];
    $email = $row['email'];
    $phonenumber = $row['phone_number'];
    $paymentdate = $row['payment_date'];
    $address = $row['street_address'];
    $country = $row['country'];
    $city = $row['city'];
    $region = $row['region'];
    $postalcode = $row['postal_code'];
    $amount = $row['amount'];    


 if (isset($_GET['updateid'])&& isset($_POST['update'])) {
    $id = $_GET['updateid'];
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phone_number'];

    $address = $_POST['street_address'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $region = $_POST['region'];
    $postalcode = $_POST['postal_code'];
    $amount = $_POST['amount'];

    $sql = "UPDATE `regdata` SET full_name='$name', email='$email', phone_number='$phonenumber', payment_date='$paymentdate', street_address='$address', country='$country', city='$city', region='$region', postal_code='$postalcode', amount='$amount' WHERE id=$id";

    if ($con->query($sql) === TRUE) {
        header("location: index.php");
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
    <title>Update Payment Details</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                        <h3 class="mb-4">Update Payment Details</h3>
                        <div class="form-group">
                            <label for="exampleInputname1">Full Name</label>
                            <input type="text" class="form-control" id="exampleInputname1" name="full_name" value="<?php echo $name; ?>" placeholder="Enter admin name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email"  value="<?php echo $email;?>" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPhonenumber1">Phone Number</label>
                            <input type="number" class="form-control" id="exampleInputPhonenumber1" name="phone_number"  value="<?php echo $phonenumber;?>" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputaddress1">Address</label>
                            <input type="text" class="form-control" id="exampleInputaddress1" name="street_address"  value="<?php echo $address;?>" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputcountry1">Country</label>
                            <select type="text" class="form-control" id="exampleInputcountry1" name="country"  value="<?php echo $country;?>" placeholder="Password">
                                <option>India</option>
                                <option>Japan</option>
                                <option>America</option>
                                <option>Nepal</option>
                                <option>Korea</option>
                                <option>China</option>
                                <option>England</option>
                                <option>Singapore</option>
                                <option>Pakistan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputcity1">City</label>
                            <input type="text" class="form-control" id="exampleInputcity1" name="city"  value="<?php echo $city;?>" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputregion1">Region</label>
                            <input type="text" class="form-control" id="exampleInputregion1" name="region"  value="<?php echo $region;?>" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPostalCode1">PostalCode</label>
                            <input type="number" class="form-control" id="exampleInputPostalCode1" name="postal_code"  value="<?php echo $postalcode;?>" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputAmount1">Amount</label>
                            <input type="number" class="form-control" id="exampleInputAmount1" name="amount"  value="<?php echo $amount;?>" placeholder="Password">
                        </div>
                        <input type="hidden" name="update" value="true">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Include Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">

</body>
</html>
