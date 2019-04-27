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

  <title>Jeff Off's Road | Admin</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="css/app.css" rel="stylesheet">
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
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" @keyup='searchThis' v-model='search' type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" @click='searchThis'>
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
      <img src="./image/astronaut.png" alt="Astronaut Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Jeff Off's Road</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./image/astronaut.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            {{Auth::user()->name}}
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <router-link to="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-align-justify color1"></i>
              <p>
                Dashboard
              </p>
            </router-link>
          </li>

          <!-- Inventory Section -->
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-box text-cyan"></i>
              <p>
                Inventory
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <!-- Sub-Menu -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/products" class="nav-link">
                  <i class="nav-icon fas icon-here text-red"></i>
                  <p>Products</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/transactions" class="nav-link">
                  <i class="nav-icon fas icon-here text-green"></i>
                  <p>Transactions</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/po" class="nav-link">
                  <i class="nav-icon fas icon-here text-red"></i>
                  <p>Purchase Orders</p>
                </router-link>
              </li>
            </ul>
            <!-- End of Sub-Menu -->
          </li>

          <!-- Client Record Management Section -->
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-address-book text-teal"></i>
              <p>
                Client Record Management
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <!-- Sub-Menu -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/clients" class="nav-link">
                  <i class="nav-icon fas icon-here text-red"></i>
                  <p>Customers Listing</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/pl" class="nav-link">
                  <i class="nav-icon fas icon-here text-red"></i>
                  <p>Provider Listing</p>
                </router-link>
              </li>
            </ul>
            <!-- End of Sub-Menu -->
          </li>

          <!-- Tools Section -->
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart text-yellow"></i>
              <p>
                Tools
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <!-- Sub-Menu -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/#" class="nav-link">
                  <i class="nav-icon fas icon-here text-red"></i>
                  <p>Logs</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/###" class="nav-link">
                  <i class="nav-icon fas icon-here text-red"></i>
                  <p>Reports</p>
                </router-link>
              </li>
            </ul>
            <!-- End of Sub-Menu -->
          </li>

          <!-- User Logout -->
          <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-sign-out-alt text-red"></i>
                  {{ __('Logout') }}
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
    <!-- /.content-header -->
    <div class="content">
        <div class="container-fluid">
            <router-view></router-view>
            <vue-progress-bar></vue-progress-bar>
        </div>
    </div>
    <!-- Main content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      IT Project 2
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <a href="#">Boy Band</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<script src="js/app.js"></script>
</body>
</html>
