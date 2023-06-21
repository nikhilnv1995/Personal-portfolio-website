<!DOCTYPE html>
<html lang="en">
<head>
    <title>PORTA BOAT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO META TAGS -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:url" content=""/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <meta property="og:image" content=""/>
    <!-- SEO META TAGS -->

    <!-- ICONS ---->
    <link rel="icon" href="" type="image/png" sizes="32X32">
    <!-- ICONS -->

    <!--STYLESHEETS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
          rel="stylesheet">
    <!-- STYLESHEET CDN -->

    <!-- STYLESHEET INTERNAL -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">
    <!-- STYLESHEET INTERNAL -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">


    <!--SCRIPTS CDN -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> -->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!--    slider-price-->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <!--SCRIPTS CDN -->

    <!--SCRIPTS INTERNAL -->
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/script.js"></script>
    <!--SCRIPTS INTERNAL -->

    <!-- RECAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js?render="></script>
    <script>var recptchaKey = ""</script>
    <style>
        .grecaptcha-badge {
            visibility: hidden;
        }
    </style>
    <!-- RECAPTCHA -->


</head>
<body>
<nav class="navbar index navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="assets/img/logo.svg" alt="" class="img-fluid">
        </a>
        <div class="mobile-access d-block d-sm-none">
            <a href="#" data-toggle="modal" data-target="#login" class="sign-in">sign in</a>
            <a class="cart" href="shopping-cart.php"><span>3</span><img src="assets/img/shopping-cart.svg" alt=""
                                                                        class="img-fluid"></a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="active nav-item">
                    <a class="nav-link" href="index.php">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about-us.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products.php">models</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Accessories </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="news.php">news</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <!--                    <li class="nav-item user d-none d-sm-block account">-->
                <li class="nav-item user account">
                    <div class="dropdown account">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="assets/img/user.svg"
                                 alt="">
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#login">My
                                Profile</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#create">My Saved
                                Carts</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#process">My
                                Orders</a>
                            <a class="dropdown-item" href="#">My Favourite Lists</a>
                            <a class="dropdown-item" href="#">Logout</a>
                            <a class="dropdown-item loading" href="#" data-toggle="modal"
                               data-target="#loading">Loading</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#password">Password
                                Reset</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item shop-cart d-none d-sm-block">
                    <a class="nav-link cart" href="shopping-cart.php"><img src="assets/img/shopping-cart.svg"
                                                                           alt=""><span>2</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="search-form">
        <form action="">
            <input type="text" class="form-control" placeholder="Search">
            <button type="submit"><img src="assets/img/search.svg" alt=""></button>
        </form>
    </div>
</nav>

<div class="modal fade log" id="login" tabindex="-1" role="dialog"
     aria-labelledby="consultation-modal"
     style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">LOGIN</h5>
                <p>Get access to your Orders, Wishlist and Recommendations</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="body-inner">
                    <form action="">
                        <input type="text" class="form-control" placeholder="Username">
                        <input type="text" class="form-control" placeholder="Password">
                        <a href="" class="">forgot?</a>
                        <button class="form-control">login</button>
                    </form>
                    <a href="" class="link">New to
                        porta-bote? Create an account</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade log" id="create" tabindex="-1" role="dialog"
     aria-labelledby="consultation-modal"
     style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Account </h5>
                <p>Get access to your Orders, Wishlist and Recommendations</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="body-inner">
                    <form action="">
                        <input type="text" class="form-control" placeholder="Full name">
                        <input type="email" class="form-control" placeholder="Email">
                        <input type="tel" class="form-control" placeholder="Phone">
                        <input type="password" class="form-control" placeholder="Password">
                        <p>Passwords must be at least 6 characters.</p>
                        <button class="form-control">Create Account</button>
                    </form>
                    <h6>Already have an account?
                        <a href="" class="">sign in</a>
                    </h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade log" id="process" tabindex="-1" role="dialog"
     aria-labelledby="consultation-modal"
     style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="process-inner">

                    <h2>01.59</h2>
                    <p>Please Wait</p>
                    <p class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade log" id="loading" tabindex="-1" role="dialog"
     aria-labelledby="consultation-modal"
     style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="process-inner">
                    <!--                    <img src="assets/img/loading.svg" alt="" class="loading">-->
                    <!--                    <p>Please Wait</p>-->
                    <p>Estimating shipping cost</p>
                    <div class="animation-block">
                        <img src="assets/img/boat-new.png" alt="" id="boat">
                    </div>
                    <div class="owl-carousel owl-theme loading-slider">
                        <div class="item">
                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="item">
                            <p class="small">Lorem ipsum dolor sit amet,</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade log" id="password" tabindex="-1" role="dialog"
     aria-labelledby="consultation-modal"
     style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Password reset</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="body-inner">
                    <form action="">
                        <p class="success">New password send to registered mail</p>
                        <p class="error">New password send to registered mail</p>
                        <input type="text" class="form-control" placeholder="Enter your valid email address"
                               required>
                        <button class="form-control" type="submit">send reset link</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>