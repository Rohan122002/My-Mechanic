<?php
include("Db_connection.php");
$delete_id=$_GET['del'];
$delete_query="delete  from two_wheeler WHERE id='$delete_id'";//delete query
$run=mysqli_query($dbcon,$delete_query);
if($run)
{
//javascript function to open in the same window
    echo "<script>window.open('serve-bookt.php?deleted=user has been deleted','_self')</script>";
}

?>
