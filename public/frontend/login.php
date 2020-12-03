<?php include("layouts/header.php") ?>
    <!-- login template -->
    <div class="login_form_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="display: flex;justify-content: center;">
                    <!-- login_wrapper -->
                    <div class="login_wrapper">
                        
                        <div>
                            <h2 class="custom-header">Patient  Login</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                <a href="#" class="btn btn-primary facebook">
                                    <span>Login with Facebook</span> 
                                    <i class="fab fa-facebook"></i> 
                                </a> 
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6"> 
                                <a href="#" class="btn btn-primary google">
                                    Login with Google <i class="fab fa-google"></i>
                                </a> 
                            </div>
                        </div>

                        <h2 class="text-center" style="color: #bdb986;">or</h2>


                        <div class="row">
                            <div class="formsix-pos col-md-6 col-xs-12 col-sm-6">
                                <div class="form-group i-email"> 
                                    <input type="email" class="form-control" required="" id="email2" placeholder="Email Address / Phone Number *"> 
                                </div>
                            </div>
                            <div class="formsix-e col-md-6 col-xs-12 col-sm-6">
                                <div class="form-group i-password"> 
                                    <input type="password" class="form-control" required="" id="password2" placeholder="Password *"> 
                                </div>
                            </div>
                        </div>
                        <div class="login_remember_box"> 
                            <label class="checkbox ">
                                <input type="checkbox" value="remember-me" id="remember_me"> Remember me
                            </label> 
                            <a href="#" class="forget_password"> Forgot Password </a> 
                        </div>
                        <div class="login_btn_wrapper"> 
                            <a href="#" class="btn btn-primary login_btn"> Login </a> 
                        </div>
                        <div class="login_message">
                            <p>Don’t have an account ? 
                                <a href="#" style="color: #bdb986;"> Sign up </a> 
                            </p>
                        </div>
                    </div> <!-- /.login_wrapper-->
                </div>
            </div>
        </div>
    </div>
    <!-- end login template -->
<?php include("layouts/footer.php") ?>
