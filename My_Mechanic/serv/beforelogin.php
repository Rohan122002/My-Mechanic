<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>service side</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->

    <link href="css/style.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
</head>

<body onload="getLocation()">

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
    document.getElementById("latitude").value =+position.coords.latitude;
    document.getElementById("longitude").value =+position.coords.longitude;
  }
  </script>
    <!-- Header Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 bg-secondary d-none d-lg-block">

            </div>
            <div class="col-lg-9">

                <!-- <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                    <a href="" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary">Klean</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Home</a>

                            <a href="service.php" class="nav-item nav-link">Service</a>


                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                        </div>

                    </div>
                </nav> -->
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <!-- <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
            </ol> -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src="img/carousel-bg-1.jpg" alt="Image" style="width:100%">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <!-- <div class="row"> -->
                            <div class="p-5 col-lg-6" style="width: 50%; "><!-- max-width: 900px; -->
                                <h5 class="text-primary text-uppercase mb-md-3">Vehicle Services</h5>
                                <h1 class="display-3 text-white mb-md-4">Best Quality Service Center</h1>
                            <!-- </div> -->
</div>
 <!-- login -->
 <div class="text-center p-5 wow zoomIn login" data-wow-delay="0.6s">
    <div class="body">
      <div class="layer">
        <div class="form">

          <div class="login-form">
            <div class="heading">Login to your <b>Account</b></div>
            <div class="input-box">
              <form role="form" action="connect.php" method="POST">
                <input type="email" class="input" placeholder="Email" name="email" required>
                <input type="password" class="input" placeholder="password" name="pass" required>
                <input type="submit" class="submit" value="login">
              </form>
            </div>
            <br>
            <h6>Don't have account? <button type="button" id="showCreateBtn" class="togglebtn" onclick="show_create()">Create Account</button> Now.</h6>
          </div>
        <div class="row g-3">
            <div class="signup-form">
              <div class="heading">Create your <b>Account</b></div>
              <div class="input-box">
                <form role="form" action="connect1.php" method="POST">
                  <!-- <input type="text" class="input" placeholder="User Name" name="name">
                  <input type="email" class="input" placeholder="Email " name="email">
                  <input type="password" class="input" placeholder="password " name="pass">
                  <input type="text" class="input" placeholder="City " name="city">
                  <input type="number" class="input" placeholder="Phone No " name="phone">
                  <button  type="submit "class="submit" value="register" name="register">Create account</button> -->

                  <div class="row g-3">

                                        <div class="col-12 ">
                                          <input type="text" class="input" placeholder="User Name" name="name" required>
                                        </div>
                                        <div class="col-12 ">
                                          <input type="email" class="input" placeholder="Email " name="email" required>
                                        </div>
                                          <div class="col-12 col-sm-6">
                                          <input type="password" class="input" placeholder="password " name="pass">
                                        </div>
                                        <div class="col-12 col-sm-6">
                                          <input type="tel" class="input" placeholder="Phone No " name="phone" required>
                                        </div>
                                        <div class="col-12">
                                          <input type="text" class="input" placeholder="City " name="city" required>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                         <input type="hidden" class="form-control border-0" name="latitude" id="latitude" style="height: 55px;">
                                       </div>
                                       <div class="col-12 col-sm-6">
                                         <input type="hidden" class="form-control border-0" name="longitude" id="longitude" style="height: 55px;">
                                       </div>
                                        <div class="col-12">
                                          <button  type="submit "class="submit" value="register" name="register">Create account</button> -->
                                        </div>

                                      </div>

                </form>
              </div>
              <br>
              <h6>Already an member ? <button type="button" id="showCreateBtn" class="togglebtn" onclick="show_login()">Login</button> Now.</h6>
          </div>
        </div>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  </div>
  <!--login-form-wrap-->
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Carousel End -->





    <!-- Services Start -->

    <!-- Services End -->







    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">

                <h5 class="font-weight-semi-bold text-white mb-2">Opening Hours:</h5>
                <p class="mb-1">Mon – Sat, 8AM – 5PM</p>
                <p class="mb-0">Sunday: Closed</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Get In Touch</h4>
              
                <p><i class="fa fa-phone-alt text-primary mr-2"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope text-primary mr-2"></i>info@example.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>


        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3E3E4E !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#">My mechanic</a>. All Rights Reserved.
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
