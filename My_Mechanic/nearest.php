

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
    <link href="css/nearest1.css" rel="stylesheet">


</head>
<body >
  <br>
  <div style="text-align:center">
    <h1>Select Service Center</h1>
  </div>
  <br>
<div class="table-wrapper-scroll-y my-custom-scrollbar">


  <table class="table table-bordered table-striped mb-0">
  <thead>

  <tr class="th0">
  <th>Select</th>
    <!-- <th>id</th> -->
    <th>Name</th>
    <th>Phone</th>
    <th>City</th>
    <!-- <th>Distance</th> -->
  </tr>
  </thead>

  <?php
  include('Db_conection.php');
  // $v1=doubleval($_GET['lat']);
  // $v2=doubleval($_GET['long']);
  $v1 =16.861380;
  $v2 =74.554630;
  $v3=$_GET['ntd'];
  $view_users_query="SELECT * , (3959 *2* ASIN(SQRT( POWER(SIN(( $v1 - latitude) *  pi()/180 / 2), 2) +COS( $v1 * pi()/180) * COS(latitude * pi()/180) * POWER(SIN(( $v2 - longitude) * pi()/180 / 2), 2) ))) as distance  from service order by distance";//select query for viewing users.
  $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

  while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
  {
    $name =$row[1];
    $phone=$row[7];
    $city=$row[6];
    $id=$row[0];
//  $distance = $row[8];
  ?>
  <tr>
  <!--here showing results in the table -->
    <td><input type="radio" name="radQ3" value="7" id="q7" title="strongly agree"/></td>

      <td><?php echo $name;?></td>
      <td><?php echo $phone;?></td>
      <td><?php echo $city;?></td>
    </tr>
    <?php } ?>
    </table>
    </table>
<br>
<a  href="delete.php?del=<?php echo  $v3 ?>"> <button class="btn1">Cancel Booking</button>  </a>

<a href="booking.php" onclick="alert('Booking Succesful')"> <button class="btn2">Select</button>  </a>

</div>



<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Address</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>ADCET,Ashta</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
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
</body>
</html>
