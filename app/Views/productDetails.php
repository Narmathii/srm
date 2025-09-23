<!doctype html>
<html class="no-js" lang="zxx">


<?php require("Components/Head.php") ?>

<body class="rs-smoother-yes rtl">

    <!-- preloader start -->
    <div id="pre-load">
        <div id="loader" class="loader">
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
    <!-- Offcanvas area end -->

    <!-- Body main wrapper start -->
    <main>
        <?php require("Components/detailInnerBanner.php") ?>
        <!-- breadcrumb area end -->

        <!-- shop area start -->
        <section class="rs-shop-area section-space">
            <div class="container">
                <div class="row align-items-lg-center g-5">
                    <div class="col-md-6">
                        <div class="product-details-thumb-wrap">
                            <div class="product-details-thumb-top mb-10">
                                <div class="swiper product-details-active p-relative">
                                    <div class="swiper-wrapper">
                                        <?php foreach ($details['images'] as $i => $detail) { ?>
                                            <div class="swiper-slide">
                                                <div class="product-details-thumb">
                                                    <img src="<?= base_url() ?><?= $detail ?>" alt="image<?= $i + 1 ?>">
                                                </div>
                                            </div>
                                        <?php } ?>

                                    </div>
                                </div>
                            </div>
                            <div class="product-details-thumb-bottom">
                                <div class="product-details-slider-dot">
                                    <div class="swiper product-details-nav">
                                        <div class="swiper-wrapper">
                                            <?php foreach ($details['images'] as $i => $detail) { ?>
                                                <div class="swiper-slide">
                                                    <button class="custom-button">
                                                        <img src="<?= base_url($detail) ?>" alt="Image <?= $i + 1 ?>">
                                                    </button>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-details-wrapper shop-details custom-product-details">
                            <h3 class="product-details-title mb-10"><?= $details['title'] ?></h3>
                            <div class="product-details-rating d-flex align-items-center mb-10">
                                <div class="product-rating rating-color d-flex">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="product-details-rating-count">
                                    <span>(4.5 review)</span>
                                </div>
                            </div>
                            <p class="mb-15">
                                <?= $details['description'] ?>
                            </p>
                            <div class="product-details-price mb-10">
                                <!-- <h6 class="product-details-current-price">₹ 17,500<span style="color:grey;font-size:16px;">/unit</span></h6> -->
                            </div>

                            <!-- enquiry popup start -->
                            <?php require('Components/product_enquiry.php') ?>
                            <!-- enquiry popup end -->

                            <div class="share-on-social">
                                <div class="share-on-social-title">
                                    <h5>Share This to:</h5>
                                </div>
                                <div class="share-on-social-widght">
                                    <a href="https://www.facebook.com/"><i class="ri-facebook-fill"></i></a>
                                    <a href="https://web.whatsapp.com/"><i class="ri-whatsapp-line"></i></a>
                                    <a href="https://www.linkedin.com/uas/login-submit"><i
                                            class="ri-linkedin-fill"></i></a>
                                    <a href="https://www.instagram.com/"><i class="ri-instagram-line"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>



    <!-- footer area start -->
    <?php require("Components/Footer.php") ?>

</body>


</html>