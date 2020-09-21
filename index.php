<?php

require 'Controleur/Routeur.php';

$routeur = new Routeur();
$routeur->routerRequete();



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
      
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
     gggg
      
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jewel Theme">
        <meta name="description" content="Wheel - Responsive and Modern Car Rental Website Template">
        <meta name="keywords" content="">
        <title>LocaLuxe</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- reset css -->
        <link rel="stylesheet" type="text/css" href="assets/css/css_reset.css">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.datetimepicker.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <!-- preload -->
        <link rel="stylesheet" type="text/css" href="assets/css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <!-- MAIN -->
        <div class="load-wrap">
            <div class="wheel-load">
                <img src="images/loader.gif" alt="" class="image">
            </div>
        </div>
        <div class="wheel-menu-wrap ">
            <div class="container-fluid wheel-bg1">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="wheel-logo">
                            <a href="index.html"><img src="images/logo.png" height="150px"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12 padd-lr0">
                        <div class="wheel-top-menu clearfix">
                            <div class="wheel-top-menu-info">
                                <div class="top-menu-item"><a href=""><i class="fa fa-phone"></i><span>(+212) 6214 546789</span></a></div>
                                <div class="top-menu-item"><a href=""><i class="fa fa-envelope"></i><span>localuxe@gmail.com</span></a></div>
                            </div>
                            <div class="wheel-top-menu-log">
                                <div class="top-menu-item">
                                    <div class="dropdown wheel-user-ico">
                                        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        S'identifier
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?action=inscription">Authentification/Inscription</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 ">
                        <div class="wheel-navigation">
                            <nav id="dl-menu">
                                <!-- class="dl-menu" -->
                                <ul class="main-menu dl-menu">
                                    <li class="menu-item   current-menu-parent menu-item-has-children   active-color ">
                                        <a href="/LocationVoitures">Index</a>
                                    </li>
                                    <li class="menu-item current-menu-parent menu-item-has-children  ">
                                        <a href="/LocationVoitures?action=voitures"> Nos Vehicules </a>
                                        <!--class=" dl-submenu "-->

                                    </li>
                                    <li class="menu-item">
                                        <a href="/LocationVoitures?action=reservation">Réservation</a>
                                    </li>

                                </ul>
                                <div class="nav-menu-icon"><i></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?= $contenu; ?>

        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            
                            <h3>Abonnez-Vous & Vous aurez <span> 20% </span> de reduction</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Votre adress e-mail">
                            <button class="wheel-btn">Abonnez-Vous</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- ///////////////// -->
        <footer class="wheel-footer">
            <img src="images/bg4.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6  padd-lr0">
                        <div class="wheel-address">
                            <div class="wheel-footer-logo"><a href=""><img src="images/logo.png" height="150px"></a></div>
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i>120 rue moulay ismail Tanger<br>
                                    90000 , MAROC  </span>
                                </li>
                                <li><a href=""><span><i class="fa fa-phone"></i> +212 6 8376 6284</span></a></li>
                                <li><a href=""><span><i class="fa fa-envelope"></i>locauxe@gmail.com</span></a></li>
                            </ul>
                            <div class="wheel-soc">
                                <a href="/amine.elhaddaji" class="fa fa-twitter"></a>
                                <a href="" class="fa fa-facebook"></a>
                                <a href="" class="fa fa-linkedin"></a>
                                <a href="" class="fa fa-instagram"></a>
                                <a href="" class="fa fa-share-alt"></a>
                            </div>
                        </div>
                    </div>
    <div align="center">                
                    <div class="col-md-3 col-sm-6  padd-lr0" >
                        <div class="wheel-footer-item" align="center">
                            <h3>Liens Importants</h3>
                            <ul>
                                <li><a href="" class="">A propos de nous</a></li>
                                <li><a href="" class="">Service Client</a></li>
                                <li><a href="" class="">Contactez Nous</a></li>
                                
                              <li><a href="" class="">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  padd-lr0">
                        <div class="wheel-footer-item ">
                           
                   
                </div>
            </div>
        </footer>
        <div class="wheel-footer-info wheel-bg6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-6  padd-lr0"><span>&#169; LOCAVOITURE 2020 </span></div>
                    <div class="col-lg-4 col-sm-6 padd-lr0">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href=""> Pages</a></li>
                            <li><a href=""> Reservation</a></li>
                            <li><a href="">Location</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Scripts project -->
        <script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- count -->
        <script type="text/javascript" src='assets/js/jquery.countTo.js'></script>
        <!-- google maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
        <!-- swiper -->
        <script type="text/javascript" src="assets/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="assets/js/equalHeightsPlugin.js"></script>
        <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <!-- sixth block end -->
    </body>
</html>
