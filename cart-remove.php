<?php
require 'common.php';
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $item_id = $_GET["id"]; 
        $user_id = $_SESSION['id'];
        
        $query = "DELETE FROM users_products WHERE item_id='$item_id' AND user_id='$user_id' ";
        $result = mysqli_query($con , $query) or die(mysqli_error($con));
        echo 'Item deleted';
        header("location:cart.php");
    }
?>
<!--<a href="cart.php"></a>-->