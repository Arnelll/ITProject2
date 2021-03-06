<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Jeff's Off-Road Performance Center</title>

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="css/app.css">
</head>

<body class="hold-transition sidebar-mini">

<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">

    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="./img/TruckLogo.png" alt="Company Logo" class="brand-image"
           style="opacity: .8;">
      <span class="brand-text font-weight-light">Jeff's Off-Road</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./img/AdminLogo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <router-link to="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>
              Dashboard
              <span class="right badge badge-danger">!</span>
              </p>
            </router-link>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-warehouse"></i>
              <p>
                Inventory Management
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">

              <li class="nav-item">
                <router-link to="/products" class="nav-link">
                  <i class="fa fa-boxes nav-icon"></i>
                  <p>Products</p>
                </router-link>
              </li>

              <li class="nav-item">
                <router-link to="/product_checkout" class="nav-link">
                  <i class="fa fa-clipboard-check nav-icon"></i>
                  <p>Product Checkout <span class="right badge badge-danger">!</span></p>
                </router-link>
              </li>

              <li class="nav-item">
                <router-link to="/product_returns" class="nav-link">
                  <i class="fa fa-tools nav-icon"></i>
                  <p>Product Returns <span class="right badge badge-danger">!</span></p>
                </router-link>
              </li>

              <li class="nav-item">
                <router-link to="/suppliers" class="nav-link">
                  <i class="fa fa-briefcase nav-icon"></i>
                  <p>Suppliers</p>
                </router-link>
              </li>

              <li class="nav-item">
                <router-link to="/deliveries" class="nav-link">
                  <i class="fa fa-shipping-fast nav-icon"></i>
                  <p>Deliveries <span class="right badge badge-danger">!</span></p>
                </router-link>
              </li>

              <li class="nav-item">
                <router-link to="/inventory_log" class="nav-link">
                  <i class="fa fa-clipboard-list nav-icon"></i>
                  <p>Inventory Log <span class="right badge badge-danger">!</span></p>
                </router-link>
              </li>

            </ul>

          </li>

          <li class="nav-item has-treeview">

            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-address-book"></i>
              <p>
                Client Record Management
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">

              <li class="nav-item">
                <router-link to="/clients" class="nav-link">
                  <i class="fas fa-id-card nav-icon"></i>
                  <p>Clients</p>
                </router-link>
              </li>

              <li class="nav-item">
                <router-link to="/walk_ins" class="nav-link">
                  <i class="fas fa-shopping-cart nav-icon"></i>
                  <p>Walk-ins</p>
                </router-link>
              </li>

              <li class="nav-item">
                <router-link to="/job_orders" class="nav-link">
                  <i class="fas fa-file-invoice nav-icon"></i>
                  <p>Job Orders <span class="right badge badge-danger">!</span></p>
                </router-link>
              </li>

              <li class="nav-item">
                <router-link to="/vehicles" class="nav-link">
                  <i class="fas fa-truck-monster nav-icon"></i>
                  <p>Vehicles</p>
                </router-link>
              </li>

            </ul>

          </li>

          <li class="nav-item">
            <router-link to="/users" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                User Account Management
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            
            <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                {{ __('Logout') }}
              </p>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>

          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content">
      <div class="container-fluid">
        <div class="row pt-4">

          <router-view></router-view>
          <vue-progress-bar></vue-progress-bar>

        </div>
      </div><!-- /.container-fluid -->
    </div>

  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2018 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<script src="/js/app.js"></script>

</body>

</html>
