<?php
require 'common.php';
if(isset($_SESSION['email_id'])){
        header("location:products.php"); }
        
$email_id = $_POST['email_id'];
$email_id = mysqli_real_escape_string($con ,$email_id);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con , $password);
$password = md5($password);

$login_select_query = "SELECT id , email_id from registered_users WHERE email_id = '$email_id' AND password = '$password'";
$login_select_query_result = mysqli_query($con , $login_select_query) or die(mysqli_error($con));
$total_rows_fetched = mysqli_num_rows($login_select_query_result);
if($total_rows_fetched==0){
        $error = "<span class='red'>Invalid Credentials</span>";
        header("location:login.php?m1=".$error);
           }
    else{
         $row = mysqli_fetch_array($login_select_query_result);
         echo $row[1]."<br/>";
         echo $row[2]."<br/>";
         $_SESSION['email_id'] = $email_id;
         $_SESSION['id']=$row['id'];
         header("location:products.php");      
    }


