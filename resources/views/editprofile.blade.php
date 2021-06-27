<!DOCTYPE html>
<html lang="en">

<head>

    <title>Homeland &mdash; Colorlib Website Template</title>
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
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>profile edit data and skills - Bootdey.com</title>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            background: #f7f7ff;
            margin-top: 20px;
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid transparent;
            border-radius: .25rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
        }

        .me-2 {
            margin-right: .5rem !important;
        }

    </style>
</head>

<body>

    <!--header-->
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

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_bg_2.jpg);"
        data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-10">
                    <h1 class="mb-2">Profile</h1>
                </div>
            </div>
        </div>
    </div>


    <!-- fin  header-->
    <br>

    <div class="container">
        <div class="main-body">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{ Auth::user()->profile_image }}" alt="Admin" class="rounded-circle"
                                    width="150">
                                <div class="mt-3">
                                    <h4>{{ Auth::user()->name }}</h4>
                                    <p class="text-secondary mb-1">{{ Auth::user()->email }}</p>
                                    <p class="text-muted font-size-sm">{{ Auth::user()->telephone }}</p>
                                    <button class="btn btn-outline-primary" id="pickfile-btn" onclick="affisher();">Edit
                                        image</button>

                                    <!--forme modifer image-->
                                    <button class="btn btn-outline-primary">Message</button>
                                    <form
                                        action="{{ route('update_photo',Auth::user()->id) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div>
                                            <br>
                                            <input type="file" style="display: none;" class="form-control-file"
                                                id="image" name="profile_image" accept="image/*">
                                        </div>
                                        <br>
                                        <div>
                                            <button id="appliquer" style="display: none;"
                                                class="btn btn-primary">Appliquer</button>
                                        </div>
                                        <script type="text/javascript">
                                            function affisher() {
                                                document.getElementById("appliquer").style.display = "block";
                                                document.getElementById("image").style.display = "block";

                                            }

                                        </script>
                                        <!--
									<script type="text/javascript">
										function pickFile(){
											$('#pickfile-btn').click(function(){
												$('#image').click();
											});
											affisher();
										}

									</script>
								-->



                                    </form>
                                    <!--
								<form  action="{{ route('update',Auth::user()->id) }}" method="POST" enctype="multipart/form-data" >
						<div>
							<input type="file" style="visibility: none;" class="form-control-file" id="image" name="profile_image" accept="image/*">


							<script type="text/javascript">
								function pickFile(){
									$('#pickfile-btn').click(function(){
										$('#image').click();
									});
								}

							</script>	
						</div>	                        
					</form>
					-->
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="card mt-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-globe mr-2 icon-inline">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="2" y1="12" x2="22" y2="12"></line>
                                        <path
                                            d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                        </path>
                                    </svg>Website</h6>
                                <span class="text-secondary">https://bootdey.com</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-github mr-2 icon-inline">
                                        <path
                                            d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                        </path>
                                    </svg>Github</h6>
                                <span class="text-secondary">bootdey</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-twitter mr-2 icon-inline text-info">
                                        <path
                                            d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                        </path>
                                    </svg>Twitter</h6>
                                <span class="text-secondary">@bootdey</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-instagram mr-2 icon-inline text-danger">
                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg>Instagram</h6>
                                <span class="text-secondary">bootdey</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-facebook mr-2 icon-inline text-primary">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                        </path>
                                    </svg>Facebook</h6>
                                <span class="text-secondary">bootdey</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--form-->


                <div class="col-lg-8" method="POST" action="{{ route('register') }}">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('update',Auth::user()->id) }}"
                                method="POST">
                                <div class="loader-wapper">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group row">
                                        <label for="name"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ Auth::user()->name }}" required autocomplete="name"
                                                autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email"
                                            class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ Auth::user()->email }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="sexe"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Sexe') }}</label>

                                        <div class="col-md-6">
                                            <select name="sexe">
                                                <option>
                                                    --Veuillez choisir une option--
                                                </option>
                                                <option value="M">
                                                    masculin
                                                </option>
                                                <option value="F">
                                                    féminin
                                                </option>
                                            </select>

                                            @error('sexe')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!--
							<div class="form-group row">
								<label for="sexe" class="col-md-4 col-form-label text-md-right">{{ __('Sexe') }}</label>

								<div class="col-md-6">
									<input id="sexe" type="text" class="form-control @error('sexe') is-invalid @enderror" name="sexe" value="{{ Auth::user()->sexe }}" required autocomplete="sexe" autofocus>

@error('sexe')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
@enderror
								</div>
							</div>
								-->

                                    <div class="form-group row">
                                        <label for="telephone"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Telephone') }}</label>

                                        <div class="col-md-6">
                                            <input id="telephone" type="text"
                                                class="form-control @error('telephone') is-invalid @enderror"
                                                name="telephone" value="{{ Auth::user()->telephone }}" required
                                                autocomplete="telephone" autofocus>

                                            @error('telephone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="apropos"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Apropos') }}</label>

                                        <div class="col-md-6">
                                            <input id="apropos" type="text"
                                                class="form-control @error('apropos') is-invalid @enderror"
                                                name="apropos" value="{{ Auth::user()->apropos }}" required
                                                autocomplete="apropos" autofocus>

                                            @error('telephone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="password">

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password-confirm"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation">
                                        </div>
                                    </div>
                                    <!--
							econ loader
							-->

                                    <script>
                                        $(window).on("load", function () {
                                            $(".loader-wapper").fadeOut("slow");
                                        });

                                    </script>
                                    <span class="loader"><span class="loader-inner"></span></span>
                                </div>
                                <!--
							fin econ loader
							-->
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary" " >
										{{ __('Modifier') }}
									</button>
								</div>
							</div>


						</form>
					</div>
				</div>
			</div>
		</div>	
	</div>	
</div>
<script src=" http://code.jquery.com/jquery-1.10.2.min.js"></script>
                                            <script
                                                src="http://netdna.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js">
                                            </script>
                                            <script type="text/javascript"></script>

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
                                            <script src="js/circleaudioplayer.js"></script>

                                            <script src="js/main.js"></script>



                                            </script>
</body>

</html>
