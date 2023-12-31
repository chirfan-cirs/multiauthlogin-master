<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <base href="{{ \URL::to('/') }}">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="icon" href="{{ asset('dist/img/LogoXaxaxaWeb.png')}}">
</head>

<body class="sidebar-mini layout-fixed text-sm">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>


        <!-- Logout Button -->
        <!-- <li class="nav-item d-none d-sm-inline-block">
          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </li> -->
      
      </ul>


    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ \URL::to('/')}}" class="brand-link">
        <img src="dist/img/LogoXaxaxaWeb.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Xaxaxa</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
          <img class="profile-user-img img-fluid img-circle admin_picture" src="{{ Auth::user()->picture }}" alt="User profile picture">
          </div>
          <div class="info">
            <a href="{{ route('user.profile')}}" class="d-block">{{ Auth::user()->name }}</a>
          </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column nav-legacy nav-compact nav-child-indent nav-collapse-hide-child nav-flat" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="{{ route('user.dashboard')}}" class="nav-link {{ (request()->is('user/dashboard*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <!--<li class="nav-item">
              <a href="{{ route('usrposts.index')}}" class="nav-link {{ (request()->is('usrpost/index*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-briefcase"></i>
                <p>
                  Client Data
                </p>
              </a>
            </li>-->
            <li class="nav-item">
              <a href="{{ route('usrtimesheet.index')}}" class="nav-link {{ (request()->is('usrtimesheet/index*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Timesheet
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('usraccounting.index')}}" class="nav-link {{ (request()->is('usraccounting/index*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-money-bill"></i>
                <p>
                  Accounting
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('usrinventory.index')}}" class="nav-link {{ (request()->is('usrinventory/index*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-warehouse"></i>
                <p>
                  Inventory
                </p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="{{ route('usrleave.index')}}" class="nav-link {{ (request()->is('usrtimesheet/index*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-biking"></i>
                <p>
                  leave Management
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('usrresignation.index')}}" method="get" action="{{ route('pencariancarinama') }}" class="nav-link {{ (request()->is('usrtimesheet/index*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-id-card-alt"></i>
                <p>
                  Resignation
                </p>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a href="{{ route('user.profile')}}" class="nav-link {{ (request()->is('user/profile*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Profile
                </p>
              </a>
            </li> -->
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        <strong>Template</strong>
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; <a href="#">Xaxaxa</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
</body>

</html>