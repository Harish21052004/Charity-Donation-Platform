<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body, html {
            height: 100%;
        }

        .login-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-form {
            padding: 30px;
            border: 1px solid #ccc;
            background-color: #fff;
        }

        .login-image {
            background-image: url('your-image-url.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            width: 50%;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 login-image">
                <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_1280.jpg" alt="" width="100%" height="100%">
            </div>
            <div class="col-md-6 login-container" style="flex-direction: column;">
                <h2>Charity Donation Platform</h2>
                <form class="login-form" action="loginchecking.php" method="POST">
                    <h3 class="mb-4">Login</h3>
                    <div class="form-group">
                        <label for="email">Admin E-mail</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Admin Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" autocomplete="off" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
