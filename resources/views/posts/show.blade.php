<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('pubAnn/css/style1.css') }}">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
<script src="https://kit.fontawesome.com/daf86e4a98.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font awesom cdn 5 -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
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

    <!-- ---------------------------------------------------------------------------- -->

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css ">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <!-- Comments -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--

            CSS
            ============================================= -->
    <link rel="stylesheet" href="{{ asset('comment/css/linearicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('comment/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('comment/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('comment/css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('') }}comment/css/main.css" />

    <!-- style speciale -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('bootstrap-4.4.1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('pubAnn/css/style1.css') }}">
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



    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<style type="text/css">
    .date {
        font-size: 12px;
    }
    *::-webkit-scrollbar {
  width: 10px;
}

*::-webkit-scrollbar-track {
  background: transparent;
}

*::-webkit-scrollbar-thumb {
  background-color: #D2D2D2;
  border-radius: 10px; 
}
@media only screen and (max-width: 768px) {
    #main{
        flex-direction: column;
    }
}

</style>

    <!-- Comments -->

</head>

<div class="site-navbar m-0 p-0" style="position:relative; background-image: url({{asset('images/hero_bg_1.jpg')}})">
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
                                  @if(auth()->user()->is_admin == 1)
                                    <li class="has-children">
                                        <a href="/profile"><img src="{{ asset(Auth::user()->profile_image) }}" width="60px"
                                                style="border-radius: 50%;height: 40px; width: 40px "> </a>
                                        <ul class="dropdown arrow-top">
                                             <li><a href="/dashboard">Dashboard</a></li>
                                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Déconnexion</a>
                                            </li>
                                            <form id="logout-form" action="{{ route('logout') }}"
                                                method="POST" class="d-none">
                                                @csrf
                                            </form> 
                                        </ul>
                                    </li>
                                     @else
                                    <li class="has-children">
                                        <a href="/profile"><img src="{{ asset(Auth::user()->profile_image) }}" width="60px"
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
<body style="margin: 0 auto;overflow-x: hidden;">
   
       <a href="/annonces"><button type="button" class="btn btn-link" style="color:black; font-weight: 500;"><span style="font-size: 0.9em;"><i class="fas fa-arrow-left"></i></span>&nbsp;Retour</button></a>
  

    <div class="container d-flex " id="main">
        <div class="container d-flex w-50" style="position:relative;">

            <a href="{{ route ('profile.user',$post->user->id) }}"
                style="cursor: pointer;"><img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15"
                    src="{{ URL::asset($post->user->profile_image) }}"
                    alt="{{ $post->user->profile_image }}"></a>
@if($post->id_imm!=0 )
                <a onclick="showbi()" style="top:1rem;right: 2rem;position:absolute;cursor:pointer;"><i class="far fa-eye"></i></a>
                @endif  

            <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30" id="post" style="border-radius: 20px; height:500px;" >
                <!-- <div style=" ">  -->
                
                <div class="g-mb-15" style=" padding-right: 10px;">
                    <a href="{{ route ('profile.user',$post->user->id) }}"
                        style="cursor: pointer;">
                        <h5 class="h5 g-color-gray-dark-v1 mb-0" style="color: #007bff;">
                            {{ $post->user->name }}</h5>
                    </a>

                    <hr>

                    <div><i class="fas fa--marker-alt" style="font-family:  sans-serif; "> {{ $post->titre }}</i>
                    </div>
                    

                    <div><span
                            class="g-color-gray-dark-v4 g-font-size-12">{{ $post->created_at->diffForhumans() }}</span>
                    </div>
                    <h4 class="h5 g-color-gray-dark-v1 mb-0"></h4>

                    <p>{{ $post->description }}</p>


                                                     <div class="row">
                                             <div class="col-md-6"><i class="fas fa-map-marker-alt"></i> : {{ $post->location }}</div>
                                             <div class="col-md-6">  <i class="fas fa-user-friends"></i> : {{ $post->nb_personnes }} Personnes</div>
                                            </div>

                </div>
                <hr>
                <section class="commentform-area" style="margin-top: 5px;">
                @guest
                    <div class="container">
                        <h4>Veuillez vous connecter pour commenter</h4>
                    </div>

                       @else

                 
                        <form action="{{ route ('comments.store', $post->id ) }}"
                            method="POST">
                            <div class="row">
                                <!-- mseht textarea -->
                                    @csrf
                                    <textarea style="border-radius: 30px;" class="form-control" name="contenue"
                                        placeholder="Taper un commentaire" onfocus="this.placeholder = 'Votre Commentaire'"
                                        onblur="this.placeholder = 'Votre Commentaire'" required=""></textarea>
                             
                               

                            </div> <button type="submit" class="primary-btn m-2" href="#">Envoyer</button>
                        </form>
              

                @endguest
            </section>
            </div>
            @if($post->id_imm!=0 )
            <div class="property-entry h-100" id="bienimmobilier" style="position:static; display:none;">
                                                        <a href="{{ route('acceuil.show',$post->id) }}" class="property-thumbnail">
                                                            <div class="offer-type-wrap">
                                                                <span class="offer-type bg-info">Plus d'info</span>
                                                            </div>
                                                            @php
                                                                $photos = json_decode($post->bi->images);
                                                            @endphp
                                                            <img src="{{ asset('uploads/'.$photos[0]) }}"
                                                                alt="Image" height="220px;" width="400px;">
                                                        </a>
                                                        <div class="p-4 property-body">
                                                            
                                                            <h2 class="property-title"><a
                                                                    href="{{ route('acceuil.show',$post->id) }}">{{ $post->bi->titre }}</a>
                                                            </h2>
                                                            <span
                                                                class="property-location d-block mb-3 text-uppercase"><span
                                                                    class="property-icon icon-room"></span>{{ $post->bi->ville }},{{ $post->bi->quartier }}</span>
                                                            <strong
                                                                class="property-price text-primary mb-3 d-block text-success">{{ $post->bi->prix }}
                                                                DH</strong>
                                                            <ul class="property-specs-wrap mb-3 mb-lg-0">
                                                                <li>
                                                                    <span class="property-specs">Chambres</span>
                                                                    <span
                                                                        class="property-specs-number">{{ $post->bi->nb_chambres }}<sup>+</sup></span>

                                                                </li>
                                                                <li>
                                                                    <span class="property-specs">Personnes</span>
                                                                    <span
                                                                        class="property-specs-number">{{ $post->bi->nb_personnes }}</span>

                                                                </li>
                                                                <li>
                                                                    <span class="property-specs">Superficie</span>
                                                                    <span
                                                                        class="property-specs-number">{{ $post->bi->superficie }}</span>

                                                                </li>
                                                            </ul>

                                                        </div>
                                                    </div>
            @endif
        </div>
        <div class="w-50 ml-4" style="height:500px;overflow:scroll;">


            <div class="container">
                <div class="row flex-column">
                    <!-- commentaire  -->
                    @foreach($post->comments as $item)

                        <div class="comment">
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex" style="background-color:#fafafa !important;border-radius: 30px;padding: 5px; padding-left: 7px; margin-bottom: 5px;">
                                        <div class="thumb">
                                            <img src="{{ URL::asset($item->user->profile_image) }}" alt=""
                                                style="border-radius: 50%; height: 35px; width: 35px; margin:0.2rem;" />
                                            <img src="" alt="" />
                                        </div>
                                        <div class="desc">
                                            <h5 style="margin:0;"><a href="#" style="font-size:16px; margin:0;">{{ $item->user->name }}</a></h5>
                                            <p class="date" style="margin:0; font-size:10px;">
                                                {{ $item->created_at->format('D, d M Y H:i') }}
                                            </p>
                                            <hr class="col-10" style="margin-top:2px;margin-bottom:2px;">
                                            <p class="comment" style="margin:0;">
                                                &nbsp; &nbsp; &nbsp; {{ $item->contenue }}
                                            </p>

                                          


                                        </div> 
                                         <div class="col justify-content-md-center">
                                                @if($item->user->id==Auth::id())
                                                    <a href="{{ route('comments.destroy',$item->id) }}">
                                                    <i class="far fa-trash-alt"></i>
                                                        </a>
                                                  



                                                    <a type="button" data-toggle="modal"
                                                        data-target="#ModifyComment{{ $item->id }}"
                                                        data-whatever="@mdo"><i class="far fa-edit"></i>



                                                    <blade
                                                        include|(%26%2339%3Bmodal.commentEdit%26%2339%3B)%20%20%20%0D />

                                                    </a>
                                                @endif

                                                <a style="cursor: pointer;"
                                                    id="rep"
                                                    onclick="showReplyForm('{{ $item->id }}','{{ $item->user->name }}')"><i class="fas fa-reply-all"></i></a>

                         @include('modal.commentEdit')
                                            </div>
                                    </div>




                                </div>
                            </div>


                            @foreach($item->reponse as $reply)
                                <div class="single-comment justify-content-between d-flex" style="margin-left: 50px;">
                                    <div class="single-comment justify-content-between d-flex" style="padding: 5px;">
                                        <div class="user justify-content-between d-flex">
                                            <div class="thumb" style="margin-right:5px;">
                                                <!-- image  -->
                                                <img src="{{ URL::asset($reply->user->profile_image) }}" alt=""
                                                    style="border-radius: 50%; height: 35px; width: 35px" />
                                                <img src="img/asset/c3.jpg" alt="" />
                                            </div>
                                            <div class="desc" style="background-color:rgba(0, 123, 255, 0.4); border-radius: 20px;padding: 5px; padding: 7px; margin-bottom: 5px;">
                                                <h5 style="margin:0;"><a href="#" style="font-size:17px;color:white;">{{ $reply->user->name }}</a></h5>
                                                <p class="date" style="font-size:10px;margin-bottom:2px;">
                                                    {{ $reply->created_at->format('D, d M Y H:i') }}</p>
                                                    <p class="comment" style="margin:0;">
                                                    &nbsp;&nbsp;&nbsp;{{ $reply->contenue }}
                                                </p>
                                               
                                            </div><div class="col" style="margin:0;">

                                                   

                                                    <!--  <a  href="{{ route('post.show',[0,$reply->id]) }}" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style=""> -->
                                                @if($reply->user->id==Auth::id())
                                                     <a
                                                        href="{{ route('comments.destroy',$reply->id) }}"><i class="far fa-trash-alt"></i></a>
                                                    <a type="button" data-toggle="modal"
                                                        data-target="#ModifyComment{{ $reply->id }}"
                                                        data-whatever="@mdo"><i class="far fa-edit"></i></span>
                                                        
                                                        <blade
                                                        include|(%26%2339%3Bmodal.commentEdit%26%2339%3B)%20%20%20%0D />
                                                        
                                                        </a>
                                                @endif

                                                </div>
                                        </div>

                                    </div> 
                                </div>
                                @include('modal.replyEdit')
                            @endforeach








                            <div class="comment-list left-padding" id="reply-form-{{ $item->id }}"
                                style="display: none">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/asset/c2.jpg" alt="" />
                                        </div>
                                        <div class="desc">
                                            @guest
                                                <div class="container">
                                                    <h4>Please login to comment</h4>
                                                </div>

                                            @else

                
                                                <div class="row flex-row d-flex">
                                                    <form
                                                        action="{{ route('comments.reponse',$item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <div class="col-lg-12">
                                                            <textarea id="reply-form-{{ $item->id }}-text" style="border-radius:20px;" cols="50"
                                                                rows="2" class="form-control mb-10" name="contenue"
                                                                placeholder="Messege" onfocus="this.placeholder = ''"
                                                                onblur="this.placeholder = 'Messege'"
                                                                required=""></textarea>
                                                        </div>
                                                        <button type="submit" class="btn btn-dark ml-3"
                                                            style="background-color: #007bff;">réponse</button>
                                                    </form>
                                                </div>
                                            @endguest
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>

<script>
function showbi(){
   if (document.getElementById("bienimmobilier").style.display=="none"){
        document.getElementById("bienimmobilier").style.display = "inline";
        document.getElementById("post").style.display = "none";
    } else {
        document.getElementById("bienimmobilier").style.display ="none";
        document.getElementById("post").style.display = "inline";
    }
}
</script>
    <!--------------------------------------------------- Comments------------------------------------------------>

    <script src="comment/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="{{ asset('comment/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('comment/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('comment/s/parallax.min.js') }}"></script>
    <script src="{{ asset('comment/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('comment/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('comment/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('comment/js/main.js') }}"></script>


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
        function showReplyForm(commentId, user) {
            var x = document.getElementById(`reply-form-${commentId}`);
            var input = document.getElementById(`reply-form-${commentId}-text`);

            if (x.style.display === "none") {
                x.style.display = "block";
                input.innerText = `@${user} `;

            } else {
                x.style.display = "none";
            }
        }

    </script>


</body>

</html>
