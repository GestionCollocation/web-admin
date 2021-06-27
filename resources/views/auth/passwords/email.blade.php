<!DOCTYPE html>
<html lang="en">
<head>
    <title>Location</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
               <div class="card-body">
                
                 
                  <form method="POST" action="{{ route('password.email') }}"  class="login100-form validate-form">
                        @csrf
                  

                  @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                @endif
                
                    <span class="login100-form-title">
                        Reset Password
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">






                        <input id="email" class="input100 @error('email') is-invalid @enderror" type="email" name="email"   value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus >

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

                   
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Réinitialiser mot de passe
                        </button>
                    </div>


                    


                    <div class="text-center p-t-136">
                        <a class="txt2" href="/connecter">
                            Back To Login
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>

                    
                    
                </form>
                </div>
            </div>
        </div>
    </div>
    
    

    
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
















