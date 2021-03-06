
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
            <a class="nav-link" href="{{route('userAdmin')}}">
              <i class="material-icons">
                people
              </i>
              <p>Les utilisateurs</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('biAdmin')}}">
              <i class="material-icons">
                business
              </i>
              <p>Les bien immobiliers</p>
            </a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="{{route('posteAdmin')}}">
              <i class="material-icons">
                article
              </i>
              <p>Les annnonces</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/admin/profile">
              <i class="material-icons">person</i>
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
              <p>D??connecter</p>
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
<div class="content-fluid pr-4 pl-4" >
  
  <h2>Les annonces</h2>

  <div class="row pr-4 pl-4">
      @foreach($posts as $item)
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-12 " style="background-color: rgb(255, 255, 255)">
            <span class="ml-4 mr-4 mt-4 p-1 " style="color: rgb(41,195,72) ; font-weight : bold">ID : {{$item->id}}</span>
          
          <div class="row">
             
                <div class="col-1 pl-4 pr-4 pt-4">
                  <img src="{{ URL::asset($item->user->profile_image) }}" alt="" style=" border-radius: 50%; width: 40px; height: 40px; "> 
                </div>
                <div class="col-11 pl-4 pr-4 pt-4">
                   <a href=""><h4 style="font-weight: bold ; color :rgb(4,81,142); margin-right: 0px">{{$item->user->name}} <span style="font-size: 12px ; font-weight : normal ; color : grey">{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y ?? H:i')}}</span></h4></a> 
                   
                </div>
                <br><br>
                <div class="col-12 pl-4 pr-4 pt-4">
                 
                    <p style="text-align: justify">  {{$item->description}}</p>
                  
                </div>
                  <br>
                  <br>
                  <br>
                <div class="col-12 ">
                    <div class="row">
                        <div class="col-6">
                          <i class="material-icons" style="color: rgb(41,195,72) ">
                              location_on
                          </i>
                          <span>{{$item->location}}</span>
                          
                        </div>
                        <div class="col-6">
                          <i class="material-icons" style=" color: rgb(41,195,72)">
                              group
                          </i>
                          <span>{{$item->nb_personnes}} personnes</span>
                           
                        </div>
                    </div>
                </div>
                <br>
                <br>
               
                <div class="col-12" style="background-color: rgb(109, 109, 201)">
                    <div class="row  " style="text-transform: uppercase ; text-decoration : none; ">
                  <div class="col-4 text-center" id="commentBtn{{$item->id}}"  style="color : white; pointer-events: cursor;"><a href="#" style="color : white; pointer-events: cursor;">Commentaires</a></div>    
                        
                        <div class="col-4 text-center"><a href="#" data-toggle="modal" data-target="#deletePost{{$item->id}}" style="color : white ; pointer-events: cursor ;">supprimer</a> </div>
                    </div>
                </div>
              @include('modal.deletePostAdmin')
            </div>
        </div>
       
  <div class="col-12 pr-4">
      <br>
   <script>

   var showComment{{$item->id}} = true ;
  
  
 document.getElementById("commentBtn{{$item->id}}").onclick  = function() {
  var x = document.getElementById("comment{{$item->id}}");
 
  if (showComment{{$item->id}}=== true)  
    x.style.display = "block" ;   
   else 
    x.style.display = "none";
  
   showComment{{$item->id}} = ! showComment{{$item->id}}
  
 }


   </script>
    <div class="row" id="comment{{$item->id}}" style="display : none">
       @foreach($item->comments as $comments)
       @include('modal.deleteCommentsAdmin')
        <div class="col-12" style="margin-top: 10px">
            <div class="row">
                
                <div class="col-1 ">
                    <img src="{{ URL::asset($comments->user->profile_image) }}" alt="" style=" border-radius: 50%; width: 40px; height: 40px; "> 
                </div>
                <div class="col-11 " style="background-color: rgb(255, 255, 255) ; border-radius: 10px">
                  <span  style="color: rgb(41,195,72) ; font-weight : bold">ID : 2</span>
                  <h5 class="pt-2" style="font-weight: bold ; color : rgb(4,81,142)">{{$comments->user->name}} <span style="font-size: 12px ; font-weight : normal ; color : grey">{{ \Carbon\Carbon::parse($comments->created_at)->format('d-m-Y ?? H:i')}}</span></h5>
                 
                  <p style="text-align: justify">  {{$comments->contenue}}</p>
                  <div class="col-12" style="background-color: rgb(109, 109, 201)">
                      <div class="row  " style="text-transform: uppercase ; text-decoration : none; ">
                        
                          
                          <div class="col-6 text-center"><a href="#" data-toggle="modal" data-target="#deleteComment{{$comments->id}}"  style="color : white">supprimer</a> </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>

@if(isset($comments->reponse))
@foreach($comments->reponse as $reply)
        <div class="col-12" style="margin-top: 10px">
            <div class="row">
                @include('modal.deleteReplyAdmin')
                <div class="col-1 ">
                    <img src="{{ URL::asset($reply->user->profile_image) }}" alt="" style=" border-radius: 50%; width: 40px; height: 40px; "> 
                </div>
                <div class="col-11 " style="background-color: rgb(255, 255, 255) ; border-radius: 10px">
                  <span  style="color: rgb(41,195,72) ; font-weight : bold">ID : 2</span>
                  <h5 class="pt-2" style="font-weight: bold ; color : rgb(4,81,142)">{{$reply->user->name}} <span style="font-size: 12px ; font-weight : normal ; color : grey">{{ \Carbon\Carbon::parse($reply->created_at)->format('d-m-Y ?? H:i')}}</span></h5>
                 
                  <p style="text-align: justify">  {{$reply->contenue}}</p>
                  <div class="col-12" style="background-color: rgb(109, 109, 201)">
                      <div class="row  " style="text-transform: uppercase ; text-decoration : none; ">
                        
                          <div class="col-6 text-center"><a href="" style="color : white">modifier</a> </div>
                          <div class="col-6 text-center"><a href="#" data-toggle="modal" data-target="#deleteReply{{$reply->id}}" style="color : white">supprimer</a> </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    @endforeach
  @endif




    @endforeach
    
      </div>
  </div>
    </div>
    @endforeach
  </div>




  <div class="paginationlinks" style="margin-left: 400px">
{!! $posts->links('layouts.paginationlinks') !!}

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