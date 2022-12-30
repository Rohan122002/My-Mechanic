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

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
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
                <a href="contact.php" class="nav-item nav-link">Contact</a>
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
                <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>

            </div>
        </div>
    </div>
    <!-- Page Header End -->

<!-- Service Start -->
<div class="container-xxl service py-5">
      <div class="container">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">

              <h1 class="mb-5">Explore Our Services</h1>
          </div>
          <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
              <div class="col-lg-4">
                  <div class="nav w-100 nav-pills me-4">
                      <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                          <i class="fa fa-sharp fa-solid fa-car-battery fa-2x me-3"></i>
                          <h4 class="m-0">Battery Servicing</h4>
                      </button>
                      <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                          <i class="fa fa-solid fa-motorcycle fa-2x me-3"></i>
                          <h4 class="m-0">Engine Servicing</h4>
                      </button>
                      <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                        <i class="fa fa-sharp fa-solid fa-tire fa-2x me-3"></i>
                         <h4 class="m-0">Tires Replacement</h4>
                      </button>
                      <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                          <i class="fa fa-oil-can fa-2x me-3"></i>
                          <h4 class="m-0">Oil Changing</h4>
                      </button>
                      <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-5" type="button">
                        <i class="fa fa-sharp fa-solid fa-fan fa-2x me-3"></i>
                          <h4 class="m-0">Wheel Alignment</h4>
                      </button>
                      <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-6" type="button">
                          <i class="fa fa-cog fa-2x me-3"></i>
                          <h4 class="m-0">Spare Parts</h4>
                      </button>
                  </div>
              </div>
              <div class="col-lg-8">
                  <div class="tab-content w-100">
                      <div class="tab-pane fade show active" id="tab-pane-1">
                          <div class="row g-4">
                              <div class="col-md-6" style="min-height: 350px;">
                                  <div class="position-relative h-100">
                                      <img class="position-absolute img-fluid w-100 h-100" src="img/tservice-1.jpg"
                                          style="object-fit: cover;" alt="">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                    <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                  <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                  <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                  <p><i class="fa fa-check text-success me-3"></i>Price : 500$</p>

                                  <!-- <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a> -->
                              </div>
                          </div>
                      </div>
                      <div class="tab-pane fade" id="tab-pane-2">
                          <div class="row g-4">
                              <div class="col-md-6" style="min-height: 350px;">
                                  <div class="position-relative h-100">
                                      <img class="position-absolute img-fluid w-100 h-100" src="img/tservice-2.webp"
                                          style="object-fit: cover;" alt="">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                  <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                  <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                  <p><i class="fa fa-check text-success me-3"></i>Price : 500$</p>

                                  <!-- <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a> -->
                              </div>
                          </div>
                      </div>
                      <div class="tab-pane fade" id="tab-pane-3">
                          <div class="row g-4">
                              <div class="col-md-6" style="min-height: 350px;">
                                  <div class="position-relative h-100">
                                      <img class="position-absolute img-fluid w-100 h-100" src="img/tservice-3.webp"
                                          style="object-fit: cover;" alt="">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                  <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                  <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                  <p><i class="fa fa-check text-success me-3"></i>Price : 500$</p>

                                  <!-- <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a> -->
                              </div>
                          </div>
                      </div>
                      <div class="tab-pane fade" id="tab-pane-4">
                          <div class="row g-4">
                              <div class="col-md-6" style="min-height: 350px;">
                                  <div class="position-relative h-100">
                                      <img class="position-absolute img-fluid w-100 h-100" src="img/tservice-4.avif"
                                          style="object-fit: cover;" alt="">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                  <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                  <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                  <p><i class="fa fa-check text-success me-3"></i>Price : 500$</p>

                                  <!-- <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a> -->
                              </div>
                          </div>
                      </div>
                      <div class="tab-pane fade" id="tab-pane-5">
                          <div class="row g-4">
                              <div class="col-md-6" style="min-height: 350px;">
                                  <div class="position-relative h-100">
                                      <img class="position-absolute img-fluid w-100 h-100" src="img/tservice-5.jpg"
                                          style="object-fit: cover;" alt="">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                  <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                  <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                  <p><i class="fa fa-check text-success me-3"></i>Price : 500$</p>

                                  <!-- <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a> -->
                              </div>
                          </div>
                      </div>
                      <div class="tab-pane fade" id="tab-pane-6">
                          <div class="row g-4">
                              <div class="col-md-6" style="min-height: 350px;">
                                  <div class="position-relative h-100">
                                      <img class="position-absolute img-fluid w-100 h-100" src="img/service-6.jpg"
                                          style="object-fit: cover;" alt="">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                  <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                  <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                  <p><i class="fa fa-check text-success me-3"></i>Price : 500$</p>

                                  <!-- <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a> -->
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
    <!-- Service End -->

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
