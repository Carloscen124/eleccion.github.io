<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Elecciones 2023</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url(); ?>/plantilla/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/plantilla/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url(); ?>/plantilla/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url(); ?>/plantilla/css/style.css" rel="stylesheet">




</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="<?php echo site_url() ?>" class="navbar-brand mx-4 mb-3">
                    <h4 class="text-success">ECU ELECCIONES</h4>
                </a>
                <div class="navbar-nav w-100">
                    <a href="<?php echo site_url() ?>" class="nav-item nav-link"><i class="bi bi-house"></i>&nbsp; Inicio</a>
                    <a href="<?php echo site_url() ?>/candidatos/nuevo" class="nav-item nav-link"><i class="bi bi-file-earmark-plus"></i>&nbsp; Registro</a>
                    <a href="<?php echo site_url() ?>/candidatos/lista" class="nav-item nav-link"><i class="bi bi-person-lines-fill"></i>&nbsp; Listado</a>
                    <a href="<?php echo site_url() ?>/candidatos/reporte" class="nav-item nav-link"><i class="bi bi-map"></i>&nbsp; Reporte</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
              <a href="#" class="sidebar-toggler flex-shrink-0">
                <i class="fa fa-bars"></i>
              </a>
              <br>
              <div class="navbar-nav align-items-center ms-auto">
                <img src="<?php echo base_url(); ?>/plantilla/img/LogoWeb.png" alt="Inicio" width="100%" height="60px">
              </div>
            </nav>
            <!-- Navbar End -->
