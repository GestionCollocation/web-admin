
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{asset('assets/css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('assets/demo/demo.css')}}" rel="stylesheet" />
</head>
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="green" data-background-color="white" data-image="assets/img/sidebar-1.jpg">
     
      <div class="logo"><a href="/" class="simple-text logo-normal">
         location
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          
          <li class="nav-item   ">
            <a class="nav-link" href="/dashboard">
              <i class="material-icons">dashboard</i>
              <p>Tableau du bord</p>
            </a>
          </li>
          <li class="nav-item   ">
            <a class="nav-link" href="/admin/user">
              <i class="material-icons">
                people
              </i>
              <p>Les utilisateurs</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/bienImmobilier">
              <i class="material-icons">
                business
              </i>
              <p>Les bien immobiliers</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="{{route('posteAdmin')}}">
              <i class="material-icons">
                article
              </i>
              <p>Les annnonces</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/admin/profile">
              <i class="material-icons ">person</i>
              <p>Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/messages">
              <i class="material-icons">
                message
              </i>
              <p>Messages</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./icons.html">
              <i class="material-icons">
                logout
              </i>
              <p>Déconnecter</p>
            </a>
          </li>
         
         
        
       
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
         
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
             
            </form>
            <ul class="navbar-nav">
            </ul>
          </div>
        </div>
      </nav>
        <div class="container">
          <div class="navbar-wrapper">
            <span class="navbar-brand" ></span>
          </div>
          
        
        </div>
     
      <!-- End Navbar -->
<div class="content-fluid pr-4 pl-4 pt-5" >
  
 
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-primary "style="width: 70%; background-color: rgb(41,195,72) !important ; ">
            <h4 class="card-title">Modifier le profile</h4>
            <p class="card-category">complète ton profil</p>
          </div>

           <div class="card-body">
           <form action="{{ route('update.admin',Auth::user()->id) }}" method="POST">
                    @csrf
                    @method('PUT')
              <div class="row">
                
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Username</label>
                    <input  id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ Auth::user()->name }}" required autocomplete="name"  autofocus>
                             @error('name')
                                <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                </span>
                             @enderror                    

                                          
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Email address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ Auth::user()->email }}" required autocomplete="email">                     
                          @error('email')
                                <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                            @enderror                      

                                           
                  </div>
                </div>
              </div>
            
            
              <div class="row">
                <div class="col-12">
                
                  <div class="form-group">
                    <label class="bmd-label-floating">Sexe</label>
                   <select name="sexe" id="sexe" class="form-control @error('sexe') is-invalid @enderror">
                     <option value="M">Homme</option>
                     <option value="F">Femme</option>
                   </select>
                   @error('sexe')
                        <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                        </span>
                   @enderror
                  </div>  
                </div>
              
                   <div class="col-12 mt-4">
                  <div class="form-group ">
                    <label class="bmd-label-floating">Telephone</label>
                    <input id="telephone" type="text"  class="form-control @error('telephone') is-invalid @enderror"
                          name="telephone" value="{{ Auth::user()->telephone }}">
                           @error('telephone')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                </div>      
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Description</label>
                    <div class="form-group">
                    
                      <textarea class="form-control @error('apropos') is-invalid @enderror" rows="5" id="apropos" type="text" name="apropos"  required  autocomplete="apropos" autofocus> {!! Auth::user()->apropos !!}</textarea>  

                      @error('apropos')
                          <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                          </span>
                      @enderror                       
                    </div>
                  </div>
                </div>
              </div>

             <div class="row">
                <div class="col-10">
                  <div class="form-group">
                    <label class="bmd-label-floating">Mot de passe</label>
                    <input type="password" id="pwd1" class="form-control" style="width: 50% !impotant">
             
                  </div>
                </div>
                <div class="col-2 d-flex align-items-end">
                  <div class="input-group-addon ">
                    <i class="material-icons" id="eye1">
                      visibility
                    </i>
                   
                  </div>
                </div>
                <script>
                    var pwd1 = false ;
                  document.getElementById('eye1').onclick = function() {
                  if(pwd1 == false) {
                      document.getElementById("pwd1").setAttribute("type" , "text")
                      pwd1 = !pwd1 
                  }
                   
                    else {
                        document.getElementById("pwd1").setAttribute("type" , "password")
                        pwd1 = !pwd1 
                    }
                    }
                </script>
                <div class="col-10 ">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nouveau Mot de passe</label>
                    <input id="pwd2" type="password" class="form-control" name="password">
                  </div>
                </div>
                <div class="col-2 d-flex align-items-end">
                  <div class="input-group-addon ">
                    <i class="material-icons" id="eye2">
                      visibility
                    </i>
                    <script>
                      var pwd2 = false ;
                    document.getElementById('eye2').onclick = function() {
                    if(pwd2 == false) {
                        document.getElementById("pwd2").setAttribute("type" , "text")
                        pwd2 = !pwd2 
                    }
                     
                      else {
                          document.getElementById("pwd2").setAttribute("type" , "password")
                          pwd2 = !pwd2 
                      }
                      }
                  </script>
                  </div>
                </div>
                <div class="col-10">
                  <div class="form-group">
                    <label class="bmd-label-floating">Confirmation du Nouveau Mot de passe</label>
                    <input id="pwd3" type="password" class="form-control"
                                                name="password_confirmation">
                  </div>
                </div>
                <div class="col-2 d-flex align-items-end">
                  <div class="input-group-addon ">
                    <i class="material-icons" id="eye3">
                      visibility
                    </i>
                    <script>
                      var pwd3 = false ;
                    document.getElementById('eye3').onclick = function() {
                    if(pwd3 == false) {
                        document.getElementById("pwd3").setAttribute("type" , "text")
                        pwd3 = !pwd3

                    }
                     
                      else {
                          document.getElementById("pwd3").setAttribute("type" , "password")
                          pwd3 = !pwd3 
                      }
                      }
                  </script>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn  pull-right" style=" background: rgb(4,81,142);"> Mettre à jour le profil</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-avatar">
            <a href="javascript:;">
              <img class="img" src="{{ URL::asset(Auth::user()->profile_image )}}" />
            </a>
          </div>
          <div class="card-body">
            <h6 class="card-category text-gray">{{ Auth::user()->email }}</h6>
            <h4 class="card-title">{{ Auth::user()->name}}</h4>
            <p class="card-description">
              Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
            </p>
            <a href="javascript:;" class="btn  btn-round" style=" background: rgb(4,81,142);">Se deconnecter</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  </div>

  <!--   Core JS Files   -->
   <script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/core/bootstrap-material-design.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- Plugin for the momentJs  -->
  <script src="{{asset('assets/js/plugins/moment.min.js')}}"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="{{asset('assets/js/plugins/sweetalert2.js')}}"></script>
  <!-- Forms Validations Plugin -->
  <script src="{{asset('assets/js/plugins/jquery.validate.min.js')}}"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="{{asset('assets/js/plugins/jquery.bootstrap-wizard.js')}}"></script>
  <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="{{asset('assets/js/plugins/bootstrap-selectpicker.js')}}"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="{{asset('assets/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="{{asset('assets/js/plugins/jquery.dataTables.min.js')}}"></script>
  <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="{{asset('assets/js/plugins/bootstrap-tagsinput.js')}}"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="{{asset('assets/js/plugins/jasny-bootstrap.min.js')}}"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="{{asset('assets/js/plugins/fullcalendar.min.js')}}"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="{{asset('assets/js/plugins/jquery-jvectormap.js')}}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{asset('assets/js/plugins/nouislider.min.js')}}"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="{{asset('assets/js/plugins/arrive.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="{{asset('assets/js/plugins/chartist.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assets/js/material-dashboard.js?v=2.1.2')}}" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('assets/demo/demo.js')}}"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>