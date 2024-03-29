<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <meta name="description" content="Buat Webiste dan Aplikasi Sesuai Kebutuhan kamu di Yura Company. Jasa Pengembangan dan pembuatan Website di Kota Palu, pembuatan Aplikasi di Kota Palu Serta Penjualan Hosting dan domain terbaik.">
    <meta name="og:title" content="Buat Webiste dan Aplikasi Sesuai Kebutuhan kamu di Yura Company">
    <meta name="og:url" content="https://yuracompany.com">
    <meta name="og:description" content="Jasa Pengembangan dan pembuatan Website di Kota Palu, pembuatan Aplikasi di Kota Palu Serta Penjualan Hosting dan domain terbaik.">
    <meta name="og:image" content="<?= base_url() ?>/img/front-KartuNama.png">
    <title><?= $title ?></title>
    <!-- CSS Materialize -->
    <link href="<?= base_url() ?>/assets/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">

    <!-- Load Style -->
    <link href="<?= base_url() ?>/assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />

    <!-- Bootsrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body id="home" class="scrollspy" data-info="<?= session()->getFlashdata('info') ?>">

    <!-- *** About Us Section *** -->
    <section class="about">
        <div class="row container">
            <!-- <h2 class="light grey-text text-darken-3 center-align" style="margin: 1.78rem 0">Sertifikat</h2> -->
            <div class="col s12">
                <div class="layered-card">
                    <img src="<?= base_url() ?>/certificate/pkl/<?= $SN ?>.png" alt="<?= $SN ?>" class="responsive-img cert-img">
                    <img src="<?= base_url() ?>/certificate/pkl/<?= $SN ?>-back.png" alt="<?= $SN ?>" class="responsive-img cert-img">
                </div>
                <!-- <div class="text-content flow-text justify-align">
                </div> -->
            </div>
        </div>
    </section>
    <!-- Scripts -->
    <!-- <script src="/assets/js/jquery-3.4.1.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- <script src="<?= base_url() ?>/assets/js/materialize.min.js"></script> -->
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="<?= base_url() ?>/assets/js2/init.js"></script>
</body>

</html>