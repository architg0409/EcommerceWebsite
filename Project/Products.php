<?php
require "Common.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Leather Store</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
         >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="Style.css" type="text/css">
    </head>
    <body>
        <?php
        include "Header.php";
        include "Check_if_added.php";
        ?>
        <div class="container row_style5">
            <div class="jumbotron">
                <h1>Welcome to our Leather Store!</h1>
                <p> We have the best Shoes, Wallets and Jackets for you. No need to hunt around, we have all in one place.</p>
            </div>
        </div>
        <div class="container row_style7">
            <div class="row row_style6" id="shoes">
                <div class="col-md-3 col-xs-12">
                    <div class="thumbnail">
                        <img src="img/1ada235f-6ec3-4e60-a315-6544e8f04e1b1530684205251-HRX-by-Hrithik-Roshan-Women-Sports-Shoes-7931530684204158-1.jpg" class="img-responsive">
                        <div class="caption ali">
                            <h4>HRX By Hrithik Roshan</h4>
                            <p>Price:Rs.1749.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a data-toggle="modal" data-target="#mymodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                 <?php
                                 } else {
                                            if (check_if_added_to_cart(1)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            }else{?>
                                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                     <?php
                                     }
                                     }
                                     ?> 
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="thumbnail">
                        <img src="img/11473243453563-Roadster-Men-Olive-Colourblock-Mid-Top-Sneakers-5791473243453247-1.jpg" class="img-responsive">
                        <div class="caption ali">
                            <h4>Roadster Men Sneakers</h4>
                            <p>Price:Rs.2999.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a data-toggle="modal" data-target="#mymodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                 <?php
                                 } else {
                                            if (check_if_added_to_cart(2)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            }else{?>
                                                <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                     <?php
                                     }
                                     }
                                     ?>  
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="thumbnail">
                        <img src="img/cfa4b30a-4dae-4c83-9006-e13d6d3c674b1526467042275-HRX-by-Hrithik-Roshan-Men-Grey-Sneakers-9481526467040954-1.jpg" class="img-responsive">
                        <div class="caption ali">
                            <h4>HRX By Hrithik Roshan</h4>
                            <p>Price:Rs.2039.00</p>
                             <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a data-toggle="modal" data-target="#mymodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                 <?php
                                 } else {
                                            if (check_if_added_to_cart(3)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            }else{?>
                                                <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                     <?php
                                     }
                                     }
                                     ?> 
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="thumbnail">
                        <img src="img/11472215469029-Mast--Harbour-Men-Navy-Perforated-Slip-Ons-5791472215468809-1.jpg" class="img-responsive">
                        <div class="caption ali">
                            <h4>Mast & Harbour Loafers</h4>
                            <p>Price:Rs.1642.00</p>
                             <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a data-toggle="modal" data-target="#mymodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                 <?php
                                 } else {
                                            if (check_if_added_to_cart(4)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            }else{?>
                                                <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                     <?php
                                     }
                                     }
                                     ?> 
                        </div>
                    </div>
                </div>
                </div>
            <div class="row row_style6" id="wallets">
                <div class="col-md-3 col-xs-12">
                    <div class="thumbnail">
                        <img src="img/9f0debc3-dbc9-480c-87db-909eb51af0241528881044639-Tommy-Hilfiger-Men-Wallets-5971528881044388-1.jpg" class="img-responsive">
                        <div class="caption ali">
                            <h4>Tommy Hilfiger</h4>
                            <p>Price:Rs.1264.00</p>
                             <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a data-toggle="modal" data-target="#mymodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                 <?php
                                 } else {
                                            if (check_if_added_to_cart(5)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            }else{?>
                                                <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                     <?php
                                     }
                                     }
                                     ?> 
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="thumbnail">
                        <img src="img/11495104498799-Leather-Zentrum-Men-Wallets-7781495104498545-1.jpg" class="img-responsive">
                        <div class="caption ali">
                            <h4>Leather Zentrum</h4>
                            <p>Price:Rs.1014.00</p>
                             <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a data-toggle="modal" data-target="#mymodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                 <?php
                                 } else {
                                            if (check_if_added_to_cart(6)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            }else{?>
                                                <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                     <?php
                                     }
                                     }
                                     ?> 
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="thumbnail">
                        <img src="img/11518066887291-Fastrack-Men-Wallets-7691518066887215-1.jpg" class="img-responsive">
                        <div class="caption ali">
                            <h4>Fastrack</h4>
                            <p>Price:Rs.1095.00</p>
                             <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a data-toggle="modal" data-target="#mymodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                 <?php
                                 } else {
                                            if (check_if_added_to_cart(7)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            }else{?>
                                                <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                     <?php
                                     }
                                     }
                                     ?> 
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="thumbnail">
                        <img src="img/6ffe61c0-648d-47ce-b7b8-2f5af022f7a41527152152746-Being-Human-Men-Brown-Solid-Two-Fold-Wallet-1731527152152620-1.jpg" class="img-responsive">
                        <div class="caption ali">
                            <h4>Being Human</h4>
                            <p>Price:Rs.789.00</p>
                             <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a data-toggle="modal" data-target="#mymodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                 <?php
                                 } else {
                                            if (check_if_added_to_cart(8)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            }else{?>
                                                <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                     <?php
                                     }
                                     }
                                     ?> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row_style6" id="jackets">
                <div class="col-md-3 col-xs-12">
                    <div class="thumbnail">
                        <img src="img/11509512706332-Adidas-Originals-Men-Black-Printed-Puffer-Jacket-8541509512706223-4.jpg" class="img-responsive">
                        <div class="caption ali">
                            <h4>Adidas Originals</h4>
                            <p>Price:Rs.12650.00</p>
                             <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a data-toggle="modal" data-target="#mymodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                 <?php
                                 } else {
                                            if (check_if_added_to_cart(9)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            }else{?>
                                                <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                     <?php
                                     }
                                     }
                                     ?> 
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="thumbnail">
                        <img src="img/11518427300387-Puma-Yellow-BVB-Stadium-Sporty-Jacket-7511518427300249-5.jpg" class="img-responsive">
                        <div class="caption ali">
                            <h4>Puma Sporty</h4>
                            <p>Price:Rs.6999.00</p>
                             <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a data-toggle="modal" data-target="#mymodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                 <?php
                                 } else {
                                            if (check_if_added_to_cart(10)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            }else{?>
                                                <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                     <?php
                                     }
                                     }
                                     ?> 
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="thumbnail">
                        <img src="img/11521537807450-SEVEN-by-MS-Dhoni-Men-Jackets-2001521537807385-5.jpg" class="img-responsive">
                        <div class="caption ali">
                            <h4>SEVEN By MS Dhoni</h4>
                            <p>Price:Rs.4999.00</p>
                             <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a data-toggle="modal" data-target="#mymodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                 <?php
                                 } else {
                                            if (check_if_added_to_cart(11)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            }else{?>
                                                <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                     <?php
                                     }
                                     }
                                     ?> 
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="thumbnail">
                        <img src="img/11514964787004-Flying-Machine-Men-Coffee-Brown-Solid-Bomber-2111514964786992-5.jpg" class="img-responsive">
                        <div class="caption ali">
                            <h4>Flying Machine</h4>
                            <p>Price:Rs.2999.00</p>
                             <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a data-toggle="modal" data-target="#mymodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                 <?php
                                 } else {
                                            if (check_if_added_to_cart(12)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            }else{?>
                                                <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                     <?php
                                     }
                                     }
                                     ?> 
                        </div>
                    </div>
                </div>
            </div>
            </div>
        <?php
        include "Footer.php";
        ?>
    </body>
</html>
<?php include "LogModal.php"; ?>