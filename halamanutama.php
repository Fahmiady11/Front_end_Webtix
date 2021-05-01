<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="bootstrap@5.0.0-beta3/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="owl/owl.carousel.min.css">
  <link rel="stylesheet" href="owl/owl.theme.default.min.css">
  <link rel="stylesheet" href="owl/animate.css">
  <link rel="stylesheet" href="fontawesome-free\fontawesome-free-5.15.1-web\css\all.min.css">
  <title>Halaman Utama</title>
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

  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <div class="overlay-image">
          <img src="assets/gambar_film/gambaratas1-01.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <div class="overlay-image">
          <img src="assets/gambar_film/gambaratas1-01.png" class="d-block w-100" alt="...">
        </div>

      </div>
      <div class="carousel-item">
        <img src="assets/gambar_film/gambaratas1-01.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="container mt-5">
    <div>
      <P class="kataJudul">PILIHAN FILM</P>
    </div>
    <div class="owl-carousel owl-theme">
      <div class="jarak">
        <div class="card">
          <img data-src="assets/gambar_film/avenggers.jpg" class="card-img-top owl-lazy">
          <div class="card-body">
            <h5 class="card-title">Avenggers</h5>
            <div class="text-center">
              <a href="#" class="btn btn-primary px-4 ">Pilih</a>
            </div>
          </div>
        </div>
      </div>
      <div class="jarak">
        <div class="card">
          <img data-src="assets/gambar_film/asih.jpg" class="card-img-top owl-lazy">
          <div class="card-body">
            <h5 class="card-title">Asih</h5>
            <div class="text-center">
              <a href="#" class="btn btn-primary px-4 ">Pilih</a>
            </div>
          </div>
        </div>
      </div>
      <div class="jarak">
        <div class="card">
          <img data-src="assets/gambar_film/turnon.jfif" class="card-img-top owl-lazy">
          <div class="card-body">
            <h5 class="card-title">Turn On</h5>

            <div class="text-center">
              <a href="#" class="btn btn-primary px-4 ">Pilih</a>
            </div>
          </div>
        </div>
      </div>
      <div class="jarak">
        <div class="card">
          <img data-src="assets/gambar_film/dilan.png" class="card-img-top owl-lazy">
          <div class="card-body">
            <h5 class="card-title">Dilan</h5>
            <div class="text-center">
              <a href="#" class="btn btn-primary px-4 ">Pilih</a>
            </div>
          </div>
        </div>
      </div>
      <div class="jarak">
        <div class="card">
          <img data-src="assets/gambar_film/starwars.jpeg" class="card-img-top owl-lazy">
          <div class="card-body">
            <h5 class="card-title">Star Wars</h5>
            <div class="text-center">
              <a href="#" class="btn btn-primary px-4">Pilih</a>
            </div>
          </div>
        </div>
      </div>
      <div class="jarak">
        <div class="card">
          <img data-src="assets/gambar_film/triple.jpg" class="card-img-top owl-lazy">
          <div class="card-body">
            <h5 class="card-title">Triple Threat</h5>
            <div class="text-center">
              <a href="#" class="btn btn-primary px-4">Pilih</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div>
      <P class="kataJudul text-danger">COOMING SOON</P>
    </div>
    <div class="d-flex flex-row">
      <div class="jarak pe-2">
        <div class="card" style="width: 15rem;">
          <img class="card-img-top" src="assets/gambar_film/triple.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Doraemon ++</h5>
            <div class="text-center">
              <a href="#" class="btn btn-primary px-4">Pilih</a>
            </div>
          </div>
        </div>
      </div>
      <div class="jarak">
        <div class="card" style="width: 15rem;">
          <img class="card-img-top" src="assets/gambar_film/triple.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Doraemon ++</h5>
            <div class="text-center">
              <a href="#" class="btn btn-primary px-4 ">Pilih</a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div>
      <P class="kataJudul">INFORMATION</P>
    </div>
    <div>
      <p style="text-align: justify; text-indent: 0.5in;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dui sapien eget mi proin sed libero enim. Auctor urna nunc id cursus metus aliquam eleifend mi in. Nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. Lobortis mattis aliquam faucibus purus in massa tempor. Dignissim enim sit amet venenatis urna. Lacus viverra vitae congue eu consequat ac. At tellus at urna condimentum mattis pellentesque id nibh tortor. Feugiat vivamus at augue eget arcu. Nibh sed pulvinar proin gravida hendrerit lectus a. Est placerat in egestas erat imperdiet sed euismod nisi porta. Nisl purus in mollis nunc sed id semper risus in. Interdum consectetur libero id faucibus. Egestas tellus rutrum tellus pellentesque eu tincidunt. Sit amet consectetur adipiscing elit duis tristique sollicitudin nibh.</p>
    </div>

    <!---container--->
  </div>






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
  <script src="owl/owl.carousel.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      lazyLoad: true,
      animateIn: 'fadeIn',
      margin: 10,
      nav: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 5
        }
      }
    })
  </script>
</body>

</html>