<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="<?= base_url('assets/') ?>images/fevicon.png" type="">

  <title> Carint </title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="<?= base_url('assets/') ?>css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="<?= base_url('assets/') ?>css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?= base_url('assets/') ?>css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid ">
          <div class="contact_nav">
            <a href="">
              <img src="<?= base_url('assets/images/profile/') . $user['gambar'] ?>" alt=""
                style="width: 25px;margin-right: 10px;" class="img-profile rounded-circle ">
              <span>
                <?= $user['nama'] ?>
              </span>
            </a>
            <a href="<?= base_url('Auth/logout') ?>">
              <span>
                Logout
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
              <span>
                2 TIB
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <?php
                if ($user['role'] == 'Admin') { ?>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('Mahasiswa/') ?>">Mahasiswa <span
                        class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('Prodi/') ?>">Prodi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('Pemesanan/') ?>">Pemesanan</a>
                  </li>
                <?php } else { ?>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('Profil/') ?>">Profil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('Auth/logout') ?>">Logout</a>
                  </li>
                <?php } ?>
                <form class="form-inline">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
    <div class="sidebar-heading">

    </div>