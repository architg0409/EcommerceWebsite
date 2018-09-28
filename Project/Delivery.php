<?php
require 'Common.php';
if(!isset($_SESSION['email']))
    header('location:Index.php');
?>
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
        ?>
        <div class="container">
            <div class="row row_style4">
                <div class="col-xs-6 col-xs-offset-3">
                    <h1>Delivery Details</h1>
                    <form method="POST" action="Delivery_script.php?id=<?php echo $id; ?>">
                        <div class="form-group">
                              <input type="text" name="state" class="form-control" placeholder="State" required>
                        </div>
                        <div class="form-group">
                              <input type="text" name="city" class="form-control" placeholder="City" required>
                        </div>
                        <div class="form-group">
                              <input type="text" name="locality" class="form-control" placeholder="Locality and Street" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="pincode" class="form-control" placeholder="Pincode" pattern="[0-9]{6}" title="Pincode is of 6 digits" required>
                        </div>
                        <div>
                            <input type="submit" value="Submit" class="btn btn-success btn-lg">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
        } else {
        ?>
        <div class="container">
            <div class="row row_style4">
                <div class="col-xs-8 col-xs-offset-2">
                    <center>
                    <h3>Oops! No Items Were Selected.</h3>
                    <hr>
                    <h3><a href="Products.php">Click here</a> to purchase any other item</h3>
                    </center>
                </div>
            </div>
        </div>
        <?php
        }
        include "Footer.php";
        ?>
    </body>
</html>
