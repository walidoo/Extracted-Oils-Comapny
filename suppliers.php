<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Suppliers</title>
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
                            <h2>Suppliers</h2>
                            <nav id="breadcrumbs">
                                <ul>
                                    <li>You are here:</li>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Suppliers</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content contact">
                <div class="container">

                    <div class="row sub_content">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="dividerHeading">
                                <h4><span>Suppliers</span></h4>
                            </div>
                            <p>Vidit nulla errem ea mea. Dolore apeirian insolens mea ut, indoctum consequuntur hasi. No aeque dictas dissenti as tusu, sumo quodsi fuisset mea in. Ea nobis populo interesset cum, ne sit quis elit officiis, min im tempor iracundia sit anet. Facer falli aliquam nec te. In eirmod utamur offendit vis, posidonium instructior sed te.</p>

                            <div class="alert alert-success hidden alert-dismissable" id="contactSuccess">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>Success!</strong> Your message has been sent to us.
                            </div>

                            <div class="alert alert-error hidden" id="contactError">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>Error!</strong> There was an error sending your message.
                            </div>

                            <form id="" method="POST" enctype="multipart/form-data" action="./lib/enter_supplier.php" novalidate="novalidate">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12 ">
                                            <input type="text" id="name" name="name" class="form-control" maxlength="100" data-msg-required="Please enter your name." value="" placeholder="Your Name" >
                                        </div>
                                        <div class="col-md-12 ">
                                            <input type="email" id="email" name="email" class="form-control" maxlength="100" data-msg-email="Please enter a valid email address." data-msg-required="Please enter your email address." value="" placeholder="Your E-mail" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12 ">
                                            <input type="text" id="phone" name="phone" class="form-control" maxlength="100" data-msg-required="Your Phone Number." value="" placeholder="Your Phone Number" required="required" >
                                        </div>
                                        <div class="col-md-12">                                       
                                            <input type="file" title="Search for a file to add" id="file" name="file" class="form-control" maxlength="100" data-msg-required="Your Attach File." value="" placeholder="Your Attach File" >
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" data-loading-text="Loading..." class="btn btn-default btn-lg" value="Send Order">
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                                        <!--download-->
                    <div class="row sub_content">
                        <div class="col-lg-6">
                            <div class="promo_content clearfix">
                                <div class="pb_text">
                                    <h3>To Download the Order Form</h3>
                                    <p>Click on the Button shown</p>
                                </div>
                                <div class="pb_action">
                                    <a class="btn btn-lg btn-default" href="#fakelink">
                                        <i class="fa fa-shopping-cart"></i>
                                        Download Now
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                                                <div class="col-lg-6">
                            <div class="promo_content clearfix">
                                <div class="pb_text">
                                    <h3>To Download the Price Form</h3>
                                    <p>Click on the Button shown</p>
                                </div>
                                <div class="pb_action">
                                    <a class="btn btn-lg btn-default" href="#fakelink">
                                        <i class="fa fa-shopping-cart"></i>
                                        Download Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--end-->

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

        <script type="text/javascript" src="js/jquery.validate.js"></script>
        <script type="text/javascript" src="js/view.contact.js"></script>
        <script type="text/javascript" src="js/jquery.gmap.js"></script>

        <script src="js/main.js"></script>

        <!-- Start Style Switcher -->

        <!-- End Style Switcher -->
    </body>
</html>
