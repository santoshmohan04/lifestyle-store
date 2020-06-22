<?php
require 'common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
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
    <?php include 'check-if-added.php';?>
<div class="container">
    <div class = "jumbotron">
        <h1>Welcome to our Lifestyle Store!</h1>
        <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
    </div>
</div>
<div class="container">
    <div class = "row text-center">
        <div class="col-md-3 col-sm-6">
            <a class= "thumbnail" href="#"><img alt="Cannon EOS Camera" src=".img/5.jpg"></a>
            <div class="caption">
                <h3>Cannon EOS</h3>
                <p>Price: Rs.36000.00</p>
                <?php
                    if (!isset($_SESSION['email_id'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                    <?php
                    } else {
//We have created a function to check whether this particular product is added to cart or not.
                        if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart !=0)
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                        ?>
                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                    }
                    }
                    ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <a class= "thumbnail" href="#"><img alt="Sony DSLR Camera" src=".img/2.jpg"></a>
            <div class="caption">
                <h3>Sony DSLR</h3>
                <p>Price: Rs.40000.00</p>
                <?php
                    if (!isset($_SESSION['email_id'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(2)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                        ?>
                <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                    }
                    }
                    ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <a class= "thumbnail" href="#"><img alt="Sony DSLR Camera" src=".img/3.jpg"></a>
            <div class="caption">
                <h3>Sony DSLR</h3>
                <p>Price: Rs.50000.00</p>
                <?php
                    if (!isset($_SESSION['email_id'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(3)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                        ?>
                <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                    }
                    }
                    ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <a class= "thumbnail" href="#"><img alt="Olympus DSLR Camera" src=".img/4.jpg"></a>
            <div class="caption">
                <h3>Olympus DSLR</h3>
                <p>Price: Rs.80000.00</p>
                <?php
                if (!isset($_SESSION['email_id'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(4)){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                        ?>
                <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                    }
                    }
                    ?>
            </div>
        </div>
    </div>
</div><br>
<div class="container">
    <div class = "row text-center">
        <div class="col-md-3 col-sm-6">
            <a class= "thumbnail" href="#"><img alt="Titan Model #301" src=".img/9.jpg"></a>
            <div class="caption">
                <h3>Titan Model #301</h3>
                <p>Price: Rs.13000.00</p>
                <?php
                if (!isset($_SESSION['email_id'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(5)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                        ?>
                <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                    }
                    }
                    ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <a class= "thumbnail" href="#"><img alt="Titan Model #201" src=".img/10.jpg"></a>
            <div class="caption">
                <h3>Titan Model #201</h3>
                <p>Price: Rs.3000.00</p>
                <?php
                     if (!isset($_SESSION['email_id'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(6)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                        ?>
                <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                    }
                    }
                    ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <a class= "thumbnail" href="#"><img alt="HMT Milan" src=".img/11.jpg"></a>
            <div class="caption">
                <h3>HMT Milan</h3>
                <p>Price: Rs.8000.00</p>
                <?php
                    if (!isset($_SESSION['email_id'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(7)){ 
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                        ?>
                <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                    }
                    }
                    ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <a class= "thumbnail" href="#"><img alt="Faber Luba #111" src=".img/12.jpg"></a>
            <div class="caption">
                <h3>Faber Luba #111</h3>
                <p>Price: Rs.18000.00</p>
                <?php
                    if (!isset($_SESSION['email_id'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(8)){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                        ?>
                <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                    }
                    }
                    ?>
            </div>
        </div>
    </div>
</div><br>
<div class="container">
    <div class = "row text-center">
        <div class="col-md-3 col-sm-6">
            <a class= "thumbnail" href="#"><img alt="H&W" src=".img/8.jpg" style="padding: 12px 0px 12px 0px"></a>
            <div class="caption">
                <h3>H&W</h3>
                <p>Price: Rs.800.00</p>
                <?php
                    if (!isset($_SESSION['email_id'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(9)){ 
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                        ?>
                <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                    }
                    }
                    ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <a class= "thumbnail" href="#"><img alt="Luis Phil" src=".img/6.jpg"></a>
            <div class="caption">
                <h3>Luis Phil</h3>
                <p>Price: Rs.1000.00</p>
                <?php
                    if (!isset($_SESSION['email_id'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(10)){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                        ?>
                <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                    }
                    }
                    ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <a class= "thumbnail" href="#"><img alt="John Zok" src=".img/13.jpg"></a>
            <div class="caption">
                <h3>John Zok</h3>
                <p>Price: Rs.1500.00</p>
                <?php
                    if (!isset($_SESSION['email_id'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(11)){ 
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                        ?>
                <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                    }
                    }
                    ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <a class= "thumbnail" href="#"><img alt="Jhalsani" src=".img/14.jpg"></a>
            <div class="caption">
                <h3>Jhalsani</h3>
                <p>Price: Rs.1300.00</p>
                <?php
                    if (!isset($_SESSION['email_id'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">BuyNow</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(12)){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                        ?>
                <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php
                    }
                    }
                    ?>
            </div>
        </div>
    </div>
</div><br><br>
<?php include 'footer.php';?>
</body>
</html>