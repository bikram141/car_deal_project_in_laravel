@extends('admin.layout.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Profile</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    @include('admin.partials.alert_msg')
                </div>
                <div class="col-md-6">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Admin Profile</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="{{ route('admin.update.profile') }}" id="profileForm">
                            @csrf
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="user_name">Username</label>
                                    <input type="text" name="user_name" class="form-control" id="user_name"
                                        placeholder="Username" value="{{ old('user_name', $admin->user_name) }}">
                                    @error('user_name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Enter email" value="{{ old('email', $admin->email) }}">
                                    @error('email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">
                    <!-- jquery validation -->
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">Change Password</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="{{ route('admin.update.password') }}" id="changePasswordForm">
                            @csrf
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="current_password">Current Password</label>
                                    <input type="password" name="current_password" class="form-control"
                                        id="current_password" placeholder="Current Password"
                                        value="{{ old('current_password') }}">
                                    @error('current_password')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">New Password</label>
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="New Password" value="{{ old('password') }}">
                                    @error('password')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-danger">Update</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
@section('scripts')
<!-- jquery-validation -->
<script src="{{ asset('admin/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('admin/plugins/jquery-validation/additional-methods.min.js') }}"></script>
<script type="text/javascript">
$(document).ready(function() {

    $('#profileForm').validate({
        rules: {
            email: {
                required: true,
                email: true,
            },
            user_name: {
                required: true,
                minlength: 3
            }
        },
        messages: {
            email: {
                required: "Please enter a email address",
                email: "Please enter a vaild email address"
            },
            user_name: {
                required: "Please provide a username",
                minlength: "Your username must be at least 3 characters long"
            }
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });

    $('#changePasswordForm').validate({
        rules: {
            current_password: {
                required: true,
            },
            password: {
                required: true,
                minlength: 8
            }
        },
        messages: {
            current_password: {
                required: "Please enter a current password"
            },
            password: {
                required: "Please enter a new password",
                minlength: "Your password must be at least 8 characters long"
            }
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
});
</script>
@endsection