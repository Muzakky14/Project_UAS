<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- Main CSS -->
  <link rel="stylesheet" href="<?= base_url('frontend/css/style.css') ?>">

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@800&display=swap" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400, 500,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet"
    type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

  <!-- Fontawesome -->
  <script src="https://kit.fontawesome.com/eb447e5792.js" crossorigin="anonymous"></script>

  <title>SiwiKode | Wisata Rekreasi</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg text-dark" id="secNav">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>index.php/welcome/index">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="<?=base_url()?>index.php/welcome/wisrek">Wisata Rekreasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>index.php/welcome/wiskul">Wisata Kuliner</a>
          </li>
        </ul>
        <span class="navbar-text">
          <a class="nav-link"href="<?=base_url()?>index.php/login/login">Login</a>
        </span>
      </div>
    </div> 
  </nav>
  <!-- akhir Navbar -->

  <!-- Header -->
  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="section-heading">Daftar Wisata Rekreasi</h2>
        </div>
        <div class="col-md-6">
          <div class="breadcrumb-link">
            <a class="b-link" href="landing.html">Home</a>
            <span>Daftar Wisata Reskreasi</span>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- akhir Header -->

  <!-- Daftar Wisata -->
  <section class="daftar-section pt-4">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <!-- Wisata Rekreasi 1 -->
        <div class="col-12 col-sm-6 col-lg-3 order-sm-1 order-xl-1">
          <img class="img-fluid" src="<?php echo base_url()?>/img/kubah/thumb-0.jpg" alt="">
        </div>
        <div class="col-12 col-sm-6 col-lg-3 order-sm-2 order-xl-2 point-left">
          <div class="item-desc">
            <h1>Masjid Kubah Emas</h1>
            <p>Masjid Kubah Emas Depok merupakan salah satu mesjid di dunia dengan kubah yang terbuat dari emas..</p>
            <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#staticBackdrop1">Detail</button>
          </div>
        </div>
        <!-- Wisata Rekreasi 2 -->
        <div class="col-12 col-sm-6 col-lg-3 order-sm-3 order-xl-3">
          <img class="img-fluid" src="<?php echo base_url()?>/img/wiladatika/thumb-0.jpg" alt="">
        </div>
        <div class="col-12 col-sm-6 col-lg-3 order-sm-4 order-xl-4 point-left">
          <div class="item-desc">
            <h1>Taman Wiladatika</h1>
            <p>Taman bunga Wiladatika ini sangat cocok untuk anggota keluarga menghabiskan waktu weekend bersama
              keluarga untuk berekreasi..</p>
              <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#staticBackdrop2">Detail</button>
          </div>
        </div>
      <div class="row no-gutters">
        <!-- Wisata Rekreasi 3 -->
        <div class="col-12 col-sm-6 col-lg-3 order-sm-5 order-xl-2">
          <img class="img-fluid" src="<?php echo base_url()?>/img/d-kandang/thumb-0.jpg" alt="">
        </div>
        <div class="col-12 col-sm-6 col-lg-3 order-sm-6 order-xl-1 point-right">
          <div class="item-desc">
            <h1>D'kandang Farm</h1>
            <p>Pusat rekreasi dengan hewan ternak, pameran tanaman, ATV dan latihan memanah..</p>
            <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#staticBackdrop3">Detail</button>
          </div>
        </div>
        <!-- Wisata Rekreasi 4 -->
        <div class="col-12 col-sm-6 col-lg-3 order-sm-7 order-xl-4">
          <img class="img-fluid" src="<?php echo base_url()?>/img/aladin/thumb-0.jpg" alt="">
        </div>
        <div class="col-12 col-sm-6 col-lg-3 order-sm-8 order-xl-3 point-right">
          <div class="item-desc">
            <h1>Aladdin Waterpark</h1>
            <p>Salah satu waterpark terbesar di kota Depok yang sering juga dikenal dengan Aladin Waterpark..</p>
            <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#staticBackdrop4">Detail</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- akhir Daftar Wisata -->

  <!-- Modal kubah -->
  <div class="modal fade" id="staticBackdrop1" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 col-lg-10">
                <h5 class="modal-title text-white" id="staticBackdropLabel">Masjid Kubah Emas</h5>
              </div>
              <div class="col-12 col-lg-2">
                <ul class="list-inline small">
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star-half-alt text-warning"></i></li>
                </ul>
              </div>
            </div>
          </div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="text-white" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="container">
            <div class="row">
              <!-- Carousel -->
              <div class="owl-carousel owl-theme" id="mini">
                <div class="col-md-12 thumb">
                  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                    <img class="img-thumbnail" src="<?php echo base_url()?>/img/kubah/thumb-0.jpg" alt="Another alt text">
                  </a>
                </div>
                <div class="col-md-12 thumb">
                  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                    <img class="img-thumbnail" src="<?php echo base_url()?>/img/kubah/thumb-1.jpg" alt="Another alt text">
                  </a>
                </div>
                <div class="col-md-12 thumb">
                  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                    <img class="img-thumbnail" src="<?php echo base_url()?>/img/kubah/thumb-2.jpg" alt="Another alt text">
                  </a>
                </div>
                <div class="col-md-12 thumb">
                  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                    <img class="img-thumbnail" src="<?php echo base_url()?>/img/kubah/thumb-3.jpg" alt="Another alt text">
                  </a>
                </div>
              </div>
              <!-- akhir Carousel -->
            </div>
          </div>

          <!-- Deskripsi dan Lokasi -->
          <div class="container-fluid pt-3">
            <div class="row">
              <!-- Deskripsi -->
              <div class="col-12 col-lg-6 col-sm-12">
                <h5>Deskripsi</h5>
                <p>Masjid Dian Al Mahri atau Masjid Kubah Emas memiliki lima kubah. Satu kubah utama dan empat kubah kecil. Uniknya, seluruh kubah dilapisi emas setebal dua sampai tiga milimeter dan mozaik kristal. Bentuk kubah utama menyerupai kubah Taj Mahal</p>
              </div>
              <!-- akhir Deskripsi -->

              <!-- Lokasi -->
              <div class="col-12 col-lg-6 col-sm-12">
                <h5>Lokasi</h5>
                <p>Jl. Raya Meruyung, Meruyung, Kec. Limo, kota, Jawa Barat 16515</p>
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.076737143248!2d106.76981351476994!3d-6.384097295380525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ef282b03e03d%3A0x7a3c654ea43229d2!2sMasjid%20Kubah%20Emas%20Dian%20Al-Mahri%20Depok!5e0!3m2!1sid!2sid!4v1611116562441!5m2!1sid!2sid"
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
                </div>
              </div>
              <!-- akhir Lokasi -->
            </div>
          </div>
          <!-- akhir Deskripsi dan lokasi -->

          <!-- Testimoni -->
          <div class="container pt-5">
            <h5 class="text-center">Testimoni</h5>
            <div id="carouselExampleControls" class="carousel slide pt-3" data-ride="carousel">
              <div class="text-center carousel-inner">
                <div class="carousel-item active">
                  <img src="<?php echo base_url()?>/img/kubah/testi-artis.jpg" class="img-thumbnail rounded-circle" width="125px" alt="...">
                  <figure>
                    <blockquote class="blockquote">
                      <p>"Tempatnya bagus sekali, Masjid dengan kubah berlapiskan emas"</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      Oki Setiana Dewi
                    </figcaption>
                  </figure>
                </div>
                <div class="carousel-item">
                  <img src="<?php echo base_url()?>/img/kubah/testi-pejabat.jpg" class="img-thumbnail rounded-circle" width="125px" alt="...">
                  <figure>
                    <blockquote class="blockquote">
                      <p>"Luar biasa Masjid yang sangat indah"</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      Khamid Wijaya
                    </figcaption>
                  </figure>
                </div>
                <div class="carousel-item">
                  <img src="<?php echo base_url()?>/img/kubah/testi-warga.jpg" class="img-thumbnail rounded-circle" width="125px" alt="...">
                  <figure>
                    <blockquote class="blockquote">
                      <p>"Masjid yang sangat indah untuk dikunjungi"</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      Marcel Sutejo
                    </figcaption>
                  </figure>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <!-- akhir Testimoni -->

        </div>
      </div>
    </div>
  </div>
  <!-- akhir Modal kubah -->

  <!-- Modal wiladatika -->
  <div class="modal fade" id="staticBackdrop2" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 col-lg-10">
                <h5 class="modal-title text-white" id="staticBackdropLabel">Taman Wiladatika</h5>
              </div>
              <div class="col-12 col-lg-2">
                <ul class="list-inline small">
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star-half-alt text-warning"></i></li>
                </ul>
              </div>
            </div>
          </div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="text-white" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="container">
            <div class="row">
              <!-- Carousel -->
              <div class="owl-carousel owl-theme" id="mini">
                <div class="col-md-12 thumb">
                  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                    <img class="img-thumbnail" src="<?php echo base_url()?>/img/wiladatika/thumb-0.jpg" alt="Another alt text">
                  </a>
                </div>
                <div class="col-md-12 thumb">
                  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                    <img class="img-thumbnail" src="<?php echo base_url()?>/img/wiladatika/thumb-1.jpg" alt="Another alt text">
                  </a>
                </div>
                <div class="col-md-12 thumb">
                  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                    <img class="img-thumbnail" src="<?php echo base_url()?>/img/wiladatika/thumb-2.jpg" alt="Another alt text">
                  </a>
                </div>
                <div class="col-md-12 thumb">
                  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                    <img class="img-thumbnail" src="<?php echo base_url()?>/img/wiladatika/thumb-3.jpg" alt="Another alt text">
                  </a>
                </div>
              </div>
              <!-- akhir Carousel -->
            </div>
          </div>

          <!-- Deskripsi dan Lokasi -->
          <div class="container-fluid pt-3">
            <div class="row">
              <!-- Deskripsi -->
              <div class="col-12 col-lg-6 col-sm-12">
                <h5>Deskripsi</h5>
                <p>Taman Rekreasi Wiladatika Cibubur merupakan tempat wisata yang berlokasi di Cimanggis, Depok Jawa Barat. Di sini terdapat Pusat Pendidikan dan Pelatihan Pramuka Nasional (Pusdiklatmas), aula resepsi yang biasa digunakan untuk acara resepsi pernikahan, dan halaman hijau yang biasa di gunakan para pengunjung untuk piknik bersama keluarga, ketika acara besar pramuka biasa digunakan untuk berkemah.</p>
              </div>
              <!-- akhir Deskripsi -->

              <!-- Lokasi -->
              <div class="col-12 col-lg-6 col-sm-12">
                <h5>Lokasi</h5>
                <p>Jl. Jambore No.1, Harjamukti, Kec. Cimanggis, Kota Depok, Jawa Barat 13720</p>
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.184227070564!2d106.89113831476999!3d-6.370199995390443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eca341d5feeb%3A0x1475ebc18101ced!2sTaman%20Rekreasi%20Wiladatika!5e0!3m2!1sid!2sid!4v1611801469011!5m2!1sid!2sid" 
                  width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                  </iframe>
                </div>
              </div>
              <!-- akhir Lokasi -->
            </div>
          </div>
          <!-- akhir Deskripsi dan lokasi -->

          <!-- Testimoni -->
          <div class="container pt-5">
            <h5 class="text-center">Testimoni</h5>
            <div id="carouselExampleControls" class="carousel slide pt-3" data-ride="carousel">
              <div class="text-center carousel-inner">
                <div class="carousel-item active">
                  <img src="<?php echo base_url()?>/img/wiladatika/testi-artis.jpg" class="img-thumbnail rounded-circle" width="125px" alt="...">
                  <figure>
                    <blockquote class="blockquote">
                      <p>"Wisatawan yang ingin berkunjung ke tempat penuh bunga maka Taman Bunga Wiladatika ini merupakan rekomendasi paling tepat. Taman yang cocok digunakan untuk piknik bersama keluarga ataupun sekadar bersantai dengan orang tersayang"</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      Kadek Defi
                    </figcaption>
                  </figure>
                </div>
                <div class="carousel-item">
                  <img src="<?php echo base_url()?>/img/wiladatika/testi-pejabat.jpg" class="img-thumbnail rounded-circle" width="125px" alt="...">
                  <figure>
                    <blockquote class="blockquote">
                      <p>"Nyaman untuk sekedar jalan dan melihat rindangnya pepohonan serta taman bunga"</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      Dr. Devi Mayori
                    </figcaption>
                  </figure>
                </div>
                <div class="carousel-item">
                  <img src="<?php echo base_url()?>/img/wiladatika/testi-warga.jpg" class="img-thumbnail rounded-circle" width="125px" alt="...">
                  <figure>
                    <blockquote class="blockquote">
                      <p>"Suasana nya nyaman buat piknik keluarga ,tiket masuk nya terjangkau ,parkir nya sangat luas ,rekomendasi untuk wisata keluarga"</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      Rudi Dwi Cahyono
                    </figcaption>
                  </figure>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <!-- akhir Testimoni -->

        </div>
      </div>
    </div>
  </div>
  <!-- akhir Modal wiladatika -->

    <!-- Modal d-kandang -->
    <div class="modal fade" id="staticBackdrop3" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 col-lg-10">
                <h5 class="modal-title text-white" id="staticBackdropLabel">D-Kandang Farm</h5>
              </div>
              <div class="col-12 col-lg-2">
                <ul class="list-inline small">
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star-half-alt text-warning"></i></li>
                </ul>
              </div>
            </div>
          </div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="text-white" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="container">
            <div class="row">
              <!-- Carousel -->
              <div class="owl-carousel owl-theme" id="mini">
                <div class="col-md-12 thumb">
                  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                    <img class="img-thumbnail" src="<?php echo base_url()?>/img/d-kandang/thumb-0.jpg" alt="Another alt text">
                  </a>
                </div>
                <div class="col-md-12 thumb">
                  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                    <img class="img-thumbnail" src="<?php echo base_url()?>/img/d-kandang/thumb-1.jpg" alt="Another alt text">
                  </a>
                </div>
                <div class="col-md-12 thumb">
                  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                    <img class="img-thumbnail" src="<?php echo base_url()?>/img/d-kandang/thumb-2.jpg" alt="Another alt text">
                  </a>
                </div>
                <div class="col-md-12 thumb">
                  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                    <img class="img-thumbnail" src="<?php echo base_url()?>/img/d-kandang/thumb-3.jpg" alt="Another alt text">
                  </a>
                </div>
              </div>
              <!-- akhir Carousel -->
            </div>
          </div>

          <!-- Deskripsi dan Lokasi -->
          <div class="container-fluid pt-3">
            <div class="row">
              <!-- Deskripsi -->
              <div class="col-12 col-lg-6 col-sm-12">
                <h5>Deskripsi</h5>
                <p>D'Kandang Amazing Farm merupakan sebuah tempat wisata yang memiliki konsep pertanian dan juga peternakan.Wisata edukasi ini tak hanya ditujukan untuk study dari sekolah namun juga bisa dijadikan sebagai destinasi wisata keluarga.</p>
              </div>
              <!-- akhir Deskripsi -->

              <!-- Lokasi -->
              <div class="col-12 col-lg-6 col-sm-12">
                <h5>Lokasi</h5>
                <p>Jl. Penarikan, RT.01/RW./02, Pasir Putih, Kec. Sawangan, Kota Depok, Jawa Barat 16519</p>
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.8307656359502!2d106.78256251424254!3d-6.415785995357992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e9a56d1aa9eb%3A0xa6e554ba0c0b7d15!2sD&#39;Kandang%20Amazing%20Farm!5e0!3m2!1sid!2sid!4v1611801529580!5m2!1sid!2sid" 
                  width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                  </iframe>
                </div>
              </div>
              <!-- akhir Lokasi -->
            </div>
          </div>
          <!-- akhir Deskripsi dan lokasi -->

          <!-- Testimoni -->
          <div class="container pt-5">
            <h5 class="text-center">Testimoni</h5>
            <div id="carouselExampleControls" class="carousel slide pt-3" data-ride="carousel">
              <div class="text-center carousel-inner">
                <div class="carousel-item active">
                  <img src="<?php echo base_url()?>/img/d-kandang/testi-artis.jpg" class="img-thumbnail rounded-circle" width="125px" alt="...">
                  <figure>
                    <blockquote class="blockquote">
                      <p>"Tempatnya adem, anak-anak senang bermain di sini melihat binatang-binatang ternak, bermain, bersantai, foto-foto..makanan yg ada di restorannya juga lumayan enak dengan harga sesuai"</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      Ayu Ting-Ting
                    </figcaption>
                  </figure>
                </div>
                <div class="carousel-item">
                  <img src="<?php echo base_url()?>/img/d-kandang/testi-pejabat.jpg" class="img-thumbnail rounded-circle" width="125px" alt="...">
                  <figure>
                    <blockquote class="blockquote">
                      <p>"Murah tiketnya...lumayan jalan2 outdoor buat anak2..ada wahana naik kuda, kambing, sapi, atv,archery,dl"</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      Dadang Supriatna
                    </figcaption>
                  </figure>
                </div>
                <div class="carousel-item">
                  <img src="<?php echo base_url()?>/img/d-kandang/testi-warga.jpg" class="img-thumbnail rounded-circle" width="125px" alt="...">
                  <figure>
                    <blockquote class="blockquote">
                      <p>"Berwisata sambil menuntut ilmu kerap dilakukan orang tua ketika mengajak anak-anak mereka untuk berlibur."</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      karmilla Yasyifa
                    </figcaption>
                  </figure>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <!-- akhir Testimoni -->

        </div>
      </div>
    </div>
  </div>
  <!-- akhir Modal d-kandang -->

    <!-- Modal aladin -->
    <div class="modal fade" id="staticBackdrop4" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 col-lg-10">
                <h5 class="modal-title text-white" id="staticBackdropLabel">Aladdin waterpark</h5>
              </div>
              <div class="col-12 col-lg-2">
                <ul class="list-inline small">
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                </ul>
              </div>
            </div>
          </div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="text-white" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="container">
            <div class="row">
              <!-- Carousel -->
              <div class="owl-carousel owl-theme" id="mini">
                <div class="col-md-12 thumb">
                  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                    <img class="img-thumbnail" src="<?php echo base_url()?>/img/aladin/thumb-0.jpg" alt="Another alt text">
                  </a>
                </div>
                <div class="col-md-12 thumb">
                  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                    <img class="img-thumbnail" src="<?php echo base_url()?>/img/aladin/thumb-1.jpg" alt="Another alt text">
                  </a>
                </div>
                <div class="col-md-12 thumb">
                  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                    <img class="img-thumbnail" src="<?php echo base_url()?>/img/aladin/thumb-2.jpg" alt="Another alt text">
                  </a>
                </div>
                <div class="col-md-12 thumb">
                  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                    <img class="img-thumbnail" src="<?php echo base_url()?>/img/aladin/thumb-3.jpg" alt="Another alt text">
                  </a>
                </div>
              </div>
              <!-- akhir Carousel -->
            </div>
          </div>

          <!-- Deskripsi dan Lokasi -->
          <div class="container-fluid pt-3">
            <div class="row">
              <!-- Deskripsi -->
              <div class="col-12 col-lg-6 col-sm-12">
                <h5>Deskripsi</h5>
                <p>Depok Fantasy Waterpark lebih dikenal dengan nama Aladin Waterpark. Sebab, taman rekreasi terbesar pertama di Depok ini memiliki tema unik, yakni negeri 1001 malam dengan banyak replika Aladin dan Putri Jasmine. Di sini kamu bisa merasakan berenang dan bermain air dengan banyak variasi.</p>
              </div>
              <!-- akhir Deskripsi -->

              <!-- Lokasi -->
              <div class="col-12 col-lg-6 col-sm-12">
                <h5>Lokasi</h5>
                <p>Jl. Boulevard Grand Depok City, Tirtajaya, Kec. Sukmajaya, Kota Depok, Jawa Barat 16412</p>
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.8009023980126!2d106.82622261424255!3d-6.41962269535527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ea3fcdbc7187%3A0x851fe112499c426!2sDepok%20Fantasi%20Waterpark%20-%20Aladdin!5e0!3m2!1sid!2sid!4v1611801581517!5m2!1sid!2sid" 
                  width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                  </iframe>
                </div>
              </div>
              <!-- akhir Lokasi -->
            </div>
          </div>
          <!-- akhir Deskripsi dan lokasi -->

          <!-- Testimoni -->
          <div class="container pt-5">
            <h5 class="text-center">Testimoni</h5>
            <div id="carouselExampleControls" class="carousel slide pt-3" data-ride="carousel">
              <div class="text-center carousel-inner">
                <div class="carousel-item active">
                  <img src="<?php echo base_url()?>/img/aladin/testi-artis.jpg" class="img-thumbnail rounded-circle" width="125px" alt="...">
                  <figure>
                    <blockquote class="blockquote">
                      <p>"Sangat menyenangkan bisa berlibur bersama keluarga disini, mereka menyediakan gazebo namun harus order terlebih dahulu"</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      Rifky Balweel
                    </figcaption>
                  </figure>
                </div>
                <div class="carousel-item">
                  <img src="<?php echo base_url()?>/img/aladin/testi-pejabat.jpg" class="img-thumbnail rounded-circle" width="125px" alt="...">
                  <figure>
                    <blockquote class="blockquote">
                      <p>"Ingat ya kalau mau berenang ya di waterboom depok fatansi.
                        Mantebb pokoknya. Liat dah tuh airnya seger bner bukan main.
                        Gk kalah dah sama mata air yang kaya dipuncak puncak.
                        Dan permainananya buannnyaaaakk bnget"</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      Syafrizal
                    </figcaption>
                  </figure>
                </div>
                <div class="carousel-item">
                  <img src="<?php echo base_url()?>/img/aladin/testi-warga.jpg" class="img-thumbnail rounded-circle" width="125px" alt="...">
                  <figure>
                    <blockquote class="blockquote">
                      <p>"Kolam renang yang bersih, banyak kolam permainan untuk anak, ada wahana mandi busa juga. Harga nya pun terjangkau hanya 45rb di weekdays. Tersedia juga warung2 penjual makanan dengan harga yg cukup terjangkau, jadi habis berenang bisa langsung mengisi perut. Tempat bilas banyak, parkir luas dan kolam nya juga banyak. Pokoknya Aladin Waterpark cukup bisa memenuhi kebutuhan rekreasi keluarga di depok."</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      Ahmad syafrudin
                    </figcaption>
                  </figure>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <!-- akhir Testimoni -->

        </div>
      </div>
    </div>
  </div>
  <!-- akhir Modal aladin -->

  <!-- Footer -->
  <footer class="footer py-4 text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">Develop By Mahasiswa @STT-NF 2021</div>
        </div>
    </div>
  </footer>
  <!-- Akhir Footer -->

  <!-- jQuery, Popper.js, and Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

  <!-- Owl Carousel JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

  <!-- Main JS -->
  <script src="<?= base_url('frontend/js/script.js') ?>"></script>
</body>

</html>