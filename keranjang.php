<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap@5.0.0-beta3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/detail.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">
    <link rel="stylesheet" href="owl/animate.css">
    <link rel="stylesheet" href="fontawesome-free\fontawesome-free-5.15.1-web\css\all.min.css">

    <title>Halaman Details</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning sticky-top ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">WEBTIX</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Genre
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">War</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Drama</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Horror</a></li>
                        </ul>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Lainnya
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Keranjang</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">About</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Login</a></li>
                        </ul>

                    </li>
                </ul>
                <form class="d-flex me-4">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!---main--->
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <main class="container m-4 pt-3">
            <div class="row">

                <div class="col">
                    <div class="card card-details">
                        <h1>Keranjang Film</h1>
                        <p>Segera Melakukan Pembayaran</p>
                        <div class="attendee">
                            <a href="tambahMahasiswa.php" class="btn btn-primary mb-2"><i class="fas fa-plus-circle me-2"></i> Tambah Film</a>
                            <table class="table table-responsive-sm text-center">
                                <thead>
                                    <tr>
                                        <td>Gambar</td>
                                        <td>Film</td>
                                        <td>Jumlah Tiket</td>
                                        <td>Total</td>
                                        <td>Status</td>
                                        <td> </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="assets/gambar_film/avenggers.jpg" height="60">
                                        </td>
                                        <td class="align-middle">
                                            Avenggers
                                        </td>
                                        <td class="align-middle">
                                            2
                                        </td>
                                        <td class="align-middle">
                                            Rp.99.033
                                        </td>
                                        <td class="align-middle">
                                            <a href="#" class="btn btn-primary px-4 bg-warning ">Lunas</a>
                                        </td>
                                        <td class="align-middle">
                                            <a href="#" class="btn btn-primary">Cetak</a>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/gambar_film/turnon.jfif" height="60">
                                        </td>
                                        <td class="align-middle">
                                            Turn On
                                        </td>
                                        <td class="align-middle">
                                            3
                                        </td>
                                        <td class="align-middle">
                                            Rp.150.021
                                        </td>
                                        <td class="align-middle">
                                            <a href="#" class="btn btn-primary px-4 bg-danger">Belum lunas</a>
                                        </td>
                                        <td class="align-middle">
                                            <a href="#" class="btn btn-primary bg-danger">Cetak</a>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
    </section>
    </main>
    <!--- endmain--->
    <footer class="footer section-footer mt-5 mb-4 border-top">
        <div class="container pt-5 pb-5">

            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <h5>FEATURES</h5>
                            <ul class="list-unstyled">
                                <li class=""><a href="#">Reviews</a></li>
                                <li class=""><a href="#">Comunity</a></li>
                                <li class=""><a href="#">Sosial Media Kit</a></li>
                                <li class=""><a href="#">Affiliate</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-3">
                            <h5>ACCOUNT</h5>
                            <ul class="list-unstyled">
                                <li class=""><a href="#">Refund</a></li>
                                <li class=""><a href="#">Security</a></li>
                                <li class=""><a href="#">Reward</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-3">
                            <h5>COMPANY</h5>
                            <ul class="list-unstyled">
                                <li class=""><a href="#">Carrer</a></li>
                                <li class=""><a href="#">Help Center</a></li>
                                <li class=""><a href="#">Media</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-3">
                            <h5>GET CONNECT</h5>
                            <ul class="list-unstyled">
                                <li class=""><a href="#">jakarta Selatan</a></li>
                                <li class=""><a href="#">Indonesia</a></li>
                                <li class=""><a href="#">0821 - 2222 - 8888</a></li>
                                <li class=""><a href="#">support@nomads.id</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row border-top justify-content-center align-items-center pt-4">
                <div class="col-auto text-gray-500 font-weight-light">
                    2021 Copyright Webtix • All rights reserved • Made in Madura
                </div>
            </div>
        </div>
    </footer>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>-->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script> 
</body>

</html>