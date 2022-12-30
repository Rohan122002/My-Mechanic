<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>My Mechanic</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->

    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-secondary "><i class="fa fa-wrench me-3"></i>My Mechanic</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <!-- <a href="index.html" class="nav-item nav-link">Home</a> -->
                <?php
        // This script will handle login
        session_start();

        // check if the user is already logged in
        if(isset($_SESSION['email']))
        {
            echo '<a href="alogin.php" class="nav-item nav-link">Home</a>';   // exit;
        }
        else
        {
          echo '<a href="index.php" class="nav-item nav-link">Home</a>';
        }
        ?>

                <div class="nav-item dropdown">
                              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">services</a>
                                <div class="dropdown-menu">
                                    <a href="twowheeler.php" class="dropdown-item">Two wheeler</a>
                                    <a href="service.php" class="dropdown-item">Four wheeler</a>

                                </div>
                            </div>
                <a href="booking.php" class="nav-item nav-link">booking</a>
                <a href="contact.php" class="nav-item nav-link active">Contact</a>
                  <a href="about.php" class="nav-item nav-link">About</a>
                  <?php
          // This script will handle login
          // session_start();

          // check if the user is already logged in
          if(isset($_SESSION['email']))
          {
              echo '<a href="Logout.php" class="nav-item nav-link">Log Out</a>';   // exit;
          }
          ?>
                  <!-- <a href="login.html" class="nav-item nav-link">Login</a> -->
            </div>

        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>

            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">

                <h1 class="mb-5">Contact For Any Query</h1>
            </div>
            <div class="row g-4 contact">
                <div class="col-12">
                    <div class="row gy-4">
                        <div class="col-md-4">
                          <div class="bg-light d-flex flex-column justify-content-center p-4">
                              <h5 class="text-uppercase"> General </h5>
                              <p class="m-0"><i class="fa fa-envelope-open text-secondary me-2"></i>mymechanic87@gmail.com</p>
                          </div>
                        </div>
                        <!-- <div class="col-md-4">

                        </div> -->

                    </div>
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3816.6910816115223!2d74.41502321487012!3d16.9405237883479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc111c2d044fb39%3A0x88bc2b178525ba1e!2sAnnasaheb%20Dange%20College%20of%20Engineering%20and%20Technology%2C%20Ashta!5e0!3m2!1sen!2sin!4v1668703717007!5m2!1sen!2sin"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>
                </div>
                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">

                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject of contact" required>
                                        <label for="subject">Subject of contact</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px" ></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                  <button type="button" name="button"><a class="btn" href="mailto:shinderajvardhan17@outlook.com">Send Message</a></button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->



    <!-- Footer Start -->
  <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="container py-5">
          <div class="row g-5">
              <div class="col-lg-3 col-md-6">
                  <h4 class="text-light mb-4">Address</h4>
                  <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>ADCET,Ashta</p>
                  <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                  <p class="mb-2"><i class="fa fa-envelope me-3"></i>mymechanic87@gmail.com</p>
                  <div class="d-flex pt-2">
                      <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                      <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                      <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                      <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6">
                  <h4 class="text-light mb-4">Opening Hours</h4>
                  <h6 class="text-light">Monday - Friday:</h6>
                  <p class="mb-4">09.00 AM - 09.00 PM</p>
                  <h6 class="text-light">Saturday - Sunday:</h6>
                  <p class="mb-0">09.00 AM - 12.00 PM</p>
              </div>
              <div class="col-lg-3 col-md-6">
                  <h4 class="text-light mb-4">Services</h4>
                  <a class="btn btn-link" href="">Diagnostic Test</a>
                  <a class="btn btn-link" href="">Engine Servicing</a>
                  <a class="btn btn-link" href="">Tires Replacement</a>
                  <a class="btn btn-link" href="">Oil Changing</a>
                  <a class="btn btn-link" href="">Vaccum Cleaning</a>
              </div>
              <div class="col-lg-3 col-md-6">

                  <!-- <div class="position-relative mx-auto" style="max-width: 400px;">
                      <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                      <button type="button" class="btn btn-secondary  py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                  </div> -->
              </div>
          </div>
      </div>
      <div class="container">
          <div class="copyright">
              <div class="row">
                  <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                      &copy; <a class="border-bottom" href="#">My Mechanic</a>, All Right Reserved.


                  </div>
                  <div class="col-md-6 text-center text-md-end">
                      <div class="footer-menu">
                          <a href="">Home</a>
                          <a href="">Cookies</a>
                          <a href="">Help</a>
                          <a href="">FQAs</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
