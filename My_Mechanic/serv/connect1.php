<?php

include("Db_connection.php");//make connection here
if(isset($_POST['register']))
{
    $name=$_POST['name'];//here getting result from the post array after submitting the form.
    $email=$_POST['email'];//same
    $pass=$_POST['pass'];//same
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];
$city=$_POST['city'];
$phone=$_POST['phone'];

    $check_email_query="select * from service WHERE email='$email'";
    $run_query=mysqli_query($dbcon,$check_email_query);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Email $email is already exist in our database, Please try another one!')</script>";
echo "<script>window.open('beforelogin.php','_self')</script>";
exit();
    }
//insert the user into the database.
    $insert_user="insert into service (name,email,pass,latitude,longitude,city,phone) VALUE ('$name','$email','$pass','$latitude','$longitude','$city','$phone')";
    if(mysqli_query($dbcon,$insert_user))
    {
      echo "<script>window.open('beforelogin.php','_self')</script>";
     }
}
?>
