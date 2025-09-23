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



    <div id="rs-mouse">
        <div id="cursor-ball"></div>
    </div>



    <!-- Header area start -->
    <?php require("Components/Header.php") ?>
    <!-- Header area end -->

    <!-- Offcanvas area start -->
    <?php require("Components/mobileMenu.php") ?>
    <!-- Offcanvas area end -->

    <!-- Body main wrapper start -->
    <main>

        <!-- breadcrumb area start -->
        <?php require("Components/innerBanner.php") ?>
        <!-- breadcrumb area end -->

        <!-- shop area start -->
        <section class="rs-shop-area section-space">
            <div class="container">
                <div class="row g-5">
                    <div class="col-xxl-12 col-xl-12 col-lg-12">
                        <div class="row g-5">
                            <?php foreach ($category['products'] as $product) { ?>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="rs-product-item">
                                        <div class="rs-product-thumb">
                                            <a href="<?= base_url('details/' . $product['slug']) ?>">
                                                <img src="<?= base_url($product['image']) ?>" alt="image">
                                            </a>
                                            <div class="rs-product-btn">
                                                <a class="rs-btn" href="<?= base_url('details/' . $product['slug']) ?>">View
                                                    Details</a>
                                            </div>
                                        </div>
                                        <div class="rs-product-content">
                                            <h6 class="rs-product-title">
                                                <a
                                                    href="<?= base_url('details/' . $product['slug']) ?>"><?= $product['name'] ?></a>
                                            </h6>

                                        </div>
                                    </div>
                                </div>
                            <?php } ?>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop area end -->
    </main>

    <?php require("Components/Footer.php") ?>

</body>


</html>