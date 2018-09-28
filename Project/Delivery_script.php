<?php
require 'Common.php';
$state=$_POST['state'];
$state= mysqli_real_escape_string($con,$state);
$city=$_POST['city'];
$city= mysqli_real_escape_string($con,$city);
$locality=$_POST['locality'];
$locality= mysqli_real_escape_string($con,$locality);
$pincode=$_POST['pincode'];
$pincode= mysqli_real_escape_string($con,$pincode);


