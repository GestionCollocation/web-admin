<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Location</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
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
    

    
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="{{asset('login_page/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login_page/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login_page/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login_pageg/vendor/animate/animate.css')}}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{asset('login_page/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login_page/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login_page/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('login_page/css/main.css')}}">
<!--===============================================================================================-->
  </head>
  <body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{asset('login_page/images/img-01.png')}}" alt="IMG">
                </div>
                 
                  <form method="POST" action="{{ route('register') }}"  class="login100-form validate-form" enctype="multipart/form-data">
                        @csrf

                
                    <span class="login100-form-title">
                        Member Register
                    </span>
                    

                  <div class="wrap-input100 validate-input">
                                <input id="name" type="text" class="input100 form-control @error('name') is-invalid @enderror" name="name"  value="{{old('name')}}" placeholder="User Name" required="">
                                <span class="focus-input100" ></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>

                   @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                  </div>


                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100 form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" required="">

                       @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror


                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input @error('password') is-invalid @enderror" data-validate = "Password is required">
                        <input class="input100 form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required="">
                       
                       


                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror


                       <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>




                 <div class="wrap-input100 validate-input " data-validate = "Password is required">
                        <input class="input100 form-control" type="password" name="password_confirmation" placeholder="Confirm Password" required="">
                       <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>



                


                


                    <div class="wrap-input100 validate-input "  data-validate = "Valid telephone is required: 0axazdgthu">
                        <input class="input100 form-control @error('telephone') is-invalid @enderror" type="number" name="telephone" placeholder="Télephone" required="">
                      @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                       <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </span>
                    </div>

                    


                    <div class="wrap-input100 validate-input ">
                        <textarea class="input1000" type="text" name="apropos" placeholder="À Propos de vous" >    
                        </textarea>
                       <span class="focus-input100">
                           
                       </span>
                        <span class="symbol-input100">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </span>
                    </div>



                    <div class="wrap-input100 validate-input " data-validate = "Password is required"> <label>Photo profile : </label>
                      <input type="file" id="file" name="profile_image"  class="inputfile" />
                       <label for="file">&nbsp; Choisir fichier &nbsp; </label>
                      <!--   <input class="image" type="file" name="profile_image" placeholder="">
 -->
                       <span class="focus-input100"></span>
                        <span class="symbol-input100">
                             <i class="fas fa-images"></i>
                        </span>
                    </div>

                     <div  class="wrap-input100 validate-input"> 
                       
                  
                          
                          <input type="radio" style="vertical-align:middle; margin: 0px " class=" @error('sexe') is-invalid @enderror" id="genderF" name="sexe" value='F' {{ old('sexe') == "F"  ? "checked" :""}} >
                           <label class="radio-inline" for="female">Female</label>
                         

                          &nbsp; &nbsp; &nbsp;
                          
                           <input type="radio" style="vertical-align:middle; margin: 0px" class=" @error('sexe') is-invalid @enderror" id="genderM" name="sexe" value='M' {{ old('sexe')== "M"  ? "checked" :""}}  checked>
                          <label class="radio-inline" for="male">Male</label>

                          
                       
                          @error('sexe')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                         @enderror
                        
                    </div>



                    
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Register
                        </button>
                    </div>

                 <div class="text-center p-t-136">
                                    <a class="txt2" href="{{ route('login') }}">
                                       Vous avez un compte ? se connecter 
                                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                              </a>
                        </div>
                    <div class="text-center p-t-136">
                        <a class="txt2" href="{{route('login')}}">
                           Login Page
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
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

  <script src="js/main.js"></script>

  <!--===============================================================================================-->  
    <script src="{{asset('login_page/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('login_page/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('login_page/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('login_page/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================--> 
    <script src="{{asset('login_page/vendor/tilt/tilt.jquery.min.js')}}"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>
    
  </body>
</html>







