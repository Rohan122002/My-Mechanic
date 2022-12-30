<?php
include("Db_conection.php");
$delete_id=$_GET['del'];
$delete_query="delete from two_wheeler WHERE name='$delete_id'";//delete query
$run=mysqli_query($dbcon,$delete_query);
if($run)
{
//javascript function to open in the same window
    echo "<script>window.open('booking.php?booking canceled','_self')</script>";
}

?>
