<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MYROKET OFFICIAL SITE</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href=<?= base_url('assets/favicon.ico') ?> />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->

    <link href=<?= base_url('css/styles.css') ?> rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src=<?= base_url('assets/img/logo_myroket.png') ?> alt="..." /></a>
            <button class=" navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href=<?= base_url('welcome/') ?>>Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href=<?= base_url('welcome/tentang') ?>>Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href=<?= base_url('welcome/tentang') ?>>Pencarian</a></li>
                    <li class="nav-item"><a class="nav-link" href=<?= base_url('welcome/join') ?>>Jadi Mitra</a></li>
                    <li class="nav-item"><a class="nav-link" href=<?= base_url('SearchController') ?>>Cek Ongkir</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalCenter">Masuk</a></li>

                </ul>
            </div>
        </div>
    </nav>