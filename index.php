<?php
session_start();
include('admin/vendor/inc/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("vendor/inc/head.php"); ?>
</head>

<body>

    <?php include("vendor/inc/nav.php"); ?>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="col-lg-5">
            <img class="img-fluid rounded mb-4" src="vendor/img/user.png">
        </div>
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1>Welcome to <span>Vehicle Booking System</span></h1>
            <h2>Please check our services below. You will enjoy it!</h2>
            <div class="d-flex">
                <a href="contact.php" class="btn-get-started scrollto">Contact me</a>
                <a href="https://www.youtube.com/watch?v=Tnvryod_NF4" class="glightbox btn-watch-video"><i
                        class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bi bi-file-earmark-person"></i></div>
                            <h4 class="title"><a href="about.php">About</a></h4>
                            <p class="description">My name is Lee Tongchar and I am pursuing a bachelor's degree at the University of South East Asia.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="services.php">Services</a></h4>
                            <p class="description">Thank you for visiting this website, check out our services.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bi bi-person-lines-fill"></i></div>
                            <h4 class="title"><a href="contact.php">Contact</a></h4>
                            <p class="description">For more information, please contact me at the link below.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class="bi bi-door-open"></i></div>
                            <h4 class="title"><a href="admin/">Admin Login</a></h4>
                            <p class="description">Administrators log in here.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <h3>Please Check our <span>Services</span></h3>
                    <p>Please check our services below. You will enjoy it!.</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">Cars</li>
                            <li data-filter=".filter-card">Model</li>
                            <li data-filter=".filter-web">Other</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/portfolio-1.JPG" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Model 1</h4>
                            <p>Model</p>
                            <a href="assets/img/portfolio/portfolio-1.JPG" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="assets/img/portfolio/portfolio-2.JPG" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Model 2</h4>
                            <p>Model</p>
                            <a href="assets/img/portfolio/portfolio-2.JPG" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/portfolio-3.JPG" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Model 3</h4>
                            <p>Model</p>
                            <a href="assets/img/portfolio/portfolio-3.JPG" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="assets/img/portfolio/portfolio-4.JPG" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Model 4</h4>
                            <p>Model</p>
                            <a href="assets/img/portfolio/portfolio-4.JPG" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="assets/img/portfolio/portfolio-5.JPG" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Model 5</h4>
                            <p>Model</p>
                            <a href="assets/img/portfolio/portfolio-5.JPG" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/portfolio-6.JPG" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Model 6</h4>
                            <p>Model</p>
                            <a href="assets/img/portfolio/portfolio-6.JPG" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="assets/img/portfolio/portfolio-7.JPG" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Model 7</h4>
                            <p>Model</p>
                            <a href="assets/img/portfolio/portfolio-7.JPG" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="assets/img/portfolio/portfolio-8.JPG" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Model 8</h4>
                            <p>Model</p>
                            <a href="assets/img/portfolio/portfolio-8.JPG" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="assets/img/portfolio/portfolio-9.JPG" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Model 9</h4>
                            <p>Model</p>
                            <a href="assets/img/portfolio/portfolio-9.JPG" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <h3><span>Contact Us</span></h3>
                    <p>If you want to know more about us just contact us below.</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>A108 Siemreap Street, Svay Dangkum, SD 1200, Siem Reap</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>tongchherly1245@gmail.com</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>+885 954 269 08</p>
                        </div>
                    </div>

                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-6" id="map">
                        <iframe class="mb-4 mb-lg-0"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                            frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>

                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                    required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <?php include("vendor/inc/footer.php"); ?>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>