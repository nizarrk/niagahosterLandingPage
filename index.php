<?php 
$data = file_get_contents("price.json");
$json = json_decode($data, true);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Tes Niagahoster</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./assets/css/pricing.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  </head>
  <body style="font-family: Montserrat;">
      <div class="border-bottom">
          <div class="container">
            <a style="color: black;" class="float-left"><i class="fas fa-bookmark"></i> <small>Gratis Ebook 9 Cara Cerdas Menggunakan Domain [x]</small></a>
            </div>
          <ul class="nav justify-content-end">
            <li class="nav-item">
                <a style="color: black;" class="nav-link active" href="#"><i class="fas fa-phone-alt"></i><small> 0274-5305505</small></a>
                </li>
                <li class="nav-item">
                    <a style="color: black;" class="nav-link" href="#"><i class="fas fa-comments"></i><small> Live Chat</small></a>
                </li>
                <li class="nav-item">
                    <a style="color: black;" class="nav-link" href="#"><i class="fas fa-user"></i><small> Member Area</small></a>
                </li>
            </ul>
        </div>
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom">
            <div class="container">
                <img src="./assets/images/logo.jpg" alt="">
            </div>
            <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-2 text-dark" href="#">Hosting</a>
                <a class="p-2 text-dark" href="#">Domain</a>
                <a class="p-2 text-dark" href="#">Server</a>
                <a class="p-2 text-dark" href="#">Website</a>
                <a class="p-2 text-dark" href="#">Afiliasi</a>
                <a class="p-2 text-dark" href="#">Promo</a>
                <a class="p-2 text-dark" href="#">Pembayaran</a>
                <a class="p-2 text-dark" href="#">Review</a>
                <a class="p-2 text-dark" href="#">Kontak</a>
                <a class="p-2 text-dark" href="#">Blog</a>
            </nav>
        </div>

        <div class="border-bottom">
            <div class="container-xl pb-md-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h3><b>PHP Hosting</b></h3>
                        <h5>Cepat, handal, penuh dengan, modul, PHP yang anda butuhkan</h5>
                        <p><img src="./assets/images/centang.jpg" alt=""> Solusi PHP untuk performa query yang lebih cepat.</p>
                        <p><img src="./assets/images/centang.jpg" alt=""> Konsumsi memori lebih rendah.</p>
                        <p><img src="./assets/images/centang.jpg" alt=""> Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 7</p>
                        <p><img src="./assets/images/centang.jpg" alt=""> Fitur enkripsi IonCube dan Zend Guard Loaders</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="./assets/svg/illustration banner PHP hosting-01.svg" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="container-lg text-center px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <div class="row">
            <div class="col-lg-4">
                <div class="card" style="width: 18rem; border:none">
                    <img style="width: 200px; display: block; margin-left: auto; margin-right: auto; margin-top: 100px;" src="./assets/svg/icon PHP Hosting_zendguard.svg" class="card-img-top" alt="...">
                    <div class="card-body" style="margin-top: 50px;">
                        <p class="card-tittle">PHP Zend Guard Loader</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 18rem; border:none">
                    <img style="width: 150px; display: block; margin-left: auto; margin-right: auto;" src="./assets/svg/icon PHP Hosting_composer.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title">PHP Composer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 18rem; border:none">
                    <img style="width: 200px; display: block; margin-left: auto; margin-right: auto; margin-top: 100px;" src="./assets/svg/icon PHP Hosting_ioncube.svg" class="card-img-top" alt="...">
                    <div class="card-body" style="margin-top: 50px;">
                        <p class="card-tittle">PHP ionCube Loader</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h3><b>Paket Hosting Singapura yang Tepat</b></h3>
    <h3>Diskon 40% + Domain SSL Gratis untuk Anda</h3>
</div>

<div class="container">
    <div class="card-deck mb-4 text-center">
        <div class="col-lg-3 shadow-sm">
            <div class="card-header bg-transparent">
                <h4 class="my-0 font-weight-normal">Bayi</h4>
            </div>
            <div class="card-body">
                <h5 style="text-decoration: line-through;">Rp. <?= $json['bayi']['normal'] ?></h5>
                <h3>Rp. <?= $json['bayi']['diskon'] ?> <small>/ bln</small></h3>
                <div class="border-bottom border-top">938 Pengguna Terdaftar</div>
                <ul class="list-unstyled mt-3 mb-4">
                    <li><b>0.5X RESOURCE POWER</b></li>
                    <li><b>500 MB</b> Disk Space</li>
                    <li><b>Unlimited</b> Bandwidth</li>
                    <li><b>Unlimited</b> Databases</li>
                    <li><b>1</b> Domain</li>
                    <li><b>Instant</b> Backup</li>
                    <li><b>Unlimited SSL</b> Gratis Selamanya</li>
                </ul>
                <button style="border-radius: 50px" type="button" class="btn btn-lg btn-block btn btn-light btn-outline-secondary">Pilih Sekarang</button>
            </div>
        </div>
        
        <div class="col-lg-3 shadow-sm">
            <div class="card-header bg-transparent">
                <h4 class="my-0 font-weight-normal">Pelajar</h4>
            </div>
            <div class="card-body">
                <h5 style="text-decoration: line-through;">Rp. <?= $json['pelajar']['normal'] ?></h5>
                <h3>Rp. <?= $json['pelajar']['diskon'] ?> <small>/ bln</small></h3>
                <div class="border-bottom border-top">4.168 Pengguna Terdaftar</div>
                <ul class="list-unstyled mt-3 mb-4">
                    <li><b>1X RESOURCE POWER</b></li>
                    <li><b>Unlimited</b> Disk Space</li>
                    <li><b>Unlimited</b> Bandwidth</li>
                    <li><b>Unlimited</b> POP3 Email</li>
                    <li><b>Unlimited</b> Databases</li>
                    <li><b>10</b> Addon Domain</li>
                    <li><b>Instant</b> Backup</li>
                    <li><b>Domain Gratis</b> Selamanya</li>
                    <li><b>Unlimited SSL</b> Gratis Selamanya</li>
                </ul>
                <button style="border-radius: 50px" type="button" class="btn btn-lg btn-block btn btn-light btn-outline-secondary">Pilih Sekarang</button>
            </div>
        </div>
        <div class="col-lg-3 shadow-sm">
            <div class="card-header bg-primary">
            <span class="badge badge-success">BEST SELLER!</span>
                <h4 style="color: white" class="my-0 font-weight-normal border-bottom">Personal</h4>
                <h5 style="color: white; text-decoration: line-through;">Rp. <?= $json['personal']['normal'] ?></h5>
                <h3 style="color: white" class="bg-primary">Rp. <?= $json['personal']['diskon'] ?> <small style="color: white">/ bln</small></h3>
                <div style="color: white" class="border-bottom border-top bg-primary">10.017 Pengguna Terdaftar</div>
            </div>
            <div class="card-body">
                <ul class="list-unstyled mt-3 mb-4">
                    <li><b>2X RESOURCE POWER</b></li>
                    <li><b>Unlimited</b> Disk Space</li>
                    <li><b>Unlimited</b> Bandwidth</li>
                    <li><b>Unlimited</b> POP3 Email</li>
                    <li><b>Unlimited</b> Databases</li>
                    <li><b>Unlimited</b> Addon Domain</li>
                    <li><b>Instant</b> Backup</li>
                    <li><b>Domain Gratis</b> Selamanya</li>
                    <li><b>Unlimited SSL</b> Gratis Selamanya</li>
                    <li><b>Private</b> Name Server</li>
                    <li><b>SpamAssasin</b> Mail Protection</li>
                </ul>
                <button style="border-radius: 50px" type="button" class="btn btn-lg btn-block btn btn-primary">Pilih Sekarang</button>
            </div>
        </div>
        <div class="col-lg-3 shadow-sm">
            <div class="card-header bg-transparent">
                <h4 class="my-0 font-weight-normal">Bisnis</h4>
            </div>
            <div class="card-body">
                <h5 style="text-decoration: line-through;">Rp. <?= $json['bisnis']['normal'] ?></h5>
                <h3>Rp. <?= $json['bisnis']['diskon'] ?> <small>/ bln</small></h3>
                <div class="border-bottom border-top">3.552 Pengguna Terdaftar</div>
                <ul class="list-unstyled mt-3 mb-4">
                    <li><b>3X RESOURCE POWER</b></li>
                    <li><b>Unlimited</b> Disk Space</li>
                    <li><b>Unlimited</b> Bandwidth</li>
                    <li><b>Unlimited</b> POP3 Email</li>
                    <li><b>Unlimited</b> Databases</li>
                    <li><b>Unlimited</b> Addon Domain</li>
                    <li><b>Magic Auto</b> Backup & Restore</li>
                    <li><b>Domain Gratis</b> Selamanya</li>
                    <li><b>Unlimited SSL</b> Gratis Selamanya</li>
                    <li><b>Private</b> Name Server</li>
                    <li><b>Prioritas</b> Layanan Support</li>
                    <li><img src="./assets/images/rate.jpg" alt=""></li>
                    <li><b>SpamExpert</b> Pro Mail Protection</li>
                </ul>
                <button style="border-radius: 50px" type="button" class="btn btn-lg btn-block btn btn-light btn-outline-secondary">Diskon 40%</button>
            </div>
        </div>
    </div>

    <div class="container text-center px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h3 class="px-3 py-3 pt-md-5 pb-md-4 mx-auto">Powerful dengan Limit PHP yang Lebih Besar</h3>
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-group">
                    <li class="list-group-item"><img class="float-left" src="./assets/images/centang.jpg" alt="">max execution time 300s</li>
                    <li class="list-group-item list-group-item-light"><img class="float-left" src="./assets/images/centang.jpg" alt="">max execution time 300s</li>
                    <li class="list-group-item"><img class="float-left" src="./assets/images/centang.jpg" alt="">php memory limit 1024 MB</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <ul class="list-group">
                    <li class="list-group-item"><img class="float-left" src="./assets/images/centang.jpg" alt="">post max size 128 MB</li>
                    <li class="list-group-item list-group-item-light"><img class="float-left" src="./assets/images/centang.jpg" alt="">upload max filesize 128 MB</li>
                    <li class="list-group-item"><img class="float-left" src="./assets/images/centang.jpg" alt="">max input vars 2500</li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="container-lg text-center px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h3 class="px-3 py-3 pt-md-5 pb-md-4 mx-auto">Semua Paket Hosting Sudah Termasuk</h3>
        <div class="row">
            <div class="col-lg-4">
                <div class="card" style="width: 18rem; border:none">
                    <img style="width: 100px; display: block; margin-left: auto; margin-right: auto;" src="./assets/svg/icon PHP Hosting_PHP Semua Versi.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>PHP Semua Versi</b></h5>
                        <p class="card-text">Pilih mulai versi PHP 5.3 s/d PHP 7. Ubah Sesuka Anda!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 18rem; border:none">
                    <img style="width: 100px; display: block; margin-left: auto; margin-right: auto;" src="./assets/svg/icon PHP Hosting_My SQL.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>MySQL Versi 5.6</b></h5>
                        <p class="card-text">Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 18rem; border:none">
                    <img style="width: 100px; display: block; margin-left: auto; margin-right: auto;" src="./assets/svg/icon PHP Hosting_CPanel.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>Panel Hosting cPanel</b></h5>
                        <p class="card-text">Kelola website dengan panel canggih yang familiar di hati Anda.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="card" style="width: 18rem; border:none">
                    <img style="width: 100px; display: block; margin-left: auto; margin-right: auto;" src="./assets/svg/icon PHP Hosting_garansi uptime.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>Garansi Uptime 99.9%</b></h5>
                        <p class="card-text">Data center yang mendukung kelangsungan website Anda 24/7.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 18rem; border:none">
                    <img style="width: 100px; display: block; margin-left: auto; margin-right: auto;" src="./assets/svg/icon PHP Hosting_InnoDB.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>Database InnoDB Unlimited</b></h5>
                        <p class="card-text">Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 18rem; border:none">
                    <img style="width: 100px; display: block; margin-left: auto; margin-right: auto;" src="./assets/svg/icon PHP Hosting_My SQL remote.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>Wildcard Remote MySQL</b></h5>
                        <p class="card-text">Mendukung s/d 25 max_user_connections dan 100 max_connections.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="border-bottom">
            <div class="container-xl">
                <h3 class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">Mendukung Penuh Framework Laravel</h3>
                <div class="row">
                    <div class="col-lg-6">
                        <h5>Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP hosting murah kami mendukung penuh framework favorit Anda.</h5>
                        <p><img src="./assets/images/centang.jpg" alt=""> Install Laravel <b>1 klik</b> dengan Softaculous Installer.</p>
                        <p><img src="./assets/images/centang.jpg" alt=""> Mendukung ekstensi <b>PHP MCrypt, phar, mbstring, json</b> dan <b>fileinfo</b>.</p>
                        <p><img src="./assets/images/centang.jpg" alt=""> Tersedia <b>Composer</b> dan <b>SSH</b> untuk menginstal packages pilihan Anda.</p>
                        <br>
                        <small>Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</small>
                        <div class="pb-md-4 pt-md-4"><button style="border-radius: 50px; width: 50%;" type="button" class="btn btn-lg btn-block btn btn-primary"><b>Pilih Hosting Anda</b></button></div>
                        
                    </div>
                    <div class="col-lg-6">
                        <img src="./assets/svg/illustration banner support laravel hosting.svg" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xl">
            <h3 class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">Modul Lengkap untuk Menjalankan Aplikasi PHP Anda.</h3>
            <div class="row">
                <div class="col-lg-3">
                    <ul style="list-style-type: none">
                        <li>icePHP</li>
                        <li>apc</li>
                        <li>apm</li>
                        <li>ares</li>
                        <li>bcmath</li>
                        <li>bcmath</li>
                        <li>bcompiler</li>
                        <li>big_int</li>
                        <li>bitset</li>
                        <li>bloomy</li>
                        <li>bz2_filter</li>
                        <li>clamav</li>
                        <li>coin_acceptor</li>
                        <li>crack</li>
                        <li>dba</li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <ul style="list-style-type: none">
                        <li>icePHP</li>
                        <li>apc</li>
                        <li>apm</li>
                        <li>ares</li>
                        <li>bcmath</li>
                        <li>bcmath</li>
                        <li>bcompiler</li>
                        <li>big_int</li>
                        <li>bitset</li>
                        <li>bloomy</li>
                        <li>bz2_filter</li>
                        <li>clamav</li>
                        <li>coin_acceptor</li>
                        <li>crack</li>
                        <li>dba</li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <ul style="list-style-type: none">
                        <li>icePHP</li>
                        <li>apc</li>
                        <li>apm</li>
                        <li>ares</li>
                        <li>bcmath</li>
                        <li>bcmath</li>
                        <li>bcompiler</li>
                        <li>big_int</li>
                        <li>bitset</li>
                        <li>bloomy</li>
                        <li>bz2_filter</li>
                        <li>clamav</li>
                        <li>coin_acceptor</li>
                        <li>crack</li>
                        <li>dba</li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <ul style="list-style-type: none">
                        <li>icePHP</li>
                        <li>apc</li>
                        <li>apm</li>
                        <li>ares</li>
                        <li>bcmath</li>
                        <li>bcmath</li>
                        <li>bcompiler</li>
                        <li>big_int</li>
                        <li>bitset</li>
                        <li>bloomy</li>
                        <li>bz2_filter</li>
                        <li>clamav</li>
                        <li>coin_acceptor</li>
                        <li>crack</li>
                        <li>dba</li>
                    </ul>
                </div>
            </div>
            <center><div class="btn btn-lg btn-block btn btn-light btn-outline-secondary" style="border-radius: 50px; width: 20%;"><b>Selengkapnya</b></div></center>
        </div>

        <div class="container-xl px-3 py-3 pt-md-5 pb-md-4 mx-auto">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Linux Hosting yang Stabil dengan Teknologi LVE</h3>
                        <p>
                            SuperMicro <b>Intel Xeon 24-Cores</b> server dengan RAM <b>128 GB</b> dan teknologi <b>LVE CloudLinux</b> untuk stabilitas server Anda. Dilengkapi dengan 
                            <b>SSD</b> untuk kecepatan <b>MySQL</b> dan caching. Apache load balancer berbasis LiteSpeed Technologies, <b>CageFS</b> security, 
                            <b>Raid-10</b> protection dan auto backup untuk keamanan website PHP Anda.
                        </p>
                        <div class="pb-md-4 pt-md-4"><button style="border-radius: 50px; width: 50%;" type="button" class="btn btn-lg btn-block btn btn-primary"><b>Pilih Hosting Anda</b></button></div>
                        
                    </div>
                    <div class="col-lg-6">
                        <img src="./assets/images/Image support.png" alt="">
                    </div>
                </div>
            </div>

</div>
<div class="bg-light">
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-6 pt-md-3">
                <p>Bagikan jika Anda menyukai halaman ini.</p>
            </div>
            <div class="col-lg-6 float-right pt-md-2 pb-md-2">
            <i class="fab fa-facebook-square fa-3x" style="color: #23599b;"></i>
            <!-- <div style="width: 50px; height: 50px; border: 1px solid grey; padding: 10px;">80k</div> -->
            <i class="fab fa-twitter-square fa-3x" style="color: #00aff1;"></i>
            <i class="fab fa-google-plus-square fa-3x" style="color: #fc4a35;"></i>
            </div>
        </div>
    </div>
</div>

<div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto" style="background-color: #00a2f3;">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-9">
                <h3 style="color: white;">Perlu <b>BANTUAN?</b> Hubungi Kami: <b>0274-5305505</b></h3>
            </div>
            <div class="col-md-3 float-right">
                <button class="btn btn-transparent btn-outline-light" style="border-radius: 50px; border-style: solid;"><i class="fas fa-comments"></i> <b>Live Chat</b></button>
            </div>
        </div>
    </div>
</div>

<footer style="color: #868686; background-color: #303030; font-family: Calibri;">
<div class="container-xl">
<div class="row">
        <div class="col-6 col-md px-3 py-3 pt-md-5 pb-md-4 mx-auto">
            <h5>HUBUNGI KAMI</h5>
            <ul class="list-unstyled text-small">
                <li style="color: white;">0274-5305505</li>
                <li style="color: white;">Senin - Minggu</li>
                <li style="color: white;">24 Jam Nonstop</li>
                <br>
                <li style="color: white;">Jl. Selokan Mataram Monjali Karangjati MT I/304 Sinduadi, Mlati, Sleman, Yogyakarta 52284</li>
            </ul>
        </div>
        <div class="col-6 col-md px-3 py-3 pt-md-5 pb-md-4 mx-auto">
            <h5>LAYANAN</h5>
            <ul class="list-unstyled text-small">
                <li><a style="color: white;" href="#">Domain</a></li>
                <li><a style="color: white;" href="#">Shared Hosting</a></li>
                <li><a style="color: white;" href="#">Cloud VPS Hosting</a></li>
                <li><a style="color: white;" href="#">Web Builder</a></li>
                <li><a style="color: white;" href="#">Keamanan SSL / HTTPS</a></li>
                <li><a style="color: white;" href="#">Jasa Pembuatan Website</a></li>
                <li><a style="color: white;" href="#">Program Afiliasi</a></li>
            </ul>
        </div>
        
        <div class="col-6 col-md px-3 py-3 pt-md-5 pb-md-4 mx-auto">
            <h5>SERVICE HOSTING</h5>
            <ul class="list-unstyled text-small">
                <li><a style="color: white;" href="#">Hosting Murah</a></li>
                <li><a style="color: white;" href="#">Hosting Indonesia</a></li>
                <li><a style="color: white;" href="#">Hosting Singapura SG</a></li>
                <li><a style="color: white;" href="#">Hosting PHP</a></li>
                <li><a style="color: white;" href="#">Hosting Wordpress</a></li>
                <li><a style="color: white;" href="#">Hosting Laravel</a></li>
            </ul>
        </div>
        
        <div class="col-6 col-md px-3 py-3 pt-md-5 pb-md-4 mx-auto">
            <h5>TUTORIAL</h5>
            <ul class="list-unstyled text-small">
                <li><a style="color: white;" href="#">Knowledgebase</a></li>
                <li><a style="color: white;" href="#">Blog</a></li>
                <li><a style="color: white;" href="#">Cara Pembayaran</a></li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-6 col-md px-3 py-3 pt-md-5 pb-md-4 mx-auto">
            <h5>TENTANG KAMI</h5>
            <ul class="list-unstyled text-small">
                <li><a style="color: white;" href="#">Tim Niagahoster</a></li>
                <li><a style="color: white;" href="#">Karir</a></li>
                <li><a style="color: white;" href="#">Events</a></li>
                <li><a style="color: white;" href="#">Penawaran & Promo Spesial</a></li>
                <li><a style="color: white;" href="#">Kontak Kami</a></li>
            </ul>
        </div>
        <div class="col-6 col-md px-3 py-3 pt-md-5 pb-md-4 mx-auto">
            <h5>KENAPA PILIH NIAGAHOSTER?</h5>
            <ul class="list-unstyled text-small">
                <li style="color: white;">Support Terbaik</li>
                <li style="color: white;">Garansi Harga Termurah</li>
                <li style="color: white;">Domain Gratis Selamanya</li>
                <li style="color: white;">Datacenter Hosting Terbaik</li>
                <li style="color: white;">Review Pelanggan</li>
            </ul>
        </div>
        
        <div class="col-6 col-md px-3 py-3 pt-md-5 pb-md-4 mx-auto">
            <h5>NEWSLETTER</h5>
            <div class="input-group mb-3">
                <input style="border-top-left-radius: 20px; border-bottom-left-radius: 20px;" type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button style="border-top-right-radius: 20px; border-bottom-right-radius: 20px;" class="btn btn-primary" type="button">Berlangganan</button>
                </div>
            </div>
            <small>Dapatkan promo dan konten menarik dari penyedia hosting terbaik Anda.</small>
        </div>
        
        <div class="col-6 col-md px-3 py-3 pt-md-5 pb-md-4 mx-auto">
            <div class="pt-md-3">
                <a class="pr-md-4" href="#"><i class="fab fa-facebook fa-3x" style="color: white;"></i></a>
                <a class="pr-md-4 href="#"><i class="fab fa-twitter fa-3x" style="color: white;"></i></a>
                <a href=""><i class="fab fa-google-plus fa-3x" style="color: white;"></i></a>
            </div>
        </div>
    </div>

    <div class="row border-bottom">
        <div class="col-6 col-md px-3 py-3 pt-md-3 pb-md-4 mx-auto">
            <h5>PEMBAYARAN</h5>
            <img src="./assets/images/pembayaran.jpg" alt=""><br>
            <small>Aktifasi instan dengan e-Payment. Hosting dan domain langsung aktif!</small>
        </div>
    </div>
    <div class="row">
    <div class="col-lg-9">
        <small>Copyright &copy 2016 Niagahoster | Hosting powered by PHP7, CloudLinux, CloudFlare, BitNinja and DC Biznet Technovillage Jakarta</small>
        <small>Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing technology</small>
    </div>
    <div class="col-lg-3">
        <small>Syarat dan ketentuan | Kebijakan privasi</small>
    </div>
    </div>
</div>
</footer>
</body>
<script src="https://kit.fontawesome.com/8e23d86a11.js" crossorigin="anonymous"></script>
</html>
