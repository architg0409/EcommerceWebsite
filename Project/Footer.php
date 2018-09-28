<footer>
            <div class="container">
                <div class="row" ">
                    <?php 
                        if(!isset($_SESSION['email'])) {
                        ?>
                    <div class="col-md-4 col-xs-6">
                        <h3>Information</h3>
                        <p><a href="About.php" style="color:#9d9d9d;">About Us</a></p>
                        <p><a href="Contact.php?success=" style="color:#9d9d9d;">Contact Us</a></p>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <h3>My Account</h3>
                        <p><a data-toggle="modal" data-target="#mymodal" style="color:#9d9d9d;">Login</a></p>
                        <p><a href="Signup.php?email_error=" style="color:#9d9d9d;">Signup</a></p>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <h3>Contact Us</h3>
                        <p>Contact: +91-0000000000</p>
                    </div>
                        <?php } else { ?>
                    <div class="col-md-4 col-xs-6">
                        <h3>Information</h3>
                        <p><a href="About.php" style="color:#9d9d9d;">About Us</a></p>
                        <p><a href="Contact.php?success=" style="color:#9d9d9d;">Contact Us</a></p>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <h3>My Account</h3>
                        <p><a href="Cart.php" style="color:#9d9d9d;">Cart</a></p>
                        <p><a href="Settings.php?password_error=" style="color:#9d9d9d;">Settings</a></p>
                        <p><a href="Logout.php" style="color:#9d9d9d;">Logout</a></p>
                    </div>    
                    <div class="col-md-4 col-xs-6">
                        <h3>Contact Us</h3>
                        <p>Contact: +91-0000000000</p>
                    </div>
                        <?php } ?>
                </div> 
            </div>
</footer>
<?php include "LogModal.php"; ?>