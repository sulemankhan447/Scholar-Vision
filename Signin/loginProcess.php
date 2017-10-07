<?php
	if($_POST)
	{
		require_once("../connection.php");
		$roll_no = $_POST['roll_no'];
		$password = $_POST['password'];
		$sql = "select * from student where rollno='$roll_no' and password='$password'";
		$results = mysqli_query($con,$sql);
		if(mysqli_num_rows($results)>0)
		{
			session_start();
			$row = mysqli_fetch_array($results);
			$_SESSION['userName']=$row['name'];
			$_SESSION['userRoll']=$row['rollno'];
			$_SESSION['userYear']=$row['sem'];
			header("Location:../dashboard.php");
		}
		else
		{
			echo "<script>alert('Invalid Username or Password');</script>";
		}
	}
	else
	{
		header("Location:login.php");
	}
?>