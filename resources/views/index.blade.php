
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- SITE TITLE -->
    <title>Corporate Template</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('asset1/img/favicon.ico') }}" />
    <!-- BOOTSTRAP CSS-->
    <link href="{{ asset('asset1/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- ALL GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:400,500,600,700&amp;subset=latin-ext" rel="stylesheet">
    <!-- FONT-AWESOME CSS-->
    <link href="{{ asset('asset1/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- OWL-CAROUSEL CSS-->
    <link href="{{ asset('asset1/css/owl.carousel.css') }}" rel="stylesheet">
    <!-- OWL-TRANSITION CSS-->
    <link href="{{ asset('asset1/css/owl.transitions.css') }}" rel="stylesheet">
    <!-- MAGNIFIC-POPUP CSS-->
    <link href="{{ asset('asset1/css/magnific-popup.css') }}" rel="stylesheet">
    <!-- MAIN STYLE CSS -->
    <link href="{{ asset('asset1/css/style.css') }}" rel="stylesheet">
    <!-- RESPONSIVE CSS-->
    <link href="{{ asset('asset1/css/responsive.css') }}" rel="stylesheet">

    <!-- SCRIPTS -->
    <!-- JQUERY -->
    <script src="{{ asset('asset1/js/jquery.min.js') }}"></script>
    <!-- BOOTSTRAP -->
    <script src="{{ asset('asset1/js/bootstrap.min.js') }}"></script>
    <!-- OWL-CAROUSEL -->
    <script src="{{ asset('asset1/js/owl.carousel.min.js') }}"></script>
    <!-- MAGNIFIC-POPUP -->
    <script src="{{ asset('asset1/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- STELLAR -->
    <script src="{{ asset('asset1/js/jquery.stellar.min.js') }}"></script>
    <!-- WOW -->
    <script src="{{ asset('asset1/js/wow.min.js') }}"></script>
    <!-- MAIN -->
    <script src="{{ asset('asset1/js/main.js') }}"></script>

</head>


<body>
    <!-- START PRELOADER -->
    <div class="preloader">
        <div class="status">
            <div class="status-mes"></div>
        </div>
    </div>
    <!-- / END PRELOADER -->

    <!-- START HEADER AREA -->
    <header id="home" class="welcome-hero-area">
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <!-- START LOGO -->
                        <div class="logo">
                            <a href="index.html">Company</a>
                        </div>
                        <!-- END LOGO -->
                    </div>
                    <div class="col-md-9">
                        <!-- START MAIN MENU -->
                        <div class="mainmenu">
                            <div class="navbar navbar-nobg">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a class="smoth-scroll" href="#home">home</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#about">about</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#services">services</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#team">team</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#work">work</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#pricing">pricing</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#blog">blog</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#contact">contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- END MAIN MENU -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER AREA -->

        <!-- START SLIDER AREA -->
        <div class="welcome-slider-area">
            <div id="welcome-slide-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#welcome-slide-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#welcome-slide-carousel" data-slide-to="1"></li>
                    <li data-target="#welcome-slide-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <!-- START SINGLE SLIDE ITEM -->
                    <div class="item active">
                        <div class="single-slide-item slide-1">
                            <div class="single-slide-item-table">
                                <div class="single-slide-item-table-cell">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h2>we are creative agency</h2>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                                    <br/>simply dummy text of the printing and typesetting industry
                                                </p>
                                                <a class="slide-btn smoth-scroll" href="#contact">contact</a>
                                                <a class="slide-btn smoth-scroll" href="#about">about</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SINGLE SLIDE ITEM-->
                    <!-- START SINGLE SLIDE ITEM-->
                    <div class="item">
                        <div class="single-slide-item slide-2">
                            <div class="single-slide-item-table">
                                <div class="single-slide-item-table-cell">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h2>we are creative developer</h2>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                                    <br/>simply dummy text of the printing and typesetting industry
                                                </p>
                                                <a class="slide-btn smoth-scroll" href="#contact">contact</a>
                                                <a class="slide-btn smoth-scroll" href="#about">about</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SINGLE SLIDE ITEM -->
                    <!-- START SINGLE SLIDE ITEM-->
                    <div class="item">
                        <div class="single-slide-item slide-3">
                            <div class="single-slide-item-table">
                                <div class="single-slide-item-table-cell">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h2>we do design & development</h2>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                                    <br/>simply dummy text of the printing and typesetting industry
                                                </p>
                                                <a class="slide-btn smoth-scroll" href="#contact">contact</a>
                                                <a class="slide-btn smoth-scroll" href="#about">about</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SINGLE SLIDE ITEM -->
                    <a class="left welcome-control" href="#welcome-slide-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                    <a class="right welcome-control" href="#welcome-slide-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <!-- END SLIDER AREA -->
    </header>
    <!-- END HEADER AREA -->

    <!-- START ABOUT US AREA -->
    <section id="about" class="about-us-area section-padding">
        <div class="container">
            <div class="row">
                <!-- START SECTION AREA -->
                <div class="col-sm-12">
                    <div class="section-title text-center">
                        <h2>about us</h2>
                        <span></span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed ation Lorem ipsum
                            <br>dolor sit amet.Veniam quis notru exercit.</p>
                    </div>
                </div>
                <!-- END SECTION DESIGN AREA -->
            </div>
            <div class="row">
                <!-- START ABOUT FEATURED -->
                <div class="featured-area text-center">
                    <!-- START SINGLE FEATURED -->
                    <div class="col-md-4 col-sm-4">
                        <div class="single-featured">
                            <i class="fa fa-mobile"></i>
                            <h4>Fully Responsive</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed ation Lorem ipsum</p>
                        </div>
                    </div>
                    <!-- END SINGLE FEATURED -->
                    <!-- START SINGLE FEATURED -->
                    <div class="col-md-4 col-sm-4">
                        <div class="single-featured">
                            <i class="fa fa-code"></i>
                            <h4>clean code</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed ation Lorem ipsum</p>
                        </div>
                    </div>
                    <!-- END SINGLE FEATURED -->
                    <!-- START SINGLE FEATURED -->
                    <div class="col-md-4 col-sm-4">
                        <div class="single-featured">
                            <i class="fa fa-check-square"></i>
                            <h4>Easy To Customize</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed ation Lorem ipsum</p>
                        </div>
                    </div>
                    <!-- END SINGLE FEATURED -->
                </div>
                <!-- END ABOUT FEATURED -->
            </div>
            <!-- END ROW-->
            <div class="col-md-6 col-sm-6">
                <!-- START ABOUT TEXT -->
                <div class="about-text">
                    <h4>welcome to <span>nastro</span></h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentiallyIt has survived not only five centuriesLorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a class="about-btn" href="#">read more</a>
                </div>
                <!-- END ABOUT TEXT -->
            </div>
            <div class="col-md-6 col-sm-6">
                <!-- START OUR EXPERTISE -->
                <div class="our-Expertise">
                    <h4>Our Expertise</h4>
                    <!-- START SINGLE PROGRESS BAR -->
                    <div class="progress-bar-inner">
                        <p class="progress-bar-text">
                            graphic design
                            <span>90%</span>
                        </p>
                        <div class="progress-bar">
                            <span style="transition: width 3s ease 0s; width: 90%;" data-percent="90"></span>
                        </div>
                    </div>
                    <!-- END SINGLE PROGRESS BAR -->
                    <!-- START SINGLE PROGRESS BAR -->
                    <div class="progress-bar-inner">
                        <p class="progress-bar-text">
                            Web design
                            <span>85%</span>
                        </p>
                        <div class="progress-bar">
                            <span style="transition: width 3s ease 0s; width: 85%;" data-percent="85"></span>
                        </div>
                    </div>
                    <!-- END SINGLE PROGRESS BAR -->
                    <!-- START SINGLE PROGRESS BAR -->
                    <div class="progress-bar-inner">
                        <p class="progress-bar-text">
                            development
                            <span>90%</span>
                        </p>
                        <div class="progress-bar">
                            <span style="transition: width 3s ease 0s; width: 90%;" data-percent="90"></span>
                        </div>
                    </div>
                    <!-- END SINGLE PROGRESS BAR -->
                    <!-- START SINGLE PROGRESS BAR -->
                    <div class="progress-bar-inner">
                        <p class="progress-bar-text">
                            wordpress
                            <span>95%</span>
                        </p>
                        <div class="progress-bar">
                            <span style="transition: width 3s ease 0s; width: 95%;" data-percent="95"></span>
                        </div>
                    </div>
                    <!-- END SINGLE PROGRESS BAR -->
                    <!-- START SINGLE PROGRESS BAR -->
                    <div class="progress-bar-inner">
                        <p class="progress-bar-text">
                            jQuery
                            <span>80%</span>
                        </p>
                        <div class="progress-bar">
                            <span style="transition: width 3s ease 0s; width: 80%;" data-percent="80"></span>
                        </div>
                    </div>
                    <!-- END SINGLE PROGRESS BAR -->
                </div>
                <!-- END OUR EXPERTISE -->
            </div>
        </div>
    </section>
    <!-- END ABOUT US AREA -->

    <!-- START SERVICES AREA -->
    <section id="services" class="our-services-area gry-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title text-center">
                        <h2>Our Services</h2>
                        <span></span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed ation Lorem ipsum
                            <br>dolor sit amet.Veniam quis notru exercit.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- START SINGLE SERVICE BOX -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service-box">
                        <div class="service-icon">
                            <i class="fa fa-briefcase"></i>
                        </div>
                        <div class="service-content">
                            <h4>Web Design</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquam justo et nibh venenati.</p>
                        </div>
                    </div>
                </div>
                <!-- END SINGLE SERVICE BOX -->
                <!-- START SINGLE SERVICE BOX -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service-box">
                        <div class="service-icon">
                            <i class="fa fa-briefcase"></i>
                        </div>
                        <div class="service-content">
                            <h4>Responsive Desgin</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquam justo et nibh venenati.</p>
                        </div>
                    </div>
                </div>
                <!-- END SINGLE SERVICE BOX -->
                <!-- START SINGLE SERVICE BOX -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service-box">
                        <div class="service-icon">
                            <i class="fa fa-briefcase"></i>
                        </div>
                        <div class="service-content">
                            <h4>Marketing</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquam justo et nibh venenati.</p>
                        </div>
                    </div>
                </div>
                <!-- END SINGLE SERVICE BOX -->
                <!-- START SINGLE SERVICE BOX -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service-box">
                        <div class="service-icon">
                            <i class="fa fa-briefcase"></i>
                        </div>
                        <div class="service-content">
                            <h4>Development</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquam justo et nibh venenati.</p>
                        </div>
                    </div>
                </div>
                <!-- END SINGLE SERVICE BOX -->
                <!-- START SINGLE SERVICE BOX -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service-box">
                        <div class="service-icon">
                            <i class="fa fa-briefcase"></i>
                        </div>
                        <div class="service-content">
                            <h4>Retina Ready</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquam justo et nibh venenati.</p>
                        </div>
                    </div>
                </div>
                <!-- END SINGLE SERVICE BOX -->
                <!-- START SINGLE SERVICE BOX -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service-box">
                        <div class="service-icon">
                            <i class="fa fa-briefcase"></i>
                        </div>
                        <div class="service-content">
                            <h4>Seo Ready</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquam justo et nibh venenati.</p>
                        </div>
                    </div>
                </div>
                <!-- END SINGLE SERVICE BOX -->
            </div>
        </div>
    </section>
    <!-- END SERVICES AREA -->

    <!-- START GET-STRTED AREA -->
    <section class="great-started section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="great-started-text text-center">
                        <h4>We Are Ready to Help You</h4>
                        <h2>Get the Best Solution for Your Business</h2>
                        <a class="get-start-btn smoth-scroll" href="#home">great-started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END GET-STRTED AREA -->

    <!-- START TEAM AREA -->
    <section id="team" class="our-team-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title text-center">
                        <h2>Our team</h2>
                        <span></span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed ation Lorem ipsum
                            <br>dolor sit amet.Veniam quis notru exercit.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- START SINGLE TEAM -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-team text-center">
                        <img src="assets/img/team/1.png" alt="" class="img-responsive" />
                        <h4 class="team-member">John Doe</h4>
                        <h6>web developer</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-skype"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END SINGLE TEAM -->
                <!-- START SINGLE TEAM -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-team text-center">
                        <img src="assets/img/team/2.png" alt="" class="img-responsive" />
                        <h4 class="team-member">Satya Raman</h4>
                        <h6>graphic designer</h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed.</p>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-skype"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END SINGLE TEAM -->
                <!-- START SINGLE TEAM -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-team text-center">
                        <img src="assets/img/team/3.png" alt="" class="img-responsive" />
                        <h4 class="team-member">John Doe</h4>
                        <h6>social marketing </h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed.</p>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-skype"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END SINGLE TEAM -->
            </div>
        </div>
    </section>
    <!-- END TEAM AREA -->

    <!-- START FUN FACT AREA -->
    <section class="project-complete-area">
        <div class="container">
            <div class="row">
                <!-- START SINGLE PROJECT -->
                <div class="col-md-3 col-sm-6">
                    <div class="single-project-complete text-center">
                        <i class="fa fa-thumbs-o-up"></i>
                        <h2 class="counter-number">1200</h2>
                        <h6 class="text-muted">project complete</h6>
                    </div>
                </div>
                <!-- END SINGLE PROJECT -->
                <!-- START SINGLE PROJECT -->
                <div class="col-md-3 col-sm-6">
                    <div class="single-project-complete text-center">
                        <i class="fa fa-users"></i>
                        <h2 class="counter-number">600</h2>
                        <h6 class="text-muted">Happy Customer</h6>
                    </div>
                </div>
                <!-- END SINGLE PROJECT -->
                <!-- START SINGLE PROJECT -->
                <div class="col-md-3 col-sm-6">
                    <div class="single-project-complete text-center">
                        <i class="fa fa-clock-o"></i>
                        <h2 class="counter-number">800</h2>
                        <h6 class="text-muted">Working Hours</h6>
                    </div>
                </div>
                <!-- END SINGLE PROJECT -->
                <!-- START SINGLE PROJECT -->
                <div class="col-md-3 col-sm-6">
                    <div class="single-project-complete text-center">
                        <i class="fa fa-coffee"></i>
                        <h2 class="counter-number">400</h2>
                        <h6 class="text-muted">Cups of Coffee</h6>
                    </div>
                </div>
                <!-- END SINGLE PROJECT -->
            </div>
            <!-- /END ROW -->
        </div>
        <!-- /END CONTAINER -->
    </section>
    <!-- END FUN FACT AREA -->

    <!-- START WORK AREA -->
    <section id="work" class="our-work-area gry-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title text-center">
                        <h2>our awesome work</h2>
                        <span></span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed ation Lorem ipsum
                            <br>dolor sit amet.Veniam quis notru exercit.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <ul class="work">
                    <li class="filter" data-filter="all">all</li>
                    <li class="filter" data-filter=".design">design</li>
                    <li class="filter" data-filter=".development">development</li>
                    <li class="filter" data-filter=".print">print</li>
                    <li class="filter" data-filter=".video">video</li>
                </ul>
            </div>
            <div class="work-inner">
                <div class="row work-post">
                    <!-- START SINGLE WORK ITEM -->
                    <div class="col-md-4 col-sm-4 mix design video">
                        <div class="single-work">
                            <img src="assets/img/work/1.jpg" class="img-responsive" alt="portfolio" />
                            <a href="assets/img/work/1.jpg" class="work-popup">
                                <div class="work-details text-center">
                                    <div class="overlay"></div>
                                    <div class="work-info-text">
                                        <h5>project name</h5>
                                        <p>development</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END SINGLE WORK ITEM -->
                    <!-- START SINGLE WORK ITEM -->
                    <div class="col-md-4 col-sm-4 mix development print">
                        <div class="single-work">
                            <img src="assets/img/work/2.jpg" class="img-responsive" alt="" />
                            <a href="assets/img/work/2.jpg" class="work-popup">
                                <div class="work-details text-center">
                                    <div class="overlay"></div>
                                    <div class="work-info-text">
                                        <h5>project name</h5>
                                        <p>development</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END SINGLE WORK ITEM -->
                    <!-- START SINGLE WORK ITEM -->
                    <div class="col-md-4 col-sm-4 mix video">
                        <div class="single-work">
                            <img src="assets/img/work/3.jpg" class="img-responsive" alt="" />
                            <a href="assets/img/work/3.jpg" class="work-popup">
                                <div class="work-details text-center">
                                    <div class="overlay"></div>
                                    <div class="work-info-text">
                                        <h5>project name</h5>
                                        <p>development</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END SINGLE WORK ITEM -->
                    <!-- START SINGLE WORK ITEM -->
                    <div class="col-md-4 col-sm-4 mix video">
                        <div class="single-work">
                            <img src="assets/img/work/4.jpg" class="img-responsive" alt="" />
                            <a href="assets/img/work/4.jpg" class="work-popup">
                                <div class="work-details text-center">
                                    <div class="overlay"></div>
                                    <div class="work-info-text">
                                        <h5>project name</h5>
                                        <p>development</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END SINGLE WORK ITEM -->
                    <!-- START SINGLE WORK ITEM -->
                    <div class="col-md-4 col-sm-4 mix print">
                        <div class="single-work">
                            <img src="assets/img/work/5.jpg" class="img-responsive" alt="" />
                            <a href="assets/img/work/5.jpg" class="work-popup">
                                <div class="work-details text-center">
                                    <div class="overlay"></div>
                                    <div class="work-info-text">
                                        <h5>project name</h5>
                                        <p>development</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END SINGLE WORK ITEM -->
                    <!-- START SINGLE WORK ITEM -->
                    <div class="col-md-4 col-sm-4 mix design">
                        <div class="single-work">
                            <img src="assets/img/work/6.jpg" class="img-responsive" alt="" />
                            <a href="assets/img/work/6.jpg" class="work-popup">
                                <div class="work-details text-center">
                                    <div class="overlay"></div>
                                    <div class="work-info-text">
                                        <h5>project name</h5>
                                        <p>development</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END SINGLE WORK ITEM -->
                    <!-- START SINGLE WORK ITEM -->
                    <div class="col-md-4 col-sm-4 mix development">
                        <div class="single-work">
                            <img src="assets/img/work/7.jpg" class="img-responsive" alt="" />
                            <a href="assets/img/work/7.jpg" class="work-popup">
                                <div class="work-details text-center">
                                    <div class="overlay"></div>
                                    <div class="work-info-text">
                                        <h5>project name</h5>
                                        <p>development</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END SINGLE WORK ITEM -->
                    <!-- START SINGLE WORK ITEM -->
                    <div class="col-md-4 col-sm-4 mix development design">
                        <div class="single-work">
                            <img src="assets/img/work/8.jpg" class="img-responsive" alt="" />
                            <a href="assets/img/work/8.jpg" class="work-popup">
                                <div class="work-details text-center">
                                    <div class="overlay"></div>
                                    <div class="work-info-text">
                                        <h5>project name</h5>
                                        <p>development</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END SINGLE WORK ITEM -->
                    <!-- START SINGLE WORK ITEM -->
                    <div class="col-md-4 col-sm-4 mix print">
                        <div class="single-work">
                            <img src="assets/img/work/9.jpg" class="img-responsive" alt="" />
                            <a href="assets/img/work/9.jpg" class="work-popup">
                                <div class="work-details text-center">
                                    <div class="overlay"></div>
                                    <div class="work-info-text">
                                        <h5>project name</h5>
                                        <p>development</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END SINGLE WORK ITEM -->
                </div>
            </div>
        </div>
    </section>
    <!-- END WORK AREA -->

    <!-- START WHAT CLIENT SAY AREA -->
    <section class="what-client-say-area section-padding">
        <div class="testimonial-section-inner">
            <div class="container">
                <div class="testimonial-list text-center">
                    <!-- START SINGLE TESTIMONIAL -->
                    <div class="single-testimonial">
                        <div class="testimonial-author">
                            <img src="assets/img/testimonial/1.jpg" alt="" />
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <h5>Mark Zuckerberg</h5>
                        <h6>ceo of facebook</h6>
                    </div>
                    <!-- END SINGLE TESTIMONIAL -->
                    <!-- START SINGLE TESTIMONIAL -->
                    <div class="single-testimonial">
                        <div class="testimonial-author">
                            <img src="assets/img/testimonial/2.jpg" alt="" />
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <h5>Jack Dorsey</h5>
                        <h6>ceo of twitter</h6>
                    </div>
                    <!-- END SINGLE TESTIMONIAL -->
                    <!-- START SINGLE TESTIMONIAL -->
                    <div class="single-testimonial">
                        <div class="testimonial-author">
                            <img src="assets/img/testimonial/3.jpg" alt="" />
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <h5>Sundar Pichai</h5>
                        <h6>ceo of google</h6>
                    </div>
                    <!-- END SINGLE TESTIMONIAL -->
                </div>
            </div>
        </div>
    </section>
    <!-- END WHAT CLIENT SAY AREA -->

    <!-- START PRICEING AREA -->
    <section id="pricing" class="our-pricing-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title text-center">
                        <h2>our pricing plan</h2>
                        <span></span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed ation Lorem ipsum
                            <br>dolor sit amet.Veniam quis notru exercit.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- START SINGLE PRICE BOX -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-price-box text-center">
                        <div class="package-title">starter</div>
                        <div class="package-value">
                            <div class="package-price">
                                <sub>$</sub> 59
                            </div>
                            <div class="plan-month">
                                <span>per month </span>
                            </div>
                        </div>
                        <div class="package-detail">
                            <ul class="list-unstyled">
                                <li>Basic Updates</li>
                                <li>Basic Features</li>
                                <li>Community Support</li>
                                <li>10 domain user</li>
                                <li>sub-domain support</li>
                                <li>10 ftp account</li>
                            </ul>
                            <a class="package-btn" href="#">get started</a>
                        </div>
                    </div>
                </div>
                <!-- END SINGLE PRICE BOX -->
                <!-- START SINGLE PRICE BOX -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-price-box text-center">
                        <div class="package-title">premium</div>
                        <div class="package-value">
                            <div class="package-price">
                                <sub>$</sub> 59
                            </div>
                            <div class="plan-month">
                                <span>per month </span>
                            </div>
                        </div>
                        <div class="package-detail">
                            <ul class="list-unstyled">
                                <li>Basic Updates</li>
                                <li>Basic Features</li>
                                <li>Community Support</li>
                                <li>10 domain user</li>
                                <li>sub-domain support</li>
                                <li>10 ftp account</li>
                            </ul>
                            <a class="package-btn" href="#">get started</a>
                        </div>
                    </div>
                </div>
                <!-- END SINGLE PRICE BOX -->
                <!-- START SINGLE PRICE BOX -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-price-box text-center">
                        <div class="package-title">ultimate</div>
                        <div class="package-value">
                            <div class="package-price">
                                <sub>$</sub> 59
                            </div>
                            <div class="plan-month">
                                <span>per month </span>
                            </div>
                        </div>
                        <div class="package-detail">
                            <ul class="list-unstyled">
                                <li>Basic Updates</li>
                                <li>Basic Features</li>
                                <li>Community Support</li>
                                <li>10 domain user</li>
                                <li>sub-domain support</li>
                                <li>10 ftp account</li>
                            </ul>
                            <a class="package-btn" href="#">get started</a>
                        </div>
                    </div>
                </div>
                <!-- END SINGLE PRICE BOX -->
            </div>
            <!-- END ROW -->
        </div>
        <!-- END CONTAINER -->
    </section>
    <!-- END PRICEING AREA -->

    <!-- START BLOG AREA -->
    <section id="blog" class="our-blog-area gry-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title text-center">
                        <h2>Latest News</h2>
                        <span></span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed ation Lorem ipsum
                            <br>dolor sit amet.Veniam quis notru exercit.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- START SINGLE BLOG POST -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog-post">
                        <div class="single-blog-thumb">
                            <img src="assets/img/blog/1.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="single-post-content">
                            <ul class="post-meta">
                                <li><a href="#"><i class="fa fa-calendar"></i>12 dec 2016</a>
                                </li>
                                <li><a href="#"><i class="fa fa-comment"></i>30 comment</a>
                                </li>
                            </ul>
                            <h4><a href="#">blog post title here</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a class="blog-btn" href="#">read more</a>
                        </div>
                    </div>
                </div>
                <!-- END SINGLE BLOG POST -->
                <!-- START SINGLE BLOG POST -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog-post">
                        <div class="single-blog-thumb">
                            <img src="assets/img/blog/2.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="single-post-content">
                            <ul class="post-meta">
                                <li><a href="#"><i class="fa fa-calendar"></i>12 dec 2016</a>
                                </li>
                                <li><a href="#"><i class="fa fa-comment"></i>30 comment</a>
                                </li>
                            </ul>
                            <h4><a href="#">blog post title here</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a class="blog-btn" href="#">read more</a>
                        </div>
                    </div>
                </div>
                <!-- END SINGLE BLOG POST -->
                <!-- START SINGLE BLOG POST -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog-post">
                        <div class="single-blog-thumb">
                            <img src="assets/img/blog/3.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="single-post-content">
                            <ul class="post-meta">
                                <li><a href="#"><i class="fa fa-calendar"></i>12 dec 2016</a>
                                </li>
                                <li><a href="#"><i class="fa fa-comment"></i>30 comment</a>
                                </li>
                            </ul>
                            <h4><a href="#">blog post title here</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a class="blog-btn" href="#">read more</a>
                        </div>
                    </div>
                </div>
                <!-- END SINGLE BLOG POST -->
            </div>
            <!-- END ROW -->
        </div>
        <!-- END CONTAINER -->
    </section>
    <!-- END BLOG AREA -->

    <!-- START CONTACT US AREA -->
    <section id="contact" class="contact-us-area section-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title text-center">
                        <h2>great in tuch</h2>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 no-padding">
                    <!-- START CONTACT FROM -->
                    <div class="contact-from">
                        <form action="assets/php/contact.php" method="post">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name" required />
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your Email" required />
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="subject" class="form-control" id="subject" placeholder="Enter Your Subject">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea rows="6" name="message" class="form-control" id="message" placeholder="Enter Your Message" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <button>send message</button>
                            </div>
                        </form>
                    </div>
                    <!-- END CONTACT FROM -->
                </div>
                <div class="col-md-6 col-sm-12">
                    <!-- START MAP -->
                    <div class="map"></div>
                    <!-- END MAP -->
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTACT US AREA -->

    <!-- START FOOTER AREA -->
    <div class="footer-area footer-bg section-padding">
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <!-- START SINGLE WIDGET -->
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="footer-logo">about <span>nastro</span></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
                            <div class="footer-social">
                                <ul>
                                    <li><a href=""><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href=""><i class="fa fa-dribbble"></i></a>
                                    </li>
                                    <li><a href=""><i class="fa fa-skype"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END SINGLE WIDGET -->
                    <!-- START SINGLE WIDGET -->
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">recent post</h4>
                            <!-- START SINGLE FOOTER POST -->
                            <div class="single-latest-post">
                                <img src="assets/img/blog/1.jpg" alt="" />
                                <h2>this is latest post</h2>
                                <span>
								<i class="fa fa-calendar"></i>
								November 12, 2016
								</span>
                            </div>
                            <!-- END SINGLE FOOTER POST -->
                            <!-- START SINGLE FOOTER POST -->
                            <div class="single-latest-post">
                                <img src="assets/img/blog/2.jpg" alt="" />
                                <h2>this is latest post</h2>
                                <span>
								<i class="fa fa-calendar"></i>
								November 12, 2016
								</span>
                            </div>
                            <!-- END SINGLE FOOTER POST -->
                            <!-- START SINGLE FOOTER POST -->
                            <div class="single-latest-post">
                                <img src="assets/img/blog/3.jpg" alt="" />
                                <h2>this is latest post</h2>
                                <span>
								<i class="fa fa-calendar"></i>
								November 12, 2016
								</span>
                            </div>
                            <!-- END SINGLE FOOTER POST -->
                            <!-- START SINGLE FOOTER POST -->
                            <div class="single-latest-post">
                                <img src="assets/img/blog/2.jpg" alt="" />
                                <h2>this is latest post</h2>
                                <span>
								<i class="fa fa-calendar"></i>
								November 12, 2016
								</span>
                            </div>
                            <!-- END SINGLE FOOTER POST -->
                        </div>
                    </div>
                    <!-- END SINGLE WIDGET -->
                    <!-- START SINGLE WIDGET -->
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">Quick links</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="#">home</a>
                                    </li>
                                    <li><a href="#">about</a>
                                    </li>
                                    <li><a href="#">service</a>
                                    </li>
                                    <li><a href="#">blog</a>
                                    </li>
                                    <li><a href="#">contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END SINGLE WIDGET -->
                    <!-- START SINGLE WIDGET -->
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="footer-logo">Contact Info</h4>
                            <div class="footer-contact">
                                <!-- START SINGLE CONTACT INFO -->
                                <div class="single-contact-info">
                                    <i class="fa fa-map-marker"></i>
                                    <h6>address</h6>
                                    <p>New Delhi, Delhi</p>
                                </div>
                                <!-- START SINGLE CONTACT INFO -->
                                <!-- END SINGLE CONTACT INFO -->
                                <div class="single-contact-info">
                                    <i class="fa fa-phone"></i>
                                    <h6>phone</h6>
                                    <p>+1266-3333-77</p>
                                </div>
                                <!-- END SINGLE CONTACT INFO -->
                                <!-- START SINGLE CONTACT INFO -->
                                <div class="single-contact-info">
                                    <i class="fa fa-envelope-o"></i>
                                    <h6>Email</h6>
                                    <p>info@your-mail.com</p>
                                </div>
                                <!-- END SINGLE CONTACT INFO -->
                                <div class="single-contact-info">
                                    <i class="fa fa-globe"></i>
                                    <h6>website</h6>
                                    <p>www.sitename.com</p>
                                </div>
                                <!-- END SINGLE CONTACT INFO -->
                            </div>
                        </div>
                    </div>
                    <!-- END SINGLE WIDGET -->
                </div>
                <!-- END ROW -->
            </div>
            <!-- END CONTAINER -->
        </div>
        <!-- END FOOTER TOP -->
    </div>
    <!-- END FOOTER AREA -->
    <!-- START FOOTER BOTTOM AREA -->
    <footer class="footer-bottom-area footer-bottom-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="footer-text text-center">
                        <p class="text-muted"><span>Company</span> &copy;2017 - All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER BOTTOM AREA -->
    <!-- START SCROLL TO UP -->
    <div class="scroll-to-up">
        <div class="scrollup">
            <i class="fa fa-angle-up"></i>
        </div>
    </div>
    <!-- END SCROLL TO UP -->

   <!-- LATEST JQUERY -->
<script src="{{ asset('asset1/js/jquery.min.js') }}"></script>
<!-- BOOTSTRAP JS -->
<script src="{{ asset('asset1/js/bootstrap.min.js') }}"></script>
<!-- OWL CAROUSEL JS -->
<script src="{{ asset('asset1/js/owl.carousel.min.js') }}"></script>
<!-- MIXITUP JS -->
<script src="{{ asset('asset1/js/jquery.mixitup.js') }}"></script>
<!-- EASING JS -->
<script src="{{ asset('asset1/js/jquery.easing.1.3.js') }}"></script>
<!-- COUNTERUP JS -->
<script src="{{ asset('asset1/js/jquery.counterup.min.js') }}"></script>
<!-- MAGNIFICANT JS -->
<script src="{{ asset('asset1/js/jquery.magnific-popup.min.js') }}"></script>
<!-- GOOGLE MAP JS -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
<script src="{{ asset('asset1/js/gmap3.min.js') }}"></script>
<!-- scripts js -->
<script src="{{ asset('asset1/js/scripts.js') }}"></script>

</body>

</html>