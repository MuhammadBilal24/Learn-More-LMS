<?php
$usertype = $this->session->usertype;
$fname = $this->session->fname;
// $batch = $this->session->batch;
// $fname = $this->session->fname;

?>

<?php
if ($usertype == '') {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta fname="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- logout header -->
        <title>LEARNS | LMS</title>

        <!-- Css Files -->
        <link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/css/font-awesome.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/css/flaticon.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/css/slick-slider.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/css/prettyphoto.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/build/mediaelementplayer.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/style.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/css/color.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/css/color-two.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/css/color-three.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/css/color-four.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/css/responsive.css" rel="stylesheet">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
      <script src="<?= base_url() ?>assets/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="<?= base_url() ?>assets/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!--// Main Wrapper \\-->
        <div class="wm-main-wrapper">

            <!--// Header \\-->
            <header id="wm-header" class="wm-header-one">

                <!--// TopStrip \\-->
                <div class="wm-topstrip">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="wm-language">
                                    <ul>
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Urdu</a></li>
                                    </ul>
                                </div>
                                <ul class="wm-stripinfo">
                                    <li><i class="wmicon-location"></i> B-14 Hamdard Sukkur, 65200, Sukkur Sindh</li>
                                    <li><i class="wmicon-technology4"></i> +92 331-2482096</li>
                                    <li><i class="wmicon-clock2"></i> 24/7, 365 Days</li>
                                </ul>
                                <ul class="wm-adminuser-section">
                                    <!-- <li>
                                        <a href="<?= base_url() ?>Contacts">Contact</a>
                                    </li> -->
                                    <li>
                                        <a href="" data-toggle="modal" data-target="#ModalLogin">login</a>
                                    </li>
                                    <li>
                                        <a href="#" class="wm-search-btn" data-toggle="modal" data-target="#ModalSearch"><i class="wmicon-search"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// TopStrip \\-->

                <!--// MainHeader \\-->
                <div class="wm-main-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3"><a href="index-2.html" class="wm-logo"><img src="<?= base_url() ?>assets/images/logo2.png" style="margin-top:-20px ;" alt=""></a></div>
                            <div class="col-md-9">
                                <!--// Navigation \\-->
                                <nav class="navbar navbar-default">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="true">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                        <ul class="nav navbar-nav">
                                            <li class="active"><a href="<?= base_url() ?>Home">Home</a>
                                                <!-- <ul class="wm-dropdown-menu" style="background-color:#f5f5f5 ;">
                                            <li><a href="index-2.html">Education Home V1</a></li>
                                            <li><a href="index-two.html">Education Home V2</a></li>
                                            <li><a href="index-three.html">Education Home V3</a></li>
                                            <li><a href="index-four.html">Education Home V4</a></li>
                                        </ul> -->
                                            </li>
                                            <li><a href="#">courses</a>
                                                <ul class="wm-dropdown-menu" style="background-color:#f5f5f5 ;">
                                                    <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="courses-grid.html">Courses Grid</a></li>
                                                    <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="courses-list.html">Courses List</a></li>
                                                    <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="<?=base_url()?>Dit_course">DIT</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Student Services</a>
                                                <ul class="wm-dropdown-menu" style="background-color:#f5f5f5 ;">
                                                    <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="event-grid.html">Attendence Manual</a></li>
                                                    <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="event-detail.html">Event Detail</a></li>
                                                </ul>
                                            </li>

                                            
                                            <li><a href="contact-us.html">Tutors</a>
                                                <ul class="wm-dropdown-menu" style="background-color:#f5f5f5 ;">
                                                    <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="shop-grid.html">Shop Grid</a></li>
                                                    <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="<?=base_url()?>Civil_course">Civil Engineering</a></li>
                                                    <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="shop-single-product.html">Shop Detail</a></li>
                                                </ul>
                                            </li>
                                            <!-- <li><a href="#">Dashboard</a>
                                                <ul class="wm-dropdown-menu" style="background-color:#f5f5f5 ;">
                                                    <li><a href="dashboard-courses.html">Courses</a></li>
                                                    <li><a href="student-dashboard-favourite.html">Favourite</a></li>
                                                    <li><a href="student-dashboard-my-courses.html">My Courses</a></li>
                                                    <li><a href="student-dashboard-profile.html">Profile Settings</a></li>
                                                    <li><a href="student-dashboard-settings.html">Settings</a></li>
                                                    <li><a href="student-dashboard-statement.html">Statement</a></li>
                                                </ul>
                                            </li> -->
                                            <li class="wm-megamenu-li"><a href="<?= base_url() ?>Contacts">Contact</a>
                                                <ul style="background-color:#f5f5f5 ;" class="wm-megamenu">
                                                    <li class="row">
                                                        <!-- <div class="col-md-2">
                                                            <h4>Professors</h4>
                                                            <ul class="wm-megalist">
                                                                <li><a href="contact-us.html">Contact Us</a></li>
                                                                <li><a href="<?=base_url()?>Ilets_course">ILets</a></li>
                                                                <li><a href="<?=base_url()?>Civil_course">Civil Engineering</a></li>
                                                                <li><a href="shop-grid.html">Shop Grid</a></li>
                                                                <li><a href="shop-single-product.html">Shop Detail</a></li>
                                                            </ul>
                                                        </div> -->
                                                        <div class="col-md-7">
                                                            <h4>About</h4>
                                                            <div class="wm-mega-text">
                                                                <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love.</p>
                                                                <p>If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <h4>Learn More LMS</h4>
                                                            <a href="#" class="wm-thumbnail">
                                                                <img src="<?= base_url() ?>assets/extra-images/mega-menuadd.jpg" alt="" />
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                                <!--// Navigation \\-->
                                <a href="#" class="wm-header-btn">get started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// MainHeader \\-->

            </header>
            <!--// Header \\-->
        <?php
    } else if ($usertype == "Admin") {
        ?>
            <!DOCTYPE html>
            <html lang="en">

            <!--  13:28  -->

            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta fname="viewport" content="width=device-width, initial-scale=1">
                <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
                <title>Admin Portal | LEARNS | LMS</title>

                <!-- Css Files -->
                <link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
                <link href="<?= base_url() ?>assets/css/font-awesome.css" rel="stylesheet">
                <link href="<?= base_url() ?>assets/css/flaticon.css" rel="stylesheet">
                <link href="<?= base_url() ?>assets/css/slick-slider.css" rel="stylesheet">
                <link href="<?= base_url() ?>assets/css/prettyphoto.css" rel="stylesheet">
                <link href="<?= base_url() ?>assets/build/mediaelementplayer.css" rel="stylesheet">
                <link href="<?= base_url() ?>assets/style.css" rel="stylesheet">
                <link href="<?= base_url() ?>assets/css/color.css" rel="stylesheet">
                <link href="<?= base_url() ?>assets/css/color-two.css" rel="stylesheet">
                <link href="<?= base_url() ?>assets/css/color-three.css" rel="stylesheet">
                <link href="<?= base_url() ?>assets/css/color-four.css" rel="stylesheet">
                <link href="<?= base_url() ?>assets/css/responsive.css" rel="stylesheet">


                <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
                <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                <!--[if lt IE 9]>
                <script src="<?= base_url() ?>assets/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="<?= base_url() ?>assets/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                <![endif]-->
            </head>

            <body>
                <!--// Main Wrapper \\-->
                <div class="wm-main-wrapper">

                    <!--// Header \\-->
                    <header id="wm-header" class="wm-header-one">

                        <!--// TopStrip \\-->
                        <div class="wm-topstrip">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wm-language">
                                            <ul>
                                                <li><a href="#">English</a></li>
                                                <li><a href="#">Urdu</a></li>
                                            </ul>
                                        </div>
                                        <ul class="wm-stripinfo">
                                            <li><i class="wmicon-location"></i> B-14 Hamdard Sukkur, 65200, Sukkur Sindh</li>
                                            <li><i class="wmicon-technology4"></i> +92 331-2482096</li>
                                            <li><i class="wmicon-clock2"></i> 24/7, 365 Days</li>
                                        </ul>
                                        <ul class="wm-adminuser-section">
                                            <!-- <li>
                                    <a href="" data-toggle="modal" data-target="#ModalLogin">login</a>
                                </li> -->
                                            <!-- <li>
                                                <a href="<?= base_url() ?>Contacts">Contact</a>
                                            </li> -->
                                            <li>
                                                <div class="dropdown show" style="margin-top:-6px ">
                                                    <a class="btn btn-secondary dropdown-toggle" style="color:white ;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <?= $fname ?> <img src="<?= base_url() ?>assets/images/userlogo2.png" alt="" style="height:30px">
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="width:220px; height:280px; font-size:19px; font-weight:bolder; border:none">

                                                        <li>
                                                            <header>
                                                                <a style="text-align:left;font-size:15px;color:#46629c ">Admin Portal</a>
                                                            </header>
                                                        </li>
                                                        <li><a class="dropdown-item" style="color:black;" href="<?= base_url() ?>Profile">Profile</a></li>
                                                        <li><a class="dropdown-item" style="color:black;" href="<?= base_url() ?>Profile">Dashboard</a></li>
                                                        <li><a class="dropdown-item" style="color:black;" href="<?= base_url() ?>Profile">My Courses</a></li>
                                                        <li><a class="dropdown-item" style="color:black;" href="<?= base_url() ?>Profile">Favourites</a></li>
                                                        <li><a class="dropdown-item" style="color:black;" href="<?= base_url() ?>Settings">Settings</a></li>
                                                        <li><a class="dropdown-item" style="color:black;" href="<?= base_url() ?>Logout_home/logout">logout</a></li>
                                                        <br>
                                                        <li>
                                                            <footer>
                                                                <a style="text-align:center;font-size:12px;color:#46629c ">--- Product By LMS Team ---</a>
                                                            </footer>
                                                        </li>
                                                    </ul>

                                                    <!-- <div class="dropdown-menu"  aria-labelledby="dropdownMenuLink" 
                                    style="width:250px; height:250px; padding: 15px; font-size:19px; font-weight:bold; text-align:center " >
                                    <label for=""></label>  
                                    <a class="dropdown-item" style="color:#46629c; ;" href="#">Dashboard</a><br>
                                        <a class="dropdown-item" style="color:#46629c; ;" href="#">My Courses</a><br>
                                        <a style="color:#46629c; ;"href="student-dashboard-profile.html">Profile Settings</a><br>
                                        <a style="color:#46629c; ;"href="student-dashboard-settings.html">Settings</a><br>
                                        <a style="color:#46629c; ;"href="student-dashboard-favourite.html">Favourite</a><br>
                                        <a class="dropdown-item" style="color:#46629c; ;" href="#">logout</a><br>
                                        <footer style="color:silver;text-align:center;font-size:12px">Product By Lms Services</footer>
                                    </div> -->
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#" class="wm-search-btn" data-toggle="modal" data-target="#ModalSearch"><i class="wmicon-search"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// TopStrip \\-->

                        <!--// MainHeader \\-->
                        <div class="wm-main-header">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3"><a href="index-2.html" class="wm-logo"><img src="<?= base_url() ?>assets/images/logo2.png" style="margin-top:-20px ;" alt=""></a></div>
                                    <div class="col-md-9">
                                        <!--// Navigation \\-->
                                        <nav class="navbar navbar-default" style="margin-left:50px" style="margin-left:50px">
                                            <div class="navbar-header">
                                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="true">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                            </div>
                                            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                                <ul class="nav navbar-nav">
                                                    <li class="active"><a href="<?= base_url() ?>Home">Home</a>
                                                        <!-- <ul class="wm-dropdown-menu" style="background-color:#f5f5f5 ;">
                                            <li><a href="index-2.html">Education Home V1</a></li>
                                            <li><a href="index-two.html">Education Home V2</a></li>
                                            <li><a href="index-three.html">Education Home V3</a></li>
                                            <li><a href="index-four.html">Education Home V4</a></li>
                                        </ul> -->
                                                    </li>
                                                    <li class="wm-megamenu-li"><a href="#">courses</a>
                                                                <ul style="background-color:#f5f5f5 ;" class="wm-megamenu">
                                                                    <li class="row">
                                                                        <div class="col-md-2">
                                                                            <h4>English</h4>
                                                                            <ul class="wm-megalist">
                                                                                <li><a href="<?=base_url()?>Ilets_course">ILets</a></li>
                                                                                <li><a href="<?=base_url()?>Engspeak_course">Speaking Skills</a></li>
                                                                                <li><a href="<?=base_url()?>Engadv_course">Advance English</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h4>Computer</h4>
                                                                            <ul class="wm-megalist">
                                                                                <li><a href="<?=base_url()?>Web_course">Web Development</a></li>
                                                                                <li><a href="<?=base_url()?>Gd_course">Graphic Designing</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h4>Diplomas</h4>
                                                                            <ul class="wm-megalist">
                                                                                <li><a href="<?=base_url()?>Dit_course">DIT</a></li>
                                                                                <li><a href="<?=base_url()?>Civil_course">Civil Engineering</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <a href="#" class="wm-thumbnail">
                                                                                <img src="<?= base_url() ?>assets/extra-images/megamenu-frame.jpg" alt="" />
                                                                            </a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                    <li><a href="#">Student Services</a>
                                                        <ul class="wm-dropdown-menu" style="background-color:#f5f5f5 ;">
                                                            <li><a style="color:black ;" href="event-grid.html">Attendence Manual</a></li>
                                                            <li><a style="color:black ;" href="event-detail.html">Event Detail</a></li>
                                                        </ul>
                                                    </li>

                                                    
                                                    <li><a href="contact-us.html">Tutors</a>
                                                        <ul class="wm-dropdown-menu" style="background-color:#f5f5f5 ;">
                                                            <li><a style="color:black ;" href="shop-grid.html">Shop Grid</a></li>
                                                            <li><a style="color:black ;" href="<?=base_url()?>Civil_course">Civil Engineering</a></li>
                                                            <li><a style="color:black ;" href="shop-single-product.html">Shop Detail</a></li>
                                                        </ul>
                                                    </li>
                                                    <!-- <li><a href="#">Dashboard</a>
                                                        <ul class="wm-dropdown-menu" style="background-color:#f5f5f5 ;">
                                                            <li><a href="dashboard-courses.html">Courses</a></li>
                                                            <li><a href="student-dashboard-favourite.html">Favourite</a></li>
                                                            <li><a href="student-dashboard-my-courses.html">My Courses</a></li>
                                                            <li><a href="student-dashboard-profile.html">Profile Settings</a></li>
                                                            <li><a href="student-dashboard-settings.html">Settings</a></li>
                                                            <li><a href="student-dashboard-statement.html">Statement</a></li>
                                                        </ul>
                                                    </li> -->
                                                    <li class="wm-megamenu-li"><a href="<?= base_url() ?>Contacts">Contact</a>
                                                        <ul style="background-color:#f5f5f5 ;" class="wm-megamenu">
                                                            <li class="row">
                                                                <!-- <div class="col-md-2">
                                                                    <h4>Professors</h4>
                                                                    <ul class="wm-megalist">
                                                                        <li><a href="contact-us.html">Contact Us</a></li>
                                                                        <li><a href="<?=base_url()?>Ilets_course">ILets</a></li>
                                                                        <li><a href="<?=base_url()?>Civil_course">Civil Engineering</a></li>
                                                                        <li><a href="shop-grid.html">Shop Grid</a></li>
                                                                        <li><a href="shop-single-product.html">Shop Detail</a></li>
                                                                    </ul>
                                                                </div> -->
                                                                <div class="col-md-7">
                                                                    <h4>About</h4>
                                                                    <div class="wm-mega-text">
                                                                        <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love.</p>
                                                                        <p>If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <h4>Learn More LMS</h4>
                                                                    <a href="#" class="wm-thumbnail">
                                                                        <img src="<?= base_url() ?>assets/extra-images/mega-menuadd.jpg" alt="" />
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </nav>
                                        <!--// Navigation \\-->
                                        <!-- <a href="<?=base_url()?>User_dashboard" class="wm-header-btn">Dashboard</a> -->
                                        <!-- <div class="wm-header-btn" style="border:none; width:180px;" >
                                        
                                        <ul class="nav navbar-nav">
                                        <li>Admin<img src="<?= base_url() ?>assets/images/userlogo2.png" alt="" style="height:30px">
                                                        <ul class="wm-dropdown-menu" style="background-color:#f5f5f5 ;" >
                                                            <li><a href="dashboard-courses.html">Courses</a></li>
                                                            <li><a href="student-dashboard-favourite.html">Favourite</a></li>
                                                            <li><a href="student-dashboard-my-courses.html">My Courses</a></li>
                                                            <li><a href="student-dashboard-profile.html">Profile Settings</a></li>
                                                            <li><a href="student-dashboard-settings.html">Settings</a></li>
                                                            <li><a href="student-dashboard-statement.html">Statement</a></li>
                                                        </ul>
                                                    </li>
                                        </ul>
                                        </div> -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// MainHeader \\-->

                    </header>
                    <!--// Header \\-->
                <?php
            } else if ($usertype == "Student") {
                ?>
                    <!DOCTYPE html>
                    <html lang="en">

                    <!--  13:28  -->

                    <head>
                        <meta charset="utf-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta fname="viewport" content="width=device-width, initial-scale=1">
                        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
                        <title>Student Portal | LEARNS | LMS</title>

                        <!-- Css Files -->
                        <link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
                        <link href="<?= base_url() ?>assets/css/font-awesome.css" rel="stylesheet">
                        <link href="<?= base_url() ?>assets/css/flaticon.css" rel="stylesheet">
                        <link href="<?= base_url() ?>assets/css/slick-slider.css" rel="stylesheet">
                        <link href="<?= base_url() ?>assets/css/prettyphoto.css" rel="stylesheet">
                        <link href="<?= base_url() ?>assets/build/mediaelementplayer.css" rel="stylesheet">
                        <link href="<?= base_url() ?>assets/style.css" rel="stylesheet">
                        <link href="<?= base_url() ?>assets/css/color.css" rel="stylesheet">
                        <link href="<?= base_url() ?>assets/css/color-two.css" rel="stylesheet">
                        <link href="<?= base_url() ?>assets/css/color-three.css" rel="stylesheet">
                        <link href="<?= base_url() ?>assets/css/color-four.css" rel="stylesheet">
                        <link href="<?= base_url() ?>assets/css/responsive.css" rel="stylesheet">


                        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
                        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                        <!--[if lt IE 9]>
                        <script src="<?= base_url() ?>assets/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                        <script src="<?= base_url() ?>assets/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                        <![endif]-->
                    </head>
                    <body>
                        <div class="wm-main-wrapper">
                        <!--// Header \\-->
                    <header id="wm-header" class="wm-header-one">

                                <!--// TopStrip \\-->
                                <div class="wm-topstrip">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="wm-language">
                                                    <ul>
                                                        <li><a href="#">English</a></li>
                                                        <li><a href="#">Urdu</a></li>
                                                    </ul>
                                                </div>
                                                <ul class="wm-stripinfo">
                                                    <li><i class="wmicon-location"></i> B-14 Hamdard Sukkur, 65200, Sukkur Sindh</li>
                                                    <li><i class="wmicon-technology4"></i> +92 331-2482096</li>
                                                    <li><i class="wmicon-clock2"></i> 24/7, 365 Days</li>
                                                </ul>
                                                <ul class="wm-adminuser-section">
                                                    <!-- <li>
                                    <a href="" data-toggle="modal" data-target="#ModalLogin">login</a>
                                </li> -->
                                                    <!-- <li>
                                                        <a href="<?= base_url() ?>Contacts">Contact</a>
                                                    </li> -->
                                                    <!-- <li style="font-size:23px;color:#688898;font-weight:1 ">|</li> -->
                                                    <li>
                                                        <div class="dropdown show" style="margin-top:-6px ">
                                                            <a style="color:white ;" class="btn btn-secondary dropdown-toggle" style="color:white ;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <?= $fname ?> <img src="<?= base_url() ?>assets/images/userlogo2.png" alt="" style="height:30px">
                                                            </a>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="width:210px; height:260px; font-size:17px; font-weight:bolder; border:none">

                                                                <li>
                                                                    <header>
                                                                        <a style="text-align:left;font-size:15px;color:#46629c ">Student Portal</a>
                                                                    </header>
                                                                </li>
                                                                <li><a class="dropdown-item" style="color:black;" href="<?= base_url() ?>Profile">Profile</a></li>
                                                                <li><a class="dropdown-item" style="color:black;" href="#">Dashboard</a></li>
                                                                <li><a class="dropdown-item" style="color:black;" href="#">My Courses</a></li>
                                                                <li><a class="dropdown-item" style="color:black;" href="#">Favourites</a></li>
                                                                <li><a class="dropdown-item" style="color:black;" href="<?=base_url()?>Settings">Settings</a></li>
                                                                <li><a class="dropdown-item" style="color:black;" href="<?= base_url() ?>Logout_home/logout">logout</a></li>
                                                                <br>
                                                                <li>
                                                                    <footer>
                                                                        <a style="text-align:center;font-size:12px;color:#46629c ">--- Product By LMS Team ---</a>
                                                                    </footer>
                                                                </li>
                                                            </ul>

                                                                                            <!-- <div class="dropdown-menu"  aria-labelledby="dropdownMenuLink" 
                                                                style="width:250px; height:250px; padding: 15px; font-size:19px; font-weight:bold; text-align:center " >
                                                                <label for=""></label>  
                                                                <a class="dropdown-item" style="color:#46629c; ;" href="#">Dashboard</a><br>
                                                                    <a class="dropdown-item" style="color:#46629c; ;" href="#">My Courses</a><br>
                                                                    <a style="color:#46629c; ;"href="student-dashboard-profile.html">Profile Settings</a><br>
                                                                    <a style="color:#46629c; ;"href="student-dashboard-settings.html">Settings</a><br>
                                                                    <a style="color:#46629c; ;"href="student-dashboard-favourite.html">Favourite</a><br>
                                                                    <a class="dropdown-item" style="color:#46629c; ;" href="#">logout</a><br>
                                                                    <footer style="color:silver;text-align:center;font-size:12px">Product By Lms Services</footer>
                                                                </div> -->
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="wm-search-btn" data-toggle="modal" data-target="#ModalSearch"><i class="wmicon-search"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--// TopStrip \\-->

                                <!--// MainHeader \\-->
                                <div class="wm-main-header">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-3"><a href="index-2.html" class="wm-logo"><img src="<?= base_url() ?>assets/images/logo2.png" style="margin-top:-20px ;" alt=""></a></div>
                                            <div class="col-md-9">
                                                <!--// Navigation \\-->
                                                <nav class="navbar navbar-default" style="margin-left:50px">
                                                    <div class="navbar-header">
                                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="true">
                                                            <span class="sr-only">Toggle navigation</span>
                                                            <span class="icon-bar"></span>
                                                            <span class="icon-bar"></span>
                                                            <span class="icon-bar"></span>
                                                        </button>
                                                    </div>
                                                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                                        <ul class="nav navbar-nav">
                                                            <li class="active"><a href="<?= base_url() ?>Home">Home</a>
                                                                
                                                            </li>
                                                            <li class="wm-megamenu-li"><a href="#">courses</a>
                                                                <ul style="background-color:#f5f5f5 ;" class="wm-megamenu">
                                                                    <li class="row">
                                                                        <div class="col-md-2">
                                                                            <h4>English</h4>
                                                                            <ul class="wm-megalist">
                                                                                <li><a href="<?=base_url()?>Ilets_course">ILets</a></li>
                                                                                <li><a href="<?=base_url()?>Engspeak_course">Speaking Skills</a></li>
                                                                                <li><a href="<?=base_url()?>Engadv_course">Advance English</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h4>Computer</h4>
                                                                            <ul class="wm-megalist">
                                                                                <li><a href="<?=base_url()?>Web_course">Web Development</a></li>
                                                                                <li><a href="<?=base_url()?>Gd_course">Graphic Designing</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h4>Diplomas</h4>
                                                                            <ul class="wm-megalist">
                                                                                <li><a href="<?=base_url()?>Dit_course">DIT</a></li>
                                                                                <li><a href="<?=base_url()?>Civil_course">Civil Engineering</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <a href="#" class="wm-thumbnail">
                                                                                <img src="<?= base_url() ?>assets/extra-images/megamenu-frame.jpg" alt="" />
                                                                            </a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#">Student Services</a>
                                                                <ul class="wm-dropdown-menu" style="background-color:#f5f5f5 ;">
                                                                    <li><a style="color:black ;" href="event-grid.html">Attendence Manual</a></li>
                                                                    <li><a style="color:black ;" href="event-detail.html">Library Portal</a></li>
                                                                </ul>
                                                            </li>

                                                            <li><a href="contact-us.html">Tutors</a>
                                                                <ul class="wm-dropdown-menu" style="background-color:#f5f5f5 ;">
                                                                    <li><a style="color:black ;" href="shop-grid.html">English Tutor</a></li>
                                                                    <li><a style="color:black ;" href="<?=base_url()?>Civil_course">General Guider</a></li>
                                                                    <li><a style="color:black ;" href="shop-single-product.html">Video Lectures</a></li>
                                                                </ul>
                                                            </li>
                                                            <!-- <li><a href="#">Dashboard</a>
                                                                <ul class="wm-dropdown-menu" style="background-color:#f5f5f5 ;">
                                                                    <li><a href="dashboard-courses.html">Courses</a></li>
                                                                    <li><a href="student-dashboard-favourite.html">Favourite</a></li>
                                                                    <li><a href="student-dashboard-my-courses.html">My Courses</a></li>
                                                                    <li><a href="student-dashboard-profile.html">Profile Settings</a></li>
                                                                    <li><a href="student-dashboard-settings.html">Settings</a></li>
                                                                    <li><a href="student-dashboard-statement.html">Statement</a></li>
                                                                </ul>
                                                            </li> -->
                                                            <li class="wm-megamenu-li"><a href="<?= base_url() ?>Contacts">Contact</a>
                                                                <ul style="background-color:#f5f5f5 ;" class="wm-megamenu">
                                                                    <li class="row">
                                                                        <!-- <div class="col-md-2">
                                                                            <h4>Professors</h4>
                                                                            <ul class="wm-megalist">
                                                                                <li><a href="contact-us.html">Contact Us</a></li>
                                                                                <li><a href="<?=base_url()?>Ilets_course">ILets</a></li>
                                                                                <li><a href="<?=base_url()?>Civil_course">Civil Engineering</a></li>
                                                                                <li><a href="shop-grid.html">Shop Grid</a></li>
                                                                                <li><a href="shop-single-product.html">Shop Detail</a></li>
                                                                            </ul>
                                                                        </div> -->
                                                                        <div class="col-md-7">
                                                                            <h4>About</h4>
                                                                            <div class="wm-mega-text">
                                                                                <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love.</p>
                                                                                <p>If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <h4>Learn More LMS</h4>
                                                                            <a href="#" class="wm-thumbnail">
                                                                                <img src="<?= base_url() ?>assets/extra-images/mega-menuadd.jpg" alt="" />
                                                                            </a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </nav>
                                                <!--// Navigation \\-->
                                                <a href="<?=base_url()?>User_dashboard" class="wm-header-btn">Dashboard</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--// MainHeader \\-->

                    </header>
                            <!--// Header \\-->
               <!-- Teacher Session Header  -->
            <?php
            } else if ($usertype == "Teacher") {
                ?>
                    <!DOCTYPE html>
                    <html lang="en">

                    <!--  13:28  -->

                    <head>
                        <meta charset="utf-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta fname="viewport" content="width=device-width, initial-scale=1">
                        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
                        <title>Teacher Portal | LEARNS | LMS</title>

                        <!-- Css Files -->
                        <link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
                        <link href="<?= base_url() ?>assets/css/font-awesome.css" rel="stylesheet">
                        <link href="<?= base_url() ?>assets/css/flaticon.css" rel="stylesheet">
                        <link href="<?= base_url() ?>assets/css/slick-slider.css" rel="stylesheet">
                        <link href="<?= base_url() ?>assets/css/prettyphoto.css" rel="stylesheet">
                        <link href="<?= base_url() ?>assets/build/mediaelementplayer.css" rel="stylesheet">
                        <link href="<?= base_url() ?>assets/style.css" rel="stylesheet">
                        <link href="<?= base_url() ?>assets/css/color.css" rel="stylesheet">
                        <link href="<?= base_url() ?>assets/css/color-two.css" rel="stylesheet">
                        <link href="<?= base_url() ?>assets/css/color-three.css" rel="stylesheet">
                        <link href="<?= base_url() ?>assets/css/color-four.css" rel="stylesheet">
                        <link href="<?= base_url() ?>assets/css/responsive.css" rel="stylesheet">


                        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
                        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                        <!--[if lt IE 9]>
                        <script src="<?= base_url() ?>assets/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                        <script src="<?= base_url() ?>assets/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                        <![endif]-->
                    </head>
                    <body>
                        <div class="wm-main-wrapper">
                        <!--// Header \\-->
                    <header id="wm-header" class="wm-header-one">

                                <!--// TopStrip \\-->
                                <div class="wm-topstrip">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="wm-language">
                                                    <ul>
                                                        <li><a href="#">English</a></li>
                                                        <li><a href="#">Urdu</a></li>
                                                    </ul>
                                                </div>
                                                <ul class="wm-stripinfo">
                                                    <li><i class="wmicon-location"></i> B-14 Hamdard Sukkur, 65200, Sukkur Sindh</li>
                                                    <li><i class="wmicon-technology4"></i> +92 331-2482096</li>
                                                    <li><i class="wmicon-clock2"></i> 24/7, 365 Days</li>
                                                </ul>
                                                <ul class="wm-adminuser-section">
                                                    <!-- <li>
                                    <a href="" data-toggle="modal" data-target="#ModalLogin">login</a>
                                </li> -->
                                                    <!-- <li>
                                                        <a href="<?= base_url() ?>Contacts">Contact</a>
                                                    </li> -->
                                                    <!-- <li style="font-size:23px;color:#688898;font-weight:1 ">|</li> -->
                                                    <li>
                                                        <div class="dropdown show" style="margin-top:-6px ">
                                                            <a style="color:white;"  class="btn btn-secondary dropdown-toggle" style="color:white ;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <?=$fname?> <img src="<?= base_url() ?>assets/images/userlogo2.png" alt="" style="height:30px">
                                                            </a>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="width:220px; height:280px; font-size:19px; font-weight:bolder; border:none">

                                                                <li>
                                                                    <header>
                                                                        <a style="text-align:left;font-size:15px;color:#46629c ">Teacher Portal</a>
                                                                    </header>
                                                                </li>
                                                                <li><a class="dropdown-item" style="color:black;" href="<?= base_url() ?>Profile">Profile</a></li>
                                                                <li><a class="dropdown-item" style="color:black;" href="<?= base_url() ?>">Dashboard</a></li>
                                                                <li><a class="dropdown-item" style="color:black;" href="<?= base_url() ?>">My Courses</a></li>
                                                                <li><a class="dropdown-item" style="color:black;" href="<?= base_url() ?>">Favourites</a></li>
                                                                <li><a class="dropdown-item" style="color:black;" href="<?= base_url() ?>Settings">Settings</a></li>
                                                                <li><a class="dropdown-item" style="color:black;" href="<?= base_url() ?>Logout_home/logout">logout</a></li>
                                                                <br>
                                                                <li>
                                                                    <footer>
                                                                        <a style="text-align:center;font-size:12px;color:#46629c ">--- Product By LMS Team ---</a>
                                                                    </footer>
                                                                </li>
                                                            </ul>

                                                                                            <!-- <div class="dropdown-menu"  aria-labelledby="dropdownMenuLink" 
                                                                style="width:250px; height:250px; padding: 15px; font-size:19px; font-weight:bold; text-align:center " >
                                                                <label for=""></label>  
                                                                <a class="dropdown-item" style="color:#46629c; ;" href="#">Dashboard</a><br>
                                                                    <a class="dropdown-item" style="color:#46629c; ;" href="#">My Courses</a><br>
                                                                    <a style="color:#46629c; ;"href="student-dashboard-profile.html">Profile Settings</a><br>
                                                                    <a style="color:#46629c; ;"href="student-dashboard-settings.html">Settings</a><br>
                                                                    <a style="color:#46629c; ;"href="student-dashboard-favourite.html">Favourite</a><br>
                                                                    <a class="dropdown-item" style="color:#46629c; ;" href="#">logout</a><br>
                                                                    <footer style="color:silver;text-align:center;font-size:12px">Product By Lms Services</footer>
                                                                </div> -->
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="wm-search-btn" data-toggle="modal" data-target="#ModalSearch"><i class="wmicon-search"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--// TopStrip \\-->

                                <!--// MainHeader \\-->
                                <div class="wm-main-header">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-3"><a href="index-2.html" class="wm-logo"><img src="<?= base_url() ?>assets/images/logo2.png" style="margin-top:-20px ;" alt=""></a></div>
                                            <div class="col-md-9">
                                                <!--// Navigation \\-->
                                                <nav class="navbar navbar-default" style="margin-left:50px">
                                                    <div class="navbar-header">
                                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="true">
                                                            <span class="sr-only">Toggle navigation</span>
                                                            <span class="icon-bar"></span>
                                                            <span class="icon-bar"></span>
                                                            <span class="icon-bar"></span>
                                                        </button>
                                                    </div>
                                                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                                        <ul class="nav navbar-nav">
                                                            <li class="active"><a href="<?= base_url() ?>Home">Home</a>
                                                                <!-- <ul class="wm-dropdown-menu" style="background-color:#f5f5f5 ;">
                                            <li><a href="index-2.html">Education Home V1</a></li>
                                            <li><a href="index-two.html">Education Home V2</a></li>
                                            <li><a href="index-three.html">Education Home V3</a></li>
                                            <li><a href="index-four.html">Education Home V4</a></li>
                                        </ul> -->
                                                            </li>
                                                            <li class="wm-megamenu-li"><a href="#">courses</a>
                                                                <ul style="background-color:#f5f5f5 ;" class="wm-megamenu">
                                                                    <li class="row">
                                                                        <div class="col-md-2">
                                                                            <h4>English</h4>
                                                                            <ul class="wm-megalist">
                                                                                <li><a href="<?=base_url()?>Ilets_course">ILets</a></li>
                                                                                <li><a href="<?=base_url()?>Engspeak_course">Speaking Skills</a></li>
                                                                                <li><a href="<?=base_url()?>Engadv_course">Advance English</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h4>Computer</h4>
                                                                            <ul class="wm-megalist">
                                                                                <li><a href="<?=base_url()?>Web_course">Web Development</a></li>
                                                                                <li><a href="<?=base_url()?>Gd_course">Graphic Designing</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h4>Diplomas</h4>
                                                                            <ul class="wm-megalist">
                                                                                <li><a href="<?=base_url()?>Dit_course">DIT</a></li>
                                                                                <li><a href="<?=base_url()?>Civil_course">Civil Engineering</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <a href="#" class="wm-thumbnail">
                                                                                <img src="<?= base_url() ?>assets/extra-images/megamenu-frame.jpg" alt="" />
                                                                            </a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#">Student Services</a>
                                                                <ul class="wm-dropdown-menu" style="background-color:#f5f5f5 ;">
                                                                    <li><a href="event-grid.html">Attendence Manual</a></li>
                                                                    <li><a href="event-detail.html">Event Detail</a></li>
                                                                </ul>
                                                            </li>

                                                            <li class="wm-megamenu-li"><a href="#">Pages</a>
                                                                <ul style="background-color:#f5f5f5 ;" class="wm-megamenu">
                                                                    <li class="row">
                                                                        <div class="col-md-2">
                                                                            <h4>Link 1</h4>
                                                                            <ul class="wm-megalist">
                                                                                <li><a href="<?=base_url()?>Ilets_course">ILets</a></li>
                                                                                <li><a href="<?=base_url()?>Engspeak_course">Speaking Skills</a></li>
                                                                                <li><a href="<?=base_url()?>Engadv_course">Advance English</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h4>Link 2</h4>
                                                                            <ul class="wm-megalist">
                                                                                <li><a href="<?=base_url()?>Web_course">Web Development</a></li>
                                                                                <li><a href="<?=base_url()?>Gd_course">Graphic Designing</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <h4>Link 3</h4>
                                                                            <ul class="wm-megalist">
                                                                                <li><a href="<?=base_url()?>Dit_course">DIT</a></li>
                                                                                <li><a href="<?=base_url()?>Civil_course">Civil Engineering</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <a href="#" class="wm-thumbnail">
                                                                                <img src="<?= base_url() ?>assets/extra-images/megamenu-frame.jpg" alt="" />
                                                                            </a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="contact-us.html">Tutors</a>
                                                                <ul class="wm-dropdown-menu" style="background-color:#f5f5f5 ;">
                                                                    <li><a href="shop-grid.html">Shop Grid</a></li>
                                                                    <li><a href="<?=base_url()?>Civil_course">Civil Engineering</a></li>
                                                                    <li><a href="shop-single-product.html">Shop Detail</a></li>
                                                                </ul>
                                                            </li>
                                                            <!-- <li><a href="#">Dashboard</a>
                                                                <ul class="wm-dropdown-menu" style="background-color:#f5f5f5 ;">
                                                                    <li><a href="dashboard-courses.html">Courses</a></li>
                                                                    <li><a href="student-dashboard-favourite.html">Favourite</a></li>
                                                                    <li><a href="student-dashboard-my-courses.html">My Courses</a></li>
                                                                    <li><a href="student-dashboard-profile.html">Profile Settings</a></li>
                                                                    <li><a href="student-dashboard-settings.html">Settings</a></li>
                                                                    <li><a href="student-dashboard-statement.html">Statement</a></li>
                                                                </ul>
                                                            </li> -->
                                                            <li class="wm-megamenu-li"><a href="<?= base_url() ?>Contacts">Contact</a>
                                                                <ul style="background-color:#f5f5f5 ;" class="wm-megamenu">
                                                                    <li class="row">
                                                                        <!-- <div class="col-md-2">
                                                                            <h4>Professors</h4>
                                                                            <ul class="wm-megalist">
                                                                                <li><a href="contact-us.html">Contact Us</a></li>
                                                                                <li><a href="<?=base_url()?>Ilets_course">ILets</a></li>
                                                                                <li><a href="<?=base_url()?>Civil_course">Civil Engineering</a></li>
                                                                                <li><a href="shop-grid.html">Shop Grid</a></li>
                                                                                <li><a href="shop-single-product.html">Shop Detail</a></li>
                                                                            </ul>
                                                                        </div> -->
                                                                        <div class="col-md-7">
                                                                            <h4>About</h4>
                                                                            <div class="wm-mega-text">
                                                                                <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love.</p>
                                                                                <p>If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <h4>Learn More LMS</h4>
                                                                            <a href="#" class="wm-thumbnail">
                                                                                <img src="<?= base_url() ?>assets/extra-images/mega-menuadd.jpg" alt="" />
                                                                            </a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </nav>
                                                <!--// Navigation \\-->
                                                <a href="<?=base_url()?>" class="wm-header-btn">Guider Section</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--// MainHeader \\-->

                    </header>
                            <!--// Header \\--> 
                        
            <?php
                }
                 ?>