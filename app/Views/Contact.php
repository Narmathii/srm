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
        <?php require("Components/innerBanner.php") ?>

        <!-- <section class="rs-breadcrumb-area rs-breadcrumb-one p-relative">
            <div class="rs-breadcrumb-bg" data-background="<?= base_url() ?>public/assets/images/bg/breadcrumb-bg-02.png"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-xl-8 col-lg-8">
                        <div class="rs-breadcrumb-content-wrapper">
                            <div class="rs-breadcrumb-title-wrapper">
                                <h1 class="rs-breadcrumb-title">Contact Us</h1>
                            </div>
                            <div class="rs-breadcrumb-menu">
                                <nav>
                                    <ul>
                                        <li><span><a href="Index.php">Home</a></span></li>
                                        <li><span>Contact</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- breadcrumb area end -->

        <!-- contact area start -->
        <section id="homecontact" class="rs-contact-area rs-contact-one section-space black-bg p-relative">
            <div class="rs-contact-bg" data-background="<?= base_url() ?>public/assets/images/bg/contact-bg-01.png">
            </div>
            <div class="container">
                <div class="row align-items-xl-center g-5">
                    <div class="col-xl-7 col-lg-7">
                        <div class="rs-contact-wrapper">
                            <div class="rs-section-title-wrapper">
                                <span class="rs-section-subtitle has-theme-orange justify-content-start custom-rs-section">
                           <svg xmlns="http://www.w3.org/2000/svg" width="11" height="15" viewBox="0 0 11 15"
                              fill="none">
                              <path d="M3.14286 10L0 15L8.78104e-07 0L3.14286 5V10Z" fill="#10497b"></path>
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                 d="M6.28571 10L3.14286 15L3.14286 10L4.71428 7.5L3.14286 5L3.14286 0L6.28571 5L6.28571 10ZM6.28571 10L7.85714 7.5L6.28571 5V0L11 7.5L6.28571 15V10Z"
                                 fill="#10497b"></path>
                           </svg>
                           Contact Us
                        </span>
                                <h2 class="rs-section-title mb-30 rs-split-text-enable split-in-fade">Get in touch with our team</h2>
                                <p class="descrip">We’re here to help you make the right decision. Whether you need expert guidance, detailed product information, 
                                    or a custom solution tailored to your specific requirements our experienced team is just a message away.</p>
                            </div>

                            <div class="rs-contact-list">
                                <div class="rs-contact-list-item  wow fadeIn" data-wow-delay=".3s">
                                    <div class="rs-contact-icon">
                                        <span>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="30" height="35" viewBox="0 0 30 35"
                                    fill="none">
                                    <path
                                       d="M20.6984 22.653C24.3306 16.928 23.874 17.6423 23.9787 17.493C25.3011 15.6195 26 13.4144 26 11.1161C26 5.02098 21.0759 0 15 0C8.94387 0 4 5.01107 4 11.1161C4 13.4129 4.7136 15.6757 6.07933 17.5745L9.30147 22.6531C5.85647 23.1848 0 24.7696 0 28.2589C0 29.5309 0.826533 31.3436 4.76413 32.7562C7.5136 33.7425 11.1487 34.2857 15 34.2857C22.2017 34.2857 30 32.2452 30 28.2589C30 24.7689 24.1504 23.1859 20.6984 22.653ZM7.74993 16.4695C7.73893 16.4523 7.72747 16.4354 7.71547 16.4188C6.579 14.8483 6 12.9871 6 11.1161C6 6.09254 10.0271 2.00893 15 2.00893C19.9626 2.00893 24 6.09435 24 11.1161C24 12.9901 23.4319 14.7882 22.3569 16.3173C22.2606 16.4449 22.7632 15.6606 15 27.8966L7.74993 16.4695ZM15 32.2768C7.13373 32.2768 2 29.9543 2 28.2589C2 27.1195 4.63787 25.2459 10.4832 24.5156L14.1567 30.3055C14.3403 30.5949 14.6583 30.7701 14.9999 30.7701C15.3416 30.7701 15.6597 30.5948 15.8432 30.3055L19.5166 24.5156C25.3621 25.2459 28 27.1195 28 28.2589C28 29.9399 22.9125 32.2768 15 32.2768Z"
                                       fill="white"></path>
                                    <path
                                       d="M15.0039 6.09375C12.2469 6.09375 10.0039 8.34676 10.0039 11.1161C10.0039 13.8854 12.2469 16.1384 15.0039 16.1384C17.7609 16.1384 20.0039 13.8854 20.0039 11.1161C20.0039 8.34676 17.7609 6.09375 15.0039 6.09375ZM15.0039 14.1295C13.3497 14.1295 12.0039 12.7777 12.0039 11.1161C12.0039 9.45449 13.3497 8.10268 15.0039 8.10268C16.6581 8.10268 18.0039 9.45449 18.0039 11.1161C18.0039 12.7777 16.6581 14.1295 15.0039 14.1295Z"
                                       fill="white"></path>
                                 </svg>
                              </span>
                                    </div>
                                    <div class="rs-contact-list-content">
                                        <span>Address</span>
                                        <h6><a href="#"> S/F No. 837/B1A, Door No. 28 1, North Garden Street. 
                                            Idigarai Road, Near Railway Gate, Therkkupalayam, Coimbatore. 
                                            Tamil Nadu - 641020
                                        </a></h6>
                                    </div>
                                </div>
                                <div class="rs-contact-list-item  wow fadeIn" data-wow-delay=".5s">
                                    <div class="rs-contact-icon">
                                        <span>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                    fill="none">
                                    <path
                                       d="M23.7225 18.5848C23.1074 17.9453 22.3655 17.6034 21.5792 17.6034C20.7993 17.6034 20.051 17.9389 19.4106 18.5784L17.4068 20.573C17.242 20.4843 17.0771 20.402 16.9186 20.3197C16.6903 20.2057 16.4747 20.0981 16.2908 19.9841C14.4139 18.7937 12.7081 17.2424 11.0722 15.2353C10.2795 14.2348 9.74688 13.3927 9.36008 12.5379C9.88004 12.063 10.362 11.5691 10.8312 11.0943C11.0087 10.917 11.1863 10.7333 11.3638 10.556C12.6955 9.22637 12.6955 7.50412 11.3638 6.17444L9.63274 4.44585C9.43617 4.24957 9.23326 4.04695 9.04303 3.84433C8.66256 3.45176 8.26308 3.04652 7.85091 2.66662C7.23583 2.05876 6.50028 1.73584 5.72667 1.73584C4.95307 1.73584 4.20483 2.05876 3.57072 2.66662C3.56438 2.67295 3.56438 2.67295 3.55804 2.67928L1.40209 4.85109C0.590443 5.66156 0.127549 6.64932 0.0260924 7.79538C-0.126092 9.64427 0.419236 11.3665 0.837743 12.4936C1.86499 15.2606 3.39952 17.825 5.68862 20.573C8.46599 23.8845 11.8077 26.4995 15.625 28.3421C17.0834 29.0323 19.0301 29.8491 21.2051 29.9884C21.3383 29.9947 21.4778 30.001 21.6046 30.001C23.0694 30.001 24.2995 29.4755 25.2634 28.4307C25.2697 28.4181 25.2824 28.4117 25.2887 28.3991C25.6185 28.0002 25.9989 27.6393 26.3984 27.253C26.6711 26.9934 26.9501 26.7212 27.2227 26.4362C27.8505 25.784 28.1802 25.0242 28.1802 24.2454C28.1802 23.4603 27.8442 22.7068 27.2037 22.0736L23.7225 18.5848ZM25.9926 25.2522C25.9862 25.2522 25.9862 25.2585 25.9926 25.2522C25.7453 25.5181 25.4916 25.7587 25.219 26.0247C24.8068 26.4172 24.3883 26.8288 23.9952 27.291C23.3547 27.9749 22.6001 28.2978 21.6109 28.2978C21.5158 28.2978 21.4144 28.2978 21.3192 28.2914C19.436 28.1711 17.6858 27.4366 16.3732 26.8098C12.7842 25.0749 9.63274 22.6118 7.0139 19.4902C4.85161 16.8879 3.40586 14.4818 2.44836 11.8984C1.85865 10.3218 1.64305 9.0934 1.73817 7.93468C1.80158 7.19386 2.08692 6.57967 2.61323 6.05413L4.77552 3.89499C5.08623 3.60372 5.41596 3.44543 5.73935 3.44543C6.13884 3.44543 6.46223 3.68604 6.66514 3.88865C6.67148 3.89499 6.67782 3.90132 6.68417 3.90765C7.07097 4.26856 7.43875 4.64214 7.82555 5.04104C8.02212 5.24366 8.22503 5.44628 8.42795 5.65523L10.159 7.38381C10.8312 8.05498 10.8312 8.6755 10.159 9.34667C9.97515 9.5303 9.79761 9.71392 9.61372 9.89121C9.08107 10.4357 8.57379 10.9423 8.02212 11.4362C8.00944 11.4488 7.99676 11.4552 7.99042 11.4678C7.44509 12.0124 7.54654 12.5442 7.66068 12.9051C7.66702 12.9241 7.67336 12.9431 7.67971 12.9621C8.12992 14.0512 8.76402 15.077 9.72785 16.299L9.7342 16.3053C11.4843 18.4581 13.3296 20.1361 15.365 21.4214C15.625 21.5861 15.8913 21.719 16.145 21.8457C16.3732 21.9596 16.5888 22.0673 16.7727 22.1812C16.7981 22.1939 16.8235 22.2129 16.8488 22.2256C17.0644 22.3332 17.2673 22.3839 17.4766 22.3839C18.0029 22.3839 18.3326 22.0546 18.4404 21.947L20.609 19.7815C20.8246 19.5662 21.1671 19.3066 21.5665 19.3066C21.9597 19.3066 22.2831 19.5535 22.4796 19.7688C22.486 19.7752 22.486 19.7752 22.4923 19.7815L25.9862 23.2703C26.6394 23.9162 26.6394 24.581 25.9926 25.2522Z"
                                       fill="white"></path>
                                    <path
                                       d="M16.2163 7.13613C17.8777 7.41473 19.3869 8.19988 20.5917 9.40292C21.7964 10.606 22.5764 12.1129 22.8617 13.7719C22.9315 14.1898 23.2929 14.481 23.7051 14.481C23.7558 14.481 23.8002 14.4747 23.8509 14.4684C24.3202 14.3924 24.6309 13.9492 24.5548 13.4806C24.2124 11.4734 23.2612 9.64353 21.8091 8.19355C20.357 6.74356 18.5245 5.79379 16.5144 5.45187C16.0451 5.37589 15.6076 5.68615 15.5252 6.14837C15.4427 6.61059 15.7471 7.06015 16.2163 7.13613Z"
                                       fill="white"></path>
                                    <path
                                       d="M29.9883 13.2338C29.4239 9.92864 27.864 6.92103 25.4671 4.52761C23.0702 2.13419 20.0582 0.576563 16.7482 0.0130318C16.2853 -0.0692817 15.8478 0.247309 15.7654 0.709531C15.6893 1.17808 16 1.61498 16.4692 1.69729C19.4241 2.19751 22.1191 3.59683 24.2623 5.73065C26.4056 7.8708 27.8006 10.5618 28.3016 13.5124C28.3713 13.9303 28.7328 14.2216 29.1449 14.2216C29.1956 14.2216 29.24 14.2153 29.2908 14.2089C29.7537 14.1393 30.0707 13.6961 29.9883 13.2338Z"
                                       fill="white"></path>
                                 </svg>
                              </span>
                                    </div>
                                    <div class="rs-contact-list-content">
                                        <span>Phone Number</span>
                                        <h6 class="mb-5"><a href="tel:971551579261">+91 94885 22011</a></h6>
                                        <!-- <h6><a href="tel:971551579261">+91 94885 22011</a></h6> -->
                                    </div>
                                </div>
                                <div class="rs-contact-list-item  wow fadeIn" data-wow-delay=".7s">
                                    <div class="rs-contact-icon">
                                        <span>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none">
                                    <path
                                       d="M2 2C0.895431 2 0 2.89543 0 4V12L2.58386e-05 12.0103C0.00555998 13.1101 0.898859 14 2 14H7.5C7.77614 14 8 13.7761 8 13.5C8 13.2239 7.77614 13 7.5 13H2C1.53715 13 1.14774 12.6855 1.03376 12.2586L6.67417 8.7876L8 9.5831L15 5.3831V8.5C15 8.77614 15.2239 9 15.5 9C15.7761 9 16 8.77614 16 8.5V4C16 2.89543 15.1046 2 14 2H2ZM5.70808 8.20794L1 11.1052V5.3831L5.70808 8.20794ZM1 4.2169V4C1 3.44772 1.44772 3 2 3H14C14.5523 3 15 3.44772 15 4V4.2169L8 8.4169L1 4.2169Z"
                                       fill="#6D6D6D"></path>
                                    <path
                                       d="M14.2467 14.2686C15.2567 14.2686 15.8339 13.4116 15.8339 12.2442V12.0344C15.8339 10.4297 14.6402 9 12.5197 9H12.4847C10.421 9 9 10.3598 9 12.4322V12.6465C9 14.8195 10.4385 16 12.3579 16H12.4016C12.9963 16 13.4204 15.9257 13.639 15.8251V15.0949C13.3941 15.2042 12.9656 15.2742 12.4585 15.2742H12.4147C11.0812 15.2742 9.84385 14.4872 9.84385 12.6202V12.4628C9.84385 10.8057 10.9019 9.73891 12.4847 9.73891H12.524C14.0587 9.73891 15.0075 10.7883 15.0075 12.065V12.183C15.0075 13.158 14.6839 13.5734 14.3691 13.5734C14.1374 13.5734 13.9582 13.4247 13.9582 13.1537V10.9631H13.0531V11.5315H13.0225C12.9394 11.2342 12.6552 10.9019 12.0693 10.9019C11.2911 10.9019 10.8101 11.4572 10.8101 12.3011V12.8301C10.8101 13.722 11.2998 14.2642 12.0693 14.2642C12.5415 14.2642 12.9656 14.0369 13.0837 13.6215H13.1274C13.2455 14.0412 13.7439 14.2686 14.2467 14.2686ZM11.7939 12.6814V12.4541C11.7939 11.9076 12.0212 11.6627 12.3666 11.6627C12.664 11.6627 12.9394 11.8551 12.9394 12.371V12.7383C12.9394 13.3111 12.6858 13.4816 12.3754 13.4816C12.0212 13.4816 11.7939 13.2673 11.7939 12.6814Z"
                                       fill="#6D6D6D"></path>
                                 </svg>
                              </span>
                                    </div>
                                    <div class="rs-contact-list-content">
                                        <span>Email Address</span>
                                        <p> Interested in working with us?</p>
                                        <h6><a href="mailto:info@srmhydraulics.in">info@srmhydraulics.in</a></h6>
                                    </div>
                                </div>
                                <div class="rs-contact-list-item  wow fadeIn" data-wow-delay=".7s">
                                    <div class="rs-contact-icon">
                                        <span>
                                 <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="512"
                                    height="512">
                                    <path
                                       d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm0,22A10,10,0,1,1,22,12,10.011,10.011,0,0,1,12,22Z">
                                    </path>
                                    <path
                                       d="M12,6a1,1,0,0,0-1,1v4.325L7.629,13.437a1,1,0,0,0,1.062,1.7l3.84-2.4A1,1,0,0,0,13,11.879V7A1,1,0,0,0,12,6Z">
                                    </path>
                                 </svg>
                              </span>
                                    </div>
                                    <div class="rs-contact-list-content">
                                        <span>Opening Hour</span>
                                        <p class=""> Mon - Fri: 09am - 07pm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="rs-contact-form wow fadeInRight" data-wow-delay=".5s" data-wow-duration="1s">
                            <div class="rs-contact-form-bg-thumb" data-background="<?= base_url() ?>public/assets/images/bg/contact-bg-03.png"></div>
                            <h3 class="rs-contact-form-title">Get in Touch</h3>
                            <p class="descrip">Have a project in mind or need expert advice? The SRM Hydraulic team is here to assist you.</p>
                            <form id="contact-form" action="javascript:void(0);" novalidate >
                                <div class="row g-4">
                                    <div class="col-md-12">
                                        <div class="rs-contact-input">
                                            <input id="name" name="name" type="text" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="rs-contact-input">
                                            <input id="email" name="email" type="email" placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="rs-contact-input">
                                            <input id="info" name="info" type="text" placeholder="Your Inquiry">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="rs-contact-input">
                                            <textarea id="message" name="message" placeholder="Write Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="rs-contact-btn">
                                            <button type="submit" class="rs-btn black-bg">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div id="form-messages"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact area start -->
        <!-- Google map area start -->
        <div class="rs-map-area rs-map-one">
            <div class="rs-google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18577.07404307686!2d76.92393675911194!3d11.131131378766673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8f6bbc9a0817d%3A0xe5ac898b153ef0c!2sTherkkuppalayam%2C%20Coimbatore%2C%20Tamil%20Nadu!5e1!3m2!1sen!2sin!4v1752140407978!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
        <!-- Google map area end-->

    </main>
    <!-- Body main wrapper end -->

        <!-- footer area start -->
        <?php require("Components/Footer.php") ?>

        <!-- <script>
            document.getElementById("contact-form").addEventListener("submit", function(e) {
                e.preventDefault(); // Stop default form submission

                const name = document.getElementById("name").value.trim();
                const email = document.getElementById("email").value.trim();
                const info = document.getElementById("info").value.trim();
                const message = document.getElementById("message").value.trim();

                if (!name || !email) {
                    alert("Please enter both name and email.");
                    return;
                }

                const phone = "919488522011"; 
                const waMessage =
                    `Hello, my name is ${encodeURIComponent(name)}.%0A` +
                    `Inquiry: ${encodeURIComponent(info)}%0A` +
                    `Email: ${encodeURIComponent(email)}%0A` +
                    `Message: ${encodeURIComponent(message)}`;

                window.location.href = `https://wa.me/${phone}?text=${waMessage}`;
            });

        </script> -->
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const form = document.getElementById("contact-form");
                const statusBox = document.getElementById("form-messages");

                form.addEventListener("submit", function (e) {
                    e.preventDefault(); // STOP default + JS/AJAX submission

                    const name = document.getElementById("name").value.trim();
                    const email = document.getElementById("email").value.trim();
                    const info = document.getElementById("info").value.trim();
                    const message = document.getElementById("message").value.trim();

                    if (!name || !email || !message) {
                        statusBox.innerHTML = `<p class="text-danger">Please fill in all required fields.</p>`;
                        return;
                    }

                    const phone = "919488522011";

                    const waMessage =
                        `Hello, my name is ${encodeURIComponent(name)}.%0A` +
                        `Email: ${encodeURIComponent(email)}%0A` +
                        `Inquiry: ${encodeURIComponent(info)}%0A` +
                        `Message: ${encodeURIComponent(message)}`;

                    window.open(`https://wa.me/${phone}?text=${waMessage}`, "_blank");

                    statusBox.innerHTML = `<p class="text-success"></p>`;
                    form.reset(); // Clear inputs
                });
            });
        </script>


</body>


</html>