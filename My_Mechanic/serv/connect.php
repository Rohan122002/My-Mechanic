<?php
	session_start();
	$conn = mysqli_connect("localhost", "root", "","user") or die(mysqli_connect_error());
	$email= mysqli_real_escape_string ($conn,$_POST["email"]);
	$pass= mysqli_real_escape_string ($conn,$_POST["pass"]);



	$query= ("SELECT * FROM service WHERE email = '$email';");
	$result=mysqli_query($conn,$query);
	$exists =mysqli_num_rows($result);
	$table_user="";
	$table_password="";
	if($exists>0)
	{
		while($row = mysqli_fetch_array($result))
		{
			$table_user=$row['email'];
			$table_password=$row['pass'];
		}
		if($email== $table_user)
		{
			if($pass==$table_password)
			{
				$_SESSION['user']= $email;
				header("location:afterlogin.php");
			}
			else
			{
				Print '<script>alert("Incorrect Password!");</script>';
				Print '<script>window.location.assign("beforelogin.php");</script>';
			}
		}
	}
	else
	{
		Print '<script>alert("Incorrect Username!");</script>';
		Print '<script>window.location.assign("beforelogin.php");</script>';
	}

 ?>
