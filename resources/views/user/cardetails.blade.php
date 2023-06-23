<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Bkkk Cars</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/owl.css">
    
     <style>/* for desktop */
    .whatsapp_float {
      position:fixed;
      width:60px;
      height:60px;
      bottom:40px;
      right:40px;
      background-color:#273fc7;
      color:#FFF;
      border-radius:50px;
      text-align:center;
            font-size:30px;
      box-shadow: 2px 2px 3px rgb(202, 247, 232);
            z-index:100;
    }
    
    .whatsapp-icon {
      margin-top:16px;
    }
    /* for mobile */
    @media screen and (max-width: 767px){
         .whatsapp-icon {
       margin-top:10px;
         }
        .whatsapp_float {
            width: 40px;
            height: 40px;
            bottom: 20px;
            right: 10px;
            font-size: 22px;
        }
    }</style>
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    {{-- <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>   --}}
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="mailto:codingcaptain@gmail.in"><i class="fa fa-envelope"></i>codingcaptain@gmail.in</a></li>
              <li><a href="tel:+91-7000000111"><i class="fa fa-phone"></i>+91-7000000111</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}"><h2>bkkk <em>Cars</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Home
                
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/cars') }}">Buy Cars</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/contact') }}"> Sell Cars</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>
              
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ url('/about') }}">About Us</a>
                    <!-- <a class="dropdown-item" href="blog.html">Blog</a> -->
                    <a class="dropdown-item" href="{{ url('/team') }}">Team</a>
                    <a class="dropdown-item" href="{{ url('/testimonials') }}">Testimonials</a>
                    <a class="dropdown-item" href="{{ url('/faq') }}">FAQ</a>
                    <a class="dropdown-item" href="{{ url('/terms') }}">Terms</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin_login') }}">Admin</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
  
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1> &nbsp; <sup>₹</sup>{{ $car_sell['Price'] }}</h1>
            <span>
              {{ $car_sell['Name'] }}
            </span>
          </div>
        </div>
      </div>
    </div>
    <section>
    <div class="services">
      <div class="product-section container">
        <div class="row">
          <div class="col-md-7">
            <div>
              <img src="/carimages/{{ $car_sell->Image }}" alt="" class="img-fluid wc-image">
            </div>
            <br>
            
            <div class="row">
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="product-section-images" style="display:grid;grid-template-columns: repeat(2,1fr);grid-gap:20px;">
               

                  {{-- <img src="/carimages/{{ $info->images }}" alt="" class="img-fluid"> --}}
                  {{-- @php
                  $image=DB::table('car_sells')->first();
                    $image=explode(",",$car_sell->images);
                    @endphp

                  @foreach($image as $images)
                  <div class="product-section-thumbnail selected">
                     {{-- <img src="/image/ss/{{ $car_sell->images }}" alt="" class="img-fluid wc-image">
                  </div> --}}
                  
                
               {{-- @endforeach  --}}

                  @if($car_sell->images)
                  @foreach(json_decode($car_sell->images,true) as $img)
                  <div class="product-section-thumbnail" style="display: flex;align-items: center;border: 1px solid rgba(230, 199, 199, 0.26);min-height: 100px;min-width: 150px;cursor: pointer;">
                    <img src="/image/ss/{{ $img}}" alt="" class="img-fluid img-thumbnail">
                 </div> 
                  @endforeach
                  @endif



                </div>
                <br>
              </div>
           
            </div>

            <br>
          </div>

          <div class="col-md-5">
            <form action="#" method="post" class="form">
              <ul class="list-group list-group-flush">
               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Type</span>

                         <strong class="pull-right">{{ $car_sell['Type'] }}</strong>
                    </div>
               </li>

               <li class="list-group-item">
                <div class="clearfix">
                     <span class="pull-left">Price</span>

                     <strong class="pull-right">₹ {{ $car_sell['Price'] }}</strong>
                </div>
           </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left"> Model</span>

                         <strong class="pull-right">{{ $car_sell['Model'] }}</strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Year Of registration</span>

                         <strong class="pull-right">{{ $car_sell['Year_of_registration'] }}</strong>
                    </div>
               </li>

               <!-- <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Mileage</span>

                         <strong class="pull-right">45,000 km</strong>
                    </div>
               </li> -->

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Fuel</span>

                         <strong class="pull-right">{{ $car_sell['Fuel'] }}</strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Total Kilometer Running </span>

                         <strong class="pull-right">{{ $car_sell['Kilometer_run'] }}</strong>
                    </div>
               </li>

               
               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Color</span>

                         <strong class="pull-right">{{ $car_sell['Color'] }}</strong>
                    </div>
               </li>
               <li> <a href="{{ url('/booking') }}" class="filled-button m-3">Book A Test Drive</a></li>
              </ul>
            </form>

            <br>
          </div>
        </div>

        <br>

            <br>
          </div>
        </div>
    </section>
        <br>
        <br>
        <br>
      </div>
    </div>

    <a href="https://wa.me/917000000111" class="whatsapp_float" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>

    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-item">
            <h4>bkkk Cars</h4>
            <p>bkkk cars based in kendrapara location,started in 2011,kilvish cars is the first platform in india that offers you pre-owned car test drive at your doorstep. it is a b2c web platform that connects directly to the customers  we are expanding our doorstep test drive services to every street in odisha soon .</p>
            <ul class="social-icons">
              <li><a rel="nofollow" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Customer Support</h4>
            <ul class="menu-list">
              <li><a href="#">feedback</a></li>
              <li><a href="#">Payment Option</a></li>
              <li><a href="contact.html">Contact Us</li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Terms</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Visit Us</h4>
            <ul class="menu-list">
              <li><span class="icon icon-map-marker"></span><span class="text">XYZ, 754211, kENDRAPARA, Odisha </span></li>
              <li><a href="tel:+91 7000000111 "><span class="icon icon-phone"></span><span class="tel">+91-7000000111</span></a></li>
              <li><a href="tel:+91-7000043***"><span class="icon icon-phone"></span><span class="tel">+91-7000043***</span></a></li>
              <li><a href="email:codingcaptain@gmail.in"><span class="icon icon-envelope"></span><span class="text">codingcaptain@gmail.in</span></a></li>
            </ul>
             
            </ul>
          </div>
          <div class="col-md-3 footer-item last-item">
            <h4>Contact Us</h4>
            <div class="contact-form">
              <form id="contact footer-contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    

    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="/assets/js/custom.js"></script>
    <script src="/assets/js/owl.js"></script>
    <script src="/assets/js/slick.js"></script>
    <script src="/assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>
    {{-- <script>
      (function(){
        const currentImage=document.querySelector('#currentImage');
        cont images=document.querySelectorAll('.product-section-thumbnail');

        images.forEach((element)=>element.addEventListerner('click',thumbnailClick));
        function thumbnailClick(e){
          currentImage.src=this.querySelector('img').src;
        }
      })();
    </script> --}}

  </body>
</html>