<?php
require "Common.php";
$item_id=$_GET['id'];
$user_id=$_SESSION['uid'];
$insert_query="insert into users_items(user_id,item_id,status) values('$user_id','$item_id','Added to Cart')";
$insert_query_result= mysqli_query($con,$insert_query) or die(mysqli_error($con));
header('location:Products.php');
?>
       



