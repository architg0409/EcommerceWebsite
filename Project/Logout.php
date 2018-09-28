<?php
session_start();
if(!isset($_SESSION['email']))
    header('location:Index.php');
else {
    session_destroy();
    header('location:Index.php');
}
?>

