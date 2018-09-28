<?php
require "Common.php";
$email=$_POST['email'];
$password=$_POST['password'];
$email= mysqli_real_escape_string($con,$email);
$name=$_POST['name'];
$name= mysqli_real_escape_string($con,$name);
$password= mysqli_real_escape_string($con,$password);
$password=md5($password);
$contact=$_POST['contact'];
$city=$_POST['city'];
$city= mysqli_real_escape_string($con,$city);
$address=$_POST['address'];
$address= mysqli_real_escape_string($con,$address);
$select_query="select uid from users where email='$email'";
$select_query_result= mysqli_query($con,$select_query) or die(mysqli_error($select_query_result));
$total_rows= mysqli_num_rows($select_query_result);
if($total_rows>0)
    header('location:Signup.php?email_error=Email already exists!');
else{
    $select_query2="insert into users values(NULL,'$name','$email','$password','$contact','$city','$address')";
    $select_query_result2=mysqli_query($con,$select_query2) or die(mysqli_error($con));
    $uid= mysqli_insert_id($con);
    $_SESSION['email']=$email;
    $_SESSION['uid']=$uid;
    header('location:Products.php');
}
?>

