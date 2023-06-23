<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="{{asset('dist/img/avatar5.png')}}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">Admin</a>
    </div>
  </div>
  <!-- SidebarSearch Form -->
  <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-sidebar">
          <i class="fas fa-search fa-fw"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
      <li class="nav-item menu-open">
        <a href="{{ route('admin.dashboard') }}" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>

      </li>

      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-cogs"></i>
          <p>
            Settings
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item makeMeActive">
            <a class="nav-link " href="{{ route('admin.logout') }}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
              <i class="far fa-circle nav-icon"></i>
              <p>Logout</p>
              <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-key"></i>
              <p>Change Password</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fa fa-car"></i>
          <p>
            Car Details
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('admin.car') }}" class="nav-link">
              <i class="nav-icon fa fa-taxi"></i>
              <p>All new cars</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.showbooking') }}" class="nav-link">
              <i class="nav-icon fa fa-bus"></i>
              <p>Booking cars</p>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a href="{{ route('admin.multiple_image') }}" class="nav-link">
              <i class="nav-icon fa fa-truck"></i>
              <p>car's multiple image</p>
            </a>
          </li> --}}
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon 	fas fa-puzzle-piece"></i>
          <p>
            Brand Details
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('admin.brand') }}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>

              <i class="mdi mdi-calendar-check"></i><span class="hide-menu"> Brands </span></a>
          </li>
        </ul>
      </li>
    

    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>