@extends('user.layouts.main')

@section('main-container')

<div class="page-heading header-text">
    <div class="container">
    
        <div class="col-md-12">
         <h2>Payment time</h2>
        </div>
    </div>
  </div>


  <div class="container-fluid">
    @if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">X</button>
        {{ session()->get('message') }}
    </div>
    @endif

        <div class="container mt-5">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Now it's Time for <em>Payment</em></h2>
                <h2>Press the below button for payment</h2>
                <div class="col-lg-12 m-4">
                    <fieldset>
                      <button type="submit" class="btn btn-info " onclick="myFunction()">Make Payment</button>
                    </fieldset>
                  </div>
              </div>
           
            </div>
          <script>
            function myFunction() {
              alert(" Continue to Payment Page");
window.location.href = "{{ url('payment') }}";
            }
            </script>
        </div>
    </div>

  </div>
@endsection