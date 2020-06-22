<?php
require 'common.php';
session_start();
if(!isset($_SESSION['email_id'])){
   header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Settings</title>
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
<div class="container-fluid">
            <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>Change Password</h2>
                        <form action="settings_script.php" method="POST">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Old password" name="password" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="New password" name="newpass" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Re-type New password" name="newpass2" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Change</button>
                        </form>
                    </div>
            </div>
</div><br><br><br>
<?php include 'footer.php';?>
</body>
</html>