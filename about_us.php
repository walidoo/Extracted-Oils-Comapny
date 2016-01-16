<!DOCTYPE html>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>About Us</title>
        <meta name="description" content="">

        <!-- CSS FILES -->
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/x-icon" href="images/favicon-logo.ico" />
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" data-name="skins">
        <link rel="stylesheet" href="css/layout/wide.css" data-name="layout">

        <link rel="stylesheet" type="text/css" href="css/switcher.css" media="screen" />
        <script src="js/jquery-2.1.1.js" type="text/javascript"></script>
        <script src="js/ajax_conn.js" type="text/javascript"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--Start Header-->
        <header id="header">
            <div id="top-bar">
                <div class="container">
                    <div class="row">
                        <!--                    <div class="col-sm-7 hidden-xs top-info">
                                                <span><i class="fa fa-phone"></i>Phone: (123) 456-7890</span>
                                                <span><i class="fa fa-envelope"></i>Email: mail@example.com</span>
                                            </div>-->
                        <!--header bar-->
                        <?php require_once './header_bar.php'; ?>
                        <!--end of header bar-->
                    </div>
                </div>
            </div>
            <!-- LOGO bar -->
            <!-- LOGO bar -->
            <div id="logo-bar" class="clearfix" style="height: 150px;">
                <!-- Container -->
                <div class="container">
                    <div class="row">
                        <!-- Logo / Mobile Menu -->
                        <div class="col-xs-12">
                            <div id="logo">
                                <h1><a href="index.php"><img src="images/logo/logo.png" alt="Extracted Oils" style="margin-left: 450px;" /></a></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container / End -->
            </div>
            <!--LOGO bar / End-->

            <!-- Navigation
    ================================================== -->
            <?php require_once './nav_bar.php'; ?>
            <!--end of navigation-->
        </header>
        <!--End Header-->

        <!--start wrapper-->
        <section class="wrapper">
            <section class="page_head">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h2>About Us</h2>
                            <nav id="breadcrumbs">
                                <ul>
                                    <li>You are here:</li>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about_us.php">About Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content about">
                <div class="container">
                    <div class="row sub_content">
                        <div class="who">
                            <div class="col-lg-6 ">
                                <div class="img-about">
                                    <div id="slider" class="swipe">
                                        <ul class="swipe-wrap">
                                            <li><img src="images/about/1.jpg" alt="" /></li>
                                            <li><img src="images/about/2.jpg" alt="" /></li>
                                            <li><img src="images/about/3.jpg" alt="" /></li>
                                        </ul>
                                        <div class="swipe-navi">
                                            <div class="swipe-left" onclick="mySwipe.prev()"><i class="fa fa-chevron-left"></i></div> 
                                            <div class="swipe-right" onclick="mySwipe.next()"><i class="fa fa-chevron-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 ">
                                <div class="dividerHeading">
                                    <h4><span>Extracted Oils Company</span></h4>
                                </div>
                                <p>Egyptian shareholding company
                                    Capital of the company 200 million pounds
                                    The company's capital number 157200000 shares distributed as follows:</br>
                                    1-Holding Company for Food Industries (H.q.m.m) Egyptian participation rate 26.50%.</br>
                                    2. Egypt Egyptian Insurance Company participation rate 3.73%.</br>
                                    3. Union shareholders workers (Egyptian) 5.01%.</br>
                                    4. Other shareholders (Egyptian) 64.76%.</p></br>

                                <p>The company was established in 1959 according to the president decree no 534 which was published in the official newspaper, issue no 81 on 23rd APRIL 1959 . 
                                    Other companies were in corporated into the firm according to the president decree of nationalization in exectution of law no. 72 in 1963 punlished in the official paper issue no. 177 on 18th August 1963 .</p>

                                <p>According to the resolution made/ passed by the extraordinary general assembly held on 26th feb. 1998, the company was transformed into an Egyptian joint stock company liable to the terms of the law no. 159, issued in 1981 .</p>

                            </div>
                        </div>
                    </div>

                    <div class="row sub_content">
                        <div class="col-lg-12">
                            <div class="dividerHeading">
                                <h4><span>Extracted oils Features</span></h4>
                            </div>

                            <div class="widget widget_tab">
                                <ul id="myTab" class="nav nav-tabs">
                                    <li class="active"><a href="#Popular" data-toggle="tab">Board of Members</a></li>
                                    <li class=""><a href="#Recent" data-toggle="tab">Company's Products</a></li>
                                </ul>

                                <div id="myTabContent" class="tab-content clearfix">
                                    <div class="tab-pane fade active in" id="Popular">
                                        <h3>Board Of Members</h3>

                                        <ul class="list_style circle">
                                            <li><a href="#"><i class="fa fa-check"></i> Chairman of the Board and Managing Director of the company</a></li>
                                            <p style="font-weight: bold;">Eng / Mohamed Nabil Mahmoud Attia</p>
                                            <li><a href="#"><i class="fa fa-check"></i> Managing financial and administrative</a></li>
                                            <p style="font-weight: bold;">Accountant / Omar Saud Ahmed</p>
                                            <li><a href="#"><i class="fa fa-check"></i> Managing Director Technical</a></li>
                                            <p style="font-weight: bold;">Eng / Ibrahim Saad Khatab</p>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="Recent">
                                        <h3>Company's Products</h3>

                                        <ul class="list_style">
                                            <li><a href="#"><i class="fa fa-check"></i> Toilet soap: (Oliva - Pansee -astra - Sofia)</a></li>
                                            <li><a href="#"><i class="fa fa-check"></i> Washing soap: (Domino -dyana)</a></li>
                                            <li><a href="#"><i class="fa fa-check"></i> Margarine: (Haniyeh - Chorting - margarine Sweets)</a></li>
                                            <li><a href="#"><i class="fa fa-check"></i> oils: (Fransawi - Mira - Fayrouz - Safa - Marwah - Mrmora - Maksola)</a></li>
                                            <li><a href="#"><i class="fa fa-check"></i> Animal feed: (fattening feed 14% - integrated feed 11%)</a></li>
                                            <li><a href="#"><i class="fa fa-check"></i> Chickens feed: (Paddy - Nami - Nahi - tasmeen)</a></li>
                                            <li><a href="#"><i class="fa fa-check"></i> Acquistion: (gain seed cotton - soybean)</a></li>
                                            <li><a href="#"><i class="fa fa-check"></i> Industrial cleaners: (a hat trick powder low foam and high foam and liquid)</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- TESTIMONIALS -->

                    </div>

                    <!--start recent work-->
                    <section class="latest_work">
                        <div class="container">
                            <div class="row sub_content">
                                <div class="carousel-intro">
                                    <div class="col-md-12">
                                        <div class="dividerHeading">
                                            <h4><span>Our Products</span></h4>
                                        </div>
                                        <div class="carousel-navi">
                                            <div id="work-prev" class="arrow-left jcarousel-prev"><i class="fa fa-angle-left"></i></div>
                                            <div id="work-next" class="arrow-right jcarousel-next"><i class="fa fa-angle-right"></i></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <div class="jcarousel recent-work-jc">
                                    <ul class="jcarousel-list">
                                        <!-- Recent Work Item -->
                                        <li class="col-sm-3 col-md-3 col-lg-3">
                                            <div class="recent-item">
                                                <figure>
                                                    <div class="touching medium">
                                                        <img src="images/portfolio/portfolio_1.jpg" alt="" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </li>

                                        <!-- Recent Work Item -->
                                        <li class="col-sm-3 col-md-3 col-lg-3">
                                            <div class="recent-item">
                                                <figure>
                                                    <div class="touching medium">
                                                        <img src="images/portfolio/portfolio_2.jpg" alt="" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </li>

                                        <!-- Recent Work Item -->
                                        <li class="col-sm-3 col-md-3 col-lg-3">
                                            <div class="recent-item">
                                                <figure>
                                                    <div class="touching medium">
                                                        <img src="images/portfolio/portfolio_3.jpg" alt="" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </li>

                                        <!-- Recent Work Item -->
                                        <li class="col-sm-3 col-md-3 col-lg-3">
                                            <div class="recent-item">
                                                <figure>
                                                    <div class="touching medium">
                                                        <img src="images/portfolio/portfolio_4.jpg" alt="" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </li>

                                        <!-- Recent Work Item -->
                                        <li class="col-sm-3 col-md-3 col-lg-3">
                                            <div class="recent-item">
                                                <figure>
                                                    <div class="touching medium">
                                                        <img src="images/portfolio/portfolio_5.jpg" alt="" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </li>

                                        <!-- Recent Work Item -->
                                        <li class="col-sm-3 col-md-3 col-lg-3">
                                            <div class="recent-item">
                                                <figure>
                                                    <div class="touching medium">
                                                        <img src="images/portfolio/portfolio_6.jpg" alt="" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </li>

                                        <!-- Recent Work Item -->
                                        <li class="col-sm-3 col-md-3 col-lg-3">
                                            <div class="recent-item">
                                                <figure>
                                                    <div class="touching medium">
                                                        <img src="images/portfolio/portfolio_7.jpg" alt="" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </li>

                                        <!-- Recent Work Item -->
                                        <li class="col-sm-3 col-md-3 col-lg-3">
                                            <div class="recent-item">
                                                <figure>
                                                    <div class="touching medium">
                                                        <img src="images/portfolio/portfolio_8.jpg" alt="" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </li>
                                        <li class="col-sm-3 col-md-3 col-lg-3">
                                            <div class="recent-item">
                                                <figure>
                                                    <div class="touching medium">
                                                        <img src="images/portfolio/portfolio_9.jpg" alt="" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </li>
                                        <li class="col-sm-3 col-md-3 col-lg-3">
                                            <div class="recent-item">
                                                <figure>
                                                    <div class="touching medium">
                                                        <img src="images/portfolio/portfolio_10.jpg" alt="" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </li>
                                        <li class="col-sm-3 col-md-3 col-lg-3">
                                            <div class="recent-item">
                                                <figure>
                                                    <div class="touching medium">
                                                        <img src="images/portfolio/portfolio_11.jpg" alt="" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </li>
                                        <li class="col-sm-3 col-md-3 col-lg-3">
                                            <div class="recent-item">
                                                <figure>
                                                    <div class="touching medium">
                                                        <img src="images/portfolio/portfolio_12.jpg" alt="" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </li>
                                        <li class="col-sm-3 col-md-3 col-lg-3">
                                            <div class="recent-item">
                                                <figure>
                                                    <div class="touching medium">
                                                        <img src="images/portfolio/portfolio_13.jpg" alt="" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </li>
                                        <li class="col-sm-3 col-md-3 col-lg-3">
                                            <div class="recent-item">
                                                <figure>
                                                    <div class="touching medium">
                                                        <img src="images/portfolio/portfolio_14.jpg" alt="" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!--end of recent work-->

                </div>
            </section>
        </section>
        <!--end wrapper-->

        <!--start footer-->
        <?php require_once './footer.php'; ?>
        <!--end footer-->

        <section class="footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 ">
                        <p class="copyright">&copy; Copyright 2015 Extracted Oils | Powered by  <a href="mailto:walidjuba@gmail.com">Walid Rezk</a></p>
                    </div>

                    <div class="col-lg-6 ">
                        <div class="footer_social">
                            <ul class="footbot_social">
                                <li><a class="fb" href="https://www.facebook.com/groups/extractedoils/" data-placement="top" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/retina-1.1.0.min.js"></script>
        <script type="text/javascript" src="js/jquery.cookie.js"></script> <!-- jQuery cookie -->
        <script type="text/javascript" src="js/styleswitch.js"></script> <!-- Style Colors Switcher -->
        <script type="text/javascript" src="js/jquery.smartmenus.min.js"></script>
        <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.jcarousel.js"></script>
        <script type="text/javascript" src="js/jflickrfeed.js"></script>
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
        <script type="text/javascript" src="js/swipe.js"></script>
        <script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>

        <script src="js/main.js"></script>

        <!-- Start Style Switcher -->

        <!-- End Style Switcher -->
    </body>
</html>
