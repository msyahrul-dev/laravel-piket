<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Piket Kontrakan</title>
    
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-secondary navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">   
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('admin.index') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('jadwal.index') }}" class="nav-link">Jadwal</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('laporan.index') }}" class="nav-link">Laporan</a>
                </li>
            </ul>

            <!-- Right navbar links -->
        </nav>
        <!-- /.navbar -->

        <style>
            /* Gradasi Warna Gelap untuk Navbar */
            .bg-gradient-dark {
                background: linear-gradient(to right, #333333, #111111);
            }

            /* Efek Hover pada Tautan */
            .navbar-nav .nav-link {
                color: #ffffff !important; /* Teks putih pada navbar */
                font-weight: 500;
            }

            .navbar-nav .nav-link:hover {
                color: #f39c12 !important; /* Kuning saat hover */
                text-decoration: underline;
            }

            /* Efek Hover pada Ikon */
            .nav-link i {
                color: #ffffff;
            }

            .nav-link i:hover {
                color: #f39c12; /* Ubah warna ikon saat hover */
            }
        </style>
    
