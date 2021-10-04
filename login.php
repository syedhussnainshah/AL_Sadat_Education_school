<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS FIle Included -->
    <?php include_once "link.php"; ?>
</head>
<style>
    :root{
    --primarycolor: #e37f1c;
    --secondarycolor: #457389;
    --tertiarycolor: #b2bb1e;
    --black: #1e1e1e;
    --sidebarwidth: 250px;
    --sidebarcolor: #263544;
    --gray: #bdc3c7;
    --white: #fff;
    --lightgray: #bdc3c7;
    --navbarheight: 50px;
    --lightgray: #EBEEEE;
    
    
    --lightcolor: #c4c7ca;
}
.animated-bg{
    /* background-color: var(--tertiarycolor); */
    animation-name: changingbg;
    animation-iteration-count: infinite;
    animation-duration: 10s;
}
@keyframes changingbg {
    0%{
        background-color: var(--tertiarycolor);
    }
    33%{
        background-color: var(--secondarycolor);
    }
    66%{
        background-color: var(--primarycolor);
    }
    100%{
        background-color: var(--tertiarycolor);
    }
}
.Login-Form{
    background-color: var(--white);
    padding: 30px;
}
.Login-Form h6{
    font-size: 15px;
    color: var(--gray2);
}

.Login-Form button[type=submit]{
    padding: 10px;
    width: 100%;
    border: none;
}

.or{
    text-transform: uppercase;
    text-align: center;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}
.or::before{
    content: '';
    width: 43%;
    height: 1px;
    background-color: var(--lightcolor);
    position: absolute;
    left: 0px;
}
.or::after{
    content: '';
    width: 43%;
    height: 1px;
    background-color: var(--lightcolor);
    position: absolute;
    right: 0px;
}
.facebook-btn{
    background-color: #4267b2;
    color: var(--white) !important;
    padding: 10px;
    font-size: 1rem;
    font-weight: bold;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    letter-spacing: 1px;
    margin: 20px 0px;
}
.facebook-btn:hover, .facebook-btn:visited{
    color: var(--white) !important;
}
.facebook-btn > i{
    color: var(--white);
    font-size: 1.5rem;
    margin-right: 5px;
}
/* ================== Login Page Styling End ================== */


/* Media Quries */

/* Medium devices (tablets, less than 992px) */
@media (min-width: 991.98px) {
   
    /* Sidebar STyling Start */
    body{
        margin-left: var(--sidebarwidth);
    } 
    .offcanvas{
        transform: none;
        visibility: visible !important;
    } 
    .modal-backdrop.show{
        opacity: 0 !important;
    }
    /* Sidebar Styling End */
    
}

/* Small devices (landscape phones, less than 768px) */
@media (max-width: 767.98px) {
    div.dataTables_wrapper div.dataTables_length, div.dataTables_wrapper div.dataTables_filter, div.dataTables_wrapper div.dataTables_info, div.dataTables_wrapper div.dataTables_paginate {
        text-align: center;
        margin: 20px 0px;
    }
}

/* X-Small devices (portrait phones, less than 576px) */
@media (max-width: 575.98px) {
    .box-info{
        border-radius: 10px;
        /* background-color: var(--gray); */
        padding: 10px 0px;
    }
}
</style>
<body style="margin-left: 0px; margin-top: 0px;">

    <!-- Section 1 Start Here -->
    <section class="py-5 animated-bg">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-5 col-xl-4" style="max-width: 500px;">
                    <div class="Login-Form">
                        <h3 class="text-center my-3">Login</h3>
                        <p class="text-center my-3">New to Al Sadat School? <a href="singup.php"
                                class="text-primarycolor fw-bold">Create an account</a></p>

                        <form method="POST" action="user_login.php">
                            <div class="mb-4">
                                <h6>Email</h6>
                                <input type="email" name="email" class="form-control">
                            </div>

                            <div class="mb-4">
                                <h6>Password</h6>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="d-flex justify-content-between flex-wrap">
                                <div class="d-flex justify-content-center align-items-center">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">Remember Me</label>
                                </div>
                                <div>
                                    <a href="#" class="text-primarycolor fw-bold">Forget Password?</a>
                                </div>
                            </div>
                            <div class="my-4">
                                <button type="submit" name="submit" class="btn">Log in</button>
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