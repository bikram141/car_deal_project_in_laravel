@extends('admin.layout.admin')

@section('content')
{{-- <style>
    .error {
        color: red;
    }

    fieldset {
        padding: 0 15px;
        border: 1px solid #b3aeae;
        margin-bottom: 10px;
    }
</style> --}}
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6" style="display:flex">
                    <a href="{{ url()->previous() }}" class="btn btn-white mr-2"><i class="fa fa-arrow-left"
                            aria-hidden="true"></i> Go Back</a>

                    <h1 class="m-0 text-dark">{{ $page_title }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">{{ $page_title }}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $page_title }}
                        </h3>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @include('admin.partials.alert_msg')
                        <form action="{{ route('admin.updatecar') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $cars->id }}">
                            <div class="row">
                                    <div class="col-md-4 pr-5">
                                    <div class="form-group">
                                        <label for="name">Car Name</label>
                                        <input class="form-control" name="name" value="{{old('Name' ,$cars->Name)}}"
                                            id="name" placeholder=" Enter Car Name" required>
                                    </div>
                                </div>
                                <div class="col-md-4 pr-5">
                                    <div class="form-group">
                                        <label for="type">Car Type</label>
                                        <select class="form-control" name="type" id="type">
                                            <option value="" selected disabled>Select type</option>
                                            @foreach($types as $rec)
                                            <option value="{{$rec->car_type}}" 
                                                {{ $rec->car_type == $cars->Type ? 'selected':'' }}>{{$rec->car_type}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 pr-5">
                                    <div class="form-group">
                                        <label for="kilometer_run">Kilometer Run</label>
                                        <input class="form-control" type="text" name="kilometer_run" value="{{old('Kilometer_run' ,$cars->Kilometer_run)}}" id="kilometer_run"
                                            placeholder="Enter kilometer run">
                                    </div>
                                </div>
 
                                <div class="col-md-4 pr-5">
                                    <div class="form-group">
                                        <label for="year">Year of registration</label>
                                        <input class="form-control" type="number" name="year" value="{{old('Year_of_registration' ,$cars->Year_of_registration)}}"
                                            id="year" placeholder="Enter the year">
                                    </div>
                                </div>

                                <div class="col-md-4 pr-5">
                                    <div class="form-group">
                                        <label for="model">Model</label>
                                        <input class="form-control" type="text" name="model" value="{{old('Model' ,$cars->Model)}}"
                                            id="model" placeholder="enter model">
                                    </div>
                                </div>

                                <div class="col-md-4 pr-5">
                                    <div class="form-group">
                                        <label for="price">Car Price</label>
                                        <input class="form-control" type="text" name="price" value="{{old('Price' ,$cars->Price)}}"
                                            id="price" placeholder="enter price">
                                    </div>
                                </div>

                                <div class="col-md-4 pr-5">
                                    <div class="form-group">
                                        <label for="brand">Car Brand Name</label>
                                        <select class="form-control" name="brand" id="brand">
                                            <option value="" selected disabled>Select brand</option>
                                            @foreach($brands as $rec)
                                            <option value="{{$rec->brand_name}}" 
                                                {{ $rec->brand_name == $cars->Brand ? 'selected':'' }}>{{$rec->brand_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 pr-5">
                                    <div class="form-group">
                                        <label for="fuel">Car Fuel</label>
                                        <select class="form-control" name="fuel" id="fuel">
                                            <option value="" selected disabled>Select fuel</option>
                                            @foreach($fuels as $rec)
                                            <option value="{{$rec->fuel_type}}" 
                                                {{ $rec->fuel_type == $cars->Fuel ? 'selected':'' }}>{{$rec->fuel_type}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 pr-5">
                                    <div class="form-group">
                                        <label for="color">Car color</label>
                                        <input class="form-control" type="text" name="color" value="{{old('Color' ,$cars->Color)}}" id="color"
                                            placeholder="enter the car color">
                                    </div>
                                </div>
                                <div class="col-md-4 pr-5">
                                    <div class="form-group">
                                        <label for="image">Car IMAGE</label>
                                        <input type="file" name="Image" class="form-control">
                                    <img src="{{ asset('carimages/'.$cars->Image) }}" width="70px" height="70px" alt="Image">
                                    </div>
                                </div>

                                <div class="input-group control-group increment" >
                                    <input type="file" name="images[]" class="form-control">
                                    <div class="input-group-btn"> 
                                      <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                                    </div>
                                  </div>
                                  <div class="clone hide">
                                    <div class="control-group input-group" style="margin-top:10px">
                                      <input type="file" name="images[]" class="form-control">
                                
                                      <div class="input-group-btn"> 
                                        <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                      </div>
                                    </div>
                                  </div>

                           
                                
                                <div class="col-md-12 ">
                                    <button type="submit" class="btn btn-danger">Update</button>
                                    <a href="{{ url()->previous() }}" class="btn btn-warning mr-2"> Cancel</a>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

@endsection


@section('scripts')
<script src="{{ asset('admin/plugins/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('admin/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('admin/plugins/jquery-validation/additional-methods.min.js') }}"></script>
@endsection