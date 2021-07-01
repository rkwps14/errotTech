<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <link rel="icon" href="favicon.ico" type="image/ico" />

    <title>@yield('page_title')</title>
    <link href="<?= url('dashboard/vendors/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= url('dashboard/vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= url('dashboard/vendors/nprogress/nprogress.css') ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= url('dashboard/vendors/iCheck/skins/flat/green.css') ?>" rel="stylesheet">
    
    <!-- bootstrap-progressbar -->
    <link href="<?= url('dashboard/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') ?>" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?= url('dashboard/vendors/jqvmap/dist/jqvmap.min.css') ?>" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?= url('dashboard/vendors/bootstrap-daterangepicker/daterangepicker.css') ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= url('dashboard/build/css/custom.min.css') ?>" rel="stylesheet">
    <link href="<?= url('dashboard/vendor/mdi-font/css/material-design-iconic-font.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?= url('dashboard/vendor/font-awesome-4.7/css/font-awesome.min.css') ?>" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?= url('dashboard/vendor/select2/select2.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?= url('dashboard/vendor/datepicker/daterangepicker.css') ?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= url('dashboard/css/main.css') ?>" rel="stylesheet" media="all">
  </head>
  @include('layouts.sidebar')
  @yield('content')
  

  <!-- for register user -->
  <script src="<?= url('dashboard/vendor/jquery/jquery.min.js') ?>"></script>
    <!-- Vendor JS-->
    <script src="<?= url('dashboard/vendor/select2/select2.min.js') ?>"></script>
    <script src="<?= url('dashboard/vendor/datepicker/moment.min.js') ?>"></script>
    <script src="<?= url('dashboard/vendor/datepicker/daterangepicker.js') ?>"></script>

    <!-- Main JS-->
    <script src="<?= url('dashboard/js/global.js') ?>"></script>

  <script src="<?= url('dashboard/vendors/jquery/dist/jquery.min.js') ?>"></script>
    <!-- Bootstrap -->
    <script src="<?= url('dashboard/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- FastClick -->
    <script src="<?= url('dashboard/vendors/fastclick/lib/fastclick.js') ?>"></script>
    <!-- NProgress -->
    <script src="<?= url('dashboard/vendors/nprogress/nprogress.js') ?>"></script>
    <!-- Chart.js -->
    <script src="<?= url('dashboard/vendors/Chart.js/dist/Chart.min.js') ?>"></script>
    <!-- gauge.js -->
    <script src="<?= url('dashboard/vendors/gauge.js/dist/gauge.min.js') ?>"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?= url('dashboard/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>"></script>
    <!-- iCheck -->
    <script src="<?= url('dashboard/vendors/iCheck/icheck.min.js') ?>"></script>
    <!-- Skycons -->
    <script src="<?= url('dashboard/vendors/skycons/skycons.js') ?>"></script>
    <!-- Flot -->
    <script src="<?= url('dashboard/vendors/Flot/jquery.flot.js') ?>"></script>
    <script src="<?= url('dashboard/vendors/Flot/jquery.flot.pie.js') ?>"></script>
    <script src="<?= url('dashboard/vendors/Flot/jquery.flot.time.js') ?>"></script>
    <script src="<?= url('dashboard/vendors/Flot/jquery.flot.stack.js') ?>"></script>
    <script src="<?= url('dashboard/vendors/Flot/jquery.flot.resize.js') ?>"></script>
    <!-- Flot plugins -->
    <script src="<?= url('dashboard/vendors/flot.orderbars/js/jquery.flot.orderBars.js') ?>"></script>
    <script src="<?= url('dashboard/vendors/flot-spline/js/jquery.flot.spline.min.js') ?>"></script>
    <script src="<?= url('dashboard/vendors/flot.curvedlines/curvedLines.js') ?>"></script>
    <!-- DateJS -->
    <script src="<?= url('dashboard/vendors/DateJS/build/date.js') ?>"></script>
    <!-- JQVMap -->
    <script src="<?= url('dashboard/vendors/jqvmap/dist/jquery.vmap.js') ?>"></script>
    <script src="<?= url('dashboard/vendors/jqvmap/dist/maps/jquery.vmap.world.js') ?>"></script>
    <script src="<?= url('dashboard/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') ?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?= url('dashboard/vendors/moment/min/moment.min.js') ?>"></script>
    <script src="<?= url('dashboard/vendors/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?= url('dashboard/build/js/custom.min.js') ?>"></script>
    
  </body>
</html>