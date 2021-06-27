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

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_bg_2.jpg);"
        data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-10">
                    <h1 class="mb-2">À propos de Location</h1>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <img src="images/about.png" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-5 ml-auto" data-aos="fade-up" data-aos-delay="200">
                    <div class="site-section-title">
                        <h2>Notre Société</h2>
                    </div>
                    <p class="lead">IM CREATIVE est une société informatique située sur la ville de Fès. Fondée en 2019
                    </p>
                    <p>IM CREATIVE offre aussi à ses clients une multitude de services. En effet, l’équipe IM CREATIVE
                        conseille et concrétise les idées de ses clients en leurs offrant des solutions sur mesure : des
                        créations graphiques uniques et personnalisées pour l’identité visuelle (logo), l’affichage
                        urbain, brochures, dépliants et catalogues produits, ainsi que la conception ou la refonte des
                        sites web de tous types : institutionnel, catalogues produits avec CMS et sites marchands, des
                        newsletters et des campagnes d’e-mailing et la publicité sur Facebook, etc. </p>
                    <p><a href="#" class="btn btn-outline-primary rounded-0 py-2 px-5">Lire Plus</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- 
    <div class="site-section">
    <div class="container">
      <div class="row mb-5 justify-content-center"  data-aos="fade-up" >
        <div class="col-md-7">
          <div class="site-section-title text-center">
            <h2>Notre Groupe</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero magnam officiis ipsa eum pariatur labore fugit amet eaque iure vitae, repellendus laborum in modi reiciendis quis! Optio minima quibusdam, laboriosam.</p>
          </div>
        </div>
      </div>
      <div class="row">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5"  data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">

              <img src="images/person_4.jpg" alt="Image" class="img-fluid rounded mb-4">

              <div class="text">

                <h2 class="mb-2 font-weight-light text-black h4">XXXX XXXXX</h2>
                <span class="d-block mb-3 text-white-opacity-05">MEMBRE</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. Totam atque corporis nisi, veniam non. Tempore cupiditate, vitae minus obcaecati provident beatae!</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>

            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5"  data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">

              <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded mb-4">

              <div class="text">

                <h2 class="mb-2 font-weight-light text-black h4">XXXX XXXXX</h2>
                <span class="d-block mb-3 text-white-opacity-05">Membre</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cumque vitae voluptates culpa earum similique corrupti itaque veniam doloribus amet perspiciatis recusandae sequi nihil tenetur ad, modi quos id magni!</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>

            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5"  data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">

              <img src="images/person_5.jpg" alt="Image" class="img-fluid rounded mb-4">

              <div class="text">

                <h2 class="mb-2 font-weight-light text-black h4">XXXX XXXX</h2>
                <span class="d-block mb-3 text-white-opacity-05">Membre</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illo iusto, inventore, iure dolorum officiis modi repellat nobis, praesentium perspiciatis, explicabo. Atque cupiditate, voluptates pariatur odit officia libero veniam quo.</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>

            </div>
          </div>



        </div>
    </div>
    </div> -->




    <div class="site-section">
        <div class="container">

            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <div class="site-section-title">
                        <h2>QUESTIONS FRÉQUEMMENT POSÉES</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis maiores quisquam saepe
                        architecto error corporis aliquam. Cum ipsam a consectetur aut sunt sint animi, pariatur
                        corporis, eaque, deleniti cupiditate officia.</p>
                </div>
            </div>

            <div class="row justify-content-center" data-aos="fade" data-aos-delay="100">
                <div class="col-md-8">
                    <div class="accordion unit-8" id="accordion">
                        <div class="accordion-item">
                            <h3 class="mb-0 heading">
                                <a class="btn-block" data-toggle="collapse" href="#collapseOne" role="button"
                                    aria-expanded="true" aria-controls="collapseOne">Quel est le nom de votre
                                    entreprise<span class="icon"></span></a>
                            </h3>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="body-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur quae cumque
                                        perspiciatis aperiam accusantium facilis provident aspernatur nisi optio debitis
                                        dolorum, est eum eligendi vero aut ad necessitatibus nulla sit labore doloremque
                                        magnam! Ex molestiae, dolor tempora, ad fuga minima enim mollitia consequuntur,
                                        necessitatibus praesentium eligendi officia recusandae culpa tempore eaque quasi
                                        ullam magnam modi quidem in amet. Quod debitis error placeat, tempore quasi
                                        aliquid eaque vel facilis culpa voluptate.</p>
                                </div>
                            </div>
                        </div> <!-- .accordion-item -->

                        <div class="accordion-item">
                            <h3 class="mb-0 heading">
                                <a class="btn-block" data-toggle="collapse" href="#collapseTwo" role="button"
                                    aria-expanded="false" aria-controls="collapseTwo">Combien payer pour 3 mois?<span
                                        class="icon"></span></a>
                            </h3>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="body-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum
                                        expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur
                                        aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus
                                        porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas
                                        dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                                </div>
                            </div>
                        </div> <!-- .accordion-item -->

                        <div class="accordion-item">
                            <h3 class="mb-0 heading">
                                <a class="btn-block" data-toggle="collapse" href="#collapseThree" role="button"
                                    aria-expanded="false" aria-controls="collapseThree">Dois-je m'inscrire ? <span
                                        class="icon"></span></a>
                            </h3>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="body-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum
                                        expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur
                                        aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus
                                        porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas
                                        dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                                </div>
                            </div>
                        </div> <!-- .accordion-item -->

                        <div class="accordion-item">
                            <h3 class="mb-0 heading">
                                <a class="btn-block" data-toggle="collapse" href="#collapseFour" role="button"
                                    aria-expanded="false" aria-controls="collapseFour">Qui dois-je contacter ?<span
                                        class="icon"></span></a>
                            </h3>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="body-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum
                                        expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur
                                        aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus
                                        porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas
                                        dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                                </div>
                            </div>
                        </div> <!-- .accordion-item -->

                    </div>
                </div>
            </div>

        </div>
    </div>




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
    <script src="js/circleaudioplayer.js"></script>

    <script src="js/main.js"></script>

</body>

</html>
