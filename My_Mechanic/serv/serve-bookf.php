<html>

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


<body >
<nav class="navbar navbar-expand-lg bg-white navbar-light  p-0">


    <div class="collapse navbar-collapse p-lg-0 " id="navbarCollapse">
        <div class="col-lg-6">
          <a href="afterlogin.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
           <h2 class="m-0"><i class="fa fa-wrench me-3"></i>My Mechanic</h2>
          </a>
        </div>
   </div>
      <div class="navbar-nav  p-lg-0 home">
        <a href="afterlogin.php" class="nav-item nav-link ">Home</a>
        <!-- <a href="about.php" class="nav-item nav-link">About</a> -->
        <!-- <a href="service.html" class="nav-item nav-link">Services</a> -->



          <a class="nav-link " href="serve-bookt.php">Two wheeler Booking</a>
          <a class="nav-link active" href="serve-bookf.php">Four wheeler Booking</a>
          <a href="contact.php" class="nav-item nav-link">Contact</a>
          <a href="Logout.php" class="nav-item nav-link">Log out</a>
      </div>
    <!-- </div> -->
</nav>
    <!-- service table start -->
    <div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="w-100" src="img/bg.jpg" alt="Image">

          <div class="carousel-caption d-flex align-items-center">


<div class="table-wrapper-scroll-y my-custom-scrollbar">
<table class="table table-bordered table-striped mb-0">
  <thead>
  <tr>

      <th>User Name</th>
      <th>Service</th>
      <th>Date</th>
      <th>Time</th>
      <th>Contact No</th>
      <th>Action</th>
  </tr>
  </thead>

  <tbody>
  <?php
include("Db_connection.php");
$view_users_query="select * from four_wheeler";//select query for viewing users.
$run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
{
  $id=$row[0];
  $user_name=$row[1];
  $service=$row[4];
  $user_date=$row[5];
  $slot=$row[8];
  $phone=$row[2];
?>

<tr>
<!--here showing results in the table -->
  <td><?php echo $user_name;?></td>
  <td><?php echo $service;?></td>
  <td><?php echo $user_date;?></td>
  <td><?php echo $slot;  ?></td>
    <td><?php echo $phone;  ?></td>
  <td><a href="deletef.php?del=<?php echo $id ?>"><button class="btn btn-danger">Delete</button></a></td>
</tr>
<?php } ?>

  </tbody>
</table>

</div>


</div>
</div>
</div>
</div>
</div>
<!-- service table end -->



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
                <!-- <p><i class="fa fa-map-marker-alt text-primary mr-2"></i></p> -->
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


</body>

</html>
