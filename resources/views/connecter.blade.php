<!DOCTYPE html>
<html lang="en">

<head>
    <title>Location</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">



    <!--===============================================================================================-->
    <link rel="icon" type="image/png"
        href="{{ asset('login_page/images/icons/favicon.ico') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('login_page/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('login_page/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('login_pageg/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('login_page/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('login_page/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login_page/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('login_page/css/main.css') }}">
    <!--===============================================================================================-->
</head>

<body>

    <div class="site-loader"></div>


    <div class="site-wrap">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->

        <div class="site-navbar mt-4">
            <div class="container py-1">
                <div class="row align-items-center">
                    <div class="col-8 col-md-8 col-lg-4">
                        <h1 class="mb-0"><a href="/" class="text-white h2 mb-0"><strong>Location<span
                                        class="text-danger">.</span></strong></a></h1>
                    </div>
                    <div class="col-4 col-md-4 col-lg-8">
                        <nav class="site-navigation text-right text-md-right" role="navigation">

                            <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                    class="site-menu-toggle js-menu-toggle text-white"><span
                                        class="icon-menu h3"></span></a></div>

                            <ul class="site-menu js-clone-nav d-none d-lg-block">
                                <li class="active">
                                    <a href="/">Acceuil</a>
                                </li>



                                <li><a href="/annonces">Annonces</a>

                                </li>



                                <li class="has-children">
                                    <a href="#">Publier</a>
                                    <ul class="dropdown arrow-top">
                                        <li><a href="/create">Bien Immobilier</a></li>
                                        <li><a href="/CreerPoste">Poste</a></li>
                                        <!--  <li><a href="#">Commercial Building</a></li>
                      <li class="has-children">
                        <a href="#">Sub Menu</a>
                        <ul class="dropdown">
                          <li><a href="#">Menu One</a></li>
                          <li><a href="#">Menu Two</a></li>
                          <li><a href="#">Menu Three</a></li>-->
                                    </ul>
                                </li>




                                <li><a href="/apropos">À Propos</a></li>
                                <li><a href="/contact">Contactez Nous</a></li>
                                @guest
                                    <li><a href="/connecter">Se Connecter</a></li>
                                @else
                                    <li class="has-children">
                                        <a href="/profile"><img src="{{ Auth::user()->profile_image }}" width="60px"
                                                style="border-radius: 50%;height: 40px; width: 40px "> </a>
                                        <ul class="dropdown arrow-top">
                                            <li><a href="/profile">Profile</a></li>
                                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Déconnexion</a>
                                            </li>


                                            <form id="logout-form" action="{{ route('logout') }}"
                                                method="POST" class="d-none">
                                                @csrf
                                            </form>
                                            <!--  <li><a href="#">Commercial Building</a></li>
                      <li class="has-children">
                        <a href="#">Sub Menu</a>
                        <ul class="dropdown">
                          <li><a href="#">Menu One</a></li>
                          <li><a href="#">Menu Two</a></li>
                          <li><a href="#">Menu Three</a></li>-->
                                        </ul>
                                    </li>
                                @endguest

                            </ul>
                        </nav>
                    </div>
                </div>




                <br> <br> <br> <br> <br> <br> <br> <br><br><br><br>
                <div class="limiter">
                    <div class="container-login100">
                        <div class="wrap-login100">
                            <div class="login100-pic js-tilt" data-tilt>
                                <img src="{{ asset('login_page/images/img-01.png') }}" alt="IMG">
                            </div>

                            <form method="POST" action="{{ route('login') }}"
                                class="login100-form validate-form">
                                @csrf


                                <span class="login100-form-title">
                                    Member Login
                                </span>

                                <div class="wrap-input100 validate-input"
                                    data-validate="Valid email is required: ex@abc.xyz">
                                    <input class="input100 form-control @error('email') is-invalid @enderror" type="email"
                                        name="email" placeholder="Email" required="">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror



                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </span>
                                </div>

                                <div class="wrap-input100 validate-input" data-validate="Password is required">
                                    <input class="input100 form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required>




                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror


                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                    </span>
                                </div>

                                <div class="container-login100-form-btn">
                                    <button type="submit" class="login100-form-btn">
                                        Login
                                    </button>
                                </div>

                                <div class="text-center p-t-12">
                                    <span class="txt1">

                                    </span>

                                    @if(Route::has('password.request'))
                                        <a class="txt2" href="{{ route('password.request') }}">
                                            {{ __('Mot de passe oublié ?') }}
                                        </a>
                                    @endif



                                </div>

                                <div class="text-center p-t-136">
                                    <a class="txt2" href="{{ route('register') }}">
                                       Créer un compte
                                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_bg_2.jpg);"
        data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-10" style="margin-top: 0px;">
                    <h1 class="mb-2">Se Connecter</h1>
                </div>
            </div>
        </div>
    </div>


























    <br> <br> <br> <br> <br> <br> <br> <br><br><br><br> <br> <br> <br> <br> <br> <br> <br> <br><br><br><br> <br> <br>
    <br> <br> <br><br><br><br>


    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-5">
                        <h3 class="footer-heading mb-4">À propos de Location</h3>
                        <p>Cette application Web est destinée à trouver des personnes prêtes à collaborer à la location
                            si vous êtes ici pour la même raison, alors dépêchez-vous de trouver un colocataire qui vous
                            comprendra</p>
                    </div>


                    <!--Navigations-->
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h3 class="footer-heading mb-4">Navigations</h3>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="/">Acceuil</a></li>
                                <li><a href="/annonces">Annonces</a></li>

                                <li><a href="/CreerPoste">Poster</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="/create">Publier Bien Immobilier</a></li>
                                <li><a href="/apropos">À propos</a></li>

                                <li><a href="/Contact">Contact</a></li>

                            </ul>
                        </div>
                    </div>


                </div>

                <!--Follow Us-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h3 class="footer-heading mb-4">Suiviez Nous</h3>

                    <div>
                        <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                    </div>
                </div>
            </div>

            <!--copyright-->
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script data-cfasync="false"
                            src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                        <script>
                            document.write(new Date().getFullYear());

                        </script> All rights reserved | made with <i class="icon-heart text-danger"
                            aria-hidden="true"></i> by <a href="#" target="_blank">Im Creative</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>

            </div>
        </div>
    </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mediaelement-and-player.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

    <!--===============================================================================================-->
    <script src="{{ asset('login_page/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('login_page/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('login_page/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('login_page/vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('login_page/vendor/tilt/tilt.jquery.min.js') }}"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })

    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>
