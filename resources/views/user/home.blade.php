@extends('user.layouts.main')

@section('main-container')
<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="main-banner header-text" id="top">
  <div class="Modern-Slider">
    <!-- Item -->

    <div class="item item-2">
      <div class="img-fill">
        <div class="text-content">


          <h4>

            Book a Door-Step Test Drive Online
            <br>
          </h4>
          <!-- <h6>Schedule a test drive or an online demo of any car model of your choice at your doorstep with a click. </h6> -->
          <h6>no 1 online pre owned car platform in the town ,1000s of cars in a single platform , partnership with all
            the the pre owned car showrooms in odisha.</h6>
          <p>Start From ₹ 499 to ₹ 1000 </p>
          <a href="{{ url('/cars') }}" class="filled-button">Book A Test Drive</a>

        </div>
      </div>
    </div>





    <!-- // Item -->
    <!-- Item -->
    <div class="item item-1">
      <div class="img-fill">
        <div class="text-content">

          <h4> We Are Best Car Dealer In Town</h4>
          <!-- <h6>Book a Door-Step Test Drive Online<br></h6> -->
          <h6>Schedule a test drive or an online demo of any car model of your choice at your doorstep with a click.
          </h6>


          <a href="{{ url('/cars') }}" class="filled-button">Buy Cars</a>
          <a href="#" class="filled-button">Sell Cars</a>

        </div>
      </div>
    </div>
    <!-- // Item -->
    <!-- Item -->
    <div class="item item-3">
      <div class="img-fill">
        <div class="text-content">
          <!-- <h6>!</h6> -->
          <h4>Best Place To Find Cars <br>Find Your Right Car</h4>
          <!-- <p>Vivamus ut tellus mi. Nulla nec cursus elit, id vulputate mi. Sed nec cursus augue. Phasellus lacinia ac sapien vitae dapibus. Mauris ut dapibus velit cras interdum nisl ac urna tempor mollis.</p> -->
          <a href="{{ url('/cars') }}" class="filled-button">Buy Cars</a>
          <a href="#" class="filled-button">Sell Cars</a>
        </div>
      </div>
      <!-- // Item -->
    </div>
  </div>
  <!-- Banner Ends Here -->

  <!--offer-->


  <!-- most search car section start  -->





  <div class="request-form">
    <div class="container">
      <div class="row">
        <div class="col-md-8">

          <h4 style="color: #ffff;">Mahashivratri offer get started... Get extra discount upto ₹ 30000 on purchase any
            car from our site....</h4>
          <a href="{{ url('/cars') }}" class="filled-button">Book A Test Drive</a>
        </div>
        <div class="col-md-4">
          <div class="animate__bounceIn"> <img src="https://img.icons8.com/fluency/96/000000/gift--v1.png" /> </div>
        </div>
      </div>
    </div>
  </div>



  <!-- most search car section start  -->
  <section class="product">
    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest <em>Cars</em></h2>
              <!-- <button class="pre-btn"><img src="arrow.png" alt=""></button>
  <button class="nxt-btn"><img src="arrow.png" alt=""></button> -->
              <div class="product-container">
                @if($car->count() > 0)
                @foreach($car as $cars)
                <div class="product-card">
                  <div class="product-image">
                    <img class="img-fluid img-thumbnail" src="carimages/{{ $cars->Image }}" alt="">
                  </div>
                  <div class="product-info">
                    <h5 class="product-brand">{{ $cars->Name }}</h5>
                    <p>
                      <i class="fa fa-dashboard"></i> {{ $cars->Kilometer_run }} &nbsp;&nbsp;&nbsp;
                      <br>
                      <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                    </p>
                    <span class="price"><sup>₹</sup>{{ $cars->Price }}</span>
                    <a href="cardetails/{{ $cars['id'] }}" class="filled-button">View More</a>
                  </div>
                </div>
                @endforeach

                @else
                <tr>
                  <h1 colspan="5" class="text-center text-primary m-5">Car Not Available Now.....!!</em></h1>
                </tr>
                @endif


              </div>
  </section>

  <section class="product">
    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Sold <em>Cars</em></h2>
              <!-- <button class="pre-btn"><img src="arrow.png" alt=""></button>
<button class="nxt-btn"><img src="arrow.png" alt=""></button> -->
              <div class="product-container">
                {{-- @if($book->count() > 0)
                @foreach($book as $books)
                <div class="product-card">
                  <div class="product-image">
                    <img class="img-fluid img-thumbnail" src="/assets/images/honda_jazz_front.jpg" class="product-thumb"
                      alt="">
                  </div>
                  <div class="product-info">
                    <h5 class="product-brand">{{ $books->car_name }}</h5>
                    <p>
                      <i class="fa fa-dashboard"></i> {{ $books->Kilometer_run }} &nbsp;&nbsp;&nbsp;
                      <br>
                      <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                    </p>
                    <span class="price"><sup>₹</sup>{{ $books->Price }}</span>
                    <a href="#" class="filled-button">Sold Out</a>
                  </div>
                </div>
                @endforeach
                @else

                <h1 colspan="5" class="text-center text-primary m-5">Not booking yet - <em class="text-warning fs-1">Go
                    and booked !!</em></h1>

                @endif --}}
                <div class="product-card">
                  <div class="product-image">

                    <img src="assets/images/baleno/baleno_side_front.jpg" class="product-thumb" alt="">
                  </div>
                  <div class="product-info">
                    <h5 class="product-brand">Baleno Top Model</h5>
                    <p>
                      <i class="fa fa-dashboard"></i>45000km &nbsp;&nbsp;&nbsp;
                      <br>
                      <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                    </p>
                    <span class="price"><sup>₹</sup>6,00,000</span>
                    <a href="#" class="filled-button">Sold Out</a>
                  </div>
                </div>

                <div class="product-card">
                  <div class="product-image">

                    <img src="assets/images/alto/alto_front.png" class="product-thumb" alt="">
                  </div>
                  <div class="product-info">
                    <h5 class="product-brand">Alto</h5>
                    <p>
                      <i class="fa fa-dashboard"></i>4000km &nbsp;&nbsp;&nbsp;
                      <br>
                      <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                    </p>
                    <span class="price"><sup>₹</sup>2,90,000</span>

                    <a href="#" class="filled-button">Sold Out</a>
                  </div>
                </div>
                <div class="product-card">
                  <div class="product-image">

                    <img src="assets/images/kwid/kwid_side.jpg" class="product-thumb" alt="">
                  </div>
                  <div class="product-info">
                    <h5 class="product-brand">Kwid</h5>
                    <p>
                      <i class="fa fa-dashboard"></i> 40000km &nbsp;&nbsp;&nbsp;
                      <br>
                      <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                    </p>
                    <span class="price"><sup>₹</sup>3,90,000</span>

                    <a href="#" class="filled-button">Sold Out</a>
                  </div>
                </div>

                <div class="product-card">
                  <div class="product-image">

                    <img src="assets/images/suzuki_eeco/suzuki_eeco_side1.jpg" class="product-thumb" alt="">
                  </div>
                  <div class="product-info">
                    <h5 class="product-brand">Suzuki Eeco</h5>
                    <p>
                      <i class="fa fa-dashboard"></i> 40000km &nbsp;&nbsp;&nbsp;
                      <br>
                      <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                    </p>
                    <span class="price"><sup>₹</sup>3,10,000</span>
                    <a href="#" class="filled-button">Sold Out</a>
                  </div>
                </div>

                <div class="product-card">
                  <div class="product-image">

                    <img src="assets/images/swift_vxi/swift_vxi_front.jpg" class="product-thumb" alt="">
                  </div>
                  <div class="product-info">
                    <h5 class="product-brand">Swift VXI</h5>
                    <p>
                      <i class="fa fa-dashboard"></i> 35500km &nbsp;&nbsp;&nbsp;
                      <br>
                      <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                    </p>
                    <span class="price"><sup>₹</sup>3,50,000</span>

                    <a href="#" class="filled-button">Sold Out</a>
                  </div>
                </div>

                <div class="product-card">
                  <div class="product-image">

                    <img src="assets/images/swift/swift_front.jpg" class="product-thumb" alt="">
                  </div>
                  <div class="product-info">
                    <h5 class="product-brand">Swift</h5>
                    <p>
                      <i class="fa fa-dashboard"></i> 66000km &nbsp;&nbsp;&nbsp;
                      <br>
                      <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                    </p>
                    <span class="price"><sup>₹</sup>3,60,000</span>

                    <a href="#" class="filled-button">Sold Out</a>
                  </div>
                </div>
                <div class="product-card">
                  <div class="product-image">

                    <img src="assets/images/suzuki_eeco/suzuki_eeco_side1.jpg" class="product-thumb" alt="">
                  </div>
                  <div class="product-info">
                    <h5 class="product-brand">Suzuki Eeco</h5>
                    <p>
                      <i class="fa fa-dashboard"></i> 40000km &nbsp;&nbsp;&nbsp;
                      <br>
                      <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                    </p>
                    <span class="price"><sup>₹</sup>3,10,000</span>
                    <a href="#" class="filled-button">Sold Out</a>
                  </div>
                </div>




              </div>
  </section>

  <!-- latest car section end -->

  <!-- brand  -->
  <section class="product">
    <section class="product">
      <div class="services">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Brand</h2>
                <div class="product-container">
                  @if($brand->count() > 0)
                  @foreach($brand as $brands)
                  <div class="product-card">
                    <div class="product-image">
                      <img src="carbrands/{{ $brands->Image }}" class="product-thumb" alt="">
                      {{-- <img class="img-fluid img-thumbnail" src="carbrands/{{ $brands->Image }}" alt=""> --}}
                    </div>
                  </div>
                  @endforeach
                  @else
                  <h1 colspan="5" class="text-center text-primary m-5">No Car brand available Right now.......!!</em>
                  </h1>
                  @endif

                </div>
              </div>
    </section>






    <!-- brand   -->

    <div class="fun-facts">
      <div class="container">
        <div class="more-info-content">
          <div class="row">
            <div class="col-md-6">
              <div class="left-image">
                <img src="assets/images/CC.png" class="img-fluid" alt="">
              </div>
            </div>
            <div class="col-md-6 align-self-center">
              <div class="right-content">
                <span>Who we are</span>
                <h2>Get to know about <em>our company</em></h2>
                <p>Best car dealer in bhubaneswar</p>
                <a href="{{ url('about') }}" class="filled-button">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="product">
      <div class="services">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Featured <em>Cars</em></h2>
                <!-- <button class="pre-btn"><img src="arrow.png" alt=""></button>
      <button class="nxt-btn"><img src="arrow.png" alt=""></button> -->
                <div class="product-container">
                  @if($car->count() > 0)
                  @foreach($car as $cars)
                  <div class="product-card">
                    <div class="product-image">
                      <img class="img-fluid img-thumbnail" src="carimages/{{ $cars->Image }}" alt="">

                    </div>
                    <div class="product-info">
                      <h5 class="product-brand">{{ $cars->Name }}</h5>
                      <p>
                        <i class="fa fa-dashboard"></i> {{ $cars->Kilometer_run }} &nbsp;&nbsp;&nbsp;
                        <br>
                        <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                      </p>
                      <span class="price"><sup>₹</sup>{{ $cars->Price }}</span>
                      <a href="cardetails/{{ $cars['id'] }}" class="filled-button">View More</a>
                    </div>
                  </div>
                  @endforeach
                  @else
                  <h1 colspan="5" class="text-center text-primary m-5">No Car Item available Right now.......!!</em>
                  </h1>
                  @endif
                </div>
    </section>
    <div class="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>What they say <em>about us</em></h2>
              <span>testimonials from our greatest clients</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-testimonials owl-carousel">

              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Rakesh Swain</h4>
                  <span>Good company</span>
                  <p>"They provide good service "</p>
                </div>
                {{-- <img src="http://placehold.it/60x60" alt=""> --}}
              </div>

              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Priya Basantaray</h4>
                  <span>Best Car</span>
                  <p>"Best used car available here"</p>
                </div>
                {{-- <img src="http://placehold.it/60x60" alt=""> --}}
              </div>

              {{-- <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Ailash Jena</h4>
                  <span>Good Condition</span>
                  <p>"all cars in good condition" </p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div> --}}

              {{-- <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Subham Sahoo</h4>
                  <span>Best Price</span>
                  <p>"i sell my verna at best price"</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>

            </div> --}}
          </div>
        </div>
      </div>
    </div>


  </section>


  <div class="callback-form">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Request a <em>call back</em></h2>
            <span>For buy or sell at best price </span>
          </div>
        </div>
        <div class="col-md-12">
          <div class="contact-form">
            <form id="contact" action="" method="">
              <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                  </fieldset>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*"
                      placeholder="E-Mail Address" required="">
                  </fieldset>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject"
                      required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message"
                      required=""></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="border-button">Send Message</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <br>
      <br>
      <br>
      <br>
    </div>
  </div>

  @endsection