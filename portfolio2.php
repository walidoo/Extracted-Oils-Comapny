<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Oils</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <!-- CSS FILES -->
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/x-icon" href="images/favicon-logo.ico" />
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" data-name="skins">
        <link rel="stylesheet" href="css/layout/wide.css" data-name="layout">
        <link href="css/demo.css" rel="stylesheet" type="text/css"/>
        <link href="css/styleee.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.css" media="all" />
        <link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Coustard:900' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css' />

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
        <header id="header" class="clearfix">
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
                            <h2>Oils</h2>
                            <nav id="breadcrumbs">
                                <ul>
                                    <li>You are here:</li>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Oils</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content portfolio_single">
                <div class="container">

<!--<content carousel>-->
                    <?php require_once './categories/oils.php'; ?>
<!--<content carousel>-->


                </div>
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
            <script src="js/jquery.easing.1.3 (2).js" type="text/javascript"></script>
            <!-- the jScrollPane script -->
            <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
            <script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
            <script type="text/javascript">
                $('#ca-container').contentcarousel();
            </script>

            <script type="text/javascript">
                $(document).ready(function() {
                    $.fn.carousel = function(op) {
                        var op, ui = {};
                        op = $.extend({
                            speed: 500,
                            autoChange: false,
                            interval: 5000
                        }, op);
                        ui.carousel = this;
                        ui.items = ui.carousel.find('.carousel-item');
                        ui.itemsLen = ui.items.length;

                        // CREATE CONTROLS
                        ui.ctrl = $('<div />', {'class': 'carousel-control'});
                        ui.prev = $('<div />', {'class': 'carousel-prev'});
                        ui.next = $('<div />', {'class': 'carousel-next'});
                        ui.pagList = $('<ul />', {'class': 'carousel-pagination'});
                        ui.pagItem = $('<li></li>');
                        for (var i = 0; i < ui.itemsLen; i++) {
                            ui.pagItem.clone().appendTo(ui.pagList);
                        }
                        ui.prev.appendTo(ui.ctrl);
                        ui.next.appendTo(ui.ctrl);
                        ui.pagList.appendTo(ui.ctrl);
                        ui.ctrl.appendTo(ui.carousel);
                        ui.carousel.find('.carousel-pagination li').eq(0).addClass('active');
                        ui.carousel.find('.carousel-item').each(function() {
                            $(this).hide();
                        });
                        ui.carousel.find('.carousel-item').eq(0).show().addClass('active');


                        // CHANGE ITEM
                        var changeImage = function(direction, context) {
                            var current = ui.carousel.find('.carousel-item.active');

                            if (direction == 'index') {
                                if (current.index() === context.index())
                                    return false;

                                context.addClass('active').siblings().removeClass('active');

                                ui.items.eq(context.index()).addClass('current').fadeIn(op.speed, function() {
                                    current.removeClass('active').hide();
                                    $(this).addClass('active').removeClass('current');
                                });
                            }

                            if (direction == 'prev') {
                                if (current.index() == 0) {
                                    ui.carousel.find('.carousel-item:last').addClass('current').fadeIn(op.speed, function() {
                                        current.removeClass('active').hide();
                                        $(this).addClass('active').removeClass('current');
                                    });
                                }
                                else {
                                    current.prev().addClass('current').fadeIn(op.speed, function() {
                                        current.removeClass('active').hide();
                                        $(this).addClass('active').removeClass('current');
                                    });
                                }
                            }

                            if (direction == undefined) {
                                if (current.index() == ui.itemsLen - 1) {
                                    ui.carousel.find('.carousel-item:first').addClass('current').fadeIn(300, function() {
                                        current.removeClass('active').hide();
                                        $(this).addClass('active').removeClass('current');
                                    });
                                }
                                else {
                                    current.next().addClass('current').fadeIn(300, function() {
                                        current.removeClass('active').hide();
                                        $(this).addClass('active').removeClass('current');
                                    });
                                }
                            }
                            ui.carousel.find('.carousel-pagination li').eq(ui.carousel.find('.carousel-item.current').index()).addClass('active').siblings().removeClass('active');
                        };

                        ui.carousel
                                .on('click', 'li', function() {
                                    changeImage('index', $(this));
                                })
                                .on('click', '.carousel-prev', function() {
                                    changeImage('prev');
                                })
                                .on('click', '.carousel-next', function() {
                                    changeImage();
                                });

                        // AUTO CHANGE
                        if (op.autoChange) {
                            var changeInterval = setInterval(changeImage, op.interval);
                            ui.carousel
                                    .on('mouseenter', function() {
                                        clearInterval(changeInterval);
                                    })
                                    .on('mouseleave', function() {
                                        changeInterval = setInterval(changeImage, op.interval);
                                    });
                        }
                        return this;
                    };

                    $('.porDetCarousel').each(function() {
                        $(this).carousel({
                            autoChange: true
                        });
                    });
                });
            </script>
            <script src="js/main.js"></script>
            <script src="js/jquery.easing.1.3 (2).js" type="text/javascript"></script>
            <!-- the jScrollPane script -->
            <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
            <script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
            <script type="text/javascript">
                $('#ca-container').contentcarousel();
            </script>

            <!-- Start Style Switcher -->

            <!-- End Style Switcher -->
    </body>
</html>
