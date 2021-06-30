<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Location</title>



    <link rel="stylesheet" type="text/css" href="{{ asset('pubAnn/css/style1.css') }}">

   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font awesom cdn 5 -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->


    <!-- ---------------------------------------------------------------------------- -->

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css ">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">


    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/mediaelementplayer.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/fl-bigmug-line.css')}}">


    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">





    <!-- ----------------------------------------------------------------------------------------------- -->




    <link rel="stylesheet" type="text/css"
        href="{{ asset('bootstrap-4.4.1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('pubAnn/css/style1.css') }}">

<!-- font awesome -->

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- bootstrap 4.5.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

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
        </div> 
        <!-- .site-mobile-menu -->

        <div class="site-navbar mt-4">
            <div class="container py-1">
                <div class="row align-items-center">
                    <div class="col-8 col-md-8 col-lg-4">
                        <h1 class="mb-0"><a href="/" class="text-white h2 mb-0"><strong>Location<span class="text-danger">.</span></strong></a></h1>
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
                                    </ul>
                                </li>
                                <li><a href="/apropos">À Propos</a></li>
                                <li><a href="/contact">Contactez Nous</a></li>
                                @guest
                                    <li><a href="/connecter">Se Connecter</a></li>
                                @else
                                  @if(auth()->user()->is_admin == 1)
                                    <li class="has-children">
                                        <a href="/profile"><img src="{{ Auth::user()->profile_image }}" width="60px"
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

    <div class="slide-one-item home-slider owl-carousel">
        <div class="site-blocks-cover overlay" style="background-image: url({{asset('images/hero_bg_1.jpg')}});" data-aos="fade"
            data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-10">
                        <!--  <span class="d-inline-block bg-success text-white px-3 mb-3 property-offer-type rounded">À Louer</span> -->
                        <h1 class="mb-2">
                            <!-- quelque chose -->
                        </h1>
                        <p class="mb-5"><strong class="h2 text-success font-weight-bold">
                                <!-- prix --></strong></p>
                        <!--  <p><a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">Voir Details</a></p> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="site-blocks-cover overlay" style="background-image: url({{asset('images/hero_bg_2.jpg')}});" data-aos="fade"
            data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-10">
                        <!--  <span class="d-inline-block bg-danger text-white px-3 mb-3 property-offer-type rounded">À Louer</span> -->
                        <h1 class="mb-2"></h1>
                        <p class="mb-5"><strong class="h2 text-success font-weight-bold"></strong></p>
                        <!--  <p><a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">Voir Details</a></p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div style="width: 40%;margin: 25px; margin-left: 70px; display: inline-block;">
            <h4>Cherchez Location</h4>
            <hr>
            <form action="{{ route('web.search') }}" method="GET">
                <div class="form-group">
                    <div style="display: flex; flex-direction: row;">
                        <input type="text" class="form-control" name="query" placeholder="Recherchez  ici ....">&nbsp;
                        <button type="submit" class="btn btn-primary" style="height: 38px;"> <i class="fas fa-search"
                                style="font-size: 25px ; "></i></button>
                    </div>
                </div>
            </form>
        </div>
        <!-- AFFICHAGE DES POSTE  -->
        <div style="display: grid;grid-template-columns: 1fr 2fr;grid-gap:20px; margin-right: 40px;  ">
            <div class="row" style="width: 100%;">
                <div class="col-md-6" style="margin-top: 40px;">


<!-- CAS 1 : EFECTUER RECGERCHE  -->
@if(isset($search))          
    @if(count($search)>0)
        @foreach($search as $item)
        <!-- SI  UN BIEN IMMOBILIER A ETE PARTAGER -->
            @if($item->id_imm!=0 )
                <div class="col-md-8">
                    <div class="media g-mb-30 media-comment"
                        style="left:0px; width: 800px; margin-right: 100px; margin-top: 10px;"><br> <br> <br>
                            <!-- img -->
                            <a href="{{ route('profile.user',$item->user->id) }}" style="cursor: pointer;"><img
                                                class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15"
                                                src="{{ URL::asset($item->user->profile_image) }}"
                                                alt="{{ $item->user->profile_image }}"></a>
                <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30" style="border-radius: 20px;  ">
                <div style=" display:   flex; flex-direction: row;margin-bottom: 20px">
                                    <div class="g-mb-15" style="width: 50%; padding-right: 10px;">
                                     <a href="{{ route ('profile.user',$item->user->id) }} " style="cursor: pointer;">
                                      <h5 class="h5 g-color-gray-dark-v1 mb-0" style="color: #007bff;">{{ $item->user->name }}</h5></a>  <hr>
                                        <div><i class="fas fa--marker-alt"> {{ $item->titre }}</i></div>
                                         
                                           
                                                    
                                                    <h4 class="h5 g-color-gray-dark-v1 mb-0"></h4>
                                                    <p>{{ $item->description }}</p>

                                                     <div class="row">
                                             <div class="col-md-6"><i class="fas fa-map-marker-alt"></i> : {{ $item->location }}</div>
                                             <div class="col-md-6">  <i class="fas fa-user-friends"></i> : {{ $item->nb_personnes }} Personnes</div>
                                            </div>

                                             
                                             <div class="row">
                                             <div class="col-md-4 col-md-offset-4 text-md-right" style="left:200px;">
                                                 <span
                                                        class="g-color-gray-dark-v4 g-font-size-12">{{$item->created_at->diffForhumans() }}</span>
                                             </div>
                                             </div>
                                    </div>
                                                <!-- --------------------------------------------------------- -->
                    <div style="  width:  50% ; ">
                        <div class="property-entry h-100">
                            <a href="{{ route('acceuil.show',$item->id) }}" class="property-thumbnail">
                            <div class="offer-type-wrap">
                               <span class="offer-type bg-info">Plus d'info</span>
                            </div>
                                @php
                                $photos = json_decode($item->bi->images);
                                @endphp
                             <img src="{{ asset('uploads/'.$photos[0]) }}" alt="Image" height="220px;"width="400px;">    </a>                 
                            <div class="p-4 property-body">                  
                                <h2 class="property-title">
                                    <a href="{{ route('acceuil.show',$item->id) }}">{{ $item->bi->titre }}</a>
                                </h2>
                                <span class="property-location d-block mb-3 text-uppercase">
                                   <span class="property-icon icon-room"></span>{{ $item->bi->ville }},{{ $item->bi->quartier }}
                                </span>
                                <strong class="property-price text-primary mb-3 d-block text-success">{{$item->bi->prix }} DH
                                </strong>
                                    <ul class="property-specs-wrap mb-3 mb-lg-0">
                                        <li>
                                          <span class="property-specs">Chambres</span>
                                            <span class="property-specs-number">{{ $item->bi->nb_chambres }}<sup>+</sup></span>
                                        </li>
                                        <li>
                                           <span class="property-specs">Personnes</span>
                                           <span class="property-specs-number">{{ $item->bi->nb_personnes }}</span>
                                        </li>
                                        <li>
                                          <span class="property-specs">Superficie</span>
                                          <span class="property-specs-number">{{ $item->bi->superficie }}</span>
                                        </li>
                                        </ul>
                            </div>
                         </div>
                    </div>
                </div>   <hr>

                                       <ul class="list-inline d-sm-flex my-0">
                                           <div class="cont">
                                                <li class="list-inline-item g-mr-20">
                                                <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                            <button class="like__btn" style="  font-size: 10px; 
                                                                              font font-family: 'Open sans', sans-serif; 
                                                                              border: none; 
                                                                              background-color:#fafafa
                                                                              border-radius: 5px;
                                                                              cursor: pointer;
                                                                              outline: none; "> 
                                                <span id="icon"><i class="far fa-thumbs-up" style="font-size: 20px;"></i></span>
                                            </button>
                                            <input type="number" id="input1" value="0" name="">Likes
                                                </a>
                                                </li>
                                                <li class="list-inline-item g-mr-20">
                                                <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover"
                                                            href="#!">
                                                </a>
                                                </li>
                                            </div>
                                            <li class="list-inline-item ml-auto">
                                                <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="{{ route('post.show',[$item->id,0])}}">
                                                        <i class="fas fa-comments"></i>
                                                        Commentaires
                                                </a>
                                            </li>
                                        </ul>
                </div>
                    </div>
                </div>

<!-- CAS : PAS DE PARTAGE DE BIEN IMMOBILIER  -->
            @else
                <div class="col-md-8">
                   <div class="media g-mb-30 media-comment" style="left:0px; width: 800px; margin-right: 100px;                                            margin-top: 10px;"> <br> <br> <br>
                    <!-- img -->
                        <a href="{{ route ('profile.user',$item->user->id) }}" style="cursor: pointer;"><img
                                                class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15"
                                                src="{{ URL::asset($item->user->profile_image) }}"
                                                alt="{{ $item->user->profile_image }}">
                        </a>
                        <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30" style="border-radius: 20px;  ">
                            <div class="g-mb-15" style=" padding-right: 10px;">
                                <a href="{{ route ('profile.user',$item->user->id) }}" style="cursor: pointer;">
                                    <h5 class="h5 g-color-gray-dark-v1 mb-0" style="color: #007bff;">
                                      {{ $item->user->name }}
                                    </h5>
                                </a><hr>
                                <div><i class="fas fa--marker-alt"> {{ $item->titre }}</i></div>
                               
                                <h4 class="h5 g-color-gray-dark-v1 mb-0"></h4>
                                <p>{{ $item->description }}</p>
                                 <div class="row">
                                             <div class="col-md-6"><i class="fas fa-map-marker-alt"></i> : {{ $item->location }}</div>
                                             <div class="col-md-6">  <i class="fas fa-user-friends"></i> : {{ $item->nb_personnes }} Personnes</div>
                                            </div>

                                             
                                             <div class="row">
                                             <div class="col-md-4 col-md-offset-4 text-md-right" style="left:450px;">
                                                 <span
                                                        class="g-color-gray-dark-v4 g-font-size-12">{{$item->created_at->diffForhumans() }}</span>
                                             </div>
                                             </div>
                            </div><hr>                    
                               <ul class="list-inline d-sm-flex my-0">
                                    <div class="cont">
                                        <li class="list-inline-item g-mr-20">
                                             <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover"
                                                            href="#!">
                                                <button class="like__btn" style="font-size: 10px;   
                                                                                 font font-family: 'Open sans', sans-serif; 
                                                                                 border: none; 
                                                                                 background-color:#fafafa
                                                                                 border-radius: 5px;
                                                                                 cursor: pointer;
                                                                                 outline: none;">
                                                     <span id="icon"><i class="far fa-thumbs-up"
                                                          style="font-size: 20px;"></i>
                                                     </span>
                                                </button>
                                              <input type="number" id="input1" value="0" name="">Likes  
                                              </a>
                                        </li>
                                        <li class="list-inline-item g-mr-20">
                                                <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!"></a>
                                        </li>
                                    </div>
                                        <li class="list-inline-item ml-auto">
                                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover"
                                                        href="{{route('post.show',[$item->id,0])}}">
                                                        <i class="fas fa-comments"></i>
                                                        Commentaires
                                            </a>
                                        </li>
                                </ul>
                        </div>
                    </div>
                </div>

            @endif
        @endforeach
    @else
    <div class="container">
     <div class="row">
        <div class="col-xs-12 col-md-8" style="width: 5000px"><h2>Aucune Resultat à afficher</h2></div>
        <div class="col-xs-6 col-md-4"><a type="submit" href="/annonces" class="btn btn-outline-primary">Retour</a>
        </div>
     </div>
    </div>
       
    @endif
    
   <!-- CAS PAS DE RECHERCHE  -->
@else
    @if(isset($posts))
        @foreach($posts as $item)
            @if($item->id_imm!=0 )
                                <div class="col-md-8">
                                    <div class="media g-mb-30 media-comment"
                                        style="left:0px; width: 800px; margin-right: 100px; margin-top: 10px;">
                                        <br> <br> <br>
                                        <!-- img -->
                                        <a href="{{ route('profile.user',$item->user->id) }}"
                                            style="cursor: pointer;"><img
                                                class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15"
                                                src="{{ URL::asset($item->user->profile_image) }}"
                                                alt="{{ $item->user->profile_image }}"></a>


                                        <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30"
                                            style="border-radius: 20px;  ">
                                            <div style=" display:   flex; flex-direction: row;margin-bottom: 20px">
                                                <div class="g-mb-15" style="width: 50%; padding-right: 10px;">
                                                    <a href="{{ route ('profile.user',$item->user->id) }} "
                                                        style="cursor: pointer;">
                                                        <h5 class="h5 g-color-gray-dark-v1 mb-0"
                                                            style="color: #007bff;">{{ $item->user->name }}</h5>
                                                    </a>

                                                    <hr>

                                                    <div><i class="fas fa--marker-alt"> {{ $item->titre }}</i></div>
                                                    
                                                    <h4 class="h5 g-color-gray-dark-v1 mb-0"></h4>

                                                    <p >{{ $item->description }}</p>

                                                     <div class="row">
                                             <div class="col-md-6"><i class="fas fa-map-marker-alt"></i> : {{ $item->location }}</div>
                                             <div class="col-md-6">  <i class="fas fa-user-friends"></i> : {{ $item->nb_personnes }} Personnes</div>
                                            </div>

                                             
                                             <div class="row">
                                             <div class="col-md-4 col-md-offset-4 text-md-right" style="left:200px;">
                                                 <span
                                                        class="g-color-gray-dark-v4 g-font-size-12">{{$item->created_at->diffForhumans() }}</span>
                                             </div>
                                             </div>


                                                </div>
                                                <!-- --------------------------------------------------------- -->




                                                <div style="  width:  50% ; ">
                                                    <div class="property-entry h-100">
                                                        <a href="{{ route('acceuil.show',$item->id) }}" class="property-thumbnail">
                                                            <div class="offer-type-wrap">
                                                                <span class="offer-type bg-info">Plus d'info</span>
                                                            </div>
                                                            @php
                                                                $photos = json_decode($item->bi->images);
                                                            @endphp
                                                            <img src="{{ asset('uploads/'.$photos[0]) }}"
                                                                alt="Image" height="220px;" width="400px;">
                                                        </a>
                                                        <div class="p-4 property-body">
                                                            
                                                            <h2 class="property-title"><a
                                                                    href="{{ route('acceuil.show',$item->id) }}">{{ $item->bi->titre }}</a>
                                                            </h2>
                                                            <span
                                                                class="property-location d-block mb-3 text-uppercase"><span
                                                                    class="property-icon icon-room"></span>{{ $item->bi->ville }},{{ $item->bi->quartier }}</span>
                                                            <strong
                                                                class="property-price text-primary mb-3 d-block text-success">{{ $item->bi->prix }}
                                                                DH</strong>
                                                            <ul class="property-specs-wrap mb-3 mb-lg-0">
                                                                <li>
                                                                    <span class="property-specs">Chambres</span>
                                                                    <span
                                                                        class="property-specs-number">{{ $item->bi->nb_chambres }}<sup>+</sup></span>

                                                                </li>
                                                                <li>
                                                                    <span class="property-specs">Personnes</span>
                                                                    <span
                                                                        class="property-specs-number">{{ $item->bi->nb_personnes }}</span>

                                                                </li>
                                                                <li>
                                                                    <span class="property-specs">Superficie</span>
                                                                    <span
                                                                        class="property-specs-number">{{ $item->bi->superficie }}</span>

                                                                </li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>

                                            <ul class="list-inline d-sm-flex my-0">
                                                <div class="cont">
                                                    <li class="list-inline-item g-mr-20">
                                                        <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover"
                                                            href="#!">

                                                            <button class="like__btn" style="  
                          
                           font-size: 10px; 
                           font font-family: 'Open sans', sans-serif; 
                            border: none; 
                            background-color:#fafafa
                             border-radius: 5px;
                             cursor: pointer;
                              outline: none; 
                   ">
                                                                <span id="icon"><i class="far fa-thumbs-up"
                                                                        style="font-size: 20px;"></i></span>


                                                            </button>
                                                            <input type="number" id="input1" value="0" name="">Likes



                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item g-mr-20">
                                                        <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover"
                                                            href="#!">


                                                        </a>
                                                    </li>
                                                </div>
                                                <!-- 
                 <li class="list-inline-item ml-auto">
                  <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                   <i class="fas fa-comment-alt"></i>
                   Chat
                  </a>
                </li> -->
                                                <li class="list-inline-item ml-auto">
                                                    <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover"
                                                        href="{{ route('post.show',[$item->id,0])}}">
                                                        <i class="fas fa-comments"></i>
                                                        Commentaires
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>



                            @else

                                <div class="col-md-8">
                                    <div class="media g-mb-30 media-comment"
                                        style="left:0px; width: 800px; margin-right: 100px; margin-top: 10px;">
                                        <br> <br> <br>
                                        <!-- img -->
                                        <a href="{{ route ('profile.user',$item->user->id) }}"
                                            style="cursor: pointer;"><img
                                                class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15"
                                                src="{{ URL::asset($item->user->profile_image) }}"
                                                alt="{{ $item->user->profile_image }}"></a>


                                        <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30"
                                            style="border-radius: 20px;  ">
                                            <!-- <div style=" ">  -->
                                            <div class="g-mb-15" style=" padding-right: 10px;">
                                                <a href="{{ route ('profile.user',$item->user->id) }}"
                                                    style="cursor: pointer;">
                                                    <h5 class="h5 g-color-gray-dark-v1 mb-0" style="color: #007bff;">
                                                        {{ $item->user->name }}</h5>
                                                </a>

                                                <hr>

                                                <div><i class="fas fa--marker-alt"> {{ $item->titre }}</i></div>
                                                


                                               


                                                <h4 class="h5 g-color-gray-dark-v1 mb-0"></h4>

                                                <p>{{ $item->description }}</p>


                                             <div class="row">
                                             <div class="col-md-6"><i class="fas fa-map-marker-alt"></i> : {{ $item->location }}</div>
                                             <div class="col-md-6">  <i class="fas fa-user-friends"></i> : {{ $item->nb_personnes }} Personnes</div>
                                            </div>

                                             
                                             <div class="row">
                                             <div class="col-md-3 col-md-offset-3 text-md-right" style="left:500px;">
                                                 <span
                                                        class="g-color-gray-dark-v4 g-font-size-12">{{$item->created_at->diffForhumans() }}</span>
                                             </div>
                                             </div>
                                                   


                                            </div>
                                            <hr>

                                            <ul class="list-inline d-sm-flex my-0">
                                                <div class="cont">
                                                    <li class="list-inline-item g-mr-20">
                                                        <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover"
                                                            href="#!">

                                                            <button class="like__btn" style="  
                          
                           font-size: 10px; 
                           font font-family: 'Open sans', sans-serif; 
                            border: none; 
                            background-color:#fafafa
                             border-radius: 5px;
                             cursor: pointer;
                              outline: none; 
                   ">
                                                                <span id="icon"><i class="far fa-thumbs-up"
                                                                        style="font-size: 20px;"></i></span>


                                                            </button>
                                                            <input type="number" id="input1" value="0" name="">Likes



                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item g-mr-20">
                                                        <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover"
                                                            href="#!">


                                                        </a>
                                                    </li>
                                                </div>
                                                <!-- 
                 <li class="list-inline-item ml-auto">
                  <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                   <i class="fas fa-comment-alt"></i>
                   Chat
                  </a>
                </li> -->
                                                <li class="list-inline-item ml-auto">
                                                    <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover"
                                                        href="{{route('post.show',[$item->id,0])}}">
                                                        <i class="fas fa-comments"></i>
                                                        Commentaires
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            @endif
                           

                        @endforeach
                    @endif

                   

@endif                 

             




                </div>
            </div>



        </div>
    </div>


    <br> <br>
@if(isset($posts))
    <div class="pagination-block" style="align-self: center;align-items: center;position: relative; left:350px;">
     
       {!! $posts->links('layouts.paginationlinks') !!}
    </div>
@endif
@if(isset($search))
    <div class="pagination-block" style="align-self: center;align-items: center;position: relative; left:350px;">
     
       {!! $search->links('layouts.paginationlinks') !!}
    </div>
@endif
    </div>

    <!-- pourquoi nous choisir  -->
<!-- footer -->
 

<!-- fin de footer -->
    <script type="text/javascript">
        // let likebtn=document.querySelector('#likebtn'); 
        // let dislikebtn=document.querySelector('#dislikebtn'); 
        // let input1=document.querySelector('#input1'); 
        // let input2=document.querySelector('#input2'); 

        // likebtn.addEventListener('click',()=>{


        //   input1.style.color="green";
        //   document.getElementById('input1').value=parseInt(input1.value)+1 ;



        // })

        // dislikebtn.addEventListener('click',()=>{


        //   input2.style.color="#ff0000";
        //    document.getElementById('input2').value=parseInt(input2.value)+1 ;


        // })
        let likebtn = document.querySelector('.like__btn');
        let likeIcon = document.querySelector('#icon');
        let count = document.querySelector('#input1');
        let jbtn = document.querySelector('icon-heart-o');
        let jIcon = document.querySelector('#jbtn');
        let clicked = false;



        likebtn.addEventListener("click", () => {
            if (!clicked) {
                clicked = true;
                document.getElementById('input1').value = parseInt(count.value) + 1;
                likeIcon.innerHTML = `<i class="fas fa-thumbs-up"  style="color: blue;font-size: 20px;"></i>`;




            } else {
                clicked = false;
                document.getElementById('input1').value = parseInt(count.value) - 1;
                likeIcon.innerHTML = `<i class="far fa-thumbs-up"  style="color: blue;font-size: 20px;"></i>`;
            }








        });

    </script>

    <!-- ------------------------------------------------------------- -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/mediaelement-and-player.min.js')}}"></script>
    <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>

    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>
