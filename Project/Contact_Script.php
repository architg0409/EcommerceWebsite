<?php
require "Common.php";
$name=$_POST['name'];
$name= mysqli_real_escape_string($con,$name);
$email=$_POST['email'];
$email= mysqli_real_escape_string($con,$email);
$message=$_POST['message'];
$message= mysqli_real_escape_string($con,$message);
$insert_query="insert into contact values(NULL,'$name','$email','$message')";
$insert_query_result= mysqli_query($con,$insert_query) or die(mysqli_error($con));
header('location:Contact.php?success=<strong>Success!</strong> We have received your message.You will receive an email within 24 hours.');
?>


