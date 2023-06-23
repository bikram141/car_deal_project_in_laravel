@extends('admin.layout.admin')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
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
                        {{-- <a href="{{ route('admin.addmultiple_image') }}" class="btn btn-dark float-right btn-sm">Add
                            images</a> --}}
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @include('admin.partials.alert_msg')

                        <table id="userTable" class="table table-responsive table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">id</th>
                                    <th>Car_sells_id</th>
                                    <th>images</th>
                                    <th style="width:350px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            

                                @foreach($cmi as $item)
                                <tr><td>{{$item->id}}</td>
                                    <td>{{$item->car_sells_id}}</td>
                                    <td> <?php foreach (json_decode($item->images)as $picture) { ?>
                                          <img src="{{ asset('/image/ss/'.$picture) }}" style="height:120px; width:200px"/>
                                         <?php } ?>
                                    </td>
                               </tr>
                                <tr>
                                    <td>
                                        <form class="deleteForm float-left"
                                            action="{{ url('/admin/deletemultiple_image',$item->id) }}" method="post">
                                            <button class="btn btn-sm btn-danger ml-2" type="submit"
                                                id="deleteButton"><i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                            {!! method_field('delete') !!}
                                            {!! csrf_field() !!}
                                        </form>
                                        <a href="#"
                                            class="btn btn-sm  ml-2 btn-primary"><i class="fa fa-pencil-alt"
                                                aria-hidden="true"></i></a>
                                    </td>
                                   
                                </tr>
                                @endforeach  
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- Button trigger modal -->


@endsection

@section('styles')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
<style>
    .error {
        color: red;
    }

    .select2-container--default .select2-selection--single {
        height: 38px;
        padding: 6px;

    }

    .patient_age_weight {
        display: flex;
    }

    .error {
        display: block;
    }

    .form-group {
        width: 100%;
    }
</style>

@endsection

@section('scripts')
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ asset('plugins/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
      $('#userTable').DataTable();
    });
</script>
@endsection

