
<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Mobilekit Mobile UI Kit</title>
    <meta name="description" content="Mobilekit HTML Mobile UI Kit">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" />
    <link rel="icon" type="image/png" href="<?= base_url() ?>assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>assets/img/icon/192x192.png">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
</head>

<body>

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-primary scrolled">
        <div class="left">
            <a href="#" class="headerButton" data-toggle="modal" data-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            Discover
        </div>
        <div class="right">
            <a href="javascript:;" class="headerButton toggle-searchbox">
                <ion-icon name="search-outline"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- Search Component -->
    <div id="search" class="appHeader">
        <form class="search-form">
            <div class="form-group searchbox">
                <input type="text" class="form-control" placeholder="Search...">
                <i class="input-icon">
                    <ion-icon name="search-outline"></ion-icon>
                </i>
                <a href="javascript:;" class="ml-1 close toggle-searchbox">
                    <ion-icon name="close-circle"></ion-icon>
                </a>
            </div>
        </form>
    </div>
    <!-- * Search Component -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <?= $this->renderSection('content'); ?>

        <!-- app footer -->
        <div class="appFooter">
            <img src="<?= base_url() ?>assets/img/logo.png" alt="icon" class="footer-logo mb-2">
            <div class="footer-title">
                Copyright © Yarus Creative <?= date('Y') ?>. All Rights Reserved.
            </div>
            Sekretariat : Jl. Cijerehilir Ds. Tenjolaya Kecamatan Kasomalang Kabupaten Subang - Jawa Barat

            <div class="mt-2">
                <a href="javascript:;" class="btn btn-icon btn-sm btn-facebook">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
                <a href="javascript:;" class="btn btn-icon btn-sm btn-twitter">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a>
                <a href="javascript:;" class="btn btn-icon btn-sm btn-linkedin">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a>
                <a href="javascript:;" class="btn btn-icon btn-sm btn-instagram">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
                <a href="javascript:;" class="btn btn-icon btn-sm btn-whatsapp">
                    <ion-icon name="logo-whatsapp"></ion-icon>
                </a>
                <a href="#" class="btn btn-icon btn-sm btn-secondary goTop">
                    <ion-icon name="arrow-up-outline"></ion-icon>
                </a>
            </div>

        </div>
        <!-- * app footer -->

    </div>
    <!-- * App Capsule -->


    <!-- App Bottom Menu -->
    <div class="appBottomMenu">
        <a href="<?= base_url() ?>" class="item active">
            <div class="col">
                <ion-icon name="home-outline"></ion-icon>
                <strong>Home</strong>
            </div>
        </a>
        <a href="<?= base_url() ?>biaya" class="item">
            <div class="col">
                <ion-icon name="cube-outline"></ion-icon>
                <strong>Biaya</strong>
            </div>
        </a>
        <a href="<?= base_url() ?>daftar" class="item">
            <div class="col">
                <ion-icon name="apps-outline"></ion-icon>
                <strong>Daftar</strong>
            </div>
        </a>
        <a href="app-pages.html" class="item">
            <div class="col">
                <ion-icon name="layers-outline"></ion-icon>
                <strong>Alur</strong>
            </div>
        </a>
        <a href="javascript:;" class="item" data-toggle="modal" data-target="#sidebarPanel">
            <div class="col">
                <ion-icon name="menu-outline"></ion-icon>
                <strong>Kontak</strong>
            </div>
        </a>
    </div>
    <!-- * App Bottom Menu -->

    <!-- App Sidebar -->
    
    <!-- * App Sidebar -->

    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="<?= base_url() ?>assets/js/lib/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap-->
    <script src="<?= base_url() ?>assets/js/lib/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/lib/bootstrap.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
    <!-- Owl Carousel -->
    <script src="<?= base_url() ?>assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- jQuery Circle Progress -->
    <script src="<?= base_url() ?>assets/js/plugins/jquery-circle-progress/circle-progress.min.js"></script>
    <!-- Base Js File -->
    <script src="<?= base_url() ?>assets/js/base.js"></script>


</body>

</html>