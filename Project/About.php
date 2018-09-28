<?php
require "Common.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Leather Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="Style.css" type="text/css">
    </head>
    <body>
        <?php 
        include "Header.php";
        ?>
        <div class="container">
            <div class="row row_style9">
                <div class="col-xs-3">
                    <img src="img/22814063_1383839965060420_5603666763533967944_n.jpg" class="img-responsive img-circle">
                </div>
                <div class="col-xs-8">
                    <h2>This Website is developed by <strong><i>Archit Gupta</i></strong>.</h2>
                    <h3>Follow on -</h3>
                    <h4>Facebook :</h4>
                    <span class="fa fa-facebook-square" style=" font-size:36px; color:rgb(59, 89, 152);"></span>&nbsp;&nbsp;&nbsp;
                    <a href="https://www.facebook.com/architg0409" target="_blank">https://www.facebook.com/architg0409</a>
                    <h4>Instagram :</h4>
                    <span class="fa fa-instagram" style=" font-size:36px; color:rgb(205, 72, 107);"></span>&nbsp;&nbsp;&nbsp;
                    <a href="https://www.instagram.com/arch_it_gupta/" target="_blank">https://www.instagram.com/arch_it_gupta/</a>
                </div>
            </div>
        </div>
            <?php  include 'Footer.php';?>
    </body>
</html>
