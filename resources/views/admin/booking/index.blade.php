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
                        {{-- <a href="{{ route('admin.adddesignation') }}" class="btn btn-dark float-right btn-sm">Add
                            designation</a> --}}
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @include('admin.partials.alert_msg')
                        <table id="userTable" class="table table-responsive table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>mobile_no</th>
                                    <th>alternative_phone_no</th>
                                    <th>email </th>
                                    <th>subject</th>
                                    <th>date</th>
                                    <th>car_name</th>
                                    <th>address</th>
                                    <th>message</th>
                                    <th>status</th>
                                    <th>Booking</th>
                                    <th>Cancel</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookings as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->Name }}</td>
                                    <td>{{ $item->mobile_no }}</td>
                                    <td>{{ $item->alternative_phone_no }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->subject }}</td>
                                    <td>{{ $item->date }}</td>
                                    <td>{{ $item->car_name }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->message }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                        <a href="{{ url('booked',$item->id) }}" class="btn btn-sm  ml-2 btn-success">Booking</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('canceled',$item->id) }}" class="btn btn-sm  ml-2 btn-danger">Cancel</a>
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
</div>
@endsection