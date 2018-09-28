<?php
require "Common.php";
if(!isset($_SESSION['email']))
    header('location:Index.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store</title>
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
            <div class="row row_style3">
                <div class="col-xs-6 col-xs-offset-3">
                    <h1 style="font-weight: bold;">Change Password</h1>
                    <form method="POST" action="settings_script.php">
                    <div class="form-group">
                        <input type="password" name="pass1" class="form-control" placeholder="Current Password" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass2" class="form-control" placeholder="New Password" pattern=".{7,}" title="More than 6 Characters required" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass3" class="form-control" placeholder="Re-type New Password" pattern=".{7,}" title="More than 6 Characters required" required>
                    </div>
                    <div>
                    <input type="submit" value="Change" class="btn btn-primary">
                    </div>
                    </form>
                    <?php if(strlen($_GET['password_error'])>0){ ?>
                    <div class=" alert alert-danger alert-dismissible fade in" style="margin-top:20px;"><?php echo $_GET['password_error']; ?>
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        </div>
                        <?php } else {
                            echo $_GET['password_error'];
                        }?>
                    
                </div>
            </div>
        </div>
        <?php
        include "Footer.php";
        ?>
    </body>
</html>