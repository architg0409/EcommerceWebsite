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
        ?>
        <div class="container">
            <div class="row row_style10">
                <div class="col-xs-10">
                    <h1>LIVE SUPPORT</h1>
                    <h4>24 Hours | 7 days a week | 365 days a year Live Technical Support</h4>
                    <p>Our technical support team is available for you 24 X 7 for resolving your issues related to any product
                    .You can contact us by phone number given below or you can email us or leave your number below and we will call you in 2 hours.</p>
                </div>
                <div class="col-xs-2">
                    <img src="img/contact.png" alt="Contact" class="img-responsive">
                </div>
            </div>
                <div class="row row_style8">
                    <div class="col-xs-8">
                        <h1>CONTACT US</h1>
                        <form method="POST" action="Contact_Script.php">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name"  class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control" pattern="[a-z0-9.+_-%]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea rows = "3" cols = "80" class="form-control" name="message" placeholder="Not More than 1000 characters" required pattern=".{,1000}"></textarea>
                        </div>
                        <div>
                        <input type="submit" value="Submit" class="btn btn-primary">
                        </div>
                        </form>
                        <?php if(strlen($_GET['success'])>0){ ?>
                        <div class=" alert alert-success alert-dismissible fade in" style="margin-top:20px;"><?php echo $_GET['success']; ?>
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        </div>
                        <?php } else {
                            echo $_GET['success'];
                        } ?>
                    </div>
                    <div class="col-xs-4">
                        <h2>Company Information:</h2><br>
                        <p>Leather Company Pvt. Ltd.<br><br> Phone: +91-000000000 <br><br> Email: architg0409@gmail.com <br><br> Follow on: Facebook , Twiiter</p>
                    </div>
                </div>
            </div>
        <?php include "Footer.php"; ?>
    </body>
</html>
