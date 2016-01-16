<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Contact Us</title>
        <meta name="description" content="">

        <!-- CSS FILES -->
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/x-icon" href="images/favicon-logo.ico" />
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" data-name="skins">
        <link rel="stylesheet" href="css/layout/wide.css" data-name="layout">

        <link rel="stylesheet" type="text/css" href="css/switcher.css" media="screen" />
        <script type="text/javascript" src="js/jquery.gmap.js"></script>
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
                            <h2>Contact Us</h2>
                            <nav id="breadcrumbs">
                                <ul>
                                    <li>You are here:</li>
                                    <li><a href="index.html">Home</a></li>
                                    <li>Contact Us</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content contact">
                <div class="container">
                    <div class="row sub_content">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="maps">
                                <div id="page_maps"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row sub_content">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="dividerHeading">
                                <h4><span>Get in Touch</span></h4>
                            </div>
                            <p>The company was established in 1959 according to the president decree no 534 which was published in the official newspaper, issue no 81 on 23rd APRIL 1959 .</p>

                            <div class="alert alert-success hidden alert-dismissable" id="contactSuccess">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>Success!</strong> Your message has been sent to us.
                            </div>

                            <div class="alert alert-error hidden" id="contactError">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>Error!</strong> There was an error sending your message.
                            </div>

                            <form id="" method="post" action="./lib/send_message.php" novalidate="novalidate">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-lg-6 ">
                                            <input type="text" id="name" name="name" class="form-control" maxlength="100" data-msg-required="Please enter your name." value="" placeholder="Your Name" >
                                        </div>
                                        <div class="col-lg-6 ">
                                            <input type="email" id="email" name="email" class="form-control" maxlength="100" data-msg-email="Please enter a valid email address." data-msg-required="Please enter your email address." value="" placeholder="Your E-mail" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input type="text" id="subject" name="subject" class="form-control" maxlength="100" data-msg-required="Please enter the subject." value="" placeholder="Subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <textarea id="message" class="form-control" name="message" rows="10" cols="50" data-msg-required="Please enter your message." maxlength="5000" placeholder="Message"></textarea>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" data-loading-text="Loading..." class="btn btn-default btn-lg" value="Send Message">
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="sidebar">
                                <div class="widget_info">
                                    <div class="dividerHeading">
                                        <h4><span>Contact Info</span></h4>
                                    </div>

                                    <ul class="widget_info_contact">
                                        <li><i class="fa fa-map-marker"></i> <p><strong>Address</strong>: 35 Suez Canal Street Muharram Bek (Alexandria)</p></li>
                                        <li><i class="fa fa-user"></i> <p><strong>Phone</strong>: 033816954</p></li>
                                        <li><i class="fa fa-envelope"></i> <p><strong>Email</strong>: <a href="mailto:extractedoils@yahoo.com">extractedoils@yahoo.com</a></p></li>
                                        <li><i class="fa fa-globe"></i> <p><strong>Web</strong>: <a href="www.extractedoils.com" data-placement="bottom" data-toggle="tooltip" title="www.extractedoils.com">www.extractedoils.com</a></p></li>
                                    </ul>

                                </div>

                                <div class="widget_social">
                                    <div class="dividerHeading">
                                        <h4><span>Get Social</span></h4>
                                    </div>
                                    <ul class="widget_social">
                                        <li><a class="fb" href="https://www.facebook.com/groups/extractedoils/" data-placement="bottom" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--contact with us-->
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
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mr Mohammed Nabil Atia</td>
                                            <td>Chairman of the Board of Directors & Managing Director</td>
                                            <td><a class="cont" href="mailto:chairman.ceo@extractedoils.com">chairman.ceo@extractedoils.com</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Mr.Omar Saud Omar</td>
                                            <td>Managing Director of Financial and Administrative Affairs</td>
                                            <td><a class="cont" href="mailto:fin.affairs.mg@extractedoils.com">fin.affairs.mg@extractedoils.com</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Eng. Ibrahim Saad Khattab</td>
                                            <td>Supervisor of the financial sector</td>
                                            <td><a class="cont" href="mailto:fin.advisor@extractedoils.com">fin.advisor@extractedoils.com</a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Mrs. Suzan Madany</td>
                                            <td>Sector Head of Finance</td>
                                            <td><a class="cont" href="mailto:fin.sector@extractedoils.com">fin.sector@extractedoils.com</a></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Abdel Kader Refaat</td>
                                            <td>Sector Head of Human Resources</td>
                                            <td><a class="cont" href="mailto:hr.sector@extractedoils.com">hr.sector@extractedoils.com</a></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Al Husseini Ali Mahmoud</td>
                                            <td>Sector Head of Legal Affairs</td>
                                            <td><a class="cont" href="mailto:Legal.affairs@extractedoils.com">Legal.affairs@extractedoils.com</a></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Fahmy zaki gomaa</td>
                                            <td>Sector Head of Marketing</td>
                                            <td><a class="cont" href="mailto:Marketing.sector@extractedoils.com">Marketing.sector@extractedoils.com</a></td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Heshmat Keyrilos</td>
                                            <td>Sector Head of Projects</td>
                                            <td><a class="cont" href="mailto:Eng.affairs.sector@extractedoils.com">Eng.affairs.sector@extractedoils.com</a></td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Galila Gomaa Ibrahim</td>
                                            <td>Sector Head of the needs</td>
                                            <td><a class="cont" href="mailto:purchase.sector@extractedoils.com">purchase.sector@extractedoils.com</a></td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>hosny zaid</td>
                                            <td>Sector Head of the Damanhur factories</td>
                                            <td><a class="cont" href="mailto:Damanhour.sector.head@extractedoils.com">Damanhour.sector.head@extractedoils.com</a></td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>eng/mohamed mahmoud mohamed</td>
                                            <td>Sector Head of Moharam Bek factories</td>
                                            <td><a class="cont" href="mailto:moharambek.sector.head@extractedoils.com">moharambek.sector.head@extractedoils.com</a></td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>Aziza Mohamed ELmeghawri</td>
                                            <td>General Director  of Research</td>
                                            <td><a class="cont" href="mailto:researches.GM@extractedoils.com">researches.GM@extractedoils.com</a></td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>Bahaa Abdel Aziz Saleh</td>
                                            <td>Director of  Investor Relations</td>
                                            <td><a class="cont" href="mailto:Investors.gm@extractedoils.com">Investors.gm@extractedoils.com</a></td>
                                        </tr>
                                        <tr>
                                            <td>14</td>
                                            <td>Ibrahim Al-Sayed Ibrahim</td>
                                            <td>head of import&export sector</td>
                                            <td><a class="cont" href="mailto:export.sector.dept@extractedoils.com">export.sector.dept@extractedoils.com</a></td>
                                        </tr>
                                        <tr>
                                            <td>15</td>
                                            <td>Majid Al-Nakib</td>
                                            <td>Computer Management</td>
                                            <td><a class="cont" href="mailto:IT.dept@extractedoils.com">IT.dept@extractedoils.com</a></td>
                                        </tr>
                                        <tr>
                                            <td>16</td>
                                            <td>Ghada Fikry Allam</td>
                                            <td>Design Section</td>
                                            <td><a class="cont" href="mailto:Design.dept@extractedoils.com">Design.dept@extractedoils.com</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end of-->

                    </div>
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
        <!--<script type="text/javascript" src="js/jquery.gmap.js"></script>-->

        <script src="js/main.js"></script>

        <!-- Start Style Switcher -->

        <!-- End Style Switcher -->
    </body>
</html>
