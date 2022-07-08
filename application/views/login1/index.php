<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Login - FASKES</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?php echo base_url('asets/img/faskes.png') ?>" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('asets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('asets/css/animate.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('asets/css/LineIcons.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('asets/css/owl.carousel.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('asets/css/owl.theme.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('asets/css/magnific-popup.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('asets/css/nivo-lightbox.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('asets/css/main.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('asets/css/responsive.css') ?>">
</head>

<body>
    <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
            <a href="index.html" class="navbar-brand"><img src="<?php echo base_url('asets/img/Faskes_logo.png') ?>" alt="" height="55" width="190"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false">
                <i class="lni-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto w-100 justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="<?php echo base_url("index.php/home/index") ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="<?php echo base_url("index.php/home/index") ?>">Faskes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="<?php echo base_url("index.php/home/index") ?>">Tabel</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-singin" href="<?php echo base_url('index.php/login1') ?>">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--hero section-->
    <section class="hero" style="background: linear-gradient(95deg, #5533ff 40%, #25ddf5 100%);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-8 mx-auto mb-5" style="margin-top: 120px;">
                    <div class="card border-none">
                        <div class="card-body text-center">
                            <div>
                                <h2 class="head-title ">
                                    <strong>Selamat Datang</strong>
                                </h2>
                            </div>
                            <p class="mb-5">
                                Silahkan isi Usename dan Passsword untuk Masuk
                            </p>
                            <div class="mt-4">
                                <?php echo form_open("login1/daftar") ?>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password">
                                </div>
                                <div class="submit-button float-right">
                                    <button class="btn btn-common" id="submit" type="submit">Masuk</button>
                                    <div id="msgSubmit" class="h3 hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                                </form>
                                <div class="clearfix"></div>
                            </div>
                            <p class="text-center mt-3">
                                <a href="<?php echo base_url('index.php/register') ?>">Buat Akun Baru</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <footer>
        <!-- Footer Area Start -->
        <section id="footer-Content" class="p-3">
            <!-- Copyright Start  -->
            <div class="row justify-content-center">
                <img src="<?php echo base_url('asets/img/Faskes_logo.png') ?>" alt="" width="190" height="55">
            </div>
            <!-- Copyright End -->
        </section>
        <!-- Footer area End -->
    </footer>

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
        <i class="lni-chevron-up"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="<?php echo base_url('asets/js/jquery-min.js') ?>"></script>
    <script src="<?php echo base_url('asets/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('asets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('asets/js/owl.carousel.js') ?>"></script>
    <script src="<?php echo base_url('asets/js/jquery.nav.js') ?>"></script>
    <script src="<?php echo base_url('asets/js/scrolling-nav.js') ?>"></script>
    <script src="<?php echo base_url('asets/js/jquery.easing.min.js') ?>"></script>
    <script src="<?php echo base_url('asets/js/nivo-lightbox.js') ?>"></script>
    <script src="<?php echo base_url('asets/js/jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?php echo base_url('asets/js/main.js') ?>"></script>
</body>

</html>