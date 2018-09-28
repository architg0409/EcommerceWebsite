<?php
require "Common.php";
if(!isset($_SESSION['email']))
    header('location:Index.php');
$user_id=$_SESSION['uid'];
$select_query="select password from users where uid='$user_id'";
$select_query_result= mysqli_query($con,$select_query) or die(mysqli_error($con));
$row= mysqli_fetch_array($select_query_result);
$pass1=$_POST['pass1'];
$pass1= mysqli_real_escape_string($con,$pass1);
$pass1=md5($pass1);
$pass2=$_POST['pass2'];
$pass2= mysqli_real_escape_string($con,$pass2);
$pass2=md5($pass2);
$pass3=$_POST['pass3'];
$pass3= mysqli_real_escape_string($con,$pass3);
$pass3=md5($pass3);
if($row['password']==$pass1 && $pass2==$pass3){
        $update_query="update users set password='$pass3' where uid='$user_id'";
        $update_query_result= mysqli_query($con,$update_query) or die(mysqli_error($con));
        header('location:Products.php');
    }
else if($pass2!=$pass3 && $row['password']==$pass1){
        header('location:Settings.php?password_error=<strong>Oops!</strong> New Passwords do not match!');
    }
 else if($pass2==$pass3 && $row['password']!=$pass1){
       header('location:Settings.php?password_error=<strong>Oops!</strong> Password does not match with the current password!'); 
    }
else{
    header('location:Settings.php?password_error=<strong>Password Error!</strong>');
}
?>

