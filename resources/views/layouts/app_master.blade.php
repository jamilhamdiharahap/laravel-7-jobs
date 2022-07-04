@include('sweetalert::alert')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Material Dash</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assetmaster/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assetmaster/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assetmaster/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="assetmaster/vendors/jvectormap/jquery-jvectormap.css">
  <!-- End plugin css for this page -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="assetmaster/css/demo/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assetmaster/images/favicon.png" />
</head>
<body>
<script src="../assets/js/preloader.js"></script>
  <div class="body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    @include('components.sidebar_master')
    <div class="main-wrapper mdc-drawer-app-content">
        @include('components.header_master')
        @yield('contenmaster')
    </div>
    @include('components.footer_master')
