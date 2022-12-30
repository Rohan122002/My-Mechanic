
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

<body onload="getLocation()">




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
        <!-- <a href="index.html" class="nav-item nav-link">Home</a> -->

        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">services</a>
          <div class="dropdown-menu">
            <a href="twowheeler.php" class="dropdown-item">Two wheeler</a>
            <a href="service.php" class="dropdown-item">Four wheeler</a>

          </div>
        </div>
        <a href="booking.php" class="nav-item nav-link active">booking</a>
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
  <!-- <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>user location</title>
    </head>
    <body> -->
      <!-- Get user location-->



    <!-- <div style="text-align: center;">
      <p>Click the button to get your coordinates.</p>

    <button onclick="getLocation()" >Get Location</button>

    <p id="demo"></p>
  </div> -->

  <script>
  var x = document.getElementById("demo");
  var lat,lon;
  function getLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showPosition);
    } else {
      x.innerHTML = "Geolocation is not supported by this browser.";
    }
  }

  function showPosition(position) {
    document.getElementById("location_latitude").value =+position.coords.latitude;
    document.getElementById("location_longitude").value =+position.coords.longitude;
    document.getElementById("location_latitudef").value =+position.coords.latitude;
    document.getElementById("location_longitudef").value =+position.coords.longitude;
  }
  </script>
  <!--user location -->

    <!-- </body>
  </html> -->

  <!-- Booking Start -->
  <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="row g-4 wow fadeInUp col-sm-4" data-wow-delay="0.3s">
      <!-- vehicle type booking -->
      <div class="col-xs-4">
        <div class="nav w-100 nav-pills me-s4">
          <button class="nav-link w-100 d-flex justify-content-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button" name="two">
            <i class="fa fa-solid fa-motorcycle fa-2x me-3"></i>
            <h4 class="m-0">Two Wheeler</h4>
          </button>
          <button class="nav-link w-100 d-flex justify-content-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button" name="four">
            <i class="fa fa-car fa-2x me-3"></i>
            <h4 class="m-0">Four Wheeler</h4>
          </button>
        </div>
      </div>

    </div>
    <!-- vehicle type booking -->
    <div class="col-lg-10">
      <div class="tab-content w-100">
        <div class="tab-pane fade show" id="tab-pane-1">
          <div class="row g-6">
            <div class="container">
              <div class="row gx-5">
                <div class="col-lg-6 py-5">
                  <div class="py-5">
                    <h1 class="text mb-4">Certified vehicle Repair Service Provider</h1>
                    <p class="text mb-0">Your vehicle are served by Professional mechanics.</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="bg-secondary  h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                    <h1 class="text mb-4">Book For A Service</h1>
                    <form action="booking1.php" method="POST">
                      <div class="row g-3">


                        <!--user location -->

                        <div class="col-12 col-sm-6">
                          <input type=" text " class="form-control border-0" name ="name" id="name" placeholder="Your Name" style="height: 55px;" required>
                        </div>
                        <div class="col-12 col-sm-6">
                          <input type="number" class="form-control border-0" name="contact_no" placeholder="Phone Number" style="height: 55px;" required>
                        </div>
                        <div class="col-12">
                          <input type="email" class="form-control border-0" name="email" placeholder="Your Email" style="height: 55px;" required>
                        </div>
                        <div class="col-12">
                            <select class="form-select border-0" name="service" style="height: 55px;">
                              <option selected>Select A Service</option>
                              <option value="Battery Servicing">Battery Servicing</option>
                              <option value="Engine Servicing">Engine Servicing</option>
                              <option value="Tires Replacement">Tires Replacement</option>
                              <option value="Oil Changing">Oil Changing</option>
                              <option value="Wheel Alignment">Wheel Alignment</option>
                              <option value="Headlight Repearing">Headlight Repearing</option>
                              <option value="Break Fluid Exchange">Break Fluid Exchange</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-6">
                          <div >
                            <input type="date" name="service_date"class="form-control border-0 datetimepicker-input" placeholder="Service Date" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;" min="2022-12-16" min="2022-12-16" required>
                          </div>
                        </div>
                        <div class="col-12 col-sm-6">
                          <select class="form-select border-0" name="timet" style="height: 55px;">
                            <option selected>Time Slot</option>
                            <option value="09-11">09:00AM - 11:00AM</option>
                            <option value="12-02">12:00PM - 02:00PM</option>
                            <option value="03-05">03:00PM - 05:00PM</option>
                          </select>
                        </div>
                        <div class="col-12 col-sm-6">
                          <input type="hidden" class="form-control border-0" name="location_latitude" id="location_latitude" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                          <input type="hidden" class="form-control border-0" name="location_longitude" id="location_longitude" style="height: 55px;">
                        </div>

                        <div class="col-12">
                          <input class="btn btn-light w-100 py-3" type="submit" name="subm1" id="subm1" value="Book Now"/>
                        </div>

                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="tab-pane-2">
          <div class="row g-6">
            <div class="container">

              <div class="row gx-5">
                <div class="col-lg-6 py-5">
                  <div class="py-5">
                    <h1 class="text mb-4">Certified vehicle Repair Service Provider</h1>
                    <p class="text mb-0">Your vehicle are served by Professional mechanics.</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="bg-secondary  h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                    <h1 class="text mb-4">Book For A Service</h1>
                    <form action="booking2.php" method="POST">
                      <div class="row g-3">



                        <div class="col-12 col-sm-6">
                          <input type=" text " class="form-control border-0" name ="namef" id="namef" placeholder="Your Name" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                          <input type="number" class="form-control border-0" name="contactf" placeholder="Phone Number" style="height: 55px;">
                        </div>
                        <div class="col-12">
                          <input type=" email " class="form-control border-0" name="emailf" placeholder="Your Email" style="height: 55px;">
                        </div>
                        <div class="col-12">
                          <select class="form-select border-0" name="servicef" style="height: 55px;">
                            <option selected>Select A Service</option>
                            <option value="Diagnostic test">Diagnostic Test</option>
                            <option value="Engine Servicing">Engine Servicing</option>
                            <option value="Tires Replacement">Tires Replacement</option>
                            <option value="Oil Changing">Oil Changing</option>
                            <option value="Vaccum Cleaning">Vaccum Cleaning</option>
                            <option value="Headlight Repearing">Headlight Repearing</option>
                          </select>
                        </div>
                        <div class="col-12 col-sm-6">
                          <div  >
                            <input type="date" name="service_datef" class="form-control border-0 datetimepicker-input" placeholder="Service Date" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;" min="2022-12-17" required>
                          </div>
                        </div>
                        <div class="col-12 col-sm-6">
                          <select class="form-select border-0" name="timef" style="height: 55px;">
                            <option selected>Time Slot</option>
                            <option value="09-11">09:00AM - 11:00AM</option>
                            <option value="12-02">12:00PM - 02:00PM</option>
                            <option value="03-05">03:00PM - 05:00PM</option>
                          </select>
                        </div>
                        <div class="col-12 col-sm-6">
                          <input type="hidden" class="form-control border-0" name="location_latitudef" id="location_latitudef" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                          <input type="hidden" class="form-control border-0" name="location_longitudef" id="location_longitudef" style="height: 55px;">
                        </div>
                        <div class="col-12">
                          <input class="btn btn-light w-100 py-3" type="submit" name="subm" id="subm" value="Book Now"/>
                        </div>

                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>




  <!-- Call To Action Start -->
  <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-8 col-md-6">
          <h1 class="mb-4">Have Any Pre Booking Question?</h1>
          <p class="mb-0">If you have any problem about prebooking of your vehicle the free to contact with us.</p>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="bg-secondary  d-flex flex-column justify-content-center text-center h-100 p-4">
            <h3 class="text-white mb-4"><i class="fa fa-phone-alt me-3"></i>+012 345 6789</h3>
            <a href="contact.php" class="btn btn-light py-3 px-5">Contact Us<i class="fa fa-arrow-right ms-3"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Call To Action End -->


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
  <script src="js/multiselect-dropdown.js" ></script>
</body>

</html>
