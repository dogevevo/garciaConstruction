<?php @session_start();?>
<?php include('php/text.php')?>
<!DOCTYPE html>
<html lang="en">
<head>

<head>
    <!-- Start Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Buildkon - Construction & Building HTML 5 Template" />
    <meta name="keywords" content="Creative, Digital, multipage, landing, freelancer template" />
    <meta name="author" content="ThemeOri">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title of Site -->
    <title>Buildkon - Construction & Building HTML Template</title>
    <!-- Favicons -->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Magnific CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Mean menu -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <!-- Flaticon -->
    <link rel="stylesheet" href="assets/font/flaticon.css">
    <!-- Space -->
    <link rel="stylesheet" href="assets/css/space.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
    <!-- Preloader start -->
    <div class="theme-loader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <!-- Preloader end -->
    <!-- Header Area Start -->
    <div class="header">
        <!-- top bar start -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 sm-mb-5">
                        <div class="top-left">
                            <ul>
                                <li><a href="<?php echo $PhoneRef?>"><i class="flaticon-telephone"></i><?php echo $Phone?></a>
                                </li>
                                <li><a href="<?php echo $MailRef?>"><i class="flaticon-envelope"></i><?php echo $Mail?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="top-right">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- menu start -->
        <div class="header-menu">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3">
                        <div class="logo">
                            <a href="index.php">
                                <img src="assets/img/logo.png" alt="">
                            </a>
                        </div>
                        <div class="responsive-menu"></div>
                    </div>
                    <div class="col-xl-7 col-lg-9">
                        <div class="main-menu">
                            <ul id="mobilemenu">
                                <li><a href="index.php">Home</a> </li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="services.php">Servicecs</a> </li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="contact.php">Contact</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-12">
                        <div class="menu-right"> <a class="theme-btn" href="contact.php">Quote Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Area End -->