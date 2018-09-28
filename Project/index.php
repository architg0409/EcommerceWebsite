<?php 
require 'Common.php';
if(isset($_SESSION['email']))
    header('location:Products.php');

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Leather Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="Style.css" type="text/css">
    </head>
    <body>
        <?php
        include "Header.php";
        ?>
        <div id="banner_image">
            <div class="container">
                <div id="banner_content" class="container">
                    <h1><strong>We sell Lifestyle.</strong></h1>
                    <p>Flat 40% OFF on premium brands.</p><br>
                    <a href="Products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="Products.php#shoes"><img src="img/brown-shoes-1150071_1920.jpg" alt="shoes" class="img-responsive">
                        <div class="caption ali">
                            <h1>Shoes</h1>
                            <p>Choose among the best available in the world.</p>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="Products.php#wallets"><img src="img/Popov-Leather-Goods-gear-patrol-full-lead.jpg" alt="wallet" class="img-responsive">
                        <div class="caption ali">
                            <h1>Wallets</h1>
                            <p>Original wallets from best brands.</p>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-xs-4">
                   <div class="thumbnail ali">
                       <a href="Products.php#jackets"><img src="img/fullsizerender-2.jpg" alt="jacket" class="img-responsive">
                       <div class="caption">
                            <h1>Jackets</h1>
                            <p>Our exquisite collection of jackets.</p>
                       </div>
                       </a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include "Footer.php";
        ?>
    </body>
</html>
