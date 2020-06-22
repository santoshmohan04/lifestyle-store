<?php
require 'common.php';
if (isset($_SESSION['email_id'])) {
header('location: products.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" >
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php include 'header.php';?>
<div class="container-fluid">
            <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>SIGN UP</h2>
                        <form action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input type = "text" class="form-control" placeholder="Name" name="first_name"  required = "true" pattern="^[a-zA-Z][a-zA-Z0-9-_ \.]{1,20}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email_id" required = "true">
                            </div>
                            <?php
                                if(isset($_GET['m1'])){
                                 echo $_GET['m1'];
                                }
                            ?>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control"  placeholder="phone" pattern="[789][0-9]{9}" name="phone" required = "true">
                            </div>
                            <?php
                            if(isset($_GET['m2'])){
                             echo $_GET['m2'] ;
                            }
                            ?>
                            <div class="form-group">
                                <input type ="text" class="form-control"  placeholder="City" pattern="^[a-zA-Z][a-zA-Z0-9-_ \.]{1,20}$"  name="city" required = "true">
                            </div>
                            <div class="form-group">
                                <input type ="text" class="form-control"  placeholder="Address" name="address" required = "true" pattern="^[a-zA-Z][a-zA-Z0-9-_ \.]{1,20}$">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
            </div>
</div>
<?php include 'footer.php';?>
</body>
</html>