<?php

require 'common.php';
$first_name = mysqli_real_escape_string($con, filter_input(INPUT_POST,'first_name'));
$email_id = mysqli_real_escape_string($con, filter_input(INPUT_POST,'email_id'));
$password = md5(mysqli_real_escape_string($con , filter_input(INPUT_POST,"password")));
$phone = mysqli_real_escape_string($con ,filter_input(INPUT_POST,'phone'));
$city = mysqli_real_escape_string($con ,  filter_input(INPUT_POST,'city'));
$address = mysqli_real_escape_string($con ,filter_input(INPUT_POST,'address'));

$regex_first_name = "[a-zA-Z][a-zA-Z0-9-_ \.]{1,20}$";
$regex_email_id = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$regex_phone = "[789][0-9]{9}";
$select_query = "SELECT * FROM registered_users WHERE email_id= '$email_id' ";
$select_query_result = mysqli_query($con , $select_query) or die(mysqli_error($con));
$select_rows = mysqli_num_rows($select_query_result);
if($select_rows > 0){
        $error = "<span class='red'>Email Already Exists</span>";
        header('location:signup.php?m1='.$error);
}
else{
     $insert_query = "INSERT INTO registered_users (email_id,first_name,password,phone,city,address) VALUES ('$email_id','$first_name','$password','$phone','$city','$address')";
      $inser_query_result = mysqli_query($con , $insert_query) or die(mysqli_error($con));
      echo "user successfully registered, kindly login. <a href = 'login.php'>login</a>";
//      header('location:login.php');
      
//        $id = mysqli_insert_id($con);
//        $_SESSION['id'] = $id;
//        $_SESSION['email_id'] = $email_id;
//        header('location:products.php');
}
?>

