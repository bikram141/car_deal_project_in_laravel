<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Bkkk Cars</title>
    <link rel="shortcut icon" type="image/jpg" href='/assets/images/favicon.png'>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/owl.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  
  <style>/* for desktop */
.parent {
    border: 1px solid black;
    margin: 1rem;
    padding: 2rem 2rem;
    text-align: center;
    background-color: rgb(42, 16, 190);
  }
.child1 {
    display: inline-block;
    border: 1px solid rgb(35, 69, 161);
    padding: 1rem 1rem;
    vertical-align: middle;
    height: 430px;
    width: 310px;
    background-image: url("./assets/images/payment\ qr\ 2.png");
  }
  .child2 {
    display: inline-block;
    border: 1px solid rgb(39, 74, 170);
    padding: 1rem 1rem;
    vertical-align: middle;
    height: 430px;
    width: 310px;
    background-color: aliceblue;
  }
    .whatsapp_float {
      position:fixed;
      width:60px;
      height:60px;
      bottom:40px;
      right:40px;
      background-color:#2642bd;
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
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="codingcaptain@gmail.in"><i class="fa fa-envelope"></i>codingcaptain@gmail.in</a></li>
              <li><a href="tel:+91-7000000111"><i class="fa fa-phone"></i>+91-7000000111</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="https:www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}"><h2>Bkkk <em>Cars</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Home
                  <span class="sr-only">(current)</span>
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