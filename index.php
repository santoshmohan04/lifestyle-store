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
    <title>Lifestyle Store</title>
    <!-- Latest compiled and minified CSS -->
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
<div id="banner_image">
    <div class="container">
        <div id="banner_content">
            <h1>We sell lifestyle.</h1>
            <p>Flat 40% OFF on premium brands</p>
            <a href="products.php" class=”btn btn-danger btn-lg active”>Shop Now</a>
        </div>
    </div>
</div>
<?php include 'footer.php';?>
</body>
</html>