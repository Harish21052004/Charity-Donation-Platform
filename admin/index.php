<?php
session_start();
include 'dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="shortcut icon" href="./images/5335745.png" type="image/x-icon">
  <title>Charity Donation Platform - Dashboard</title>
  <script>
    function preventBack() {
      window.history.forward();
    }
    setTimeout("preventBack()", 0);
    window.onunload = function () { null; }
  </script>
</head>

<body>
  <!-- top navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
        aria-controls="offcanvasExample">
        <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
      </button>
      <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="#">THE HOPE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar"
        aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="topNavBar">
        <form class="d-flex ms-auto my-3 my-lg-0">
          <div class="input-group">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-primary" type="submit">
              <i class="bi bi-search"></i>
            </button>
          </div>
        </form>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <i class="bi bi-person-fill"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- top navigation bar -->
  <!-- offcanvas -->
  <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
    <div class="offcanvas-body p-0">
      <nav class="navbar-dark">
        <ul class="navbar-nav">
          <li>
            <div class="text-muted small fw-bold text-uppercase px-3">
              CORE
            </div>
          </li>
          <li>
            <a href="#" class="nav-link px-3 active">
              <span class="me-2"><i class="bi bi-speedometer2"></i></span>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="my-4">
            <hr class="dropdown-divider bg-light" />
          </li>
          <li>
            <span style="cursor: pointer;" class="nav-link px-3" onclick="showTable('users');">
              <span class="me-2"><i class="bi bi-person-fill"></i></span>
              <span>Users</span>
            </span>
          </li>
          <li>
            <span style="cursor: pointer;" class="nav-link px-3" onclick="showTable('eve');">
              <span class="me-2"><i class="bi bi-calendar-check"></i></span>
              <span>Events</span>
            </span>
          </li>
          <li>
            <span style="cursor: pointer;" class="nav-link px-3" onclick="showTable('pay');">
              <span class="me-2"><i class="bi bi-credit-card-2-front-fill"></i></span>
              <span>paymentDetails</span>
            </span>
          </li>
          <li>
            <span style="cursor: pointer;" class="nav-link px-3" onclick="showTable('adm');">
              <span class="me-2"><i class="bi bi-people"></i></span>
              <span>Admins</span>
            </span>
          </li>
          <li>
            <span style="cursor: pointer;" class="nav-link px-3" onclick="showTable('addadm');">
              <span class="me-2"><i class="bi bi-person-plus-fill"></i></span>
              <span>Add Admin</span>
            </span>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <!-- offcanvas -->
  <main class="mt-5 pt-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h4>Dashboard</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 mb-3">
          <div class="card bg-primary text-white h-100">
            <div class="card-body py-5">No of Users: <span style="font-size: 30px;">
                <?php
                include 'dbconnect.php'; // Include your database connection script
                
                $query = "SELECT COUNT(*) as total FROM users";
                $result = mysqli_query($con, $query);

                if ($result) {
                  $row = mysqli_fetch_assoc($result);
                  $totalRows = $row['total'];
                  echo "   " . $totalRows;
                } else {
                  echo "Error: " . mysqli_error($con);
                }
                ?>

              </span></div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card bg-warning text-dark h-100">
            <div class="card-body py-5">Total Funds: <span style="font-size: 30px;">
                <?php
                include 'dbconnect.php';
                // Calculate sum of amount column
                $sql = "SELECT SUM(amount) AS total_amount FROM regdata";
                $result = $con->query($sql);

                if ($result) {
                  $row = $result->fetch_assoc();
                  $totalAmount = $row["total_amount"];
                  echo $totalAmount;
                } else {
                  echo "No results";
                }

                ?>
              </span> </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card bg-success text-white h-100">
            <div class="card-body py-5">Total Admins: <span style="font-size: 30px;">
                <?php
                include 'dbconnect.php';

                $query = "SELECT COUNT(*) as total FROM admins";
                $result = mysqli_query($con, $query);

                if ($result) {
                  $row = mysqli_fetch_assoc($result);
                  $totalRows = $row['total'];
                  echo "   " . $totalRows;
                } else {
                  echo "Error: " . mysqli_error($con);
                }
                ?>
              </span> </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card bg-danger text-white h-100">
            <div class="card-body py-5">Total Events
              <span style="font-size: 30px;">
                <?php
                include 'dbconnect.php'; // Include your database connection script
                
                $query = "SELECT COUNT(*) as total FROM events";
                $result = mysqli_query($con, $query);

                if ($result) {
                  $row = mysqli_fetch_assoc($result);
                  $totalRows = $row['total'];
                  echo "   " . $totalRows;
                } else {
                  echo "Error: " . mysqli_error($con);
                }
                ?>
              </span>
            </div>
          </div>
        </div>
      </div>

      <!--Users-->
      <div class="row" id="users-details" style="display: none;">
        <div class="col-md-12 mb-3">
          <div class="card">
            <div class="card-header">
              <span><i class="bi bi-table me-2"></i></span> Data Table
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="datatable" class="table table-hover table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql = "select * from `users`";
                    $result = mysqli_query($con, $sql);
                    if ($result) {
                      while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['username'];
                        $email = $row['email'];
                        $password = $row['password'];
                        echo '
                <tr>
                 <td>' . $id . '</td>
                 <td>' . $name . '</td>
                 <td>' . $email . '</td>
                 <td>' . $password . '</td>
                 <td>
                  <button class="btn btn-primary"><a href="updateuser.php?updateid=' . $id . '" class="text-light">Update</a></button>
                  <button style="margin-left: 5px;" class="btn btn-danger"><a class="text-light" href="delete.php?deleteid=' . $id . '">Delete</a></button>
                 </td>
                </tr>                
                ';
                      }
                    }
                    ?>
                  </tbody>


                </table>
              </div>
            </div>
          </div>
        </div>
      </div>




      <!--Events-->
      <div class="row" id="eve-details" style="display: none;">
        <div class="col-md-12 mb-3">
          <div class="card">
            <div class="card-header">
              <span><i class="bi bi-table me-2"></i></span> Data Table <a href="events.php"><button
                  class="btn btn-primary">Add Event</button></a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="events" class="table table-hover table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Event Name</th>
                      <th>Event Details</th>
                      <th>Event Date</th>
                      <th>Event Url</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql = "select * from `events`";
                    $result = mysqli_query($con, $sql);
                    if ($result) {
                      while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $eventname = $row['event_name'];
                        $eventdetails = $row['event_details'];
                        $eventdate = $row['event_date'];
                        $eventlink = $row['event_link'];

                        echo '
                <tr>
                 <td>' . $id . '</td>
                 <td>' . $eventname . '</td>
                 <td>' . $eventdetails . '</td>
                 <td>' . $eventdate . '</td>
                 <td>' . $eventlink . '</td>
                 <td>
                  <button class="btn btn-primary"><a href="updateevent.php?updateid=' . $id . '" class="text-light">Update</a></button>
                  <button style="margin-left: 5px;" class="btn btn-danger"><a class="text-light" href="deleteevent.php?deleteid=' . $id . '">Delete</a></button>
                 </td>
                </tr>                
                ';
                      }
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>



      <!--Payment Details-->
      <div class="row" id="pay-details" style="display: none;">
        <div class="col-md-12 mb-3">
          <div class="card">
            <div class="card-header">
              <span><i class="bi bi-table me-2"></i></span> Data Table
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="paymentDetails" class="table table-hover table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th>Payment Date</th>
                      <th>Street Address</th>
                      <th>Country</th>
                      <th>City</th>
                      <th>Region</th>
                      <th>Postal Code</th>
                      <th>Amount</th>
                      <td>Actions</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $con = new mysqli('localhost', 'root', '', 'logi');
                    $sql = "select * from `regdata`";
                    $result = mysqli_query($con, $sql);
                    if ($result) {
                      while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
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
                        echo '
                <tr>
                 <td>' . $id . '</td>
                 <td>' . $name . '</td>
                 <td>' . $email . '</td>
                 <td>' . $phonenumber . '</td>
                 <td>' . $paymentdate . '</td>
                 <td>' . $address . '</td>
                 <td>' . $country . '</td>
                 <td>' . $city . '</td>
                 <td>' . $region . '</td>
                 <td>' . $postalcode . '</td>
                 <td>' . $amount . '</td>
                 <td>
                    <button class="btn btn-primary"><a href="updatepayment.php?updateid=' . $id . '" class="text-light">Update</a></button>
                    <button style="margin-left: 5px;" class="btn btn-danger"><a class="text-light" href="deletepayment.php?deleteid=' . $id . '">Delete</a></button>
                 </td>
                </tr>                
                ';
                      }
                    }
                    ?>


                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!--Admins details-->
      <div class="row" id="adm-details" style="display: none;">
        <div class="col-md-12 mb-3">
          <div class="card">
            <div class="card-header">
              <span><i class="bi bi-table me-2"></i></span> Data Table
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="adminsdetails" class="table table-hover table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql = "select * from `admins`";
                    $result = mysqli_query($con, $sql);
                    if ($result) {
                      while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $password = $row['password'];
                        echo '
                <tr>
                 <td>' . $id . '</td>
                 <td>' . $name . '</td>
                 <td>' . $email . '</td>
                 <td>' . $password . '</td>
                 <td>
                    <button class="btn btn-primary"><a href="updateadmin.php?updateid=' . $id . '" class="text-light">Update</a></button>
                    <button style="margin-left: 5px;" class="btn btn-danger"><a class="text-light" href="deleteadmin.php?deleteid=' . $id . '">Delete</a></button>
                 </td>
                </tr>                
                ';
                      }
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>




      <!--Add admins-->

      <div class="row" id="addadm-details" style="display: none;">
        <div class="col-md-9 mb-3">
          <div class="card">
            <div class="card-header">
              <span><i class="bi bi-table me-2"></i></span> Data Table
            </div>
            <div class="card-body">
              <form class="form form-responsive" action="addadmin.php" method="post">
                <h3>New Admin</h3>
                <div class="form-group" style="margin-top: 20px;">
                  <label for="exampleInputname1">Admin Name</label>
                  <input type="text" class="form-control" id="exampleInputname1" name="adminName"
                    placeholder="Enter admin name" required>
                </div>
                <div class="form-group" style="margin-top: 20px;">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                    placeholder="Enter email" required>
                </div>
                <div class="form-group" style="margin-top: 20px;">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                    placeholder="Password" required>
                </div>
                <button type="submit" style="margin-top: 20px;" class="btn btn-primary">Submit</button>
              </form>


            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script>
    function showTable(category) {
      // Hide all table sections
      document.getElementById('users-details').style.display = 'none';
      document.getElementById('eve-details').style.display = 'none';
      document.getElementById('pay-details').style.display = 'none';
      document.getElementById('adm-details').style.display = 'none';
      document.getElementById('addadm-details').style.display = 'none';


      // Show the selected table section
      document.getElementById(category + '-details').style.display = 'block';
    }
  </script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="./js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
  <script src="./js/jquery-3.5.1.js"></script>
  <script src="./js/jquery.dataTables.min.js"></script>
  <script src="./js/dataTables.bootstrap5.min.js"></script>
  <script src="./js/script.js"></script>
</body>

</html>