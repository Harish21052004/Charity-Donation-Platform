<?php
include 'dbconnect.php';
$id = $_GET['updateid'];
$sqli = "select * from `events` where id=$id";
$result = mysqli_query($con, $sqli);
$row = mysqli_fetch_assoc($result);
$eventname = $row['event_name'];
$eventdetails = $row['event_details'];
$eventdate = $row['event_date'];
$eventlink = $row['event_link'];

if (isset($_GET['updateid']) && isset($_POST['update'])) {
    $id = $_GET['updateid'];
    $eventname = $_POST['eventname'];
    $eventdetails = $_POST['eventdetail'];
    $eventdate = $_POST['eventdate'];
    $eventlink = $_POST['eventlink'];

    $sql = "UPDATE `events` SET event_name='$eventname', event_details='$eventdetails', event_date='$eventdate', event_link='$eventlink' WHERE id=$id";

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
    <title>Update Admin</title>
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
                        <h3 class="mb-4">Update Event</h3>
                        <div class="form-group">
                            <label for="exampleInputname1">Event Name</label>
                            <input type="text" class="form-control" id="exampleInputname1" name="eventname" value="<?php echo $eventname; ?>" placeholder="Enter Event name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputdetail">Event Details</label>
                            <input type="text" class="form-control" id="detail" name="eventdetail"  value="<?php echo $eventdetails;?>" placeholder="Enter Event details (About 20 words)">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputdate1">Event Date</label>
                            <input type="date" class="form-control" id="exampleInputdate1" name="eventdate"  value="<?php echo $eventdate;?>" placeholder="Event Date">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputlink1">Event link</label>
                            <input type="text" class="form-control" id="exampleInputlink1" name="eventlink"  value="<?php echo $eventlink;?>" placeholder="Event link">
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
