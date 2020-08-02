<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="img/logo (1).png" type="image/icon type">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <?php if (isset($_SESSION["logged_in"])) : ?>
        <p>Hello, <?php echo $_SESSION["email"]; ?></p>
        <a href="logout.php">Log Out</a>
        <?php else : ?>
        <div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3 class="text-center">Sign in here</h3>
                </div>
                <form action="logincode.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email or Phone *" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password *" name="password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Login</button>
                        <p class="text-info">New user please <a href="index.html">sign up here</a></p>
                    </div>
                </form>
            </div>
        </div>
    <?php endif; ?>
</body>

</html>