<?php
require "Common.php";
if(!isset($_SESSION['email']))
    header('location:Index.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store</title>
        <meta name="description" content="Leather Store | Shoes,Jackets and Wallets">
        <meta name="keywords" content="Leather,Shoes,Jackets,Wallets,Store">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Archit Gupta">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="Style.css" type="text/css">
    </head>
    <body>
        <?php
        include "Header.php";
        $id=$_GET['id'];
        if(strlen($id)>0){
        $user_id=$_SESSION['uid'];
        $ids=explode(",",$id);
        for($i=0;$i<count($ids);$i++){
            $update_query="update users_items set status='Confirmed' where user_id='$user_id' and item_id='$ids[$i]'";
            $update_query_result= mysqli_query($con,$update_query) or die(mysqli_error($con));
        }
        ?>
        <div class="container">
            <div class="row row_style4">
                <div class="col-xs-8 col-xs-offset-2">
                    <center>
                    <h3>Thank You for Ordering from Leather Store.The Order shall be delivered to you shortly.</h3>
                    <hr>
                    <h3><a href="Products.php">Click here</a> to purchase any other item</h3>
                    </center>
                </div>
            </div>
        </div>
        <?php } else { ?>
        <div class="container">
            <div class="row row_style8">
                <div class="col-xs-8 col-xs-offset-2">
                    <center>
                    <h3>Oops! No Items Were Selected.</h3>
                    <hr>
                    <h3><a href="Products.php">Click here</a> to purchase any other item</h3>
                    </center>
                </div>
            </div>
        </div>
        <?php }
        include "Footer.php";
        ?>
    </body>
</html>