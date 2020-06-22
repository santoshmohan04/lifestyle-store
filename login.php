<?php
include "common.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" >
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <?php include 'header.php';?><br><br><br>
<div class="container">
    <div class="row row_style" >
        <div class="col-xs-4 col-xs-offset-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                <h4>LOGIN</h4>
            </div>
                <div class="panel-body">
                <p class="text-warning">Login to make a purchase</p>
                <form action="login_submit.php" method="POST">
                    <div class="form-group">
                        <input type="email" class="form-control"  placeholder="Email"  name="email_id" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        <div><?php echo $_GET['email_error']; ?></div>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" required = "true" pattern=".{6,}">
                        <div><?php echo $_GET['password_error']; ?></div>
                    </div>
                    <button class="btn btn-primary">Login</button>
                </form><br><br>
                <div class="panel-footer">
                    <div class="form-group">
                        Don't have an account?
                        <a href="signup.php">Register</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php';?>
</body>
</html>