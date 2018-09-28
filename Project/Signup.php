<?php 
require 'Common.php';
if(isset($_SESSION['email']))
    header('location:Products.php');

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Leather Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="Style.css" type="text/css">
    </head>
    <body>
        <?php
        include "Header.php";
        ?>
        <div class="container">
            <div class="row row_style">
                <div class="col-xs-8">
                    <img src="img/signup1.jpg" alt="Mobile pic" class="img-responsive">
                </div>
                <div class="col-xs-4">
                    <h1 style="font-weight:bold;">SIGN UP</h1>
                    <form method="POST" action="Signup_Script.php">
                        <div class="form-group">
                            <input type="text" name="name"  class="form-control" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" pattern="[a-z0-9.+_-%]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" pattern=".{7,}" title="More than 6 Characters required" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="contact" class="form-control" placeholder="Contact" pattern="[789][0-9]{9}" title="Contact must start with 7,8,9 and should be of 10 numbers" required>
                        </div>
                        <div class="form-group">
                        <input type="text" name="city" class="form-control" placeholder="City" required>
                        </div>
                        <div class="form-group">
                        <input type="text" name="address" class="form-control" placeholder="Address" required>
                        </div>
                        <div>
                        <input type="submit" value="Submit" class="btn btn-primary">
                        </div>
                    </form>
                    <?php if(strlen($_GET['email_error'])>0){ ?>
                    <div class=" alert alert-danger alert-dismissible fade in" style="margin-top:20px;"><?php echo $_GET['email_error']; ?>
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        </div>
                        <?php } else {
                            echo $_GET['email_error'];
                        } ?>
                </div>
            </div>
        </div>
        </div>
        <?php
        include "Footer.php";
        ?>
    </body>
</html>