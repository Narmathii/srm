<!doctype html>
<html class="no-js" lang="zxx">


<?php require("Components/Head.php") ?>

<body class="rs-smoother-yes rtl">

    <!-- preloader start -->
    <div id="pre-load">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon"><img src="<?= base_url() ?>public/assets/images/logo/srm-loader.png" alt="loader"></div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- preloader start -->

    <div id="rs-mouse">
        <div id="cursor-ball"></div>
    </div>

    <!-- preloader end -->

    <!-- Header area start -->
    <?php require("Components/Header.php") ?>
    <!-- Header area end -->

    <!-- Offcanvas area start -->
    <?php require("Components/mobileMenu.php") ?>
    <!-- Offcanvas area start -->

    <!-- Body main wrapper start -->
    <main>

        <!-- breadcrumb area start -->
        <!-- <section class="rs-breadcrumb-area rs-breadcrumb-one p-relative">
            <div class="rs-breadcrumb-bg" data-background="<?= base_url() ?>public/assets/images/bg/breadcrumb-bg-03.png"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-xl-8 col-lg-8">
                        <div class="rs-breadcrumb-content-wrapper">
                            <div class="rs-breadcrumb-title-wrapper">
                                <h1 class="rs-breadcrumb-title">Gallery</h1>
                            </div>
                            <div class="rs-breadcrumb-menu">
                                <nav>
                                    <ul>
                                        <li><span><a href="<?= base_url('home') ?>">Home</a></span></li>
                                        <li><span>Gallery</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <?php require("Components/innerBanner.php") ?>
        <!-- breadcrumb area end -->

        <!-- gallery area start -->
        <section class="rs-shop-area section-space">
            <div class="container">
                <div class="row g-5 ">
                    <div class="col-xxl-12 col-xl-12 col-lg-12">
                        <div class="row g-5 custom-row">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="rs-product-item">
                                    <div class="rs-product-thumb custom-gallery-thumb">
                                        <a href="#">
                                            <img src="<?= base_url() ?>public/assets/images/gallery/gallery-image-1.png" alt="image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="rs-product-item">
                                    <div class="rs-product-thumb custom-gallery-thumb">
                                        <a href="#">
                                            <img src="<?= base_url() ?>public/assets/images/gallery/gallery-image-2.png" alt="image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="rs-product-item">
                                    <div class="rs-product-thumb custom-gallery-thumb">
                                        <a href="#">
                                            <img src="<?= base_url() ?>public/assets/images/gallery/gallery-image-3.png" alt="image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="rs-product-item">
                                    <div class="rs-product-thumb custom-gallery-thumb">
                                        <a href="#">
                                            <img src="<?= base_url() ?>public/assets/images/gallery/gallery-image-4.png" alt="image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="rs-product-item">
                                    <div class="rs-product-thumb custom-gallery-thumb">
                                        <a href="#">
                                            <img src="<?= base_url() ?>public/assets/images/gallery/gallery-image-5.png" alt="image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="rs-product-item">
                                    <div class="rs-product-thumb custom-gallery-thumb">
                                        <a href="#">
                                            <img src="<?= base_url() ?>public/assets/images/gallery/gallery-image-6.png" alt="image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="rs-product-item">
                                    <div class="rs-product-thumb custom-gallery-thumb">
                                        <a href="#">
                                            <img src="<?= base_url() ?>public/assets/images/gallery/gallery-image-7.png" alt="image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="rs-product-item">
                                    <div class="rs-product-thumb custom-gallery-thumb">
                                        <a href="#">
                                            <img src="<?= base_url() ?>public/assets/images/gallery/gallery-image-8.png" alt="image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="rs-product-item">
                                    <div class="rs-product-thumb custom-gallery-thumb">
                                        <a href="#">
                                            <img src="<?= base_url() ?>public/assets/images/gallery/gallery-image-9.png" alt="image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="rs-product-item">
                                    <div class="rs-product-thumb custom-gallery-thumb">
                                        <a href="#">
                                            <img src="<?= base_url() ?>public/assets/images/gallery/gallery-image-10.png" alt="image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="rs-product-item">
                                    <div class="rs-product-thumb custom-gallery-thumb">
                                        <a href="#">
                                            <img src="<?= base_url() ?>public/assets/images/gallery/gallery-image-11.png" alt="image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="rs-product-item">
                                    <div class="rs-product-thumb custom-gallery-thumb">
                                        <a href="#">
                                            <img src="<?= base_url() ?>public/assets/images/gallery/gallery-image-12.png" alt="image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- pagination style -->
                        <!-- <div class="common-pagination">
                            <nav>
                                <ul>
                                    <li><a class="current">1</a></li>
                                    <li><a href="#">2</a></li>
                                </ul>
                            </nav>
                        </div> -->
                        <!-- pagination style end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- gallery area end -->

    </main>
    <!-- Body main wrapper end -->

        <!-- footer area start -->
        <?php require("Components/Footer.php") ?>


</html>