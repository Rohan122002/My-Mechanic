
<?php

    session_start();
          $conn = mysqli_connect("localhost", "root", "","user1") or die(mysqli_connect_error());

            if($_SESSION['email']){
              if($_SERVER['REQUEST_METHOD']=="POST")
              {


                  $namef=mysqli_real_escape_string($conn,$_POST['namef']);
                  $contactf=mysqli_real_escape_string($conn,$_POST['contactf']);
                  $emailf=mysqli_real_escape_string($conn,$_POST['emailf']);
                  $servicef=mysqli_real_escape_string($conn,$_POST['servicef']);
                  $service_datef=mysqli_real_escape_string($conn,$_POST['service_datef']);
                  // $la=mysqli_real_escape_string($conn,$_POST['latitude']);
                  // $lg=mysqli_real_escape_string($conn,$_POST['longitude']);
                  $timef=mysqli_real_escape_string($conn,$_POST['timef']);
                  $location_latitudef=mysqli_real_escape_string($conn,$_POST['location_latitudef']);
                  $location_longitudef=mysqli_real_escape_string($conn,$_POST['location_longitudef']);
                  $vl =  doubleval($_POST['location_latitudef']);
                  $vlo =  doubleval($_POST['location_longitudef']);
                  mysqli_query($conn,"INSERT INTO four_wheeler(namef,contactf, emailf,servicef,service_datef,location_latitudef,location_longitudef,timef)  VALUES ('$namef','$contactf','$emailf','$servicef','$service_datef',' $vl','$vlo','$timef')");

                  // mysqli_query($conn,"UPDATE four_wheeler SET namef='$namef' ,contactf='$contact_nof',emailf='$emailf',servicef='$servicef',service_datef='$service_datef', timef ='$timef' WHERE namef=0");
                  //
                  // mysqli_query($conn,"DELETE FROM four_wheeler WHERE location_latitudef=0");
                  // Print '<script>alert("Succesfully Added New");window.location.assign("alogin.php");</script>';

              }

              if(isset($_POST['subm'])){
                $lf1 =$_POST['location_latitudef'];
                $lf2 =$_POST['location_longitudef'];
                $lf3 =$_POST['namef'];
                header("Location: nearest1.php?/&ntd=$lf3&latf=$lf1&longf=$lf2");
              }
            }
            else{
                  Print '<script>alert("Login to continue...");window.location.assign("index.php");</script>';
                // header("location:index.php");
            }

?>
