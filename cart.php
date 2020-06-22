<?php
require 'common.php';
mysqli_insert_id($con)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">`
    <title>Cart</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" >
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <?php 
    include 'header.php';
    if(!isset($_SESSION['email_id'])){
        header("location:login.php");
        
    }
    ?><br><br><br>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <?php
                if(isset($_GET['m1'])){
                    $disc=$_GET['m1'];    
                }
                $sum = 0;
                $id = $_SESSION['id'];
                $query= "SELECT products.price AS Price, products.item_id, products.name AS Name FROM products"
              . " JOIN users_products ON users_products.item_id = products.item_id WHERE"
              . " users_products.user_id='$id' and status='Added To Cart'";
                $result = mysqli_query($con, $query) or die (mysqli_error($con));
                ?> 
                <?php  
                if (mysqli_num_rows($result)==0) {
                    echo "Add items to the cart first!";
                }
                ?>
                
                <thead>
                    <tr>
                        <th>Item Number</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($result)) {
                       $sum+= $row["Price"];
                       $id = $row["item_id"];
                       echo "<tr><td>" . $row["item_id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['item_id']}' class='remove_item_link btn btn-danger btn-block'> Remove</a></td></tr>";
                       }
                       if(isset($disc)){
                           $sum = $sum - $sum * (0.2);
                       }
                       echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php' class='btn btn-success btn-block'>Confirm Order</a></td></tr>";
                   ?>
               </tbody>
            </table>
       </div>
    </div>
        <?php include 'footer.php';?>
</body>
</html>