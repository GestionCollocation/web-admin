<!DOCTYPE html>
<html lang="en">

<head>
    <title>Location</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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

        <div class="site-navbar mt-4" style="padding-left: 0px; padding-right: 0px;">
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

                            <ul class="site-menu js-clone-nav d-none d-lg-block "
                                style="padding-right: 0px; padding-left:0px; left: 0px">
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
                                                     document.getElementById('logout-form').submit();">Deconnexion</a>
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

    <!--les images du background-->
    <div class="slide-one-item home-slider owl-carousel">
        <!--image1-->
        <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade"
            data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-10">
                        <h1 class="mb-2">Bienvenue</h1>
                    </div>
                </div>
            </div>
        </div>
        <!--image2-->
        <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade"
            data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-10">
                        <h1 class="mb-2">Bienvenue</h1>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Les Listes pour la recherche -->
    <div class="site-section site-section-sm pb-0">
        <div class="container">
            <div class="row">
                <form class="form-search col-md-12" action="{{ route('acceuil.recherche' ) }}" method="GET" style="margin-top: -100px;">
            
                    <div class="row  align-items-end">
                        <div class="col-md-3">
                            <label for="list-types">Ville</label>
                            <div class="select-wrap">
                                <span class="icon icon-arrow_drop_down"></span>
                                <select name="ville" id="ville" class="form-control d-block rounded-0 dynamic" data-dependent="quartier">
                                    <option selected>Sélectionnez ville</option>
                                    @foreach($ville as $item)
                                    <option value="{{$item->ville}}">{{$item->ville}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="offer-types">Quartier</label>
                            <div class="select-wrap">
                                <span class="icon icon-arrow_drop_down"></span>
                                <select name="quartier" id="quartier" class="form-control d-block rounded-0">
                                   <option selected>Sélectionnez quartier</option>
                              <!--   @foreach($quartier as $item)
                                    <option value="{{$item->quartier}}">{{$item->quartier}}</option>
                                    @endforeach -->
                                </select>
                            </div>
                            {{ csrf_field() }} 
                        </div>


                        <div class="col-md-3">
                            <label for="select-city">Prix</label>
                            <div class="select-wrap">
                                <span class="icon icon-arrow_drop_down"></span>
                                <select name="prix" id="prix" class="form-control d-block rounded-0">
                                    <option Selected>Sélectionnez Prix</option>
                                    <option value="1500">1500</option>
                                    <option value="2000">2000</option>
                                    <option value="2200">2200</option>
                                    <option value="2500">2500</option>
                                    <option value="3000">3000</option>
                                     <option value="3500">3500</option>
                                </select>
                            </div>
                        </div>
                        <!--button Search-->
                        <div class="col-md-3">
                            <input type="submit" class="btn btn-success text-white btn-block rounded-0"
                                value="Chercher">
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="view-options bg-white py-3 px-3 d-md-flex align-items-center">
                        <div class="mr-auto">
                            <!--  <a href="#" class="icon-view view-module active"><span class="icon-view_module"></span></a>
                <a href="#" class="icon-view view-list"><span class="icon-view_list"></span></a> -->

                        </div>
                        <div class="ml-auto d-flex align-items-center">
                            <!--  <div>
                  <a href="#" class="view-list px-3 border-right active">All</a>
                  <a href="#" class="view-list px-3 border-right">Rent</a>
                  <a href="#" class="view-list px-3">Sale</a>
                </div>
 -->

                            <!-- <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select class="form-control form-control-sm d-block rounded-0">
                    <option value="">Order by</option>
                    <option value="">Price Ascending</option>
                    <option value="">Price Descending</option>
                  </select>
                </div> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--annonce1-->

    
                <!--se terminent a la fin des annonces-->






                 @if(isset($recherche))

                 <div class="site-section site-section-sm bg-light">
        <div class="container">
            <!--les deux div se terminent jusqu'aux nombres en bas 1,2,..-->

            <div class="row mb-5">
@if(count($recherche)>0)
@foreach($recherche as $item)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="property-entry h-100">
                            <a href="{{ route('acceuil.show',$item->id) }}"
                                class="property-thumbnail">
                                <div class="offer-type-wrap">
                                    <span class="offer-type bg-success py-2"
                                        href="{{ route('acceuil.show',$item->id) }}">Plus
                                        d'info</span>
                                    <!--<span class="offer-type bg-success py-2">Rent</span>-->
                                </div>
                                @php
                                    $photos = json_decode($item->images);
                                @endphp
                                <img src="{{ asset('uploads/'.$photos[0]) }}" alt="Image"
                                    height="220px;" width="400px;">
                            </a>
                            <div class="p-4 property-body">
                                <!--icon-heart nous mène en haut de la page seulement-->
                                <a href="{{ route('post.partage',$item->id) }}"
                                    class="property-favorite"><span id="iluke"><i class="fas fa-share"></i></span></a>
                                <h2 class="property-title"><a
                                        href="{{ route('acceuil.show',$item->id) }}">{{ $item->titre }}</a>
                                </h2>

                                <!--j'ai supprimée d-block pour qu'ils s'approchent-->
                                <span class="property-location mb-3 text-uppercase"><span
                                        class="property-icon icon-room"></span>{{ $item->ville }},{{ $item->quartier }}</span>

                                <strong
                                    class="property-price text-primary mb-3 d-block text-success">{{ $item->prix }}
                                    DH</strong>

                                <ul class="property-specs-wrap mb-3 mb-lg-0">
                                    <li>
                                        <span class="property-specs">Chambres</span>
                                        <span
                                            class="property-specs-number">{{ $item->nb_chambres }}<sup>+</sup></span>

                                    </li>
                                    <li>
                                        <span class="property-specs">Personnes</span>
                                        <span class="property-specs-number">{{ $item->nb_personnes }}</span>

                                    </li>
                                    <li>
                                        <span class="property-specs">Superficie</span>
                                        <span class="property-specs-number">{{ $item->superficie }}</span>

                                    </li>
                                </ul>

                                <!--  <span class="property-specs">Description</span> -->
                                <!-- <span>{{ $item->description }}</span> -->

                            </div>
                        </div>
                    </div>
                @endforeach
    @else

   
       <div class="">
                <div class="">
                    <div class="site-section-title">
                        <h2>Aucune Resultat à afficher</h2>
                    </div>
 <a type="submit" href="/" class="btn btn-outline-success">Retour</a>
                </div>
            </div>
<br>
      
       
@endif


@else

    


<div class="site-section site-section-sm bg-light">
        <div class="container">
            <!--les deux div se terminent jusqu'aux nombres en bas 1,2,..-->
    <div class="row mb-5">

             @foreach($bienimmobilier as $item)

                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="property-entry h-100">
                            <a href="{{ route('acceuil.show',$item->id) }}"
                                class="property-thumbnail">
                                <div class="offer-type-wrap">
                                    <span class="offer-type bg-success py-2"
                                        href="{{ route('acceuil.show',$item->id) }}">Plus
                                        d'info</span>
                                    <!--<span class="offer-type bg-success py-2">Rent</span>-->
                                </div>
                                @php
                                    $photos = json_decode($item->images);
                                @endphp
                                <img src="{{ asset('uploads/'.$photos[0]) }}" alt="Image"
                                    height="220px;" width="400px;">
                            </a>
                            <div class="p-4 property-body">
                                <!--icon-heart nous mène en haut de la page seulement-->
                                <a href="{{ route('post.partage',$item->id) }}"
                                    class="property-favorite"><span id="iluke"><i class="fas fa-share"></i></span></a>
                                <h2 class="property-title"><a
                                        href="{{ route('acceuil.show',$item->id) }}">{{ $item->titre }}</a>
                                </h2>

                                <!--j'ai supprimée d-block pour qu'ils s'approchent-->
                                <span class="property-location mb-3 text-uppercase"><span
                                        class="property-icon icon-room"></span>{{ $item->ville }},{{ $item->quartier }}</span>

                                <strong
                                    class="property-price text-primary mb-3 d-block text-success">{{ $item->prix }}
                                    DH</strong>

                                <ul class="property-specs-wrap mb-3 mb-lg-0">
                                    <li>
                                        <span class="property-specs">Chambres</span>
                                        <span
                                            class="property-specs-number">{{ $item->nb_chambres }}<sup>+</sup></span>

                                    </li>
                                    <li>
                                        <span class="property-specs">Personnes</span>
                                        <span class="property-specs-number">{{ $item->nb_personnes }}</span>

                                    </li>
                                    <li>
                                        <span class="property-specs">Superficie</span>
                                        <span class="property-specs-number">{{ $item->superficie }}</span>

                                    </li>
                                </ul>

                                <!--  <span class="property-specs">Description</span> -->
                                <!-- <span>{{ $item->description }}</span> -->

                            </div>
                        </div>
                    </div>
                @endforeach



                <!--annonce3-->


                <!--annonce4-->


                <!--annonce5-->


                <!--annonce6-->


                <!--annonce7-->

                <!--annonce8-->


                <!--annonce9-->

            </div>

            <!--les buttons 1,2,3,... en bas -->

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="d-flex justify-content-center">{!! $bienimmobilier->links() !!}</div>
                </div>
            </div>

        </div>
    </div>

    @endif

    <!--ici termine div container et le div avant -->

    <!--Why Choose Us?-->
    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <div class="site-section-title">
                        <h2>POURQUOI NOUS CHOISIR?</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis maiores quisquam saepe
                        architecto error corporis aliquam. Cum ipsam a consectetur aut sunt sint animi, pariatur
                        corporis, eaque, deleniti cupiditate officia.</p>
                </div>
            </div>

            <!--Research Subburbs-->
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <a href="#" class="service text-center">
                        <span class="icon flaticon-house"></span>
                        <h2 class="service-heading">Recherche</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt iure qui natus perspiciatis
                            ex odio molestia.</p>
                        <!--  <p><span class="read-more">Read More</span></p> -->
                    </a>
                </div>

                <!--Sold Locations-->
                <div class="col-md-6 col-lg-4">
                    <a href="#" class="service text-center">
                        <span class="icon flaticon-rent"></span>
                        <h2 class="service-heading">Maison à louer</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt iure qui natus perspiciatis
                            ex odio molestia.</p>
                        <!-- <p><span class="read-more">Read More</span></p> -->
                    </a>
                </div>

                <!--Security Priority-->
                <div class="col-md-6 col-lg-4">
                    <a href="#" class="service text-center">
                        <span class="icon flaticon-camera"></span>
                        <h2 class="service-heading">Sécurité Priorité</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt iure qui natus perspiciatis
                            ex odio molestia.</p>
                        <!--  <p><span class="read-more">Read More</span></p> -->
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--Recent Blog-->
    <div class="site-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <div class="site-section-title">
                        <h2>BLOG RÉCENT</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis maiores quisquam saepe
                        architecto error corporis aliquam. Cum ipsam a consectetur aut sunt sint animi, pariatur
                        corporis, eaque, deleniti cupiditate officia.</p>
                </div>
            </div>

            <div class="row">
                @foreach($nouv as $tem)
                    @php
                        $photos = json_decode($tem->images);
                    @endphp

                    <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('uploads/'.$photos[0]) }}" alt="Image"
                            height="220px;" width="350px;">
                        <div class="p-4 bg-white">
                            <span
                                class="d-block text-secondary small text-uppercase">{{ date('D, d M Y H:i',strtotime($tem->created_at)) }}</span>
                            <h2 class="h5 text-black mb-3"><a href="#">{{ $tem->titre }} by {{ $tem->name }}</a>
                            </h2>
                            <p>{{ $tem->description }}.</p>
                        </div>
                    </div>

                @endforeach

            </div>

        </div>
    </div>

    <!--Our Agents-->
    <div class="site-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7">
                    <div class="site-section-title text-center">
                        <h2>Quelque chose</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero magnam officiis ipsa eum
                            pariatur labore fugit amet eaque iure vitae, repellendus laborum in modi reiciendis quis!
                            Optio minima quibusdam, laboriosam.</p>
                    </div>
                </div>
            </div>

            <!--les images-->
            <!--Megan Smith-->
            <div class="row">
                <!--  <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">

              <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded mb-4">

              <div class="text">

                <h2 class="mb-2 font-weight-light text-black h4">Megan Smith</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. Totam atque corporis nisi, veniam non. Tempore cupiditate, vitae minus obcaecati provident beatae!</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>

            </div>
          </div>
           -->
                <!--Brooke Cagle-->
                <!-- <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">

              <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded mb-4">

              <div class="text">

                <h2 class="mb-2 font-weight-light text-black h4">Brooke Cagle</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cumque vitae voluptates culpa earum similique corrupti itaque veniam doloribus amet perspiciatis recusandae sequi nihil tenetur ad, modi quos id magni!</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>

            </div>
          </div> -->

                <!--Philip Martin-->
                <!--   <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">

              <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded mb-4">

              <div class="text">

                <h2 class="mb-2 font-weight-light text-black h4">Philip Martin</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illo iusto, inventore, iure dolorum officiis modi repellat nobis, praesentium perspiciatis, explicabo. Atque cupiditate, voluptates pariatur odit officia libero veniam quo.</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>

            </div>
          </div> -->
            </div>
        </div>
    </div>

    <!--About Homeland-->
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

                                <!--  <li><a href="/Contact">Contact</a></li> -->

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



<script>
    $(document).ready(function () {

        $('.dynamic').change(function () {
            if ($(this).val() != '') {
                var select = $(this).attr("id");
                var value = $(this).val();
                var dependent = $(this).data('dependent');
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{ route('acceuil.fetch') }}",
                    method: "POST",
                    data: {
                        select: select,
                        value: value,
                        _token: _token,
                        dependent: dependent
                    },
                    success: function (result) {
                        $('#' + dependent).html(result);
                    }

                })
            }
        });

        $('#ville').change(function () {
            $('#quartier').val('');

        });


    });

</script>
</body>

</html>