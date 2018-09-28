<nav class="navbar navbar-fixed-top navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php if(isset($_SESSION['email'])){?>
                    <a href="Products.php" class="navbar-brand">Leather Store</a>
                    <?php } else { ?>
                    <a href="Index.php" class="navbar-brand">Leather Store</a>
                    <?php }?>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <?php 
                        if(isset($_SESSION['email'])) {
                        ?>
                        <li><a href="Cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                        <li><a href="Settings.php?password_error="><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                        <li><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                        <?php
                        }else{
                        ?>
                        <li><a href="Signup.php?email_error="><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a data-toggle="modal" data-target="#mymodal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a href="About.php"><span class="glyphicon glyphicon-tasks"></span> About us</a></li>
                        <li><a href="Contact.php?success="><span class="glyphicon glyphicon-phone"></span> Contact</a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
</nav>
<?php include "LogModal.php"; ?>