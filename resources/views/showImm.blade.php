<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
   <link rel="stylesheet"
        href="{{ asset('https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500') }}">
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
    body {
      background-color: rgba(75, 123, 236,0.1); /* Used if the image is unavailable */
      /*background-position: center; /* Center the image */
     /* background-repeat: no-repeat;*/ /* Do not repeat the image */
      /*background-size: cover; *//* Resize the background image to cover the entire container */
    }
    body {
      font-family: 'Poppins', sans-serif;
    }
    </style>
     
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body style=" background-color: rgba(75, 123, 236,0.1); ">
<div class="container" >
    <h4 style="padding-top:20px;color:blue">Informations de Bien Immobilier</h4><br>

    <div class="card">

        <div class="card-body">

            <p   style="font-size: 25px;">Titre : {{ $bienimm->titre }}</p>
            @php
                $photos = json_decode($bienimm->images);
            @endphp

            <img src="{{ asset('uploads/'.$photos[0]) }}" alt="Image" style="height:  550px; width: 100%">
 <li class="list-group-item" style="margin-top: 20px">  
<div class="form-group row" style="margin-top: 20px;">
    <label for="staticEmail" class="col-sm-2 col-form-label"  style="color: #808080;">Ville : </label>

    <div class="col-sm-10" >
      
      <p  >{{ $bienimm->ville }}</p>
    </div>
  </div>
<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label" style="color: #808080;">Superficie : </label>
    <div class="col-sm-10" >
      
      <p  >{{ $bienimm->superficie }}</p>
    </div>
  </div>

<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label" style="color: #808080;">Nombre de Personne : </label>
    <div class="col-sm-10" >
      
      <p  >{{ $bienimm->nb_personnes }}</p>
    </div>
  </div>

<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label" style="color: #808080;">Prix :  </label>
    <div class="col-sm-10" >
      
      <p  >{{ $bienimm->prix }}</p>
    </div>
  </div>

<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label" style="color: #808080;">Description : </label>
    <div class="col-sm-10" >
      
      <p  >{{ $bienimm->description }}</p>
    </div>
  </div>
  

<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label" style="color: #808080;">Etat : </label>
    <div class="col-sm-10" >
      
      <p  >{{ $bienimm->etat }}</p>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label" style="color: #808080;">Statut : </label>
    <div class="col-sm-10" >
      
      <p  >{{ $bienimm->statut }}</p>
   
    </div>
 
  </div>
 

    </li>




            
      
       
      <div class="form-group row" style="margin-top: 10px">
    <label for="staticEmail" class="col-sm-2 col-form-label" style="color: #808080;">Tous les photos : </label>
    
    </div>    
     
      <div>
                @foreach(json_decode($bienimm->images) as $photo)
                    <div class="col-sm-6 col-md-4 col-lg-2" style="margin-top: 30px">
                        <a href="{{ asset('uploads/'.$photo) }}" class="image-popup gal-item">
                            <img src="{{ asset('uploads/'.$photo) }}" alt="Image"
                                style="height:100px;width:150px">
                        </a>

                    </div>

                @endforeach

            </div>
  

   
            

           
            


</div>


        <a class="btn btn-success" href="{{ route('profile.index_1') }}"
            style="margin-top: 40px ; width: 13%; margin-left: 28px">Retour</a>
        <br> <br>
    </div>




</div>

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
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>

