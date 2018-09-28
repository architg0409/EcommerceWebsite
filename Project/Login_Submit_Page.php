<?php
require "Common.php";
$email=$_POST['email'];
$password=$_POST['password'];
$email= mysqli_real_escape_string($con,$email);
$password= mysqli_real_escape_string($con,$password);
$password=md5($password);
$select_query="Select uid,email from users where email='$email'and password='$password'";
$select_query_result= mysqli_query($con,$select_query) or die(mysqli_error($select_query_result));
$total_rows=mysqli_num_rows($select_query_result);
if($total_rows==0){
    header('location:LogModal.php?error=<strong>Oops! </strong>No User with such credentials');
}
else{
    $row=mysqli_fetch_array($select_query_result);
    $_SESSION['email']=$row['email'];
    $_SESSION['uid']=$row['uid'];
    header('location:Products.php');
}
?>

