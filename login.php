<?php
include_once "phpconfig/config.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>De Dios</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/icon.png" rel="icon" />
    <link href="assets/img/icon.png " />

    <div html-include="./links.html"></div>

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <script src="./include.js"></script>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" /></a>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="./index.html">Home</a></li>
                    <li>
                        <a class="nav-link scrollto" href="#services">Our Services</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="./aboutus.html">About Us</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="#Patient">New Patient</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="#appointment">Contact Us</a>
                    </li>
                    <li>
                        <a class="getstarted Loginbtn scrollto" href="#about">Login</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <main id="main">
        <!-- ======= Appointment Section ======= -->
        <section id="appointment" class="appointment section-bg" style="padding-top: 10%">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Make an Appointment</h2>
                    <p>
                        "Contact us today to experience top-notch dental care and
                        personalized service that puts your oral health first."
                    </p>
                </div>

                <div class="container appointmentform">
                    <form action="forms/appointment.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required />
                            </div>
                            <div class="col-md-4 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required />
                            </div>
                            <div class="col-md-4 form-group mt-3 mt-md-0">
                                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group mt-3">
                                <input type="datetime-local" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required />
                            </div>
                            <div class="col-md-4 form-group mt-3">
                                <select name="department" id="department" class="form-select">
                                    <option value="">Select Department</option>
                                    <option value="Department 1">Department 1</option>
                                    <option value="Department 2">Department 2</option>
                                    <option value="Department 3">Department 3</option>
                                </select>
                            </div>
                            <div class="col-md-4 form-group mt-3">
                                <select name="Services" id="Services" class="form-select">
                                    <option value="">Services</option>
                                    <option value="Teeth Whitening">Teeth Whitening</option>
                                    <option value="Service 2">Service 2</option>
                                    <option value="Service 3">Service 3</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">
                                Your appointment request has been sent successfully. Thank
                                you!
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Make an Appointment</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- End Appointment Section -->

        <!-- ======= ourclinic ======= -->
        <div html-include="./pages/ourclinic.html"></div>

        <!-- End ourclinic -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <div html-include="./pages/footer.html"></div>

    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script>
        // Initialize Bootstrap Datepicker
        $(".datepicker").datepicker({
            format: "yyyy-mm-dd",
            autoclose: true,
        });
    </script>

    <script>
        includeHTML();
    </script>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>