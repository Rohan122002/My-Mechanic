
<?php
//
// $la=$_POST['latitude'];
// $lg=$_POST['longitude'];

// echo "latitude: ".$la;
    session_start();
          $conn = mysqli_connect("localhost", "root", "","user1") or die(mysqli_connect_error());
          // include("Db_conection.php");
            if($_SESSION['email'] ){

              if($_SERVER['REQUEST_METHOD']=="POST")
              {
                  $name=mysqli_real_escape_string($conn,$_POST['name']);
                  $contact_no=mysqli_real_escape_string($conn,$_POST['contact_no']);
                  $email=mysqli_real_escape_string($conn,$_POST['email']);
                  $service=mysqli_real_escape_string($conn,$_POST['service']);
                  $service_date=mysqli_real_escape_string($conn,$_POST['service_date']);
                $location_latitude=mysqli_real_escape_string($conn,$_POST['location_latitude']);
                $location_longitude=mysqli_real_escape_string($conn,$_POST['location_longitude']);
                $timet=mysqli_real_escape_string($conn,$_POST['timet']);
                $vt1 = doubleval($_POST['location_latitude']);
                 $vt2 = doubleval($_POST['location_longitude']);
                  mysqli_query($conn,"INSERT INTO two_wheeler(name, contact_no, email,service,service_date,location_latitude,location_longitude,timet)  VALUES ('$name','$contact_no','$email','$service','$service_date','$location_latitude','$location_longitude','$timet')");
                  // Print '<script>alert("Succesfully Added New");window.location.assign("alogin.php");</script>';

                     // Print '<script>alert("Succesfully Added");window.location.assign("booking.php");</script>';
                  }
                  if(isset($_POST['subm1'])){
                    $l1 =$_POST['location_latitude'];
                    $l2 =$_POST['location_longitude'];
                    $l3 =$_POST['name'];
                    header("Location: nearest.php?/&ntd=$l3&lat=$l1&long=$l2");
                  }
              }
            else{
            Print '<script>alert("Login to continue...");window.location.assign("index.php");</script>';
            }


?>
