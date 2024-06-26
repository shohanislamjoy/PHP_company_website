<?php
include('login_check.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Battery Low Interactive - Home</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="frontend/img/favicon.png" rel="icon">
    <link href="frontend/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="frontend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="frontend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="frontend/vendor/aos/aos.css" rel="stylesheet">
    <link href="frontend/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="frontend/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="frontend/main.css" rel="stylesheet">

    <link rel="shortcut icon" href="/frontend/img/logo_1-removebg-preview.png" type="image/x-icon">

</head>

<body>

    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="frontend/img/logo_1-removebg-preview.png" alt="Battery Low Interactive" width="200" height="150"> -->
                <h1 id="logo">Battery Low Interactive<span>.</span></h1>
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#contact">Contact</a></li>

                    <?php if (isset($_SESSION['user_id'])) : ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle d-flex align-items-center text-dark col-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="frontend/img/avatar-3814049_640.png" alt="Dashboard" class="mr-1" style="max-height: 60px; border-radius:40%;">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-3">
                                <li>
                                    <h4 class="h3 mb-0"><strong><?php echo $user_name ?></strong></h4>
                                    <div class="mb-3">
                                        <?php echo $user_email ?>
                                    </div>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li>
                                    <a id="openReviewForm" class="dropdown-item">
                                        <i class="fa-regular fa-comments"></i>Leave a Review</a>

                                    <!-- Review form modal -->
                                    <div id="reviewModal" class="modal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Leave a Review</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>


                                                </div>
                                                <div class="modal-body">
                                                    <form id="reviewForm" action="submit_review.php" method="post">
                                                        <div class="form-group">
                                                            <label for="name">Your Name</label>
                                                            <input type="text" name="name" class="form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Your Occupation</label>
                                                            <input type="text" name="occupation" class="form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="message">Your Review</label>
                                                            <textarea name="message" class="form-control" rows="3" required></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="rating">Rating:</label><br>
                                                            <div class="rate text-center">
                                                                <input type="radio" id="star5" name="rate" value="5" />
                                                                <label for="star5" title="text"></label>
                                                                <input type="radio" id="star4" name="rate" value="4" />
                                                                <label for="star4" title="text"></label>
                                                                <input type="radio" id="star3" name="rate" value="3" />
                                                                <label for="star3" title="text"></label>
                                                                <input type="radio" id="star2" name="rate" value="2" />
                                                                <label for="star2" title="text"></label>
                                                                <input type="radio" id="star1" name="rate" value="1" />
                                                                <label for="star1" title="text"></label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group text-center">
                                                            <button type="submit" class="btn btn-secondary">Submit Review</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li><a href="#" class="dropdown-item"><i class="fas fa-user-cog mr-2"></i> Settings</a></li>
                                <li><a href="#" class="dropdown-item"><i class="fas fa-lock mr-2"></i> Change Password</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a href="logout.php" class="dropdown-item text-danger" id="logout-button"><i class="fas fa-sign-out-alt mr-2"></i> Logout</a></li>
                            </ul>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="login.php" class="nav-link d-flex align-items-center text-dark col-3"><img src="frontend/img/avatar-3814049_640.png" alt="Dashboard" class="mr-1" style="max-height: 60px; border-radius: 40%;"></a>
                        </li>
                    <?php endif; ?>
                </ul>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->




    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 data-aos="fade-down">Welcome to <span>Battery Low Interactive</span></h2>
                        <p data-aos="fade-up">One of the first and foremost exponents of AR and VR technologies in Bangladesh. Web, app, and game development as well as creative marketing is also our forte. We make sure that our products and services enhance your identity
                            in the professional world.</p>
                        <a data-aos="fade-up" data-aos-delay="200" href="#contact" class="btn-contact">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-item active" style="background-image: url(frontend/img/hero/vr_5.jpg)"></div>
            <div class="carousel-item" style="background-image: url(frontend/img/hero/vr_6.jpg)"></div>
            <div class="carousel-item" style="background-image: url(frontend/img/hero/vr_4.jpg)"></div>
            <div class="carousel-item" style="background-image: url(frontend/img/hero/vr_2.jpg)"></div>
            <div class="carousel-item" style="background-image: url(frontend/img/hero/vr_3.jpg)"></div>

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">



        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Services</h2>
                    <p>We are the first and foremost exponents of AR and VR technologies in Bangladesh . we work in Web, app and game development as well as creative marketing is also our forte, Just check our works section for validation.</p>
                </div>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <i class="fa-regular fa-lightbulb"></i>
                            </div>
                            <h3>Web Development</h3>
                            <p>Websites are the prerequisite of almost anything in present world. A website symbolizes the very identity of something. Since the days of working as freelancers, we have taken part in the development of many websites. These include an array of static and dynamic websites for a variety of different purposes.</p>
                            <a href="" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-gamepad"></i>
                            </div>
                            <h3>GAME DEVELOPMENT</h3>
                            <p>Game development has been our comfort zone and ultimate strength. Starting from traditional mobile games, we went on building PC platform games and won awards with them. We introduced new technologies like AR and VR in their full potential in the game industry of Bangladesh.</p>
                            <a href="" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">

                                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                            </div>
                            <h3>CREATIVE MARKETING</h3>
                            <p>As a creative agency, we help transform corporations into icons. Brands into heroes. Companies into stories worth telling. What we do goes far beyond branding identity, and taps into the very DNA that makes your offering special.</p>
                            <a href="" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-trowel-bricks"></i>
                            </div>
                            <h3>INVENTORY MANAGEMENT</h3>
                            <p>Any company having its own products need an inventory. Any modern system or company should have its own inventory management system. Our expertise in this sector has enabled us to build easy to access and secured inventory management systems.</p>
                            <a href="" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-gears"></i>
                            </div>
                            <h3>ERP</h3>
                            <p>Enterprise Resource Planning software is one basic need for any business now-a-days. We understand the need of a simple and in-depth ERP solution system. To address the different kinds of needs of different business organizations, we provide custom ERP solutions which sooths them best.</p>
                            <a href="" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-compass-drafting"></i>

                            </div>
                            <h3>APPLICATION DEVELOPMENT</h3>
                            <p>Starting with our in house application, we have worked on a number of applications of corporate clients and several competitions. From generating idea to planning and all the way to finish implementation is done by us.</p>
                            <a href="" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Service Item -->


                </div>

            </div>
        </section>
        <!-- End Services Section -->



        <!-- ======= project Section ======= -->
        <section id="projects" class="projects">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Projects</h2>
                    <p>We have an array of in house products along with custom made products for clients — home and abroad.</p>
                </div>

                <div class="row gy-4">
                    <?php include('show_projects.php'); ?>


                </div>

            </div>
        </section>
        <!-- End project Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Testimonials</h2>
                    <p>Here are some testimonials from our satisfied clients. We take pride in delivering exceptional services and exceeding our clients' expectations. Read on to see what they have to say about their experience working with us.</p>
                </div>

                <div class="slides-2 swiper">
                    <div class="swiper-wrapper">
                        <?php include 'show_testimonials.php' ?>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!-- End Testimonials Section -->


        <!-- ======= contact form ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container">
                <div class="row justify-content-between gy-4">
                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
                        <div class="content">
                            <h3>Contact Us</h3>
                            <p>One of the first and foremost exponents of AR and VR technologies in Bangladesh. Web, app and game development as well as creative marketing is also our forte.</p>
                            <p>We make sure that our products and services enhance your identity in the professional world.</p>
                        </div>
                    </div>
                    <div class="col-lg-5" data-aos="fade">
                        <!-- Alert message -->
                        <div id="alertMessage" class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                            <strong>Success!</strong> Your message has been received successfully. Thank you!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <form id="quoteForm" action="submit_contact.php" method="post" class="php-email-form">
                            <div class="row gy-3">
                                <div class="col-md-12">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="col-md-12">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="col-md-12">
                                    <textarea class="form-control" id="message" name="message" rows="6" placeholder="Message" required></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" id="submitButton">Send A Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Quote Form -->
                </div>
            </div>
        </section>
        <!-- End contact form Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="footer-content position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3 footer-links">
                        <img src="frontend/img/logo_1.jpg" alt="" class="img-fluid">
                    </div>
                    <!-- End footer links column-->

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>Battery Low Interactive</h3>
                            <p>House - 8, Road - 2, Block - J,
                                <br> Baridhara, Dhaka 1212, Bangladesh<br><br>
                                <strong>Phone:</strong> +880 1521 112329<br>
                                <strong>Email:</strong> info@batterylowinteractive.com<br>
                            </p>
                            <div class="social-links d-flex mt-3">
                                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End footer info column-->

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Terms of service</a></li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul>
                    </div>
                    <!-- End footer links column-->

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">Game Development</a></li>
                            <li><a href="#">Inventory Management</a></li>
                            <li><a href="#">ERP</a></li>
                            <li><a href="#">Application Development</a></li>
                        </ul>
                    </div>
                    <!-- End footer links column-->

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Other Services</h4>
                        <ul>
                            <li><a href="#">Creative Marketing</a></li>
                            <li><a href="#">Service 2</a></li>
                            <li><a href="#">Service 3</a></li>
                            <li><a href="#">Service 4</a></li>
                            <li><a href="#">Service 5</a></li>
                        </ul>
                    </div>
                    <!-- End footer links column-->

                </div>
            </div>
        </div>

        <div class="footer-legal text-center position-relative">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Battery Low Interactive</span></strong>. All Rights Reserved
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->


    <a href="# " class="scroll-top d-flex align-items-center justify-content-center "><i class="bi bi-arrow-up-short "></i></a>

    <div id="preloader "></div>





    <!-- Template Main JS File -->
    <script src="frontend/main.js "></script>





    <!-- Vendor JS Files -->
    <script src="frontend/vendor/bootstrap/js/bootstrap.bundle.min.js "></script>
    <script src="frontend/vendor/aos/aos.js "></script>
    <script src="frontend/vendor/glightbox/js/glightbox.min.js "></script>
    <script src="frontend/vendor/isotope-layout/isotope.pkgd.min.js "></script>
    <script src="frontend/vendor/swiper/swiper-bundle.min.js "></script>
    <script src="frontend/vendor/purecounter/purecounter_vanilla.js "></script>
    <script src="frontend/vendor/php-email-form/validate.js "></script>



</body>

</html>