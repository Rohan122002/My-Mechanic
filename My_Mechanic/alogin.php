<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>My Mechanic </title>
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
  <!--Get user location-->
  <!-- <p>Click the button to get your coordinates.</p>

<button onclick="getLocation()">Try It</button>

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude +
  "<br>Longitude: " + position.coords.longitude;
}
</script> -->
<!--user location-->
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
        <!-- <a href="index.html" class="nav-item nav-link active">Home</a> -->
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

        <!-- <a href="service.html" class="nav-item nav-link">Services</a> -->
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
      </div>

    </div>
  </nav>
  <!-- Navbar End -->


  <!-- Carousel Start -->

  <div class="container-fluid p-0 mb-5">

    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="w-100" src="img/carousel-bg-1.jpg" alt="Image">

          <div class="carousel-caption d-flex align-items-center">
            <div class="container">
              <div class="row align-items-center justify-content-center justify-content-lg-start">
                <div class="col-10 col-lg-6 text-center text-lg-start">
                  <h6 class="text-white text-uppercase mb-3 animated slideInDown"> vehicle Servicing </h6>
                 <h1 class="display-3 text-white mb-md-4">Best Quality Vehicle Service Center Finder</h1>
                </div>
            <div class="col-10 col-lg-6 text-center text-lg-start serve">
                  <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                  <div class="d-flex bg-light py-5 px-4">
                       <img class="w-100" src="img/wal.jpg" alt="Image">
                  </div>

                  </div>
                </div>

              </div>
            </div>
            <!-- login -->
            <!-- <div class="col-lg-6 text-center p-5 wow zoomIn" data-wow-delay="0.6s">
              <div class="body">
                <div class="layer">
                  <div class="form">
                    <div class="login-form">
                      <div class="heading">Login to your <b>Account</b></div>
                      <div class="input-box">
                        <form action="Login.php" method="post">
                          <input type="text" class="input" placeholder="Your Email address..." required>
                          <input type="password" class="input" placeholder="Your password..." required>
                          <input type="submit" class="submit" value="login" name="Login">
                        </form>
                      </div>
                      <br>
                      <h6>Don't have account? <button type="button" id="showCreateBtn" class="togglebtn" onclick="show_create()">Create Account</button> Now.</h6>
                    </div>
                    <div class="signup-form">
                      <div class="heading">Create your <b>Account</b></div>
                      <div class="input-box">
                        <form action="Registration.php" method="post">
                          <input class="input" placeholder="Username" name="name" type="text" autofocus>
                          <input type="text" class="input" placeholder="Email address..." required>
                          <input type="password" class="input" placeholder="Password..." required>
                          <input type="submit" class="submit" value="register" name="Register">
                        </form>
                      </div>
                      <br>
                      <h6>Already an member ? <button type="button" id="showCreateBtn" class="togglebtn" onclick="show_login()">Login</button> Now.</h6>
                    </div>
                  </div>
                </div>
              </div>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

            </div> -->
            <!--login-form-wrap-->
          </div>

        </div>

      </div>

    </div>
  </div>
  <!-- Carousel End -->

  <!-- Fact Start -->
  <div class="container-fluid fact bg-dark my-5 py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
          <i class="fa fa-check fa-2x text-white mb-3"></i>
          <h2 class="text-white mb-2" data-toggle="counter-up">12</h2>
          <p class="text-white mb-0">Years Experience</p>
        </div>
        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
          <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
          <h2 class="text-white mb-2" data-toggle="counter-up">15</h2>
          <p class="text-white mb-0">Expert Technicians</p>
        </div>
        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
          <i class="fa fa-users fa-2x text-white mb-3"></i>
          <h2 class="text-white mb-2" data-toggle="counter-up">56</h2>
          <p class="text-white mb-0">Satisfied Clients</p>
        </div>
        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
          <i class="fa fa-car fa-2x text-white mb-3"></i>
          <h2 class="text-white mb-2" data-toggle="counter-up">56</h2>
          <p class="text-white mb-0">Complete Projects</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Fact End -->




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
                        <button type="button" class="btn btn-secondary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
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
