<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Board Of Directors</title>
        <meta name="description" content="">

        <!-- CSS FILES -->
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/x-icon" href="images/favicon-logo.ico" />
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" data-name="skins">
        <link rel="stylesheet" href="css/layout/wide.css" data-name="layout">

        <link rel="stylesheet" type="text/css" href="css/switcher.css" media="screen" />
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
                        <!--                        <div class="col-sm-7 hidden-xs top-info">
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
                            <h2>Board Members</h2>
                            <nav id="breadcrumbs">
                                <ul>
                                    <li>You are here:</li>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Board Of Directors</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div> <!--./row-->
                </div> <!--./Container-->
            </section>

            <section class="content elements">
                <div class="container">
                    <div class="row sub_content">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="dividerHeading">
                                <h4><span>Board Members</span></h4>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Rank</th>
                                        <th>Name</th>
                                        <th>Job Title</th>
                                        <th>Title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Bahaa Abdel-Aziz Saleh</td>
                                        <td>Director of Investor Relations</td>
                                        <td>Director of Investor Relations</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Hussein Yusuf Ali Mohamed</td>
                                        <td>Director of Investor Relations</td>
                                        <td>Director of Investor Relations</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Mr Mohammed Nabil Mahmoud Atia</td>
                                        <td>Chairman&Managing director</td>
                                        <td>Chairman&Managing director</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Mr.Omar Saud Omar</td>
                                        <td>Chairman&managing director of financial affairs</td>
                                        <td>Board member</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Eng. Ibrahim Saad Khattab</td>
                                        <td>Managing Director for Technical Affairs</td>
                                        <td>Board member</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Mr. Abd Eltawab Gaber El Dawi</td>
                                        <td>The representative of Misr Insurance</td>
                                        <td>Board member</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Mr.Mahmoud Ibrahim Mohammed Badawi</td>
                                        <td>Misr Life Insurance Co . Representitive for Elected Contributers</td>
                                        <td>Board member</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Mr.Ezz Eldeen Abdallah Badawi</td>
                                        <td>Representive for Stockholders by Ellection</td>
                                        <td>Board member</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Mr. Fahmy Zaki Gomaa</td>
                                        <td>Representive for Stockholders</td>
                                        <td>Board member</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> <!--./row-->

                </div> <!--./Container-->
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