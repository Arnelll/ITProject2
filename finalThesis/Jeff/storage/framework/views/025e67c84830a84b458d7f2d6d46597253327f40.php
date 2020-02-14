<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('assets/img/apple-icon.png')); ?>">
  <link rel="icon" type="image/png" href="<?php echo e(asset('assets/img/favicon.png')); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    <?php echo $__env->yieldContent('title'); ?>
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <script src="<?php echo e(asset('assets/js/core/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/select2.js')); ?>"></script>
  <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('assets/css/select2.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('assets/css/now-ui-dashboard.css?v=1.3.0')); ?>" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo e(asset('assets/demo/demo.css')); ?>" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="/dashboard" class="simple-text">
          <hp>Welcome, <?php echo e(Auth::user()->name); ?></hp>
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <!-- <li class="active"> -->
          <li>
            <a href="/dashboard">
              <i class="now-ui-icons business_chart-bar-32"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="/accounts">
              <i class="now-ui-icons users_single-02"></i>
              <p>Clients</p>
            </a>
          </li>
          <li>
            <a href="/products">
              <i class="now-ui-icons shopping_box"></i>
              <p>Products</p>
            </a>
          </li>
          <li>
            <a href="/delivery">
              <i class="now-ui-icons shopping_delivery-fast"></i>
              <p>Deliveries</p>
            </a>
          </li>
          <li>
            <a href="/vehicle">
              <i class="now-ui-icons transportation_bus-front-12"></i>
              <p>Vehicles</p>
            </a>
          </li>
          <li>
            <a href="/mechanic">
              <i class="now-ui-icons business_badge"></i>
              <p>Mechanics</p>
            </a>
          </li>
          <button type="button" class="btn btn-md" style="background-color:#005ca5;width:65%;" data-toggle="collapse" data-target="#demo"><i class="now-ui-icons files_paper"></i><p>TRANSACTIONS</p></button>
          <div id="demo" class="collapse">
            <ul style="list-style-type: none;">
              <li><a href="/sales"><i class="now-ui-icons files_paper"></i><p>SALES</p></a></li>
                <li><a href="/service"><i class="now-ui-icons files_paper"></i><p>JOB ORDERS</p></a></li>
                <li><a href="/prod_co"><i class="now-ui-icons files_paper"></i><p>PRODUCT CHECKOUT</p></a></li>
            </ul>
          </div>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a style="top:-10px;" class="navbar-brand" href="#"><?php echo $__env->yieldContent('title'); ?></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div style="text-align: center;display: block; width: 250px; height: 250px; float: left; margin-left: 35%; position: absolute; top: 18px;">
            <img src="<?php echo e(asset('assets/img/CompanyLogo.png')); ?>" />
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                    <?php echo e(__('Logout')); ?>

                  </a>

                  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                      <?php echo csrf_field(); ?>
                  </form>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <?php echo $__env->yieldContent('content'); ?>
      </div>

      <footer class="footer">
        <div class="container-fluid">
          <nav>
            <ul>
              <li>
                <a href="#">
                  Team Boy Band
                </a>
              </li>
              <li>
                <a href="#">
                  About Us
                </a>
              </li>
              <li>
                <a href="#">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by
            <a href="#" target="_blank">Boy Band</a>. Coded by
            <a href="#" target="_blank">Suka Blyat</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  
  <script src="<?php echo e(asset('assets/js/core/popper.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/core/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')); ?>"></script>
  <!-- Chart JS -->
  <script src="<?php echo e(asset('assets/js/plugins/chartjs.min.js')); ?>"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo e(asset('assets/js/plugins/bootstrap-notify.js')); ?>"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo e(asset('assets/js/now-ui-dashboard.min.js?v=1.3.0')); ?>" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo e(asset('assets/demo/demo.js')); ?>"></script>

  <?php echo $__env->yieldContent('scripts'); ?>
</body>

</html><?php /**PATH C:\Users\63977\Desktop\thesis\ITProject2\finalThesis\Jeff\resources\views/layouts/master.blade.php ENDPATH**/ ?>