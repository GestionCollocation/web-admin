<!DOCTYPE html>
<html lang="en">

<head>
    <title>Location</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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




                                <li><a href="/apropos">?? Propos</a></li>
                                <li><a href="/contact">Contactez Nous</a></li>
                                @guest
                                    <li><a href="/connecter">Se Connecter</a></li>

                                @else
                                  @if(auth()->user()->is_admin == 1)
                                    <li class="has-children">
                                        <a href="/profile"><img src="{{ URL::asset(Auth::user()->profile_image) }}" width="60px"
                                                style="border-radius: 50%;height: 40px; width: 40px "> </a>
                                        <ul class="dropdown arrow-top">
                                             <li><a href="/dashboard">Dashboard</a></li>
                                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Deconnexion</a>
                                            </li>
                                            <form id="logout-form" action="{{ route('logout') }}"
                                                method="POST" class="d-none">
                                                @csrf
                                            </form> 
                                        </ul>
                                    </li>
                                     @else
                                    <li class="has-children">
                                        <a href="/profile"><img src="{{ URL::asset(Auth::user()->profile_image) }}" width="60px"
                                                style="border-radius: 50%;height: 40px; width: 40px "> </a>
                                        <ul class="dropdown arrow-top">
                                            <li><a href="/profile">Profile</a></li>
                                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Deconnexion</a>
                                            </li>
                                            <form id="logout-form" action="{{ route('logout') }}"
                                                method="POST" class="d-none">
                                                @csrf
                                            </form> 
                                        </ul>
                                    </li>
                                   @endif
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
                    <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded"></span>
                    <h1 class="mb-2">D??tails <br> bien immobilier</h1>
                    <p class="mb-5"><strong class="h2 text-success font-weight-bold"></strong></p>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section site-section-sm">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h5 style="margin-top:-35px;margin-bottom:5px;margin-left:2px">Post?? par :
                        <strong><a href="#" style="color:#6c757d;">{{ $bienimmobilier->user->name }}</a></strong>
                        <a
                            href="{{ route('send.default',['id'=>$bienimmobilier->user->id]) }}">&nbsp;&nbsp;
                            <i class="fa fa-paper-plane" aria-hidden="true"></i></a>
                    </h5>

                    <div>
                        <div class="slide-one-item home-slider owl-carousel">
                            @php
                                $photos = json_decode($bienimmobilier->images);
                            @endphp

                            <div><img src="{{ asset('uploads/'.$photos[0]) }}" alt="Image"
                                    style="height:400px"></div>
                        </div>
                    </div>
        
                    <div class="bg-white property-body border-bottom border-left border-right">
                        <!-- <div style="margin-bottom:20px;margin-top:-35px;margin-left:-41px;"><span class="offer-type bg-success p-2" href="#">{{ $bienimmobilier->user_nom }}</span></div>
             <h5 style="margin-top:-35px;margin-bottom:20px;margin-left:-10px">Post?? par : <strong><a href="#" style="color:#6c757d;">{{ $bienimmobilier->user_nom }}</a></strong></h5>
              -->




                        <div class="row mb-6 justify-content-md-center position-relative">
                            <div class="offer-type-wrap position-absolute" style="top: 3px;right: 3px;">

                                <!--<span class="offer-type bg-success py-2">Rent</span>-->
                            </div>
                            <h3 class="property-title text-success">{{ $bienimmobilier->titre }}</h3>

                            <div class="col-md-6">
                                <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                                    <li>
                                        <span class="property-specs">chambres</span>
                                        <span
                                            class="property-specs-number">{{ $bienimmobilier->nb_chambres }}<sup>+</sup></span>

                                    </li>
                                    <li>
                                        <span class="property-specs">personnes</span>
                                        <span class="property-specs-number">{{ $bienimmobilier->nb_personnes }}</span>

                                    </li>
                                    <li>
                                        <span class="property-specs">superficie</span>
                                        <span class="property-specs-number">{{ $bienimmobilier->superficie }}</span>

                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                                <span class="d-inline-block text-black mb-0 caption-text">Etat</span>
                                <strong class="d-block">{{ $bienimmobilier->etat }}</strong>
                            </div>
                            <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                                <span class="d-inline-block text-black mb-0 caption-text">Statut</span>
                                <strong class="d-block">{{ $bienimmobilier->statut }}</strong>
                            </div>
                            <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                                <span class="d-inline-block text-black mb-0 caption-text">Prix</span>
                                <strong class="d-block">{{ $bienimmobilier->prix }} DH</strong>
                            </div>
                        </div>

                        <!--more info-->
                        <h2 class="h4 text-black">Informations</h2>
                        <p>{{ $bienimmobilier->description }}</p>
                        <!--Gallery-->
                        <div class="row no-gutters mt-5">
                            <div class="col-12">
                                <h2 class="h4 text-black mb-3">Gallery</h2>
                            </div>

                            @foreach(json_decode($bienimmobilier->images) as $photo)
                                <div class="col-sm-6 col-md-4 col-lg-3" style="margin-top: 10px">
                                    <a href="{{ asset('uploads/'.$photo) }}"
                                        class="image-popup gal-item">
                                        <img src="{{ asset('uploads/'.$photo) }}" alt="Image"
                                            style="height:100px;width:150px">
                                    </a>
                                </div>
                            @endforeach

                        </div>
<!-- PARTAAGE  -->
<div class="dropdown" style="margin-left:550px ; margin-top: 50px;"  >
  <a  data-toggle="dropdown" class="property-favorite" >
    <span id="iluke"><i class="fas fa-share" href="" style="cursor: pointer;"> Partagez </i></span>
  </a>
  <div class="dropdown-menu">
    <a class="dropdown-item"  href="{{ route('post.partage',$bienimmobilier->id) }}">Sur le site</a>
    <a class="dropdown-item" id="facebook-btn" href="#">Faceboock</a>
    <a class="dropdown-item" id="instagram-btn" href="#">Instagram</a>
    <a class="dropdown-item" id="twitter-btn" href="#">Twitter</a>
  </div>
</div>           
                    </div>

                </div>
                <div class="col-lg-4">

                    <div class="bg-white widget border rounded">

                        <h3 class="h4 text-black widget-title mb-3">Contacte</h3>
                        <form action="" class="form-contact-agent">
                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input type="text" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Telephone</label>
                                <input type="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="phone">Que voulez vous dire ?</label>
                                <textarea type="text" id="phone" class="form-control"
                                    placeholder="Tapez votre Message"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" id="phone" class="btn btn-primary" value="Envoyer Message">
                            </div>
                        </form>
                    </div>

                    <!-- <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3">Description</h3>
              <p></p>
            </div> -->

                </div>

            </div>
        </div>
    </div>

    <div class="site-section site-section-sm bg-light">

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-5">
                            <h3 class="footer-heading mb-4">?? propos de Location</h3>
                            <p>Cette application Web est destin??e ?? trouver des personnes pr??tes ?? collaborer ?? la
                                location si vous ??tes ici pour la m??me raison, alors d??p??chez-vous de trouver un
                                colocataire qui vous comprendra</p>
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
                                    <li><a href="/create">Publier Bien Immobilier</a></li>
                                    <li><a href="/CreerPoste">Poster</a></li>
                                    li><a href="/connecter">Se connecter</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <ul class="list-unstyled">
                                    <li><a href="/apropos">?? propos</a></li>

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
        <script type="text/javascript">
            const facebookBtn = document.getElementById('facebook-btn');
            const instagramBtn = document.getElementById('instagram-btn');
            const twitterBtn = document.getElementById('twitter-btn');

         

          
            let postUrl = encodeURI("http://127.0.0.1:8000/acceuil/{{ $bienimmobilier->id }}"); 
            let postTitle = encodeURI('{{ $bienimmobilier->titre }}');

             facebookBtn.setAttribute("href",`https://www.facebook.com/sharer.php?u=${postUrl}&text=${postTitle}`);
            twitterBtn.setAttribute("href",`https://www.twitter.com/share?url=${postUrl}&text=${postTitle}`)
        </script>

</body>

</html>
