<?php
	if($_POST)
	{
		session_start();
		require_once("../connection.php");
		$rollno = $_POST['rollNo'];
		$name = $_POST['name'];
		$password =$_POST['password'];
		$sem = $_POST['sem'];
		$sql = "insert into student values('$rollno','$name','$sem','$password',current_timestamp());";
		if(mysqli_query($con,$sql))
		{
			$_SESSION['userName']=$name;
			$_SESSION['userRoll']=$rollno;
			$_SESSION['userYear']= $sem;
			header("Location:../dashboard.php");
		}
		else
		{
			echo "Error is ".mysqli_error($con);
		}
	}
	else
	{
		header("Location:register.php");
	}

?>