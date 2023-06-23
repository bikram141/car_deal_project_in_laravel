<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bkkk Admin Panel</title>

  <!-- Google Font: Source Sans Pro -->
  @include('admin.partials.styles')
  @yield('styles')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    @include('admin.partials.top_nav')
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="admin/assets/images/logo-mini.svg" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
     
        <span class="brand-text font-weight-light">Bkkk cars</span>
      </a>
      <!-- Sidebar -->
      @include('admin.partials.sidebar_menu')
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  @yield('content')
  @include('admin.partials.footer')
  <!-- jQuery -->
  @include('admin.partials.scripts')

  @yield('scripts')
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

@yield('javascript')
</body>

</html>