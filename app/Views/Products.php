<!doctype html>
<html class="no-js" lang="zxx">


<?php require("Components/Head.php") ?>

<body class="rs-smoother-yes rtl">

    <!-- preloader start -->
    <div id="pre-load">
        <div id="loader" class="loader lazyload">
            <div class="loader-container">
                <div class="loader-icon"><img src="<?= base_url() ?>public/assets/images/logo/srm-loader.png"
                        alt="loader"></div>
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
            <div class="rs-breadcrumb-bg" data-background="<?= base_url() ?>public/assets/images/bg/breadcrumb-bg-04.png"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-xl-8 col-lg-8">
                        <div class="rs-breadcrumb-content-wrapper">
                            <div class="rs-breadcrumb-title-wrapper">
                                <h1 class="rs-breadcrumb-title">Products</h1>
                            </div>
                            <div class="rs-breadcrumb-menu">
                                <nav>
                                    <ul>
                                        <li><span><a href="<?= base_url() ?>">Home</a></span></li>
                                        <li><span>Products</span></li>
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

        <!-- product service area start -->
        <section class="rs-portfolio-area rs-portfolio-six section-space has-theme-orange">
            <div class="container">
                <div class="row g-5 process-counts">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="rs-portfolio-item wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <a href="<?= base_url('products/hydraulic-machines') ?>">
                                <div class="rs-portfolio-thumb"
                                    data-background="<?= base_url() ?>public/assets/images/products/services-thumb-01.png">
                                </div>
                            </a>
                            <div class="rs-portfolio-content">
                                <div class="rs-portfolio-number"></div>
                                <h5 class="rs-portfolio-title"><a href="<?= base_url('products/hydraulic-machines') ?>">
                                        Hydraulic
                                        Machines</a></h5>
                                <div class="rs-portfolio-tag">
                                    <a href="<?= base_url('products/hydraulic-machines') ?>">SRM HYDRAULICS</a>
                                </div>
                                <div class="rs-services-btn-wrapper">
                                    <div class="rs-portfolio-text-btn">
                                        <a class="rs-text-btn"
                                            href="<?= base_url('products/hydraulic-machines') ?>">View
                                            Products</a>
                                    </div>
                                    <a class="rs-square-btn has-icon"
                                        href="<?= base_url('products/hydraulic-machines') ?>">
                                        <span class="icon-box">
                                            <svg class="icon-first" xmlns="http://www.w3.org/2000/svg" width="12"
                                                height="10" viewBox="0 0 12 10" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M0 5C0 4.60551 0.319797 4.28571 0.714286 4.28571L8.98985 4.28571L5.92349 1.21936C5.64455 0.940417 5.64455 0.488155 5.92349 0.209209C6.20244 -0.0697365 6.6547 -0.0697365 6.93365 0.209209L11.2194 4.49492C11.4983 4.77387 11.4983 5.22613 11.2194 5.50508L6.93365 9.79079C6.6547 10.0697 6.20244 10.0697 5.92349 9.79079C5.64455 9.51184 5.64455 9.05958 5.92349 8.78064L8.98985 5.71429L0.714286 5.71429C0.319797 5.71429 0 5.39449 0 5Z"
                                                    fill="#616161"></path>
                                            </svg>
                                            <svg class="icon-second" xmlns="http://www.w3.org/2000/svg" width="12"
                                                height="10" viewBox="0 0 12 10" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M0 5C0 4.60551 0.319797 4.28571 0.714286 4.28571L8.98985 4.28571L5.92349 1.21936C5.64455 0.940417 5.64455 0.488155 5.92349 0.209209C6.20244 -0.0697365 6.6547 -0.0697365 6.93365 0.209209L11.2194 4.49492C11.4983 4.77387 11.4983 5.22613 11.2194 5.50508L6.93365 9.79079C6.6547 10.0697 6.20244 10.0697 5.92349 9.79079C5.64455 9.51184 5.64455 9.05958 5.92349 8.78064L8.98985 5.71429L0.714286 5.71429C0.319797 5.71429 0 5.39449 0 5Z"
                                                    fill="#616161"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="rs-portfolio-item wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s">
                            <a href="<?= base_url('products/hydraulic-powerpacks') ?>">
                                <div class="rs-portfolio-thumb"
                                    data-background="<?= base_url() ?>public/assets/images/products/services-thumb-02.png">
                                </div>
                            </a>
                            <div class="rs-portfolio-content">
                                <div class="rs-portfolio-number"></div>
                                <h5 class="rs-portfolio-title"><a
                                        href="<?= base_url('products/hydraulic-powerpacks') ?>">
                                        Hydraulic Power Packs</a></h5>
                                <div class="rs-portfolio-tag">
                                    <a href="<?= base_url('products/hydraulic-powerpacks') ?>">SRM HYDRAULICS</a>
                                </div>
                                <div class="rs-services-btn-wrapper">
                                    <div class="rs-portfolio-text-btn">
                                        <a class="rs-text-btn"
                                            href="<?= base_url('products/hydraulic-powerpacks') ?>">View
                                            Products</a>
                                    </div>
                                    <a class="rs-square-btn has-icon"
                                        href="<?= base_url('products/hydraulic-powerpacks') ?>">
                                        <span class="icon-box">
                                            <svg class="icon-first" xmlns="http://www.w3.org/2000/svg" width="12"
                                                height="10" viewBox="0 0 12 10" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M0 5C0 4.60551 0.319797 4.28571 0.714286 4.28571L8.98985 4.28571L5.92349 1.21936C5.64455 0.940417 5.64455 0.488155 5.92349 0.209209C6.20244 -0.0697365 6.6547 -0.0697365 6.93365 0.209209L11.2194 4.49492C11.4983 4.77387 11.4983 5.22613 11.2194 5.50508L6.93365 9.79079C6.6547 10.0697 6.20244 10.0697 5.92349 9.79079C5.64455 9.51184 5.64455 9.05958 5.92349 8.78064L8.98985 5.71429L0.714286 5.71429C0.319797 5.71429 0 5.39449 0 5Z"
                                                    fill="#616161"></path>
                                            </svg>
                                            <svg class="icon-second" xmlns="http://www.w3.org/2000/svg" width="12"
                                                height="10" viewBox="0 0 12 10" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M0 5C0 4.60551 0.319797 4.28571 0.714286 4.28571L8.98985 4.28571L5.92349 1.21936C5.64455 0.940417 5.64455 0.488155 5.92349 0.209209C6.20244 -0.0697365 6.6547 -0.0697365 6.93365 0.209209L11.2194 4.49492C11.4983 4.77387 11.4983 5.22613 11.2194 5.50508L6.93365 9.79079C6.6547 10.0697 6.20244 10.0697 5.92349 9.79079C5.64455 9.51184 5.64455 9.05958 5.92349 8.78064L8.98985 5.71429L0.714286 5.71429C0.319797 5.71429 0 5.39449 0 5Z"
                                                    fill="#616161"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="rs-portfolio-item wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                            <a href="<?= base_url('products/hydraulic-cylinders') ?>">
                                <div class="rs-portfolio-thumb"
                                    data-background="<?= base_url() ?>public/assets/images/products/services-thumb-03.png">
                                </div>
                            </a>
                            <div class="rs-portfolio-content">
                                <div class="rs-portfolio-number"></div>
                                <h5 class="rs-portfolio-title"><a
                                        href="<?= base_url('products/hydraulic-cylinders') ?>">
                                        Hydraulic Cylinders </a></h5>
                                <div class="rs-portfolio-tag">
                                    <a href="<?= base_url() ?>">SRM HYDRAULICS</a>
                                </div>
                                <div class="rs-services-btn-wrapper">
                                    <div class="rs-portfolio-text-btn">
                                        <a class="rs-text-btn"
                                            href="<?= base_url('products/hydraulic-cylinders') ?>">View
                                            Products</a>
                                    </div>
                                    <a class="rs-square-btn has-icon"
                                        href="<?= base_url('products/hydraulic-cylinders') ?>">
                                        <span class="icon-box">
                                            <svg class="icon-first" xmlns="http://www.w3.org/2000/svg" width="12"
                                                height="10" viewBox="0 0 12 10" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M0 5C0 4.60551 0.319797 4.28571 0.714286 4.28571L8.98985 4.28571L5.92349 1.21936C5.64455 0.940417 5.64455 0.488155 5.92349 0.209209C6.20244 -0.0697365 6.6547 -0.0697365 6.93365 0.209209L11.2194 4.49492C11.4983 4.77387 11.4983 5.22613 11.2194 5.50508L6.93365 9.79079C6.6547 10.0697 6.20244 10.0697 5.92349 9.79079C5.64455 9.51184 5.64455 9.05958 5.92349 8.78064L8.98985 5.71429L0.714286 5.71429C0.319797 5.71429 0 5.39449 0 5Z"
                                                    fill="#616161"></path>
                                            </svg>
                                            <svg class="icon-second" xmlns="http://www.w3.org/2000/svg" width="12"
                                                height="10" viewBox="0 0 12 10" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M0 5C0 4.60551 0.319797 4.28571 0.714286 4.28571L8.98985 4.28571L5.92349 1.21936C5.64455 0.940417 5.64455 0.488155 5.92349 0.209209C6.20244 -0.0697365 6.6547 -0.0697365 6.93365 0.209209L11.2194 4.49492C11.4983 4.77387 11.4983 5.22613 11.2194 5.50508L6.93365 9.79079C6.6547 10.0697 6.20244 10.0697 5.92349 9.79079C5.64455 9.51184 5.64455 9.05958 5.92349 8.78064L8.98985 5.71429L0.714286 5.71429C0.319797 5.71429 0 5.39449 0 5Z"
                                                    fill="#616161"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="rs-portfolio-item wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1s">
                            <a href="<?= base_url('products/sheetmetal-fabrication') ?>">
                                <div class="rs-portfolio-thumb"
                                    data-background="<?= base_url() ?>public/assets/images/products/services-thumb-04.png">
                                </div>
                            </a>
                            <div class="rs-portfolio-content">
                                <div class="rs-portfolio-number"></div>
                                <h5 class="rs-portfolio-title"><a
                                        href="<?= base_url('products/sheetmetal-fabrication') ?>">Sheet Metal
                                        fabrication</a></h5>
                                <div class="rs-portfolio-tag">
                                    <a href="<?= base_url() ?>">SRM HYDRAULICS</a>
                                </div>
                                <div class="rs-services-btn-wrapper">
                                    <div class="rs-portfolio-text-btn">
                                        <a class="rs-text-btn"
                                            href="<?= base_url('products/sheetmetal-fabrication') ?>">View
                                            Products</a>
                                    </div>
                                    <a class="rs-square-btn has-icon"
                                        href="<?= base_url('products/sheetmetal-fabrication') ?>">
                                        <span class="icon-box">
                                            <svg class="icon-first" xmlns="http://www.w3.org/2000/svg" width="12"
                                                height="10" viewBox="0 0 12 10" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M0 5C0 4.60551 0.319797 4.28571 0.714286 4.28571L8.98985 4.28571L5.92349 1.21936C5.64455 0.940417 5.64455 0.488155 5.92349 0.209209C6.20244 -0.0697365 6.6547 -0.0697365 6.93365 0.209209L11.2194 4.49492C11.4983 4.77387 11.4983 5.22613 11.2194 5.50508L6.93365 9.79079C6.6547 10.0697 6.20244 10.0697 5.92349 9.79079C5.64455 9.51184 5.64455 9.05958 5.92349 8.78064L8.98985 5.71429L0.714286 5.71429C0.319797 5.71429 0 5.39449 0 5Z"
                                                    fill="#616161"></path>
                                            </svg>
                                            <svg class="icon-second" xmlns="http://www.w3.org/2000/svg" width="12"
                                                height="10" viewBox="0 0 12 10" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M0 5C0 4.60551 0.319797 4.28571 0.714286 4.28571L8.98985 4.28571L5.92349 1.21936C5.64455 0.940417 5.64455 0.488155 5.92349 0.209209C6.20244 -0.0697365 6.6547 -0.0697365 6.93365 0.209209L11.2194 4.49492C11.4983 4.77387 11.4983 5.22613 11.2194 5.50508L6.93365 9.79079C6.6547 10.0697 6.20244 10.0697 5.92349 9.79079C5.64455 9.51184 5.64455 9.05958 5.92349 8.78064L8.98985 5.71429L0.714286 5.71429C0.319797 5.71429 0 5.39449 0 5Z"
                                                    fill="#616161"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="rs-portfolio-item wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                            <a href="<?= base_url('products/components-spares') ?>">
                                <div class="rs-portfolio-thumb"
                                    data-background="<?= base_url() ?>public/assets/images/products/services-thumb-05.png">
                                </div>
                            </a>
                            <div class="rs-portfolio-content">
                                <div class="rs-portfolio-number"></div>
                                <h5 class="rs-portfolio-title"><a
                                        href="<?= base_url('products/components-spares') ?>">Components and Spares
                                    </a></h5>
                                <div class="rs-portfolio-tag">
                                    <a href="<?= base_url() ?>">SRM HYDRAULICS</a>
                                </div>
                                <div class="rs-services-btn-wrapper">
                                    <div class="rs-portfolio-text-btn">
                                        <a class="rs-text-btn" href="<?= base_url('products/components-spares') ?>">View
                                            Products</a>
                                    </div>
                                    <a class="rs-square-btn has-icon"
                                        href="<?= base_url('products/components-spares') ?>">
                                        <span class="icon-box">
                                            <svg class="icon-first" xmlns="http://www.w3.org/2000/svg" width="12"
                                                height="10" viewBox="0 0 12 10" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M0 5C0 4.60551 0.319797 4.28571 0.714286 4.28571L8.98985 4.28571L5.92349 1.21936C5.64455 0.940417 5.64455 0.488155 5.92349 0.209209C6.20244 -0.0697365 6.6547 -0.0697365 6.93365 0.209209L11.2194 4.49492C11.4983 4.77387 11.4983 5.22613 11.2194 5.50508L6.93365 9.79079C6.6547 10.0697 6.20244 10.0697 5.92349 9.79079C5.64455 9.51184 5.64455 9.05958 5.92349 8.78064L8.98985 5.71429L0.714286 5.71429C0.319797 5.71429 0 5.39449 0 5Z"
                                                    fill="#616161"></path>
                                            </svg>
                                            <svg class="icon-second" xmlns="http://www.w3.org/2000/svg" width="12"
                                                height="10" viewBox="0 0 12 10" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M0 5C0 4.60551 0.319797 4.28571 0.714286 4.28571L8.98985 4.28571L5.92349 1.21936C5.64455 0.940417 5.64455 0.488155 5.92349 0.209209C6.20244 -0.0697365 6.6547 -0.0697365 6.93365 0.209209L11.2194 4.49492C11.4983 4.77387 11.4983 5.22613 11.2194 5.50508L6.93365 9.79079C6.6547 10.0697 6.20244 10.0697 5.92349 9.79079C5.64455 9.51184 5.64455 9.05958 5.92349 8.78064L8.98985 5.71429L0.714286 5.71429C0.319797 5.71429 0 5.39449 0 5Z"
                                                    fill="#616161"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="rs-portfolio-item wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1s">
                            <a href="<?= base_url('products/enggwork-ofalltypes') ?>">
                                <div class="rs-portfolio-thumb"
                                    data-background="<?= base_url() ?>public/assets/images/products/services-thumb-06.png">
                                </div>
                            </a>
                            <div class="rs-portfolio-content">
                                <div class="rs-portfolio-number"></div>
                                <h5 class="rs-portfolio-title"><a
                                        href="<?= base_url('products/enggwork-ofalltypes') ?>">Engg Works Of All
                                        Types </a></h5>
                                <div class="rs-portfolio-tag">
                                    <a href="<?= base_url() ?>">SRM HYDRAULICS</a>
                                </div>
                                <div class="rs-services-btn-wrapper">
                                    <div class="rs-portfolio-text-btn">
                                        <a class="rs-text-btn"
                                            href="<?= base_url('products/enggwork-ofalltypes') ?>">View
                                            Products</a>
                                    </div>
                                    <a class="rs-square-btn has-icon"
                                        href="<?= base_url('products/enggwork-ofalltypes') ?>">
                                        <span class="icon-box">
                                            <svg class="icon-first" xmlns="http://www.w3.org/2000/svg" width="12"
                                                height="10" viewBox="0 0 12 10" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M0 5C0 4.60551 0.319797 4.28571 0.714286 4.28571L8.98985 4.28571L5.92349 1.21936C5.64455 0.940417 5.64455 0.488155 5.92349 0.209209C6.20244 -0.0697365 6.6547 -0.0697365 6.93365 0.209209L11.2194 4.49492C11.4983 4.77387 11.4983 5.22613 11.2194 5.50508L6.93365 9.79079C6.6547 10.0697 6.20244 10.0697 5.92349 9.79079C5.64455 9.51184 5.64455 9.05958 5.92349 8.78064L8.98985 5.71429L0.714286 5.71429C0.319797 5.71429 0 5.39449 0 5Z"
                                                    fill="#616161"></path>
                                            </svg>
                                            <svg class="icon-second" xmlns="http://www.w3.org/2000/svg" width="12"
                                                height="10" viewBox="0 0 12 10" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M0 5C0 4.60551 0.319797 4.28571 0.714286 4.28571L8.98985 4.28571L5.92349 1.21936C5.64455 0.940417 5.64455 0.488155 5.92349 0.209209C6.20244 -0.0697365 6.6547 -0.0697365 6.93365 0.209209L11.2194 4.49492C11.4983 4.77387 11.4983 5.22613 11.2194 5.50508L6.93365 9.79079C6.6547 10.0697 6.20244 10.0697 5.92349 9.79079C5.64455 9.51184 5.64455 9.05958 5.92349 8.78064L8.98985 5.71429L0.714286 5.71429C0.319797 5.71429 0 5.39449 0 5Z"
                                                    fill="#616161"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Add More  -->
                    <!-- <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="rs-portfolio-item wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s">
                            <div class="rs-portfolio-thumb" data-background="<?= base_url() ?>public/assets/images/portfolio/portfolio-thumb-47.png"></div>
                            <div class="rs-portfolio-content">
                                <div class="rs-portfolio-number"></div>
                                <h5 class="rs-portfolio-title"><a href="portfolio-details.html">Oil &amp;
                                        Gas Industry</a></h5>
                                <div class="rs-portfolio-tag">
                                    <a href="portfolio-details.html">Midstream</a>
                                </div>
                                <div class="rs-services-btn-wrapper">
                                    <div class="rs-portfolio-text-btn">
                                        <a class="rs-text-btn" href="portfolio-details.html">View
                                            Details</a>
                                    </div>
                                    <a class="rs-square-btn has-icon" href="portfolio-details.html">
                                        <span class="icon-box">
                                 <svg class="icon-first" xmlns="http://www.w3.org/2000/svg" width="12" height="10"
                                    viewBox="0 0 12 10" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                       d="M0 5C0 4.60551 0.319797 4.28571 0.714286 4.28571L8.98985 4.28571L5.92349 1.21936C5.64455 0.940417 5.64455 0.488155 5.92349 0.209209C6.20244 -0.0697365 6.6547 -0.0697365 6.93365 0.209209L11.2194 4.49492C11.4983 4.77387 11.4983 5.22613 11.2194 5.50508L6.93365 9.79079C6.6547 10.0697 6.20244 10.0697 5.92349 9.79079C5.64455 9.51184 5.64455 9.05958 5.92349 8.78064L8.98985 5.71429L0.714286 5.71429C0.319797 5.71429 0 5.39449 0 5Z"
                                       fill="#616161"></path>
                                 </svg>
                                 <svg class="icon-second" xmlns="http://www.w3.org/2000/svg" width="12" height="10"
                                    viewBox="0 0 12 10" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                       d="M0 5C0 4.60551 0.319797 4.28571 0.714286 4.28571L8.98985 4.28571L5.92349 1.21936C5.64455 0.940417 5.64455 0.488155 5.92349 0.209209C6.20244 -0.0697365 6.6547 -0.0697365 6.93365 0.209209L11.2194 4.49492C11.4983 4.77387 11.4983 5.22613 11.2194 5.50508L6.93365 9.79079C6.6547 10.0697 6.20244 10.0697 5.92349 9.79079C5.64455 9.51184 5.64455 9.05958 5.92349 8.78064L8.98985 5.71429L0.714286 5.71429C0.319797 5.71429 0 5.39449 0 5Z"
                                       fill="#616161"></path>
                                 </svg>
                              </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="rs-portfolio-item wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">
                            <div class="rs-portfolio-thumb" data-background="<?= base_url() ?>public/assets/images/portfolio/portfolio-thumb-48.png"></div>
                            <div class="rs-portfolio-content">
                                <div class="rs-portfolio-number"></div>
                                <h5 class="rs-portfolio-title"><a href="portfolio-details.html"> Gas Industry</a></h5>
                                <div class="rs-portfolio-tag">
                                    <a href="portfolio-details.html">Organization</a>
                                </div>
                                <div class="rs-services-btn-wrapper">
                                    <div class="rs-portfolio-text-btn">
                                        <a class="rs-text-btn" href="portfolio-details.html">View
                                            Details</a>
                                    </div>
                                    <a class="rs-square-btn has-icon" href="portfolio-details.html">
                                        <span class="icon-box">
                                 <svg class="icon-first" xmlns="http://www.w3.org/2000/svg" width="12" height="10"
                                    viewBox="0 0 12 10" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                       d="M0 5C0 4.60551 0.319797 4.28571 0.714286 4.28571L8.98985 4.28571L5.92349 1.21936C5.64455 0.940417 5.64455 0.488155 5.92349 0.209209C6.20244 -0.0697365 6.6547 -0.0697365 6.93365 0.209209L11.2194 4.49492C11.4983 4.77387 11.4983 5.22613 11.2194 5.50508L6.93365 9.79079C6.6547 10.0697 6.20244 10.0697 5.92349 9.79079C5.64455 9.51184 5.64455 9.05958 5.92349 8.78064L8.98985 5.71429L0.714286 5.71429C0.319797 5.71429 0 5.39449 0 5Z"
                                       fill="#616161"></path>
                                 </svg>
                                 <svg class="icon-second" xmlns="http://www.w3.org/2000/svg" width="12" height="10"
                                    viewBox="0 0 12 10" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                       d="M0 5C0 4.60551 0.319797 4.28571 0.714286 4.28571L8.98985 4.28571L5.92349 1.21936C5.64455 0.940417 5.64455 0.488155 5.92349 0.209209C6.20244 -0.0697365 6.6547 -0.0697365 6.93365 0.209209L11.2194 4.49492C11.4983 4.77387 11.4983 5.22613 11.2194 5.50508L6.93365 9.79079C6.6547 10.0697 6.20244 10.0697 5.92349 9.79079C5.64455 9.51184 5.64455 9.05958 5.92349 8.78064L8.98985 5.71429L0.714286 5.71429C0.319797 5.71429 0 5.39449 0 5Z"
                                       fill="#616161"></path>
                                 </svg>
                              </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- Add More  -->

                </div>
            </div>
        </section>
        <!-- product ervice area end -->

    </main>
    <!-- Body main wrapper end -->

    <!-- footer area start -->
    <?php require("Components/Footer.php") ?>
    <!-- footer area end -->
</body>


</html>