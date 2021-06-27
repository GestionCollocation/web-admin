<!doctype html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TEST</title>



<link rel="stylesheet" type="text/css" href="{{asset('pubAnn/css/style1.css')}}">

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
<!-- font awesom cdn 5 -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->


<!-- ---------------------------------------------------------------------------- -->



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





<!-- ----------------------------------------------------------------------------------------------- -->




   <link rel="stylesheet" type="text/css" href="{{asset('bootstrap-4.4.1/css/bootstrap.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('pubAnn/css/style1.css')}}">

  

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
  <body>











<div>
  <div style="width: 40%;margin: 25px; margin-left: 70px;">
       <h4>Cherchez Location</h4><hr>
   <form action="{{ route('web.search')}}" method="GET">
     
       <div class="form-group">
          
          <input type="text" class="form-control" name="query" placeholder="Recherchez  ici ....">       
        </div>
        <div class="form-group">
           <button type="submit" class="btn btn-primary">Rechercher</button>
        </div>


  
   
 </form>
  </div>
<div style="display: grid;grid-template-columns: 1fr 2fr;grid-gap:20px; margin-right: 40px;  ">
  <div class="row" style="width: 100%;">
    <div class="col-md-6" style="margin-top: 40px;">






    
  

 


   @if(isset($posts))
 
    @foreach($posts as $item)
    <div class="col-md-8"  >
        <div class="media g-mb-30 media-comment" style="left:0px; width: 750px; margin-right: 100px; margin-top: 10px;" >
          <br> <br> <br>
          <!-- img -->
           

            
            <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30" style="border-radius: 20px;  " >
              <div class="g-mb-15">
                <h5 class="h5 g-color-gray-dark-v1 mb-0" style="color:#007bff;">{{$item->name}}</h5>
                <hr>
                <h4 class="h5 g-color-green-dark-v1 mb-0" >{{$item->titre}}</h4>
                <h4 class="h5 g-color-gray-dark-v1 mb-0" ></h4>

                <span class="g-color-gray-dark-v4 g-font-size-12">{{$item->created_at}}</span>
              </div>
        
              <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                felis in faucibus ras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
        
              <ul class="list-inline d-sm-flex my-0">
    <div class="cont">
                <li class="list-inline-item g-mr-20">  
                  <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                   <button  id="likebtn" >
                    <i class="fa fa-thumbs-up g-pos-rel g-top-1 g-mr-3"></i>
                    </button>
                    <input type="number" id="input1" value="0" name="" autocomplete="off">
                   
                  </a>
                </li>
                <li class="list-inline-item g-mr-20">
                  <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                    <button id="dislikebtn">
                    <i class="fa fa-thumbs-down g-pos-rel g-top-1 g-mr-3"></i>

                    </button>
                    <input type="number" id="input2" value="0" name="" autocomplete="off">
                    
                  </a>
                </li>
</div>

                 <li class="list-inline-item ml-auto">
                  <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                   <i class="fas fa-comment-alt"></i>
                   Chat
                  </a>
                </li>
                <li class="list-inline-item ml-auto">
                  <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                   <i class="fas fa-comments"></i>
                   Commentaires
                  </a>
                </li>
               
              </ul>
            </div>
        </div>
    </div>

  @endforeach
@endif

</div>
</div>


            <div class="property-entry h-100 " style="">
              <a href="#" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <span class="offer-type bg-info">Louer</span>
                </div>
                <img src="images/img_3.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <!--icon-heart nous mène en haut de la page seulement-->
                 <a href="{{ route('post.create')}}" class="property-favorite">
                 <span id="jlike">
               <i class="fas fa-share"></i></span>
                  </span>

                </a>
                <h2 class="property-title"><a href="#">853 S Lucerne Blvd</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> 853 S Lucerne Blvd Unit 101 Los Angeles, CA 90005</span>
                <strong class="property-price text-primary mb-3 d-block text-success">$2,265,500</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Beds</span>
                    <span class="property-specs-number">2 <sup>+</sup></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Baths</span>
                    <span class="property-specs-number">2</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">SQ FT</span>
                    <span class="property-specs-number">5,500</span>
                    
                  </li>
                </ul>

              </div>
            </div>
          </div>

</div>
</div>


             <br> <br> 

             <div class="pagination-block" style="align-self: center;align-items: center;position: relative; left:400px;">

                         {!! $posts->links('layouts.paginationlinks') !!}

              </div>
</div>


<script type="text/javascript">
  
let likebtn=document.querySelector('#likebtn'); 
let dislikebtn=document.querySelector('#dislikebtn'); 
let input1=document.querySelector('#input1'); 
let input2=document.querySelector('#input2'); 

likebtn.addEventListener('click',()=>{

  
  input1.style.color="green";
  document.getElementById('input1').value=parseInt(input1.value)+1 ;


  
})

dislikebtn.addEventListener('click',()=>{

  
  input2.style.color="#ff0000";
   document.getElementById('input2').value=parseInt(input2.value)+1 ;


})

</script>

<!-- ------------------------------------------------------------- -->
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







</body>
</html>

