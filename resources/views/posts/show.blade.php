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
    <link rel="stylesheet" href="fonts/icomoon/style.css">

<!-- Comments -->

<link
      href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--

            CSS
            ============================================= -->
    <link rel="stylesheet" href="{{asset('comment/css/linearicons.css')}}" />
    <link rel="stylesheet" href="{{asset('comment/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('comment/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('comment/css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{asset('')}}comment/css/main.css" />

<!-- style speciale -->
   <link rel="stylesheet" type="text/css" href="{{asset('bootstrap-4.4.1/css/bootstrap.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('pubAnn/css/style1.css')}}">

  

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


<!-- Comments -->
   
</head>
<body>
    <div id="app" class="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            @guest
                 @else
                <a class="navbar-brand" href="{{ url('/profile') }}">
                    <a href="/profile"><img src="{{ URL::asset(Auth::user()->profile_image) }}" width="60px"
                            style="border-radius: 50%;height: 40px; width: 40px "> </a>
                </a>

                 @endguest
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" >
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown" >
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

     
           </div>
          
                                <div class="col-md-8">
                                    <div class="media g-mb-30 media-comment"
                                        style="left:0px; width: 1000px;  margin-right: 100px; margin-top: 10px; height:4px;">
                                        <br> <br> <br>
                                        <!-- img -->
                                        <a href="{{ route ('profile.user',$post->user->id) }}"
                                            style="cursor: pointer;"><img
                                                class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15"
                                                src="{{ URL::asset($post->user->profile_image) }}"
                                                alt="{{ $post->user->profile_image }}"></a>


                                        <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30"
                                            style="border-radius: 20px;  ">
                                            <!-- <div style=" ">  -->
                                            <div class="g-mb-15" style=" padding-right: 10px;">
                                                <a href="{{ route ('profile.user',$post->user->id) }}"
                                                    style="cursor: pointer;">
                                                    <h5 class="h5 g-color-gray-dark-v1 mb-0" style="color: #007bff;">
                                                        {{ $post->user->name }}</h5>
                                                </a>

                                                <hr>

                                                <div><i class="fas fa--marker-alt" style="font-family:  sans-serif; "> {{ $post->titre }}</i></div>
                                                <i class="fas fa-map-marker-alt"> : {{ $post->location }} </i>
                                                 <div><i class="fas fa-map-mar"> Nombre de personnes cherché : {{ $post->nb_personnes }}</i></div>



                                                <div><span
                                                        class="g-color-gray-dark-v4 g-font-size-12">{{ $post->created_at->diffForhumans() }}</span>
                                                </div>
                                                <h4 class="h5 g-color-gray-dark-v1 mb-0"></h4>

                                                <p>{{ $post->description }}</p>
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
                                                        href="#!">
                                                        <i class="fas fa-comments"></i>
                                                        Commentaires
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

<div style="margin-top:320px">

<section class="comment-sec-area pt-80 pb-80">
                  <div class="container">
                    <div class="row flex-column">                                   
                      <!-- commentaire  -->
           @foreach($post->comments as $item)

                  <div class="comment">
                        <div class="comment-list">
                          <div
                            class="single-comment justify-content-between d-flex"
                          >
                            <div class="user justify-content-between d-flex">
                              <div class="thumb">
                                <img src="{{ URL::asset($item->user->profile_image) }}" alt="" style="border-radius: 50%; height: 35px; width: 35px" />
                                <img src="" alt="" />
                              </div>
                              <div class="desc">
                                <h5><a href="#">{{$item->user->name}}</a></h5>
                                <p class="date">{{$item->created_at->format('D, d M Y H:i')}}</p>
                                <p class="comment" style="background-color: #DCDCDC; border-radius: 10px; text-align: ;"  >
                                 &nbsp; &nbsp; &nbsp; {{$item->contenue}}
                                </p>

                        <div class="col" style="margin-top: 5px">
                                 @if($item->user->id==Auth::id())
                                                    
                                <a href="{{ route('comments.destroy',$item->id)}}"><i class="fas fa-tra" style="color: #007bff;">supprimer </i></a>
    &nbsp; &nbsp; 

    

 <a type="button"  data-toggle="modal" data-target="#ModifyComment{{$item->id}}" data-whatever="@mdo"><i class="fas fa-tra" style="color: #007bff; cursor: pointer;"  > modifier</i></a>
                              
                              

  @include('modal.commentEdit')   




     </a>
@endif

       <a   style="border: none; background-color: white; cursor: pointer;" id="rep" 
          onclick="showReplyForm('{{$item->id}}','{{$item->user->name}}')"><i class="fas fa-reply"style="color: #007bff;">repondre</i> </a>
                              
                              
                                </div>


                              </div>
                            </div>




                          </div>
                        </div>
                         
                      
                        @foreach($item->reponse as $reply)
                           <div class="comment-list left-padding">
                          <div
                            class="single-comment justify-content-between d-flex"
                          >
                            <div class="user justify-content-between d-flex">
                              <div class="thumb">
                                <!-- image  -->
                                 <img src="{{ URL::asset($item->user->profile_image) }}" alt="" style="border-radius: 50%; height: 35px; width: 35px" />
                                <img src="img/asset/c3.jpg" alt="" />
                              </div>
                              <div class="desc">
                                <h5><a href="#" >{{$reply->user->name}}</a></h5>
                                <p class="date">{{$reply->created_at->format('D, d M Y H:i')}}</p>
                                <p class="comment" style="background-color: #DCDCDC; border-radius: 10px; float: left; display: inline-block;">
                                 &nbsp;&nbsp;&nbsp; {{$reply->contenue}}
                                </p>
                              

                               
                               <div class="col" >
                                 
                                 <a href="{{ route('comments.destroy',$reply->id)}}" ><i class="fas fa-tra" style="color: #007bff;">supprimer </i></a>

                                 <!--  <a  href="{{route('post.show',[0,$reply->id])}}" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style=""> -->

                                 <a type="button"  data-toggle="modal" data-target="#ModifyComment{{$reply->id}}" data-whatever="@mdo"><i class="fas fa-tra" style="color: #007bff; cursor: pointer;"  > modifier</i></a>
                              
                              
                                </div>


                              </div>
                            </div>
 
                          </div>
                        </div>
                @include('modal.replyEdit')         
                      @endforeach

                 



                    


                        <div class="comment-list left-padding" id="reply-form-{{$item->id}}" style="display: none">
                          <div
                            class="single-comment justify-content-between d-flex"
                          >
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

                                <h5><a href="#">{{$item->user->name}}</a></h5>
                                <p class="date"></p>
                                <div class="row flex-row d-flex">
                                <form action="{{route('comments.reponse',$item->id)}}" method="POST">
                                  @csrf 
                                  <div class="col-lg-12">
                                    <textarea
                                      id="reply-form-{{$item->id}}-text"
                                      cols="60"
                                      rows="2"
                                      class="form-control mb-10"
                                      name="contenue"
                                      placeholder="Messege"
                                      onfocus="this.placeholder = ''"
                                      onblur="this.placeholder = 'Messege'"
                                      required=""
                                    ></textarea>
                                  </div>
                                  <button type="submit" class="btn-reply text-uppercase ml-3" style="background-color: #007bff;">Reply</button>
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
</section>

                <section class="commentform-area pb-120 pt-80 mb-100" style="margin-top: 5px;">
                @guest
                <div class="container">
                    <h4>Veuillez vous connecter pour commenter</h4>
                </div>
               
                @else
                
                  <div class="container">
                    <h5 class="text-uppercas pb-50">Publiez Commentaire</h5>
                    <div class="row flex-row d-flex">
                     <!-- mseht textarea -->
                     
                       <div class="col-lg-12">
                        <form action="{{ route ('comments.store', $post->id )}}" method="POST">
                       @csrf
                        <textarea
                        style="border-radius: 30px;"
                          class="form-control mb-10"
                          name="contenue"
                          placeholder="Messege"
                          onfocus="this.placeholder = 'Votre Commentaire'"
                          onblur="this.placeholder = 'Votre Commentaire'"
                          required=""
                        ></textarea>
                        <button type="submit" class="primary-btn mt-20" href="#">Commenter</button >
                      </div>
                     </form>
                     
                    </div>
                  </div>
                
                @endguest
                </section>
</div>
<!--------------------------------------------------- Comments------------------------------------------------>

<script src="comment/js/vendor/jquery-2.2.4.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
      integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
      crossorigin="anonymous"
    ></script>
    <script src="{{asset('comment/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('comment/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('comment/s/parallax.min.js')}}"></script>
    <script src="{{asset('comment/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('comment/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('comment/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('comment/js/main.js')}}"></script>
    


  

    <script type="text/javascript">
    function showReplyForm(commentId,user) {
      var x = document.getElementById(`reply-form-${commentId}`);
      var input = document.getElementById(`reply-form-${commentId}-text`);

      if (x.style.display === "none") {
        x.style.display = "block";
        input.innerText=`@${user} `;

      } else {
        x.style.display = "none";
      }
    }

</script>


</body>
</html>

















    

