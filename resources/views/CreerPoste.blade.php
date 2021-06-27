<!doctype html>
<html lang="en">

<head>
    <title>Location</title>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mediaelementplayer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fl-bigmug-line.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


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



    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



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
                                        <a href="/profile"><img src="{{ URL::asset(Auth::user()->profile_image) }}" width="60px"
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







            </div>
        </div>
    </div>

    <div class="site-blocks-cover inner-page-cover overlay"
        style="background-image: url({{ asset('images/hero_bg_2.jpg') }});" data-aos="fade"
        data-stellar-background-ratio="0.5">
        <div class="container">

            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-10">
                    <h1 class="mb-2">Publier<br>Poste</h1>
                </div>
            </div>
        </div>
    </div>


    


    @if(isset($bienImm))

        <div class="site-section">
            <div class="container">
                <div class="container" style="width: 30% ; margin-top: 50px; margin-bottom: 50px" >
    @if($message= Session::get('success_create'))
          <div class="alert alert-primary" role="alert">
                {{$message}}
         </div>
    @endif
</div>
                <div class="row">
                    <div class="col-md-12 col-lg-8 mb-5">
                        <form action="{{ route ('post.store',$bienImm->id) }}" method="POST" class="p-5 bg-white border" multipart />
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold " for="fullname">Titre</label>
                                <input type="text" name="titre"
                                    class="form-control  @error('titre') is-invalid @enderror"
                                    placeholder="Insérez un titre ">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="email">Nombre des personnes</label>
                                <input type="number" name="nb_personnes"
                                    class="form-control @error('nb_personnes') is-invalid @enderror"
                                    placeholder="Insérez Nombre des personnes">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="email">Location</label>
                                <input type="text" name="location"
                                    class="form-control @error('location') is-invalid @enderror"
                                    placeholder="Insérez Location">
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="message">Description</label>
                                <textarea name="description" cols="30" rows="5"
                                    class="form-control @error('description') is-invalid @enderror"
                                    placeholder="Que Voulez Vous dire..?"></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary  py-2 px-4 rounded-0"
                                    style="width: 100%;">Publiez</button>
                            </div>
                        </div>





                        <div class="w-100 social-media mt-5">
                            <h3>Partagez sur </h3>
                            <p>
                                <a href="https://www.facebook.com/">Facebook</a>
                                <a href="https://www.twitter.com/">Twitter</a>
                                <a href="https://www.instagram.com/">Instagram</a>

                            </p>
                        </div>
                    </div>



                    <div class="col-lg-4">
                        <div class="p-4 mb-3 bg-white">


                            <div style="width:100%">
                                <div class="property-entry h-100">
                                    <a href="{{ route('acceuil.show',$bienImm->id) }}"
                                        class="property-thumbnail">
                                        <div class="offer-type-wrap">
                                            <span class="offer-type bg-success py-2"
                                                href="{{ route('acceuil.show',$bienImm->id) }}">Plus
                                                d'info</span>
                                            <!--<span class="offer-type bg-success py-2">Rent</span>-->
                                        </div>
                                        @php
                                            $photos = json_decode($bienImm->images);
                                        @endphp
                                        <img src="{{ asset('uploads/'.$photos[0]) }}"
                                            alt="Image" height="220px;" width="400px;">
                                    </a>
                                    <div class="p-4 property-body">

                                        <h2 class="property-title"><a
                                                efhr="{{ route('acceuil.show',$bienImm->id) }}">{{ $bienImm->titre }}</a>
                                        </h2>

                                        <!--j'ai supprimée d-block pour qu'ils s'approchent-->
                                        <span class="property-location mb-3 text-uppercase"><span
                                                class="property-icon icon-room"></span>{{ $bienImm->ville }},{{ $bienImm->quartier }}</span>

                                        <strong
                                            class="property-price text-primary mb-3 d-block text-success">{{ $bienImm->prix }}
                                            DH</strong>

                                        <ul class="property-specs-wrap mb-3 mb-lg-0">
                                            <li>
                                                <span class="property-specs">Chambres</span>
                                                <span
                                                    class="property-specs-number">{{ $bienImm->nb_chambres }}<sup>+</sup></span>

                                            </li>
                                            <li>
                                                <span class="property-specs">Personnes</span>
                                                <span
                                                    class="property-specs-number">{{ $bienImm->nb_personnes }}</span>

                                            </li>
                                            <li>
                                                <span class="property-specs">Superficie</span>
                                                <span class="property-specs-number">{{ $bienImm->superficie }}</span>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                  </div>
                  </form>
                </div>
            </div>
        </div>
</div>
@else






        <div class="site-section">
            <div class="container">
                <div class="container" style="width: 30% ; margin-top: 50px; margin-bottom: 50px" >
    @if($message= Session::get('success_create'))
          <div class="alert alert-primary" role="alert">
                {{$message}}
         </div>
    @endif
</div>
                <div class="row">

                    <div class="col-md-12 col-lg-8 mb-5">




                        <form action="{{ route ('post.store',0) }}" method="POST"
                            class="p-5 bg-white border" multipart />
                        @csrf


                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold " for="fullname">Titre</label>
                                <input type="text" name="titre"
                                    class="form-control  @error('titre') is-invalid @enderror"
                                    placeholder="Insérez un titre ">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="email">Nombre des personnes</label>
                                <input type="number" name="nb_personnes"
                                    class="form-control @error('nb_personnes') is-invalid @enderror"
                                    placeholder="Insérez Nombre des personnes">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="email">Location</label>
                                <input type="text" name="location"
                                    class="form-control @error('location') is-invalid @enderror"
                                    placeholder="Insérez Location">
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="message">Description</label>
                                <textarea name="description" cols="30" rows="5"
                                    class="form-control @error('description') is-invalid @enderror"
                                    placeholder="Que Voulez Vous dire..?"></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary  py-2 px-4 rounded-0"
                                    style="width: 100%;">Publiez</button>
                            </div>
                        </div>





                        <div class="w-100 social-media mt-5">
                            <h3>Partagez sur </h3>
                            <p>
                                <a href="https://www.facebook.com/">Facebook</a>
                                <a href="https://www.twitter.com/">Twitter</a>
                                <a href="https://www.instagram.com/">Instagram</a>

                            </p>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    @endif






    </div>

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/mediaelement-and-player.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/circleaudioplayer.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>

    <!--   <script src="{{ asset('pubAnn/js/jquery.min.js') }}"></script>
  <script src="{{ asset('pubAnn/js/popper.js') }}"></script>
  <script src="{{ asset('pubAnn/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('pubAnn/js/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('pubAnn/js/main.js') }}"></script>
 -->
</body>

</html>
