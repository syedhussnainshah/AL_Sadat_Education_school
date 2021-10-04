<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS FIle Included -->
    <?php include_once 'link.php' ?>
</head>
<body style="margin-left: 0px; margin-top: 0px;">

    <!-- Section 1 Start Here -->
    <section class="py-5 animated-bg">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-5" style="max-width: 500px;">
                    <div class="Login-Form">
                        <h3 class="text-center my-3">Create an Account</h3>
                        <p class="text-center my-3">Already have an account? <a href="login.php"
                                class="text-primarycolor fw-bold">Login</a></p>

                        <form method="POST" action="user_registration.php">
                            <div class="row g-3 mb-4">
                                <div class="col-sm-6 p-0">
                                    <div class="p-1">
                                        <h6>First Name</h6>
                                        <input type="text" name="first_name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6 p-0">
                                    <div class="p-1">
                                        <h6>Last Name</h6>
                                        <input type="text" name="last_name" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h6>Email</h6>
                                <input type="email" name="email" class="form-control">
                            </div>

                            <div class="mb-4">
                                <h6>Password</h6>
                                <input type="password" name="password" class="form-control">
                            </div>

                            <div class="mb-4">
                                <h6>Confirm Password</h6>
                                <input type="password" name="confirm_password" class="form-control">
                            </div>
                            <div class="my-4">
                                <button type="submit" name="submit" class="btn">Sign up</button>
                            </div>

                            <div>
                                <p class="or">Or</p>
                            </div>

                            <div class="text-center">
                                <a href="#" class="facebook-btn">
                                    <i class="fab fa-facebook"></i>
                                    Continue with Facebook
                                </a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section 1 End Here -->

    <!-- JS File included -->
    <?php include_once 'jslink.php' ?>
</body>
</html>