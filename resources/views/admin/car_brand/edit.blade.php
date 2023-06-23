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
                        <form action="{{ route('admin.updatebrand') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $brand->id }}">
                            <div class="row">
                                <div class="col-md-4 pr-5">
                                    <div class="form-group">
                                        <label for="name">brand Name</label>
                                        <input class="form-control" name="name"
                                            value="{{old('brand_name' ,$brand->brand_name)}}" id="name"
                                            placeholder=" Enter brand Name" required>
                                    </div>
                                </div>



                                <div class="col-md-4 pr-5">
                                    <div class="form-group">
                                        <label for="color">Logo</label>
                                        <input type="file" name="Image" class="form-control">
                                        <img src="{{ asset('uploads/carbrands/'.$brand->Image) }}" width="70px"
                                            height="70px" alt="Image">
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