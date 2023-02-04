<!-- logout Home -->
<!DOCTYPE html>
<html lang="en">
  
<!--  13:28  -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>LEARNS | LMS</title>

    <!-- Css Files -->
    <link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/font-awesome.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/flaticon.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/slick-slider.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/prettyphoto.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/build/mediaelementplayer.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/style.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/color.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/color-two.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/color-three.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/color-four.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/responsive.css" rel="stylesheet">
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="<?=base_url()?>assets/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="<?=base_url()?>assets/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
                            <div class="wm-language"> <ul> <li><a href="#">English</a></li> <li><a href="#">Urdu</a></li> </ul> </div>
                            <ul class="wm-stripinfo">
                                <li><i class="wmicon-location"></i> B-14 Hamdard Sukkur, 65200, Sukkur Sindh</li>
                                <li><i class="wmicon-technology4"></i> +92 331-2482096</li>
                                <li><i class="wmicon-clock2"></i> 24/7, 365 Days</li>
                            </ul>
                            <ul class="wm-adminuser-section">
                               <!-- <li>
                                    <a href="<?=base_url()?>Contacts">Contact</a>
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
                        <div class="col-md-3"><a href="index-2.html" class="wm-logo">
                            <img src="<?=base_url()?>assets/images/logo2.png" style="margin-top:-20px ;"></a></div>
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
                                    <li class="active"><a href="<?=base_url()?>Home">Home</a>
                                        <!-- <ul class="wm-dropdown-menu">
                                            <li><a href="index-2.html">Education Home V1</a></li>
                                            <li><a href="index-two.html">Education Home V2</a></li>
                                            <li><a href="index-three.html">Education Home V3</a></li>
                                            <li><a href="index-four.html">Education Home V4</a></li>
                                        </ul> -->
                                    </li>
                                    <li class="wm-megamenu-li"><a href="#">Courses </a>
                                        <ul class="wm-megamenu">
                                            <li class="row">
                                                <div class="col-md-2">
                                                    <h4>English</h4>
                                                    <ul class="wm-megalist">
                                                        <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="404-page.html">English Speaking</a></li>
                                                        <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="about-us.html">Advance English</a></li>
                                                        <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="blog-grid.html">ILets</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-2">
                                                    <h4>Computer</h4>
                                                    <ul class="wm-megalist">
                                                        <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="ourprofessors.html">Web Development</a></li>
                                                        <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="our-professsors-detail.html">Graphic Designing</a></li>
                                                        <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="typography-elements.html">Andorid Apps</a></li>
                                                        <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="courses-list.html">Adobe XD </a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-2">
                                                    <h4>Diplomas</h4>
                                                    <ul class="wm-megalist">
                                                        <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="courses-detail.html">Civil Engineering </a></li>
                                                        <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="courses-detail.html">Electrical Engineering </a></li>
                                                        <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="contact-us.html">CIT</a></li>
                                                        <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="contact-us.html">DIT</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <a data-toggle="modal" data-target="#exampleModalCenter2" href="#" class="wm-thumbnail">
                                                        <img src="<?=base_url()?>assets/extra-images/megamenu-frame.jpg" alt="" />
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li><a href="" data-toggle="modal" data-target="#exampleModalCenter2">Student Services</a>
                                                <!-- <ul class="wm-dropdown-menu">
                                                    <li><a href="event-grid.html">Attendence Manual</a></li>
                                                    <li><a href="event-detail.html">Event Detail</a></li>
                                                </ul> -->
                                            </li>

                                            
                                            <li><a href="" data-toggle="modal" data-target="#exampleModalCenter2">Tutors</a>
                                                <!-- <ul class="wm-dropdown-menu">
                                                    <li><a href="shop-grid.html">Shop Grid</a></li>
                                                    <li><a href="<?=base_url()?>Civil_course">Civil Engineering</a></li>
                                                    <li><a href="shop-single-product.html">Shop Detail</a></li>
                                                </ul> -->
                                            </li>
                                            
                                    
                                    <!-- <li class="wm-megamenu-li"><a data-toggle="modal" data-target="#exampleModalCenter2" href="#">Pages</a>
                                        <ul class="wm-megamenu">
                                            <li class="row">
                                                <div class="col-md-2">
                                                    <h4 data-toggle="modal" data-target="#exampleModalCenter">Link 1</h4>
                                                    <ul class="wm-megalist">
                                                        <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="404-page.html">404 Error Page</a></li>
                                                        <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="about-us.html">About Us</a></li>
                                                        <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="blog-grid.html">Blog Grid</a></li>
                                                        <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="blog-list.html">Blog List</a></li>
                                                        <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="blog-detail.html">Blog Detail</a></li>
                                                        <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="faq-page.html">Faq Page</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-2">
                                                    <h4>Link 2</h4>
                                                    <ul class="wm-megalist">
                                                        <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="ourprofessors.html">Our Professors</a></li>
                                                        <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="our-professsors-detail.html">Our Professsors Detail</a></li>
                                                        <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="typography-elements.html">Typography Elements</a></li>
                                                        <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="courses-list.html">Courses List</a></li>
                                                        <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="courses-grid.html">Courses Grid</a></li>
                                                        <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="gallery.html">Gallery</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-2">
                                                    <h4>Link 3</h4>
                                                    <ul class="wm-megalist">
                                                        <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="courses-detail.html">Courses Detail</a></li>
                                                        <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="shop-list.html">Shop List</a></li>
                                                        <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="shop-grid.html">Shop Grid</a></li>
                                                        <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="shop-single-product.html">Shop Detail</a></li>
                                                        <li><a data-toggle="modal" data-target="#exampleModalCenter2" href="contact-us.html">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <a data-toggle="modal" data-target="#exampleModalCenter2" href="#" class="wm-thumbnail">
                                                        <img src="<?=base_url()?>assets/extra-images/megamenu-frame.jpg" alt="" />
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li> -->
                                    
                                    <!-- <li ><a href="#">Dashboard</a>
                                        <ul class="wm-dropdown-menu">
                                            <li><a href="dashboard-courses.html">Courses</a></li>
                                            <li><a href="student-dashboard-favourite.html">Favourite</a></li>
                                            <li><a href="student-dashboard-my-courses.html">My Courses</a></li>
                                            <li><a href="student-dashboard-profile.html">Profile Settings</a></li>
                                            <li><a href="student-dashboard-settings.html">Settings</a></li>
                                            <li><a href="student-dashboard-statement.html">Statement</a></li>
                                        </ul>
                                    </li> -->
                                    <li class="wm-megamenu-li"><a href="<?=base_url()?>Contacts">Contact Us</a>
                                        <ul class="wm-megamenu">
                                            <li class="row">
                                                <!-- <div class="col-md-2">
                                                    <h4>Links 1</h4>
                                                    <ul class="wm-megalist">
                                                        <li><a href="contact-us.html">Contact Us</a></li>
                                                        <li><a href="404-page.html">404 Error Page</a></li>
                                                        <li><a href="shop-list.html">Shop List</a></li>
                                                        <li><a href="shop-grid.html">Shop Grid</a></li>
                                                        <li><a href="shop-single-product.html">Shop Detail</a></li>
                                                    </ul>
                                                </div> -->
                                                <div class="col-md-5">
                                                    <h4>Professor</h4>
                                                    <div class="wm-mega-text">
                                                        <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love.</p>
                                                        <p>If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it.</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <h4>Learn More LMS </h4>
                                                    <a href="#" class="wm-thumbnail">
                                                        <img src="<?=base_url()?>assets/extra-images/mega-menuadd.jpg" alt="" />
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

		<!--// Main Banner \\-->
		<div class="wm-main-banner">
            
            <div class="wm-banner-one">
                <div class="wm-banner-one-for">
                    <div class="wm-banner-one-for-layer"> <img src="<?=base_url()?>assets/extra-images/b4.jpg" style="height: 640px;" alt=""> </div>
                    <div class="wm-banner-one-for-layer"> <img src="<?=base_url()?>assets/extra-images/b2.jpg" alt="" style="height: 640px;"> </div>
                    <div class="wm-banner-one-for-layer"> <img src="<?=base_url()?>assets/extra-images/b3.jpg" alt="" style="height: 640px;"> </div>
                    <div class="wm-banner-one-for-layer"> <img src="<?=base_url()?>assets/extra-images/b5.jpg" alt="" style="height: 640px;"> </div>
                </div>
                <div class="wm-banner-one-nav">
                    <div class="wm-banner-one-nav-layer">
                        <h1>International Programmes</h1>
                        <p>The study programmes of the Enroll Campus University are open to people from all nationalities.</p>
                        <a href="#" class="wm-banner-btn">learn more</a>
                    </div>
                    <div class="wm-banner-one-nav-layer">
                        <h1>UA Degree Programmes</h1>
                        <p>We offer companies the opportunity to access the technology and knowledge developed at the  Enroll Campus University.</p>
                        <a href="#" class="wm-banner-btn">know more</a>
                    </div>
                    <div class="wm-banner-one-nav-layer banner-bgcolor">
                        <h1>Research & Business</h1>
                        <p>The scientific community nominates CRISPR System, based on research developed at the UA.</p>
                        <a href="#" class="wm-banner-btn">learn more</a>
                    </div>
                    <div class="wm-banner-one-nav-layer">
                        <h1>International Programmes</h1>
                        <p>The study programmes of the Enroll Campus University are open to people from all nationalities.</p>
                        <a href="#" class="wm-banner-btn">learn more</a>
                    </div>
                </div>
            </div>

		</div>
		<!--// Main Banner \\-->

		<!--// Main Content \\-->
		<div class="wm-main-content">

			<!--// Main Section \\-->
			<div class="wm-main-section">
				<div class="container">
					<div class="row">
						
						<div class="col-md-4">
							<div class="wm-search-course">
                                <h3 class="wm-short-title wm-color">Find Your Course</h3>
                                <p>Fill in the form below to find your course:</p>
                                <form>
                                    <ul>
                                        <li>
                                            <div class="wm-radio">
                                                <div class="wm-radio-partition">
                                                    <input id="male" type="radio" name="gender" value="male">
                                                    <label for="male">by ID</label>
                                                </div>
                                                <div class="wm-radio-partition">
                                                    <input id="female" type="radio" name="gender" value="female">
                                                    <label for="female">by name</label>
                                                </div>
                                            </div>
                                        </li>
                                        <li> <input type="text" value="Course Name" onblur="if(this.value == '') { this.value ='Course Name'; }" onfocus="if(this.value =='Course Name') { this.value = ''; }"> <i class="wmicon-search"></i> </li>
                                        <li>
                                            <div class="wm-apply-select">
                                                <select>
                                                    <option>Category</option>
                                                    <option>Category</option>
                                                    <option>Category</option>
                                                    <option>Category</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li> <input type="submit" value="Search course"> </li>
                                    </ul>
                                </form>
                            </div>
						</div>
                        <div class="col-md-8">
                            <div class="wm-service wm-box-service">
                                <ul>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-suitcase"></i>
                                            <h6><a href="#">Business</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-money"></i>
                                            <h6><a href="#">Economics</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-school"></i>
                                            <h6><a href="#">Math</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-science"></i>
                                            <h6><a href="#">Science</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-computer"></i>
                                            <h6><a href="#">Computing</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-technology3"></i>
                                            <h6><a href="#">Web Design</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-web3"></i>
                                            <h6><a href="#">Development</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-box-service-wrap wm-bgcolor">
                                            <i class="wmicon-shape"></i>
                                            <h6><a href="#">Biology</a></h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

					</div>
				</div>
			</div>
			<!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section wm-courses-popular-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="wm-fancy-title"> <h2>Popular <span>Courses</span></h2> </div>
                            <div class="wm-courses wm-courses-popular">
                                <ul class="row">
                                    <li class="col-md-3">
                                        <div class="wm-courses-popular-wrap">
                                            <figure> <a href="#"><img src="<?=base_url()?>assets/extra-images/papular-courses-1.jpg" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                                <figcaption>
                                                    <img src="<?=base_url()?>assets/extra-images/papular-courses-thumb-1.jpg" alt="">
                                                    <h6><a href="#">Shelly T. Forrester</a></h6>
                                                </figcaption>
                                            </figure>
                                            <div class="wm-popular-courses-text">
                                                <h6><a href="#">Advanced Architectural Research</a></h6>
                                                <div class="wm-courses-price"> <span>$32</span> </div>
                                                <ul>
                                                    <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 342</a></li>
                                                    <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 10</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <div class="wm-courses-popular-wrap">
                                            <figure> <a href="#"><img src="<?=base_url()?>assets/extra-images/papular-courses-2.jpg" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                                <figcaption>
                                                    <img src="<?=base_url()?>assets/extra-images/papular-courses-thumb-2.jpg" alt="">
                                                    <h6><a href="#">Sam K. Harrington</a></h6>
                                                </figcaption>
                                            </figure>
                                            <div class="wm-popular-courses-text">
                                                <h6><a href="#">Advanced Landscape & Urbanism</a></h6>
                                                <div class="wm-courses-price"> <span>Free</span> </div>
                                                <ul>
                                                    <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 438</a></li>
                                                    <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 28</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <div class="wm-courses-popular-wrap">
                                            <figure> <a href="#"><img src="<?=base_url()?>assets/extra-images/papular-courses-3.jpg" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                                <figcaption>
                                                    <img src="<?=base_url()?>assets/extra-images/papular-courses-thumb-3.jpg" alt="">
                                                    <h6><a href="#">Sara A. Shirley</a></h6>
                                                </figcaption>
                                            </figure>
                                            <div class="wm-popular-courses-text">
                                                <h6><a href="#">Transdisciplinary Design</a></h6>
                                                <div class="wm-courses-price"> <span>$79</span> </div>
                                                <ul>
                                                    <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 309</a></li>
                                                    <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 19</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <div class="wm-courses-popular-wrap">
                                            <figure> <a href="#"><img src="<?=base_url()?>assets/extra-images/papular-courses-4.jpg" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                                <figcaption>
                                                    <img src="<?=base_url()?>assets/extra-images/papular-courses-thumb-4.jpg" alt="">
                                                    <h6><a href="#">Julius M. Lepage</a></h6>
                                                </figcaption>
                                            </figure>
                                            <div class="wm-popular-courses-text">
                                                <h6><a href="#">Financial Information Systems</a></h6>
                                                <div class="wm-courses-price"> <span>$50</span> </div>
                                                <ul>
                                                    <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 298</a></li>
                                                    <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 11</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <!-- <div class="wm-main-section wm-whychooseus-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-8">
                            <div class="whychooseus-list">
                                <div class="wm-fancy-title"> <h2>Why <span>Choose Us</span></h2> </div>
                                <ul class="row">
                                    <li class="col-md-4">
                                        <span>209</span>
                                        <h6>of our trainees have got a prestigious job</h6>
                                    </li>
                                    <li class="col-md-4">
                                        <span>91%</span>
                                        <h6>students have established successful business</h6>
                                    </li>
                                    <li class="col-md-4">
                                        <span>35%</span>
                                        <h6>have already earned their first million</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wm-questions-studying">
                                <img src="<?=base_url()?>assets/extra-images/ask-questoin-bg.png" alt="">
                                <h3 class="wm-color">Questions about studying with us?</h3>
                                <p>We have a team of student advisers & officers to answer any questions:</p>
                                <a class="wm-banner-btn" href="#">ask us now</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div> -->
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section wm-learn-listing-full" style="margin-top:-90px ;">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="wm-fancy-title"> <h2>You Can <span>Learn</span></h2> </div>
                            <div class="wm-learn-listing">
                                <ul class="row">
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="<?=base_url()?>assets/extra-images/learn-listing-1.png" alt=""></a>
                                            <figcaption>
                                                <h2>Research</h2>
                                                <a href="#" class="wm-banner-btn">Read More</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="<?=base_url()?>assets/extra-images/learn-listing-2.png" alt=""></a>
                                            <figcaption>
                                                <h2>Academics</h2>
                                                <a href="#" class="wm-banner-btn">Read More</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="<?=base_url()?>assets/extra-images/learn-listing-3.png" alt=""></a>
                                            <figcaption>
                                                <h2>Admissions</h2>
                                                <a href="#" class="wm-banner-btn">Read More</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="<?=base_url()?>assets/extra-images/learn-listing-4.png" alt=""></a>
                                            <figcaption>
                                                <h2>Student Life</h2>
                                                <a href="#" class="wm-banner-btn">Read More</a>
                                            </figcaption>
                                        </figure>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
            <div class="wm-main-section wm-upcoming-event-slider-full" style="margin-top:-60px ;">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                        <div class="wm-fancy-title"> <h2>Education <span>Updates</span></h2> </div>
                            <div class="wm-upcoming-event-slider">
                                <div class="wm-upcoming-event-layer">
                                    <div class="wm-banner-addswrap">
                                        <div class="wm-banner-adds-inner">
                                            <time datetime="2008-02-14 20:00"><i class="wmicon-time2"></i> 24 April, 2016</time>
                                            <h2>Convocation Recital</h2>
                                            <p>We are pleased to offer a live-stream of this concert. The concert will not be archived for future viewing.</p>
                                        </div>
                                        <span>3220 Terry Lane Orlando, FL 32801</span>
                                        <div class="wm-banner-adds-inner"> <a href="#" class="wm-classic-button wm-bgcolor-two" style="background-color:#B99663 ; ">See Event</a> </div>
                                    </div>
                                </div>
                                <div class="wm-upcoming-event-layer">
                                    <div class="wm-banner-addswrap">
                                        <div class="wm-banner-adds-inner">
                                            <time datetime="2008-02-14 20:00"><i class="wmicon-time2"></i> 22 April, 2016</time>
                                            <h2>Percussion Ensemble</h2>
                                            <p>Performing contemporary works for percussion and marimba ensemble with a diverse array.</p>
                                        </div>
                                        <span>3198 Hill Street Wapakoneta, OH 45895</span>
                                        <div class="wm-banner-adds-inner"> <a href="#" class="wm-classic-button wm-bgcolor-two" style="background-color:#B99663 ;">See Event</a> </div>
                                    </div>
                                </div>
                                <div class="wm-upcoming-event-layer">
                                    <div class="wm-banner-addswrap">
                                        <div class="wm-banner-adds-inner">
                                            <time datetime="2008-02-14 20:00"><i class="wmicon-time2"></i> 10 April, 2016</time>
                                            <h2>Dean's Showcase Event</h2>
                                            <p>Music students who've been selected by faculty to participate in the Dean's Showcase.</p>
                                        </div>
                                        <span>2013 Webster Street Woodbridge, NJ 07095</span>
                                        <div class="wm-banner-adds-inner"> <a href="#" class="wm-classic-button wm-bgcolor-two" style="background-color:#B99663 ;">See Event</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
            <!-- <div class="wm-main-section wm-latestevents-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-9 wm-top-spacer">
                            <h2 class="wm-simple-title">Our Latest Events</h2>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="wm-event-latest-slider">
                                        <div class="wm-event-latest-layer">
                                            <h6 class="wm-color">Enjoy the best experience for you with the choice of our campus - a truly international university campus in Barcelona.</h6>
                                            <a href="#" class="wm-banner-btn">about us</a>
                                        </div>
                                        <div class="wm-event-latest-layer">
                                            <h6 class="wm-color">Enjoy the best experience for you with the choice of our campus - a truly international university campus in Barcelona.</h6>
                                            <a href="#" class="wm-banner-btn">about us</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="wm-event wm-latest-event">
                                        <ul class="row">
                                            <li class="col-md-12">
                                                <figure><a href="#"><img src="<?=base_url()?>assets/extra-images/latest-event-1.png" alt=""></a></figure>
                                                <div class="wm-latest-event-text">
                                                    <h6><a href="#" class="wm-color">Out of This World: The Family Fun Day</a></h6>
                                                    <time datetime="2008-02-14 20:00">21/04/2016</time>
                                                    <p>Join us for outer-space themed games, prizes, science & talks about careers in the UK.</p>
                                                    <a href="#" class="wm-banner-btn">check event</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="wm-event wm-latest-event">
                                        <ul class="row">
                                            <li class="col-md-12">
                                                <figure><a href="#"><img src="<?=base_url()?>assets/extra-images/latest-event-2.png" alt=""></a></figure>
                                                <div class="wm-latest-event-text">
                                                    <h6><a href="#" class="wm-color">Shakespeare at Balliol in those five acts</a></h6>
                                                    <time datetime="2008-02-14 20:00">19/04/2016</time>
                                                    <p>A.C. Bradley and J.C. Maxwell get down to serious criticism; another Balliol writer launches the.</p>
                                                    <a href="#" class="wm-banner-btn">check event</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="wm-counter wm-counter-simple">
                                <ul class="row">
                                    <li class="col-md-12">
                                        <span class="word-count">5</span>
                                        <h6>th best University in Europe (Youth Inc. 2015 ranking)</h6>
                                    </li>
                                    <li class="col-md-12">
                                        <span class="word-count">68</span>
                                        <h6>% International students especially from Asia, Africa & Europe</h6>
                                    </li>
                                    <li class="col-md-12">
                                        <span class="word-count">91</span>
                                        <h6>Student Nationalities</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div> -->
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <!-- <div class="wm-main-section wm-testimonial-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="wm-fancy-title"> <h2>What <span>Clients Say</span></h2> <p>Don't take our word for it, see what our awesome clients say.</p> </div>
                            <div class="wm-testimonial-slider">
                                <div class="wm-testimonial-slider-wrap">
                                    <p>I chose them because it gave me flexibility. I was working full-time at the same time I was studying, so the OU gave me that flexibility. Also my Dad, I’m Danish of origin.</p>
                                    <figure>
                                        <a href="#" class="wm-testimonial-thumb"><img src="<?=base_url()?>assets/extra-images/testimonial-thumb-1.png" alt=""></a>
                                        <figcaption> <h5><a href="#">Priya E. Abraham</a></h5> <span>Paris, France</span> </figcaption>
                                    </figure>
                                </div>
                                <div class="wm-testimonial-slider-wrap">
                                    <p>After completing the MBA study, I had the opportunity to join one of the leading business schools in the UK in the role of faculty member and senior consultant. I suppose without the MBA it would have been difficult to make that career step. The biggest challenge in studying with them.</p>
                                    <figure>
                                        <a href="#" class="wm-testimonial-thumb"><img src="<?=base_url()?>assets/extra-images/testimonial-thumb-2.png" alt=""></a>
                                        <figcaption> <h5><a href="#">Priya E. Abraham</a></h5> <span>Paris, France</span> </figcaption>
                                    </figure>
                                </div>
                                <div class="wm-testimonial-slider-wrap">
                                    <p>I chose them because it gave me flexibility. I was working full-time at the same time I was studying, so the OU gave me that flexibility. Also my Dad, I’m Danish of origin.</p>
                                    <figure>
                                        <a href="#" class="wm-testimonial-thumb"><img src="<?=base_url()?>assets/extra-images/testimonial-thumb-1.png" alt=""></a>
                                        <figcaption> <h5><a href="#">Priya E. Abraham</a></h5> <span>Paris, France</span> </figcaption>
                                    </figure>
                                </div>
                                <div class="wm-testimonial-slider-wrap">
                                    <p>After completing the MBA study, I had the opportunity to join one of the leading business schools in the UK in the role of faculty member and senior consultant. I suppose without the MBA it would have been difficult to make that career step. The biggest challenge in studying with them.</p>
                                    <figure>
                                        <a href="#" class="wm-testimonial-thumb"><img src="<?=base_url()?>assets/extra-images/testimonial-thumb-2.png" alt=""></a>
                                        <figcaption> <h5><a href="#">Priya E. Abraham</a></h5> <span>Paris, France</span> </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div> -->
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <!-- <div class="wm-main-section wm-ourhistory-full">
                <span class="wm-light-transparent"></span>
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-5">
                            <div class="wm-history-list">
                                <h2>Our History</h2>
                                <ul>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2016</time>
                                        <span>Released the Arctic Collection the Perennial Collection of handknotted luxury area rugs.</span>
                                    </li>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2015</time>
                                        <span>Installed our first custom floorcovering for a museum at the Aga Khan Museum in Toronto</span>
                                    </li>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2014</time>
                                        <span>Designed our first wallcovering for all these healthcare sector at the Toronto Centre.</span>
                                    </li>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2013</time>
                                        <span>Celebrated 25 years in business with “The Art Day Project” – a partnership.</span>
                                    </li>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2016</time>
                                        <span>Released the Arctic Collection the Perennial Collection of handknotted luxury area rugs.</span>
                                    </li>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2015</time>
                                        <span>Installed our first custom floorcovering for a museum at the Aga Khan Museum in Toronto</span>
                                    </li>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2014</time>
                                        <span>Designed our first wallcovering for all these healthcare sector at the Toronto Centre.</span>
                                    </li>
                                    <li>
                                        <time datetime="2008-02-14 20:00">2013</time>
                                        <span>Celebrated 25 years in business with “The Art Day Project” – a partnership.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="wm-subscribe-form">
                                <h2>Still not convinced? We can help you!</h2>
                                <p>Fill out the form below and we will contact you.</p>
                                <form>
                                    <input type="text" value="Name:" onblur="if(this.value == '') { this.value ='Name:'; }" onfocus="if(this.value =='Name:') { this.value = ''; }">
                                    <input type="email" value="E-mail:" onblur="if(this.value == '') { this.value ='E-mail:'; }" onfocus="if(this.value =='E-mail:') { this.value = ''; }">
                                    <input type="submit" value="Get Advice">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div> -->
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <!-- <div class="wm-main-section wm-news-grid-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="wm-fancy-title"> <h2>Blog <span>News</span></h2> <p>We bring you all the useful information of the University's Community</p> </div>
                            <div class="wm-news wm-news-grid">
                                <ul class="row">
                                    <li class="col-md-4">
                                        <figure>
                                            <a href="#"><img src="<?=base_url()?>assets/extra-images/news-grid-1.png" alt=""></a>
                                            <figcaption class="wm-bgcolor">
                                                <img src="<?=base_url()?>assets/extra-images/news-grid-thumb-1.png" alt="">
                                                <h6>Posted by: <a href="#">Sam K. Harrington</a></h6>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-newsgrid-text">
                                            <ul class="wm-post-options">
                                                <li>7/4/2016</li>
                                                <li><a href="#"><i class="fa fa-comments-o"></i> 12 comments</a></li>
                                                <li><a href="#"><i class="wmicon-folder2"></i> admission</a></li>
                                            </ul>
                                            <h5><a href="#" class="wm-color">Seven UK business schools make the Top 10</a></h5>
                                            <p>The largest-ever QS Distance Online MBA Rankings have been released by higher and business education analysts QS.</p>
                                            <a class="wm-banner-btn" href="#">read article</a>
                                        </div>
                                    </li>
                                    <li class="col-md-4">
                                        <figure>
                                            <a href="#"><img src="<?=base_url()?>assets/extra-images/news-grid-2.png" alt=""></a>
                                            <figcaption class="wm-bgcolor">
                                                <img src="<?=base_url()?>assets/extra-images/news-grid-thumb-2.png" alt="">
                                                <h6>Posted by: <a href="#">Wanda R. Teixeira</a></h6>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-newsgrid-text">
                                            <ul class="wm-post-options">
                                                <li>6/4/2016</li>
                                                <li><a href="#"><i class="fa fa-comments-o"></i> 21 comments</a></li>
                                                <li><a href="#"><i class="wmicon-folder2"></i> business</a></li>
                                            </ul>
                                            <h5><a href="#" class="wm-color">The University Business School centre of excellence</a></h5>
                                            <p>The University has announced the launch of its first free online course as part.  These individuals or groups can more effectively.</p>
                                            <a class="wm-banner-btn" href="#">read article</a>
                                        </div>
                                    </li>
                                    <li class="col-md-4">
                                        <figure>
                                            <a href="#"><img src="<?=base_url()?>assets/extra-images/news-grid-3.png" alt=""></a>
                                            <figcaption class="wm-bgcolor">
                                                <img src="<?=base_url()?>assets/extra-images/news-grid-thumb-3.png" alt="">
                                                <h6>Posted by: <a href="#">Marvin P. Sanchez</a></h6>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-newsgrid-text">
                                            <ul class="wm-post-options">
                                                <li>5/4/2016</li>
                                                <li><a href="#"><i class="fa fa-comments-o"></i> 18 comments</a></li>
                                                <li><a href="#"><i class="wmicon-folder2"></i> students</a></li>
                                            </ul>
                                            <h5><a href="#" class="wm-color">Our research could slash energy bills in Milton</a></h5>
                                            <p>The University is developing the UK’s first community based website that will allow people in Milton Keynes.</p>
                                            <a class="wm-banner-btn" href="#">read article</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div> -->
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="wm-simple-section-title wm-partners-title"> <h2>Affilated<span> Universities</span></h2> </div>
                            <div class="wm-partners-slider gallery">
                                <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/university-partners-1.png"> <img src="<?=base_url()?>assets/extra-images/university-partners-1.png" alt=""> </a> </div>
                                <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/university-partners-2.png"> <img src="<?=base_url()?>assets/extra-images/university-partners-2.png" alt=""> </a> </div>
                                <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/university-partners-3.png"> <img src="<?=base_url()?>assets/extra-images/university-partners-3.png" alt=""> </a> </div>
                                <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/university-partners-4.png"> <img src="<?=base_url()?>assets/extra-images/university-partners-4.png" alt=""> </a> </div>
                                <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/university-partners-5.png"> <img src="<?=base_url()?>assets/extra-images/university-partners-5.png" alt=""> </a> </div>
                                <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/university-partners-6.png"> <img src="<?=base_url()?>assets/extra-images/university-partners-6.png" alt=""> </a> </div>
                                <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/university-partners-1.png"> <img src="<?=base_url()?>assets/extra-images/university-partners-1.png" alt=""> </a> </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <!-- <div class="wm-main-section wm-contact-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            
                            <div class="wm-contact-tab">

                              
                              <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" aria-controls="home" data-toggle="tab">Contact Us</a></li>
                                <li><a href="#profile" aria-controls="profile" data-toggle="tab">Information Details</a></li>
                              </ul>

                              <div class="tab-content">
                                <div class="tab-pane active" id="home">
                                    <div class="row">
                                        <div class="col-md-4"> <div class="wm-map"> <div id="map"></div> </div> </div>
                                        <div class="col-md-8">
                                            <div class="wm-contact-form">
                                                <span>Talk To Us Today</span>
                                                <form>
                                                    <ul>
                                                        <li>
                                                            <i class="wmicon-black"></i>
                                                            <input type="text" value="Name" onblur="if(this.value == '') { this.value ='Name'; }" onfocus="if(this.value =='Name') { this.value = ''; }">
                                                        </li>
                                                        <li>
                                                            <i class="wmicon-symbol3"></i>
                                                            <input type="text" value="E-mail" onblur="if(this.value == '') { this.value ='E-mail'; }" onfocus="if(this.value =='E-mail') { this.value = ''; }">
                                                        </li>
                                                        <li>
                                                            <i class="wmicon-technology4"></i>
                                                            <input type="text" value="Phone" onblur="if(this.value == '') { this.value ='Phone'; }" onfocus="if(this.value =='Phone') { this.value = ''; }">
                                                        </li>
                                                        <li>
                                                            <i class="wmicon-web2"></i>
                                                            <textarea placeholder="Message"></textarea>
                                                        </li>
                                                        <li> <input type="submit" value="Send Message"> </li>
                                                    </ul>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="profile">
                                    <span class="wm-contact-title">Contact Info</span>
                                    <div class="wm-contact-service">
                                        <ul class="row">
                                            <li class="col-md-4">
                                                <span class="wm-service-icon"><i class="wmicon-pin"></i></span>
                                                <h5 class="wm-color">Address</h5>
                                                <p>B-14 Hamdard Sukkur, 65200, Sukkur Sindh Pakistan</p>
                                            </li>
                                            <li class="col-md-4">
                                                <span class="wm-service-icon"><i class="wmicon-phone"></i></span>
                                                <h5 class="wm-color">Phone & Fax</h5>
                                                <p> +92 331-2482096 <br> 071-567782</p>
                                            </li>
                                            <li class="col-md-4">
                                                <span class="wm-service-icon"><i class="wmicon-letter"></i></span>
                                                <h5 class="wm-color">E-mail</h5>
                                                <p><a href="mailto:name@email.com">lms@edu.pk.com</a> <a href="mailto:name@email.com">support@lms@edu.pk.com</a></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul class="contact-social-icon">
                                        <li><a href="#"><i class="wm-color wmicon-social5"></i> Facebook</a></li>
                                        <li><a href="#"><i class="wm-color wmicon-social4"></i> Twitter</a></li>
                                        <li><a href="#"><i class="wm-color wmicon-social3"></i> Linkedin</a></li>
                                        <li><a href="#"><i class="wm-color wmicon-vimeo"></i> Vimeo</a></li>
                                    </ul>
                                </div>
                              </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div> -->
            <!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
      <div class="modal-body">
      <div class="wm-modallogin-form wm-login-popup">
                <span class="wm-color">Login to Your Account Or Signup</span>
            </div>
      </div>
      
    </div>
  </div>
</div>

		<!-- Footer Starts-->
        <?php
        include('footer.php');?>
        <!-- Footer Ends -->
       