<!--settings_script-->
<?php 
require 'common.php'; 
if(!isset($_SESSION['email_id'])) {
	header('location:index.php');
}

//$con= mysqli_connect("localhost", "santosh", "Jio@9701508684", "E-Commerce") or die (mysqli_error($con));
$email=$_SESSION['email_id'];
//echo "$email";
$password=md5(mysqli_real_escape_string($con,$_POST['password']));
$newpass=md5(mysqli_real_escape_string($con,$_POST['newpass']));
$newpass2=md5(mysqli_real_escape_string($con,$_POST['newpass2']));
if ($newpass != $newpass2) {
    header('location: settings.php?error=The two passwords don\'t match');
}

   $select_query="SELECT password FROM registered_users WHERE email_id='$email' and password='$password' ";
    $select_query_result=mysqli_query($con,$select_query) or die (mysqli_error($con));
    $total_rows_fetched=mysqli_num_rows($select_query_result);
    //echo "$total_rows_fetched";

    if(mysqli_num_rows($select_query_result) > 0) {
    	$row=mysqli_fetch_array($select_query_result);
    	$r=$row['0'];

    	if ($password==$r) {
//    		$con= mysqli_connect("localhost", "santosh", "Jio@9701508684", "E-Commerce") or die (mysqli_error($con));
    		 $select_query="UPDATE `registered_users` SET `password` = '$newpass' WHERE `registered_users`.`email_id` = '$email'";
  		    $select_query_result=mysqli_query($con,$select_query) or die (mysqli_error($con));
    		    header('location: settings.php?error=Password Updated');
    	
    	} 
}else{
	 header('location: settings.php?error=Wrong Old Password');
}
?>
