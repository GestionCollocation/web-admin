<!DOCTYPE html>
<html lang="en">

<head>
    <title>Location</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

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
            </div>
        </div>
    </div>


    <!--les images du background-->
    <div class="site-blocks-cover inner-page-cover overlay"
        style="background-image: url({{ asset('images/hero_bg_1.jpg') }});" data-aos="fade"
        data-stellar-background-ratio="0.5">
        <div class="container-fluid">
        </div>
    </div>

    <div style="position: absolute;top:15%;">
        <!-- <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-2" style="color: #fff">Publier Bien Immobilier</h1>
          </div>
        </div> -->

        <fieldset style="background:#EFEFEF;border:1px solid #CCC;margin:50px 200px;padding:30px">

            <form action="{{ route('profile.update',$bienimm->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                {{ csrf_field() }}

                <h3
                    style="font-weight:bold;background:#FFF;border:1px solid #CCC;padding:5px;margin-top:-50px;width:250px;font-size:25px">
                    Informations</h3>


                <!--success-->
                @if($message = Session::get('success'))
                    <div class="alert alert-success">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                <!--errorr-->
                @if($message = Session::get('error'))
                    <div class="alert alert-danger">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <!------------Titre------------>

                <span style="display: inline-block;width: 49%">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Titre</label>
                        <input type="text" name="titre" value="{{ $bienimm->titre }}" class="form-control"
                            placeholder="Entrez le titre du bien immobilier">
                    </div>
                </span>

                <!------------Ville------------>

                <span style="display: inline-block;width: 49%;margin-left:9px">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Ville</label>
                        <input type="text" name="ville" value="{{ $bienimm->ville }}" class="form-control"
                            placeholder="Entrez la ville">
                    </div>
                </span>

                <!------------Quartier------------>

                <span style="display: inline-block;width: 49%">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Quartier</label>
                        <input type="text" name="quartier" value="{{ $bienimm->quartier }}" class="form-control"
                            placeholder="Entrez le quaetier">
                    </div>
                </span>

                <!------------Superficie------------>

                <span style="display: inline-block;width: 49%;margin-left:9px">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Superficie</label>
                        <input type="text" name="superficie" value="{{ $bienimm->superficie }}" class="form-control"
                            placeholder="Entrez la superficie">
                    </div>
                </span>

                <!------------Nombre de chambres------------>

                <span style="display: inline-block;width: 49%">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nombre de chambres</label>
                        <input type="number" name="nb_chambres" value="{{ $bienimm->nb_chambres }}"
                            class="form-control" placeholder="Entrez nombre de chambres">
                    </div>
                </span>

                <!------------Nombre de personnes------------>

                <span style="display: inline-block;width: 49%;margin-left:9px">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nombre de personnes</label>
                        <input type="number" name="nb_personnes" value="{{ $bienimm->nb_personnes }}"
                            class="form-control" placeholder="Entrez nombre de personnes">
                    </div>
                </span>

                <!------------Prix------------>

                <span style="display: inline-block;width: 49%">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Prix</label>
                        <input type="text" name="prix" value="{{ $bienimm->prix }}" class="form-control"
                            placeholder="Entrez le prix">
                    </div>
                </span>

                <!------------Description------------>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea name="description" class="form-control" rows="3">{!! $bienimm->description !!}</textarea>
                </div>

                <!------------Etat-Statut------------>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Etat</label>
                    <select name="etat" class="form-select" aria-label="Default select example" style="display:inline">
                        @php
                            $etat_val = $bienimm->etat;
                        @endphp
                        @if($etat_val == "neuf")
                            <option value="neuf" selected>Neuf</option>
                        @else
                            <option value="neuf">Neuf</option>
                        @endif

                        @if($etat_val == "usagé")
                            <option value="usagé" selected>Usagé</option>
                        @else
                            <option value="usagé">Neuf</option>
                        @endif
                    </select>


                    <label for="exampleFormControlTextarea1" style="padding-left:30px">Statut</label>
                    <select name="statut" class="form-select" aria-label="Default select example">
                        @php
                            $statut_val = $bienimm->statut;
                        @endphp
                        @if($statut_val == "disponible")
                            <option value="disponible" selected>Disponible</option>
                        @else
                            <option value="disponible">Disponible</option>
                        @endif

                        @if($statut_val == "occupe")
                            <option value="occupe" selected>Occupé</option>
                        @else
                            <option value="occupe">Occupé</option>
                        @endif
                    </select>

                </div>

                <div>

                    @foreach(json_decode($bienimm->images) as $photo)
                        <td><img src="{{ asset('uploads/'.$photo) }}" width="100px;"
                                height="100px;" alt="Image"></td>
                    @endforeach

                </div>

                <!-- <div class="input-group mb-3">
     <label class="custom-file-label" for="inputGroupFile01">Choose File</label>
     <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
    </div>
   -->
                <!--<div class="form-group">
   <label>Upload Ur Image</label>
   <input type="file" name="image" style="padding-left:10px"> 
   </div>

   <div class="form-group">
   <button type="submit" class="btn btn-primary">Save</button>
   </div>-->

                <!------------Choose image------------>
                <div class="user-image mb-3 text-center">
                    <div class="imgPreview"> </div>
                </div>

                <div id="error-photo"></div>

                <div class="custom-file">
                    <input type="file" name="imageFile[]" value="{{ $bienimm->images }}" class="custom-file-input"
                        id="images" multiple="multiple">
                    <label class="custom-file-label" for="images">Choose image</label>
                </div>

                <!------------Save------------>
                <br><br>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-success">Update</button>
                </div>

            </form>
        </fieldset>

    </div>

    <!--------------------------------- jQuery ------------------------------->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        $(function () {
            // Multiple images preview with JavaScript
            var multiImgPreview = function (input, imgPreviewPlaceholder) {

                var elements = document.getElementById("error-photo");
                if (input.files) {
                    var filesAmount = input.files.length;
                    if (filesAmount > 6) {

                        elements.innerHTML = "<div class='alert alert-danger'>Too much photos</div>";

                    } else {
                        elements.innerHTML = "";
                    }


                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();

                        /*   reader.onload = function(event) {
                             $($.parseHTML('<img style="width:80px;height:80px;margin:5px;">')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                         }*/

                        reader.readAsDataURL(input.files[i]);
                    }
                }

            };

            $('#images').on('change', function () {
                multiImgPreview(this, 'div.imgPreview');
            });
        });

    </script>
    <script src="{{ asset('https://code.jquery.com/jquery-3.5.1.slim.min.js') }}"></script>
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

    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
