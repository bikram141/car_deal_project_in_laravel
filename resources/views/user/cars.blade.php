@extends('user.layouts.main')

@section('main-container')

    <!-- Page Content -->
   
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Cars</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <form action="" method="" id="contact">
          @csrf
          <div class="row">
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group">
                      <label>Used</label>
                            <select class="form-control filter-select" name="used_vehicle" id="used_vehicle">
                              <option value="" selected disabled>Select used vehicle</option>
                              @foreach($types as $rec)
                              <option value="{{$rec->car_type}}">{{$rec->car_type}}</option>
                              @endforeach
                          </select>
                       </select>
                  </div>
              </div>      
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group">
                      <label>Company types:</label>
                      <select class="form-control filter-select" name="brand" id="brand">
                        <option value="" selected disabled>Select company types</option>
                        @foreach($brands as $rec)
                        <option value="{{$rec->brand_name}}">{{$rec->brand_name}}</option>
                        @endforeach
                    </select>
                  </div>
              </div>
      
              
      
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group">
                      <label>Model:</label>          
                      <select class="form-control filter-select" name="model" id="model">
                        <option value="" selected disabled>Select Model</option>
                        @foreach($car as $rec)
                        <option value="{{$rec->Model}}">{{$rec->Model}}</option>
                        @endforeach
                    </select>
                  </div>
              </div>
      
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group">
                      <label>Price:</label>           
                      <select class="form-control filter-select" name="price" id="price">
                        <option value="" selected disabled>Select Price</option>
                        @foreach($car as $rec)
                        <option value="{{$rec->Price}}">{{$rec->Price}}</option>
                        @endforeach
                    </select>
                  </div>
              </div>
      
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group">
                      <label>Mileage:</label>          
                      <select class="form-control filter-select" name="mileage" id="mileage">
                        <option value="" selected disabled>Select Year_of_mileage</option>
                        @foreach($car as $rec)
                        <option value="{{$rec->Kilometer_run}}">{{$rec->Kilometer_run}}</option>
                        @endforeach
                    </select>
                  </div>
              </div>
      
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group">
                      <label>Year:</label>        
                      {{-- <select class="form-control filter-select" name="used_vehicle" id="used_vehicle">
                        <option value="" selected disabled>Select Year_of_registration</option>
                        @foreach($car as $rec)
                        <option value="{{$rec->Year_of_registration}}">{{$rec->Year_of_registration}}</option>
                        @endforeach
                    </select> --}}
                    <input type="text" class="form-control" name="datepicker" id="datepicker" />
            
                  </div>
              </div>
      
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group">
                      <label>Fuel:</label>
                      <select class="form-control filter-select" name="fuel" id="fuel">
                        <option value="" selected disabled>Select fuel types</option>
                        @foreach($fuels as $rec)
                        <option value="{{$rec->fuel_type}}">{{$rec->fuel_type}}</option>
                        @endforeach
                    </select>
                 </select>
                  </div>
              </div>
          </div>
          
          <div class="col-sm-4 offset-sm-4 mb-5">
            <div class="main-button text-center">
              <button type="button" name="filter" id="filter" class="btn btn-success">Search</button>
              <button type="button" name="reset" id="reset" class="btn btn-default">Reset</button>
            </div>
          </div>
          <br>
          <br>
        </form>
        <section class="sellcars" style="padding: 7.5rem 0;margin-top: -14rem;"> 
        <div class="container my-5">
          <div class="row">
            @foreach($car as $cars)
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  p-3 mb-5 bg-body">
            <div class="service-item">
              <img height="250" src="carimages/{{ $cars->Image }}" alt="">
              <div class="down-content">
                <h4>{{ $cars->Name }}</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      &nbsp; <sup>₹</sup>{{ $cars->Price }}
                  </span>
                </div>
                <p>
                  <i class="fa fa-dashboard"></i> {{ $cars->Kilometer_run }} &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                </p>
                <a href="cardetails/{{ $cars['id'] }}" class="filled-button">View More</a>
                {{-- <a href="{{ route('cardetails', $cars->id)}}"
                  class="btn btn-sm  ml-2 btn-primary">view more</a> --}}
              </div>
            </div>
            </div>
            @endforeach	
          </div>
          </div>
        </section>
    </div>
    </div>
  @endsection
