<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Peduli Lindungi</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/Peduli Lindungi.png" rel="icon">
    <link href="assets/img/Peduli Lindungi.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <nav class=" navbar navbar-dark navbar-expand-md  py-3 ">
            <div class="container ">
                <a class="navbar-brand d-flex align-items-center " href="#">
                    <img src="assets/img/pedul1.svg" width="300px">
                    <!-- assets/img/pedul1.svg menggunakan element image yaitu img-->


                    <nav id="navbar" class="navbar">
                        <ul> <!-- <ul> <li> menggunakan element unordered list dan list yaitu ul & li-->
                            <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
                            <li><a class="nav-link scrollto" href="section.php">About</a></li>
                            <li><a class="nav-link scrollto " href="hospital.php">Hospital</a></li>
                            </li>
                            <li><a class="nav-link scrollto" href="status.php">Status</a></li>
                            <li>
                                <a class="btn btn-danger ms-md-2 " role="button " href="logout.php">
                                    Logout
                                </a>
                            </li>
                        </ul>

                    </nav>
                    <!-- .navbar -->

            </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/peli.jpg)">
        <div class="overlay-itro"></div>
        <div class="hero-content display-table">
            <div class="table-cell">
                <div class="container">
                    <h1 class="hero-title mb-4">Peduli Lindungi</h1> <!-- Tulisan Peduli Lindungi menggunakan element header yaitu h1-->
                    <p class="hero-subtitle"><span class="typed" data-typed-items=" Insurance, HealthCare, Vaccine , COVID-19"></span></p>
                    <!-- Tulisan Insurance, HealthCare, Vaccine , COVID-19 menggunakan element paragraf yaitu p-->

                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->












    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>