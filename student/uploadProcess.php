<?php
	define('path','../../students/experiments/te/'.$_GET['subject'].'/');
	if(isset($_POST['submit']))
	{
		$fileName = $_FILES['uploadExp']['name'];
		$target = path.$fileName;
		move_uploaded_file($_FILES['uploadExp']['tmp_name'],$target);
		echo "File Uploaded Sucessfully";
	}
?>