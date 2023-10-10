<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Events</title>
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
                    <form class="form form-responsive" action="addevent.php" method="post">
                        <h3 class="mb-4">Add Events</h3>
                        <div class="form-group">
                            <label for="exampleInputname1">Event Name</label>
                            <input type="text" class="form-control" id="exampleInputname1" name="eventName"  placeholder="Enter Event name" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputdetails1">Event Details</label>
                            <input type="text" class="form-control" id="exampleInputdetails1" name="details" autocomplete="off"  placeholder="Enter Event details (About 20 words)">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputdate">Event Date</label>
                            <input type="date" class="form-control" id="exampleInputdate1" name="date" autocomplete="off" placeholder="Event Date">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputlink">Event Date</label>
                            <input type="text" class="form-control" id="exampleInputlink1" name="link" autocomplete="off" placeholder="Event Social links">
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
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