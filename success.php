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
    <title>Success</title>
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
    <?php
        $item_id = $_GET["id"]; 
        $user_id = $_SESSION['id'];
        
        $query = "UPDATE users_products SET status = 'Ordered' WHERE user_id = '$user_id'";
        $result = mysqli_query($con , $query) or die(mysqli_error($con));
    ?>
<div class="container">
    <h3>Your order is confirmed. Thank you for shopping with us.
    <a href="products.php" class=”btn btn-danger btn-lg active”>Click here</a> to purchase any other item.</h3>
</div><br><br><br>
<?php include 'footer.php';?>
</body>
</html>