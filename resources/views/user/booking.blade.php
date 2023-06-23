@extends('user.layouts.main')

@section('main-container')

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Book For Test Drive</h1>
            <span>feel free to send us a message now!</span>
          </div>
        </div>
      </div>
    </div>

    <div class="contact-information">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-phone"></i>
              <h4>Phone</h4>
             
              <a href="tel:+91-7000000111">+91-7000000111</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-envelope"></i>
              <h4>Email</h4>
              
              <a href="mailto:codingcaptain@gmail.com">codingcaptain@gmain.in</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-map-marker"></i>
              <h4>Location</h4>
          
              <a href="https://goo.gl/maps/">View on Google Maps</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="callback-form contact-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Book A Test Drive</h2>
              <span>Suspendisse a ante in neque iaculis lacinia</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="{{ url('addbooking') }}" method="POST">
                @csrf
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="mobile" type="number" class="form-control" id="mobile" placeholder="Mobile" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="altmobile" type="number" class="form-control" id="altmobile" placeholder="Alt Mobile" required="">
                    </fieldset>
                  </div>
                  
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="email" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="address" type="text" class="form-control" id="address" placeholder="Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
                    <select class="form-control" name="booking" id="booking">  
                      <option>-- Select Vehicle & model--</option>
                      @foreach ($car as $cars)
                      <option value="{{ $cars->Name }}">{{ $cars->Name }} --model[{{ $cars->Model }}]</option>
                      @endforeach
                 </select>
                  </div>

                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <input name="date" type="date" class="form-control">
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
                  {{-- <script>
                    function myFunction() {
                      alert(" Continue to Payment Page");
    window.location.href = "{{ url('payment') }}";
                    }
                    </script> --}}
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="map">

      <iframe src="https://ghttps://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59794.807199340605!2d86.3795788291544!3d20.499032689007976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1bc54e52b89a33%3A0x597abb0008ff5db7!2sKendrapara%2C%20Odisha!5e0!3m2!1sen!2sin!4v1687378427493!5m2!1sen!2sin"width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  @endsection