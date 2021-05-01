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
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Halaman Utama
                            </li>
                            <li class="breadcrumb-item">
                                Detail
                            </li>
                            <li class="breadcrumb-item">
                                Input
                            </li>
                            <li class="breadcrumb-item active">
                                Checkout
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Checkout Film</h1>
                        <p>Segera Lakukan Checkout</p>
                        <div class="attendee">
                            <a href="tambahMahasiswa.php" class="btn btn-primary mb-2"><i class="fas fa-plus-circle me-2"></i> Tambah Ticket</a>
                            <table class="table table-responsive-sm text-center">
                                <thead>
                                    <tr>
                                        <td>Gambar</td>
                                        <td>Judul Film</td>
                                        <td>Jam & Tanggal</td>
                                        <td>Tempat Duduk</td>
                                        <td>Harga</td>
                                        <td></td>
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
                                            14:00,22-07-2021
                                        </td>
                                        <td class="align-middle">
                                            A4
                                        </td>
                                        <td class="align-middle">
                                            45.000
                                        </td>
                                        <td class="align-middle">
                                            <a href=""><i class="fas fa-trash-alt text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="assets/gambar_film/avenggers.jpg" height="60">
                                        </td>
                                        <td class="align-middle">
                                            Avenggers
                                        </td>
                                        <td class="align-middle">
                                            14:00,22-07-2021
                                        </td>
                                        <td class="align-middle">
                                            A5
                                        </td>
                                        <td class="align-middle">
                                            45.000
                                        </td>
                                        <td class="align-middle">
                                            <a href=""><i class="fas fa-trash-alt text-danger"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card card-details card-right border border-radius">
                        <h2>Informasi Checkout</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">ID order</th>
                                <td width="50%" class="text-right">2208199612389</td>
                            </tr>
                            <tr>
                                <th width="50%">Film</th>
                                <td width="50%" class="text-right">Avenggers</td>
                            </tr>
                            <tr>
                                <th width="50%">Jam & Tanggal</th>
                                <td width="50%" class="text-right"> 14:00,22-07-2021</td>
                            </tr>
                            <tr>
                                <th width="50%">Tempat Duduk</th>
                                <td width="50%" class="text-right">A4,A5</td>
                            </tr>
                            <tr>
                                <th width="50%">Biaya</th>
                                <td width="50%" class="text-right">50.000 x 2</td>
                            </tr>
                            <tr>
                                <div class="">
                                    <th width="50%" class="text-right text-total"><label class="form-check-label" for="flexCheckDefault">
                                            Tukar Point
                                        </label></th>
                                    <td width="50%"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                                </div>
                            </tr>
                            <tr>
                                <th width="50%">Point</th>
                                <td width="50%" class="text-right">1.000</td>
                            </tr>
                            <tr>
                                <th width="50%">Total</th>
                                <td width="50%" class="text-right text-total">
                                    <span class="text-blue">Rp.100.000</span>
                                    <span class="text-orange">(-1.000)</span>
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Total (+KodeUnik)</th>
                                <td width="50%" class="text-right text-total">
                                    <span class="text-blue">Rp.99.0</span>
                                    <span class="text-orange">33</span>
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <h2>Rekening Pembayaran</h2>
                        <p class="payment-instruction">Harap selesaikan pembayaran Anda sebelum melanjutkan</p>
                        <div class="bank">
                            <div class="bank-item pb-3">
                                <img src="assets/gambar_film/bni.png" alt="bank-image" class="bank-image" style="width: 60px;">
                                <div class="description">
                                    <h3>BANK NEGARA INDONESIA</h3>
                                    <p>0881 8829 8800 <br>Bank Central Asia</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="bank-item pb-3">
                                <img src="assets/gambar_film/bri.png" alt="bank-image" class="bank-image" style="width: 60px;">
                                <div class="description">
                                    <h3>BANK RAKYAT INDONESIA</h3>
                                    <p>0899 8501 7888 <br>Bank HSBC</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Uploud Bukti</label>
                            <input class="form-control" type="file" id="formFileMultiple" multiple>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="join-container col-8">
                            <a href="success.html" class="btn btn-block btn-join-now  mt-4 px-4 rounded">Konfirmasi Pembayaran</a>
                        </div>
                        <div class="join-container col-4">
                            <a href="success.html" class="btn btn-block btn-join-now  mt-4 px-4 rounded bg-danger">Lewati</a>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <a href="" class="text-muted" style="text-decoration: none;">Cancel Boooking</a>
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