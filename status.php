<?php 

require 'config.php';

if (isset($_POST['check'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];

    $res_nik = mysqli_query($conn, "SELECT * FROM data_sudah_vaksin WHERE nik = '$nik'");

    if (mysqli_num_rows($res_nik) === 1) {
        header("Location: Sudah()Belum/sudah.php");
    }else {
        header("Location: Sudah()Belum/belum.php");
    }
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
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- Template Main CSS File -->
    <link href="assets/css/stylesection.css" rel="stylesheet">
    <link href="assets/css/status.css" rel="stylesheet">
</head>

<body>

<!-- ======= Header ======= -->
    <nav class=" navbar navbar-dark navbar-expand-md  py-3 " style="background-color:rgb(36, 36, 36)">
        <div class="container ">
            <a class="navbar-brand d-flex align-items-center " href="index.php">
                <img src="assets/img/pedul1.svg" width="300px">
            </a>

            <div class="collapse navbar-collapse " id="navcol-5 ">
                <ul class="navbar-nav ms-auto ">
                    <li><a class="nav-link scrollto" href="index.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="section.php">About</a></li>
                    <li><a class="nav-link scrollto " href="hospital.php">Hospital</a></li>
                    </li>
                    <li><a class="nav-link scrollto active" href="status.php">Status</a></li>
                    <li>
                        <a class="btn btn-danger ms-md-2 " role="button " href="logout.php">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- .navbar -->

    </div>
    </header>
<!-- End Header -->

<form action="" method="post">
    <section id="about" class="about-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="box-shadow-full position-absolute top-50 start-50 translate-middle" style="margin-top: 5vh;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h1>Status Kesehatan</h1>
                                        <p>Pilih untuk cek status vaksin, tes covid-19 dan warna label Anda</p>
                                        <hr width="100%">
                                        <div class="col-11 mx-auto">
                                            <h2 style="color:rgb(41, 113, 172);font-size:20px;">
                                                Nama Lengkap
                                            </h2>
                                            <input type="text" name="nama">
                                        </div>
                                        <div class="col-11 mx-auto">
                                            <h3 style="color:rgb(41, 113, 172);font-size:20px;">
                                                No NIK
                                            </h3>
                                            <input type="text" name="nik">
                                        </div>
                                        <br>
                                        <div class="d-grid gap-4 col-11 mx-auto">
                                            <button class="btn btn-primary" type="submit" name="check">Check</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
