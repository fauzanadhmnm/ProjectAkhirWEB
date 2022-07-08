<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>FASKES - Fasilitas Kesehatan</title>
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
    <!-- Header Section Start -->
    <header id="home" class="hero-area">
        <div class="overlay">
            <span></span>
            <span></span>
        </div>
        <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
            <div class="container">
                <a href="index.html" class="navbar-brand"><img src="<?php echo base_url('asets/img/Faskes_logo.png') ?>" alt="" height="55" width="190"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="lni-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto w-100 justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#blog">Faskes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#tabel">Tabel</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-singin" href="<?php echo base_url('index.php/login1') ?>">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row space-100">
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="contents">
                        <h2 class="head-title">Halaman Katalog Fasilitas <br> Kesehatan Kota Depok</h2>
                        <p>Melayani masyarakat untuk mempermudah mencari Fasilitas Kesehatan di Kota Depok.</p>
                        <div class="header-button">
                            <a href="<?php echo base_url('index.php/register') ?>" class="btn btn-border-filled">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12 p-0">
                    <div class="intro-img">
                        <img src="<?php echo base_url('asets/img/g1.png') ?>" alt="" style="width: 470px; margin-left: 93px; margin-top: 36px">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    <!-- Blog Section -->
    <section id="blog" class="section pb-5">
        <!-- Container Starts -->
        <div class="container">
            <!-- Start Row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-text section-header text-center">
                        <div>
                            <h2 class="section-title">Daftar Fasilitas Kesehatan</h2>
                            <div class="desc-text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->
            <!-- Start Row -->
            <div class="row justify-content-center">
                <!-- Start Col -->
                <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                    <!-- Blog Item Starts -->
                    <div class="blog-item-wrapper">
                        <div class="blog-item-img">
                            <a href="single-post.html">
                                <img src="<?php echo base_url('asets/img/blog/Rumah_Sakit.jpg') ?>" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="blog-item-text">
                            <h3><a data-toggle="modal" data-target=".rmhsakit">Rumah Sakit Hermina</a></h3>
                            <p><strong> Rumah Sakit (Tipe B) </strong><br> Pancoran Mas, Depok</p>
                            <a href="" class="read-more">Rating 4.5</a>
                        </div>
                        <div class="author">
                            <span class="name"><a href="#">Jam Operasional</a></span>
                            <br>
                            <span class="date float-right mt-2"><i class="lni-calendar"></i><a href="#">Senin-Minggu 00:00 -
                                    23:59</a></span>
                        </div>
                    </div>
                    <!-- Blog Item Wrapper Ends-->
                </div>
                <!-- End Col -->
                <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                    <!-- Blog Item Starts -->
                    <div class="blog-item-wrapper">
                        <div class="blog-item-img">
                            <a href="single-post.html">
                                <img src="<?php echo base_url('asets/img/blog/puskesmas.jpg') ?>" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="blog-item-text">
                            <h3><a data-toggle="modal" data-target=".puskesmas">Puskesmas Poned Beji</a></h3>
                            <p><strong> Pusat Kesehatan Masyarakat </strong><br> Kecamatan Beji, Depok</p>
                            <a href="" class="read-more">Rating 4.0</a>
                        </div>
                        <div class="author">
                            <span class="name"><a href="#">Jam Operasional</a></span>
                            <br>
                            <span class="date float-right mt-2"><i class="lni-calendar"></i><a href="#">Senin-Jum'at 00:00 -
                                    23:59</a></span>
                        </div>
                    </div>
                    <!-- Blog Item Wrapper Ends-->
                </div>
                <!-- Start Col -->
                <!-- End Col -->
            </div>
            <!-- End Row -->
            <div class="row mt-5 pt-2">
                <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                    <!-- Blog Item Starts -->
                    <div class="blog-item-wrapper">
                        <div class="blog-item-img">
                            <a href="single-post.html">
                                <img src="<?php echo base_url('assets/img/blog/klinik_gigi.jpg') ?>" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="blog-item-text">
                            <h3><a data-toggle="modal" data-target=".klinikgigi">Rumah Gigi</a></h3>
                            <p><strong> Klinik Gigi</strong><br> Pasar Puncung, Depok</p>
                            <a href="" class="read-more">Rating 4.8</a>
                        </div>
                        <div class="author">
                            <span class="name"><a href="#">Jam Operasional</a></span>
                            <br>
                            <span class="date float-right mt-2"><i class="lni-calendar"></i><a href="#">Senin-Rabu 00:00 -
                                    23:59</a></span>
                        </div>
                    </div>
                    <!-- Blog Item Wrapper Ends-->
                </div>
                <!-- End Col -->
                <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                    <!-- Blog Item Starts -->
                    <div class="blog-item-wrapper">
                        <div class="blog-item-img">
                            <a href="single-post.html">
                                <img src="<?php echo base_url('asets/img/blog/KLINIK.png') ?>" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="blog-item-text">
                            <h3><a data-toggle="modal" data-target=".klinik">Bahar Medical I</a></h3>
                            <p><strong>Klinik Umum</strong><br> Dewi Sartika, Depok</p>
                            <a href="" class="read-more">Rating 4.0</a>
                        </div>
                        <div class="author">
                            <span class="name"><a href="#">Jam Operasional</a></span>
                            <br>
                            <span class="date float-right mt-2"><i class="lni-calendar"></i><a href="#">Senin-Minggu 00:00 -
                                    23:59</a></span>
                        </div>
                    </div>
                    <!-- Blog Item Wrapper Ends-->
                </div>
                <!-- Start Col -->
                <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                    <!-- Blog Item Starts -->
                    <div class="blog-item-wrapper">
                        <div class="blog-item-img">
                            <a href="single-post.html">
                                <img src="<?php echo base_url('asets/img/blog/Apotek_depok.jpg') ?>" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="blog-item-text">
                            <h3><a data-toggle="modal" data-target=".apotik"> Apotik Juliana</a></h3>
                            <p><strong> Apotik </strong><br> Cilodong, Depok</p>
                            <a class="read-more">Rating 4.5</a>
                        </div>
                        <div class="author">
                            <span class="name"><a href="#">Jam Operasional</a></span>
                            <br>
                            <span class="date float-right mt-2"><i class="lni-calendar"></i><a href="#">Senin-Minggu 00:00 -
                                    23:59</a></span>
                        </div>
                    </div>
                    <!-- Blog Item Wrapper Ends-->
                </div>
                <!-- End Col -->
            </div>
        </div>
        <div class="modal fade rmhsakit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="margin-top: 100px;">
                <div class="modal-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 my-3">
                                <h3 class="head-title">
                                    <strong>Rumah Sakit Hermina</strong>
                                </h3>
                                <p>
                                    Memiliki layanan unggulan dari Personal Maternity Officer di mana pasien akan mendapat manfaat informasi dan solusi menyeluruh terkait dengan kehamilan dari spesialis terbaik
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">

                                <div style="width: 16rem; height: 17rem; padding-top: 12px;">
                                    <img src="<?php echo base_url('asets/img/blog/Rumah_Sakit.jpg') ?>" style="width : 255px;" class="rounded">
                                </div>

                            </div>
                            <div class="col-8">
                                <?php echo form_open('komentar/daftar') ?>
                                <div class="form-group ">
                                    <label for="nilai_rating" class="col-form-label">Rating</label>
                                    <div class="col-12">
                                        <select id="nilai_rating" name="nilai_rating" class="form-control" placeholder="Pilih Rating">
                                            <option value="1">1. jelek</option>
                                            <option value="2">2. Kurang Bagus</option>
                                            <option value="3">3. Biasa Aja</option>
                                            <option value="4">4. Bagus</option>
                                            <option value="5">5. Sangat Bagus</option>
                                        </select>
                                    </div>
                                </div>
                                <?php
                                //foreach ($komentar as $kmn){
                                ?>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="message-text" name="isi" style="width: 470px; margin-left: 16px;"></textarea>
                                </div>

                                <div class="float-right pr-3">
                                    <!-- <input type="hidden" name="users_id" value="<//?php// echo $kmn->users_id;?>"> -->
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                    <a href="<?php echo base_url('index.php/login1') ?>" type="button" class="btn btn-primary"> Kirim</a>
                                </div>
                                <?php
                                //}
                                ?>
                                <?php echo form_close() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade puskesmas" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="margin-top: 100px;">
                <div class="modal-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 my-3">
                                <h3 class="head-title">
                                    <strong>UPTD Puskesmas Beji</strong>
                                </h3>
                                <p>
                                    Meningkatkan tata kelola Pemerintahan dan Pelayanan Publik yang Modern dan Partifipatif serta Mewujudkan Wilayah kerja UPTD Puskesmas Beji yang sehat, aman, tertib dan Nyaman.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">

                                <div style="width: 16rem; height: 17rem; padding-top: 12px;">
                                    <img src="<?php echo base_url('asets/img/blog/Puskesmas.jpg') ?>" style="width : 255px;" class="rounded">
                                </div>

                            </div>
                            <div class="col-8">
                                <?php echo form_open('komentar/daftar') ?>
                                <div class="form-group ">
                                    <label for="nilai_rating" class="col-form-label">Rating</label>
                                    <div class="col-12">
                                        <select id="nilai_rating" name="nilai_rating" class="form-control" placeholder="Pilih Rating">
                                            <option value="1">1. jelek</option>
                                            <option value="2">2. Kurang Bagus</option>
                                            <option value="3">3. Biasa Aja</option>
                                            <option value="4">4. Bagus</option>
                                            <option value="5">5. Sangat Bagus</option>
                                        </select>
                                    </div>
                                </div>
                                <?php
                                //foreach ($komentar as $kmn){
                                ?>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="message-text" name="isi" style="width: 470px; margin-left: 16px;"></textarea>
                                </div>

                                <div class="float-right pr-3">
                                    <!-- <input type="hidden" name="users_id" value="<//?php// echo $kmn->users_id;?>"> -->
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                    <<a href="<?php echo base_url('index.php/login1') ?>" type="button" class="btn btn-primary"> Kirim</a>
                                </div>
                                <?php
                                //}
                                ?>
                                <?php echo form_close() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade klinikgigi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="margin-top: 100px;">
                <div class="modal-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 my-3">
                                <h3 class="head-title">
                                    <strong>Klinik Rumah Gigi</strong>
                                </h3>
                                <p>
                                    Memberikan pelayanan yang berkualitas, terjangkau dan lengkap bagi masyarakat untuk pengobatan dan perawatan gigi.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">

                                <div style="width: 16rem; height: 17rem; padding-top: 12px;">
                                    <img src="<?php echo base_url('asets/img/blog/klinik_gigi.jpg') ?>" style="width : 255px;" class="rounded">
                                </div>

                            </div>
                            <div class="col-8">
                                <?php echo form_open('komentar/daftar') ?>
                                <div class="form-group ">
                                    <label for="nilai_rating" class="col-form-label">Rating</label>
                                    <div class="col-12">
                                        <select id="nilai_rating" name="nilai_rating" class="form-control" placeholder="Pilih Rating">
                                            <option value="1">1. jelek</option>
                                            <option value="2">2. Kurang Bagus</option>
                                            <option value="3">3. Biasa Aja</option>
                                            <option value="4">4. Bagus</option>
                                            <option value="5">5. Sangat Bagus</option>
                                        </select>
                                    </div>
                                </div>
                                <?php
                                //foreach ($komentar as $kmn){
                                ?>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="message-text" name="isi" style="width: 470px; margin-left: 16px;"></textarea>
                                </div>

                                <div class="float-right pr-3">
                                    <!-- <input type="hidden" name="users_id" value="<//?php// echo $kmn->users_id;?>"> -->
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                    <a href="<?php echo base_url('index.php/login1') ?>" type="button" class="btn btn-primary"> Kirim</a>
                                </div>
                                <?php
                                //}
                                ?>
                                <?php echo form_close() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade klinik" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="margin-top: 100px;">
                <div class="modal-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 my-3">
                                <h3 class="head-title">
                                    <strong>Klinik Bahar Medical I</strong>
                                </h3>
                                <p>
                                    Klinik Bahar Medika I merupakan sebuah klinik dengan dokter-dokter yang melakukan praktek diantaranya adalah drg. Sri Handayani, drg. Anita Rachmawati, dan dr. Miya Elmira.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">

                                <div style="width: 16rem; height: 17rem; padding-top: 12px;">
                                    <img src="<?php echo base_url('asets/img/blog/KLINIK.png') ?>" style="width : 255px;" class="rounded">
                                </div>

                            </div>
                            <div class="col-8">
                                <?php echo form_open('komentar/daftar') ?>
                                <div class="form-group ">
                                    <label for="nilai_rating" class="col-form-label">Rating</label>
                                    <div class="col-12">
                                        <select id="nilai_rating" name="nilai_rating" class="form-control" placeholder="Pilih Rating">
                                            <option value="1">1. jelek</option>
                                            <option value="2">2. Kurang Bagus</option>
                                            <option value="3">3. Biasa Aja</option>
                                            <option value="4">4. Bagus</option>
                                            <option value="5">5. Sangat Bagus</option>
                                        </select>
                                    </div>
                                </div>
                                <?php
                                //foreach ($komentar as $kmn){
                                ?>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="message-text" name="isi" style="width: 470px; margin-left: 16px;"></textarea>
                                </div>

                                <div class="float-right pr-3">
                                    <!-- <input type="hidden" name="users_id" value="<//?php// echo $kmn->users_id;?>"> -->
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                    <a href="<?php echo base_url('index.php/login1') ?>" type="button" class="btn btn-primary"> Kirim</a>
                                </div>
                                <?php
                                //}
                                ?>
                                <?php echo form_close() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade apotik" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="margin-top: 100px;">
                <div class="modal-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 my-3">
                                <h3 class="head-title">
                                    <strong>Apotik Juliana</strong>
                                </h3>
                                <p>
                                    Untuk menghubungi Juliana Apotik lewat telepon menggunakan nomor (021)7775105.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">

                                <div style="width: 16rem; height: 17rem; padding-top: 12px;">
                                    <img src="<?php echo base_url('asets/img/blog/apotek_depok.jpg') ?>" style="width : 255px;" class="rounded">
                                </div>

                            </div>
                            <div class="col-8">
                                <?php echo form_open('komentar/daftar') ?>
                                <div class="form-group ">
                                    <label for="nilai_rating" class="col-form-label">Rating</label>
                                    <div class="col-12">
                                        <select id="nilai_rating" name="nilai_rating" class="form-control" placeholder="Pilih Rating">
                                            <option value="1">1. jelek</option>
                                            <option value="2">2. Kurang Bagus</option>
                                            <option value="3">3. Biasa Aja</option>
                                            <option value="4">4. Bagus</option>
                                            <option value="5">5. Sangat Bagus</option>
                                        </select>
                                    </div>
                                </div>
                                <?php
                                ?>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="message-text" name="isi" style="width: 470px; margin-left: 16px;"></textarea>
                                </div>

                                <div class="float-right pr-3">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                    <a href="<?php echo base_url('index.php/login1') ?>" type="button" class="btn btn-primary"> Kirim</a>
                                </div>
                                <?php echo form_close() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tabel" class="section pt-2 pb-5">
        <!-- Container Starts -->
        <div class="container">
            <!-- Start Row -->
            <div class="row">
                <div class="col-lg-12 pb-0">
                    <div class="contact-text section-header text-center">
                        <div>
                            <h2 class="section-title">Tabel Faskes</h2>
                            <div class="desc-text">
                                <p>Seluruh Data Faskes </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="col-md-12">
                        <div class="card-body table-responsive" style="height: 400px; color: black;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Latlong</th>
                                        <th>Jenis_id</th>
                                        <th>Deskripsi</th>
                                        <th>skor_rating</th>
                                        <th>foto1</th>
                                        <th>foto2</th>
                                        <th>foto3</th>
                                        <th>Kecamatan_id</th>
                                        <th>website</th>
                                        <th>Jumlah_dokter</th>
                                        <th>Jumlah_pegawai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor = 1;
                                    foreach ($faskes as $fks) {
                                    ?>
                                        <tr>
                                            <td><?php echo $nomor ?></td>
                                            <td><?php echo $fks->nama ?> </td>
                                            <td><?php echo $fks->alamat ?></td>
                                            <td><?php echo $fks->latlong ?></td>
                                            <td><?php echo $fks->jenis_id ?></td>
                                            <td><?php echo $fks->deskripsi ?></td>
                                            <td><?php echo $fks->skor_rating ?></td>
                                            <td><?php echo $fks->foto1 ?></td>
                                            <td><?php echo $fks->foto2 ?></td>
                                            <td><?php echo $fks->foto3 ?></td>
                                            <td><?php echo $fks->kecamatan_id ?></td>
                                            <td><?php echo $fks->website ?></td>
                                            <td><?php echo $fks->jumlah_dokter ?></td>
                                            <td><?php echo $fks->jumlah_pegawai ?></td>

                                            <!-- \<td>
                            <a href="<?php //echo base_url("index.php/mahasiswa/detail/$mhs->id") 
                                        ?>">Detail</a>
                            &nbsp;
                            <a href=<?php //echo base_url("index.php/mahasiswa/edit/$mhs->id") 
                                    ?> class="btn btn-success btn-lg active">Update</a>
                            &nbsp;
                            <a href=<?php //echo base_url("index.php/mahasiswa/delete/$mhs->id") 
                                    ?> class="btn btn-danger btn-lg active" onclick=" return hapusMahasiswa('Apakah Anda yakin ingin menghapus mahasiswa yang bernama <?php echo $mhs->nama ?> ?')">Delete</a>
                        </td> -->
                                        </tr>
                                    <?php
                                        $nomor++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- <a href= <?php // echo base_url("index.php/mahasiswa/form") 
                                        ?> class="btn btn-primary btn-lg active">Add</a> -->
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