<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>adminPanel</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <link href="css/main.css" rel="stylesheet">
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#" data-toggle="modal" data-target="#logoutModal">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ALİ BALAYEV</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="./">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>ƏSAS SƏHİFƏ</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="javascript:;" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Kateqoriya</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Kateqoriya sistemi:</h6>
            <a class="collapse-item" href="index.php?page=categoryPlus">Kateqoriya&nbsp<i class="fa fa-plus" aria-hidden="true"></i></a>
            <a class="collapse-item" href="index.php?page=existCategory">Mövcud kateqoriyalar</a>
            <a class="collapse-item" href="index.php?page=queue">Kateqoriyaları redaktə et</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="javascript:;" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Məhsul</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Məhsul sistemi:</h6>
            <a class="collapse-item" href="index.php?page=productPlus">Məhsul&nbsp<i class="fa fa-plus" aria-hidden="true"></i></a>
            <a class="collapse-item" href="index.php?page=existProducts">Mövcud məhsullar</a>
          </div>
        </div>
      </li>
      

      <li class="nav-item">
        <a class="nav-link collapsed" href="javascript:;" data-toggle="collapse" data-target="#banner" aria-expanded="true" aria-controls="banner">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Banner</span>
        </a>
        <div id="banner" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Banner sistemi:</h6>
            <a class="collapse-item" href="index.php?page=bannerPlus">Banner&nbsp<i class="fa fa-plus" aria-hidden="true"></i></a>
            <a class="collapse-item" href="index.php?page=existBanner">Mövcud bannerlər</a>
          </div>
        </div>
      </li>
      

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#logo" aria-expanded="true" aria-controls="logo">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Logo</span>
        </a>
        <div id="logo" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Logo sistemi:</h6>
            <a class="collapse-item" href="index.php?page=logoPlus">Logo&nbsp<i class="fa fa-plus" aria-hidden="true"></i></a>
            <a class="collapse-item" href="index.php?page=existLogo">Mövcud logolar</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#kompaniya" aria-expanded="true" aria-controls="kompaniya">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Kompaniya</span>
        </a>
        <div id="kompaniya" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Kompaniya sistemi:</h6>
            <a class="collapse-item" href="index.php?page=kompaniya">Elan&nbsp<i class="fa fa-plus" aria-hidden="true"></i></a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1 mesaj">
              
            </li>
          </ul>

        </nav>
        <!-- End of Topbar -->
        