        <div class="modal fade" id="mymodal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header primary">
                        <div class="row">
                            <div class="col-xs-11">
                        <h1 class="modal-title">LOGIN</h1>
                            </div>
                            <div class="col-xs-1">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                        </div>
                    </div>
                        <div class="modal-body">
                           <p class="text-warning" style="font-weight:bolder;font-style:italic;">Login to make a purchase</p>
                           <form method="POST" action="Login_Submit_Page.php">
                          <div class="form-group">
                              <input type="email" name="email" class="form-control" placeholder="Email" required>
                          </div>
                          <div class="form-group">
                              <input type="password" name="password" class="form-control" placeholder="Password" required>
                          </div>
                        <div>
                          <input type="submit" value="Login" class="btn btn-primary">
                        </div>
                       </form>
                        </div>
                        <div class="modal-footer">
                            <p style="font-weight:bolder;float:left">Don't have an account? <a href="Signup.php?email_error=">Register</a></p>
                        </div>
                </div>
            </div>
        </div>
