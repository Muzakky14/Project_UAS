<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Main CSS -->
    <link rel="stylesheet" href="<?= base_url('frontend/css/style.css') ?>">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous"/>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400, 500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/eb447e5792.js" crossorigin="anonymous"></script>

    <title>SiwiKode | Wisata Kuliner</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" id="secNav">
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
              <a class="nav-link" href="<?=base_url()?>index.php/welcome/wisrek">Wisata Rekreasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="<?=base_url()?>index.php/welcome/wiskul">Wisata Kuliner</a>
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
            <h2 class="section-heading">Daftar Wisata Kuliner</h2>
          </div>
          <div class="col-md-6">
            <div class="breadcrumb-link">
              <a class="b-link" href="landing.html">Home</a>
              <span>Daftar Wisata Kuliner</span>
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
            <img class="img-fluid" src="<?php echo base_url()?>/img/kopinako/thumb-0.jpg" alt="">
          </div>
          <div class="col-12 col-sm-6 col-lg-3 order-sm-2 order-xl-2 point-left">
            <div class="item-desc">
              <h1>Kopi Nako</h1>
              <p>Kopi Nako menyediakan ragam kopi nusantara dan camilan khas Indonesia..</p>
              <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#staticBackdrop1">Detail</button>
            </div>
          </div>
          <!-- Wisata Rekreasi 2 -->
          <div class="col-12 col-sm-6 col-lg-3 order-sm-3 order-xl-3">
            <img class="img-fluid" src="<?php echo base_url()?>/img/drumbs/thumb-0.jpg" alt="">
          </div>
          <div class="col-12 col-sm-6 col-lg-3 order-sm-4 order-xl-4 point-left">
            <div class="item-desc">
              <h1>Walking Drums</h1>
              <p>Tempat makan dengan menu andalan berupa variasi nasi bungkus daun, pizza renyah, dan kopi..</p>
              <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#staticBackdrop2">Detail</button>
            </div>
          </div>
        </div>
        <div class="row no-gutters">
          <!-- Wisata Rekreasi 3 -->
          <div class="col-12 col-sm-6 col-lg-3 order-sm-5 order-xl-2">
            <img class="img-fluid" src="<?php echo base_url()?>/img/louis/thumb-0.jpg" alt="">
          </div>
          <div class="col-12 col-sm-6 col-lg-3 order-sm-6 order-xl-1 point-right">
            <div class="item-desc">
              <h1>Louis Cafe</h1>
              <p>Kafe yang terletak di Jalan Mawar ini menghadirkan suasana Instagenik yang cocok untuk bersantai..</p>
              <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#staticBackdrop3">Detail</button>
            </div>
          </div>
          <!-- Wisata Rekreasi 4 -->
          <div class="col-12 col-sm-6 col-lg-3 order-sm-7 order-xl-4">
            <img class="img-fluid" src="<?php echo base_url()?>/img/warpas/thumb-0.jpg" alt="">
          </div>
          <div class="col-12 col-sm-6 col-lg-3 order-sm-8 order-xl-3 point-right">
            <div class="item-desc">
              <h1>Warung Pasta Depok</h1>
              <p>Berbagai masakan khas Italia bisa kamu temukan di tempat wisata kuliner Depok satu ini, mulai dari aneka piza, pasta, calzone, dan sebagainya..</p>
              <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#staticBackdrop4">Detail</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir Daftar Wisata -->

    <!-- Modal nako -->
    <div class="modal fade" id="staticBackdrop1" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 col-lg-10">
                <h5 class="modal-title text-white" id="staticBackdropLabel">Kopi Nako</h5>
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
                    <img class="img-thumbnail" src="<?php echo base_url()?>/img/kopinako/thumb-0.jpg" alt="Another alt text">
                  </a>
                </div>
                <div class="col-md-12 thumb">
                  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                    <img class="img-thumbnail" src="<?php echo base_url()?>/img/kopinako/thumb-1.jpg" alt="Another alt text">
                  </a>
                </div>
                <div class="col-md-12 thumb">
                  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                    <img class="img-thumbnail" src="<?php echo base_url()?>/img/kopinako/thumb-2.jpg" alt="Another alt text">
                  </a>
                </div>
                <div class="col-md-12 thumb">
                  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                    <img class="img-thumbnail" src="<?php echo base_url()?>/img/kopinako/thumb-3.jpg" alt="Another alt text">
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
                <p>Kopi Nako adalah jenis tempat ngopi yang begitu nyaman dan layak dijadikan tempat persinggahan saat kamu penat dengan hal-hal yang mampir di kepala. Kedainya nyaman, kopinya enak, mudah ditemukan dan harganya juga nyaman di kantong. Cocok nih untuk kamu yang sedang mencari cafe untuk mengerjakan tugas-tugas kuliah.</p>
              </div>
              <!-- akhir Deskripsi -->

              <!-- Lokasi -->
              <div class="col-12 col-lg-6 col-sm-12">
                <h5><i class="fas fa-map-marker-alt text-danger"></i> Lokasi</h5>
                <p>Jl. Margonda Raya No.38, Depok, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16431</p>
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.9755495664012!2d106.81857301477007!3d-6.397152295371261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eb9b9ebc6ce9%3A0x3f35d853d6f1c144!2sWarung%20Nako%20Kopi%20Nako%20Depok!5e0!3m2!1sid!2sid!4v1611496265261!5m2!1sid!2sid" 
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
                  <img src="<?php echo base_url()?>/img/kopinako/testi-artis.jpg" class="img-thumbnail rounded-circle" width="125px" alt="...">
                  <figure>
                    <blockquote class="blockquote">
                      <p>"Tempatnya bagus sekali, Kopinya juga enak"</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      Arafah Rianti
                    </figcaption>
                  </figure>
                </div>
                <div class="carousel-item">
                  <img src="<?php echo base_url()?>/img/kopinako/testi-pejabat.jpg" class="img-thumbnail rounded-circle" width="125px" alt="...">
                  <figure>
                    <blockquote class="blockquote">
                      <p>"Kopinya enak sekali, membuat saya ingin meluncurkan nuklir"</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      Wahid Suryono
                    </figcaption>
                  </figure>
                </div>
                <div class="carousel-item">
                  <img src="<?php echo base_url()?>/img/kopinako/testi-3.jpg" class="img-thumbnail rounded-circle" width="125px" alt="...">
                  <figure>
                    <blockquote class="blockquote">
                      <p>"Tempatnya sangat bagus, sangat cocok untuk nugas lama-lama"</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      Oktavyanto 
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
  <!-- akhir Modal nako  -->

  <!-- Modal drumbs -->
  <div class="modal fade" id="staticBackdrop2" data-backdrop="static" data-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 col-lg-10">
              <h5 class="modal-title text-white" id="staticBackdropLabel">Walking Drumbs</h5>
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
                <a class="thumbnail" href="#mini" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                  <img class="img-thumbnail" src="<?php echo base_url()?>/img/drumbs/thumb-0.jpg" alt="Another alt text">
                </a>
              </div>
              <div class="col-md-12 thumb">
                <a class="thumbnail" href="#mini" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                  <img class="img-thumbnail" src="<?php echo base_url()?>/img/drumbs/thumb-1.jpg" alt="Another alt text">
                </a>
              </div>
              <div class="col-md-12 thumb">
                <a class="thumbnail" href="#mini" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                  <img class="img-thumbnail" src="<?php echo base_url()?>/img/drumbs/thumb-2.jpg" alt="Another alt text">
                </a>
              </div>
              <div class="col-md-12 thumb">
                <a class="thumbnail" href="#mini" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                  <img class="img-thumbnail" src="<?php echo base_url()?>/img/drumbs/thumb-3.jpg" alt="Another alt text">
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
              <p>Walking drums adalah salah satu yan palinv luas di depok berada di jalan margonda bikin malin hits cafe ini. memiliki spot foto yang bagus,ada mushola, indoor dan outdoor juga rooftop. kamu bebas mau pilih duduk dimana deh</p>
            </div>
            <!-- akhir Deskripsi -->

            <!-- Lokasi -->
            <div class="col-12 col-lg-6 col-sm-12">
              <h5><i class="fas fa-map-marker-alt text-danger"></i> Lokasi</h5>
              <p>Jl. Margonda Raya No.426, Pondok Cina, Kecamatan Beji, Kota Depok, Jawa Barat 16424</p>
              <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.208088304973!2d106.83210801476991!3d-6.367110895392636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ede92b77cd85%3A0x6d7bfa1c7a8425fe!2sWalking%20Drums%20Margonda!5e0!3m2!1sid!2sid!4v1611801677258!5m2!1sid!2sid" 
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
                <img src="<?php echo base_url()?>/img/drumbs/testi-artis.jpg" class="img-thumbnail rounded-circle" width="125px" alt="...">
                <figure>
                  <blockquote class="blockquote">
                    <p>"Suasananya enak banget di sini, cocok untuk ngerjain tugas atau nongkrong bareng temen. Ruangannya terbuka, di dalamnya ada yg ber AC tapi berjarak. Makanannya juga enak dengan harga standar. Tersedia mushola dan toilet juga ya"</p>
                  </blockquote>
                  <figcaption class="blockquote-footer">
                  Ricky Harun
                  </figcaption>
                </figure>
              </div>
              <div class="carousel-item">
                <img src="<?php echo base_url()?>/img/drumbs/testi-pejabat.jpg" class="img-thumbnail rounded-circle" width="125px" alt="...">
                <figure>
                  <blockquote class="blockquote">
                    <p>"Konsep kafenya menarik. Banyak space, bisa buat nongkrong rame-rame atau sedikit. Ada space buat shalat. Makanan dan minumannya enak dan banyak variasi. Kekurangannya hanya, harganya relatif lebih mahal dibandingkan kafe lain"</p>
                  </blockquote>
                  <figcaption class="blockquote-footer">
                    Nancy Olivia Rossa
                  </figcaption>
                </figure>
              </div>
              <div class="carousel-item">
                <img src="<?php echo base_url()?>/img/drumbs/testi-warga.jpg" class="img-thumbnail rounded-circle" width="125px" alt="...">
                <figure>
                  <blockquote class="blockquote">
                    <p>"Tempatnya asik buat sekedar nongkrong baik sendiri atau dengan banyak kawan atau kolega, banyak pilihan tempat duduk mau di indor atau outdor, pilihan menu coffe nya jga banyak dan enak menurut gua, tempat yang recomended lah untuk nongkrong bersama kawan atau keluarga"</p>
                  </blockquote>
                  <figcaption class="blockquote-footer">
                    Fahri sucipto
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
<!-- akhir Modal drumbs -->

  <!-- Modal louis -->
  <div class="modal fade" id="staticBackdrop3" data-backdrop="static" data-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 col-lg-10">
              <h5 class="modal-title text-white" id="staticBackdropLabel">Louis Cafe</h5>
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
                  <img class="img-thumbnail" src="<?php echo base_url()?>/img/louis/thumb-0.jpg" alt="Another alt text">
                </a>
              </div>
              <div class="col-md-12 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                  <img class="img-thumbnail" src="<?php echo base_url()?>/img/louis/thumb-1.jpg" alt="Another alt text">
                </a>
              </div>
              <div class="col-md-12 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                  <img class="img-thumbnail" src="<?php echo base_url()?>/img/louis/thumb-2.jpg" alt="Another alt text">
                </a>
              </div>
              <div class="col-md-12 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                  <img class="img-thumbnail" src="<?php echo base_url()?>/img/louis/thumb-3.jpg" alt="Another alt text">
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
              <p>Louis, sebuah coffeeshop anyar di Depok yang lokasinya agak menghindar dari keramaian, yaitu di jalan Mawar no.22. Kalau dari arah Margonda menuju ke RS. Hermina, belok kanan tepat sebelum rumah sakit, nanti tidak jauh dari situ adanya disebelah kiri jalan. Bangunan berup rumah tua yang disulap menjadi sebuah kafe yang cukup luas terutama area outdoor nya.</p>
            </div>
            <!-- akhir Deskripsi -->

            <!-- Lokasi -->
            <div class="col-12 col-lg-6 col-sm-12">
              <h5><i class="fas fa-map-marker-alt text-danger"></i> Lokasi</h5>
              <p>Jl. Mawar No.22, Depok, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16431</p>
              <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.948319000039!2d106.82248431477001!3d-6.400660995368762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eb637b8202a9%3A0x315f768f09c983b2!2sLOUIS!5e0!3m2!1sid!2sid!4v1611801736254!5m2!1sid!2sid" 
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
                <img src="<?php echo base_url()?>/img/louis/testi-artis.jpg" class="img-thumbnail rounded-circle" width="125px" alt="...">
                <figure>
                  <blockquote class="blockquote">
                    <p>"Happy banget makan disini. Suasananya nyaman, kayak rumah gede yang dijadiin restoran. Harganya surprisingly ga mahal. Makanan sekitar 30rban lah. Simpel tapi enak! Porsinya juga banyak. "</p>
                  </blockquote>
                  <figcaption class="blockquote-footer">
                    Ammar Zoni
                  </figcaption>
                </figure>
              </div>
              <div class="carousel-item">
                <img src="<?php echo base_url()?>/img/louis/testi-pejabat.jpg" class="img-thumbnail rounded-circle" width="125px" alt="...">
                <figure>
                  <blockquote class="blockquote">
                    <p>"Tempatnya bagus,sejuk dan Instagramable bngt. Toilet nya bersih banget. Pelayanan nya juga sopan. Pokoknya recommended buat Nongkrong"</p>
                  </blockquote>
                  <figcaption class="blockquote-footer">
                    Iskandar Zulkarnaen
                  </figcaption>
                </figure>
              </div>
              <div class="carousel-item">
                <img src="<?php echo base_url()?>/img/louis/testi-warga.jpg" class="img-thumbnail rounded-circle" width="125px" alt="...">
                <figure>
                  <blockquote class="blockquote">
                    <p>"tempat nya asik buat ngumpul, tempat parkir luas, ada mushola walaupun kapasitas cuma buat 2 orang, untuk harga masih pas di kantong kok"</p>
                  </blockquote>
                  <figcaption class="blockquote-footer">
                    Rizky Muhammad
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
<!-- akhir Modal louis -->

  <!-- Modal Pasta -->
  <div class="modal fade" id="staticBackdrop4" data-backdrop="static" data-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 col-lg-10">
              <h5 class="modal-title text-white" id="staticBackdropLabel">Warung Pasta Depok</h5>
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
                  <img class="img-thumbnail" src="<?php echo base_url()?>/img/warpas/thumb-0.jpg" alt="Another alt text">
                </a>
              </div>
              <div class="col-md-12 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                  <img class="img-thumbnail" src="<?php echo base_url()?>/img/warpas/thumb-1.jpg" alt="Another alt text">
                </a>
              </div>
              <div class="col-md-12 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                  <img class="img-thumbnail" src="<?php echo base_url()?>/img/warpas/thumb-2.jpg" alt="Another alt text">
                </a>
              </div>
              <div class="col-md-12 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                  <img class="img-thumbnail" src="<?php echo base_url()?>/img/warpas/thumb-3.jpg" alt="Another alt text">
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
              <p>Berbagai masakan khas Italia bisa kamu temukan di tempat wisata kuliner Depok satu ini, mulai dari aneka piza, pasta, calzone, dan sebagainya</p>
            </div>
            <!-- akhir Deskripsi -->

            <!-- Lokasi -->
            <div class="col-12 col-lg-6 col-sm-12">
              <h5><i class="fas fa-map-marker-alt text-danger"></i> Lokasi</h5>
              <p>Jl. Margonda Raya No.518, Pondok Cina, Kecamatan Beji, Kota Depok, Jawa Barat 16424</p>
              <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.2718956017875!2d106.83082801476988!3d-6.358842995398544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec163ae31409%3A0x3cddd00a46af385e!2sWarung%20Pasta%20Depok!5e0!3m2!1sid!2sid!4v1611801785529!5m2!1sid!2sid" 
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
                <img src="<?php echo base_url()?>/img/warpas/testi-artis.jpg" class="img-thumbnail rounded-circle" width="125px" alt="...">
                <figure>
                  <blockquote class="blockquote">
                    <p>"Tempatnya nyaman. Tapi sedikit agak mahal. Menu yg disajikan memang ga biasa,  ga gampang nemu di tempat lain. Favoritku tom yum seafood, pakai fusilli , salah satu restoran di depok yang tetep survive di masa pandemi."</p>
                  </blockquote>
                  <figcaption class="blockquote-footer">
                    Coki Pardede
                  </figcaption>
                </figure>
              </div>
              <div class="carousel-item">
                <img src="<?php echo base_url()?>/img/warpas/testi-pejabat.jpg" class="img-thumbnail rounded-circle" width="125px" alt="...">
                <figure>
                  <blockquote class="blockquote">
                    <p>"Menu nya unik ya..saya doyan banget pasta dan selalu menikmati segernya kuah tom yam...dan warung pasta..dua makanan favorit saya itu disajikan dalam satu mangkok....wahh....wuenak tenan..."</p>
                  </blockquote>
                  <figcaption class="blockquote-footer">
                    Hendrik Alamsyah
                  </figcaption>
                </figure>
              </div>
              <div class="carousel-item">
                <img src="<?php echo base_url()?>/img/warpas/testi-warga.jpg" class="img-thumbnail rounded-circle" width="125px" alt="...">
                <figure>
                  <blockquote class="blockquote">
                    <p>"Makan dengan perasaan aman.
                      Sejak psbb, hanya lantai bawah yang buka agar mengurangi 50% kapasitas sepertinya. Tempat semi terbuka jadi banyak ruang buat sirkulasi udara. Tidak pakai ac tapi kipas angin. Ada tempat cuci tangan sebelum masuk. Periksa suhu. Karyawan pakai masker."</p>
                  </blockquote>
                  <figcaption class="blockquote-footer">
                    Syamsul Mustaqim
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
<!-- akhir Modal Pasta -->

    <!-- Footer -->
    <footer class="footer py-4 text-white">
      <div class="container">
          <div class="row">
              <div class="col-md-12">Develop By Mahasiswa @STT-NF 2021</div>
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