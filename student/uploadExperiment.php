<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_GET['subject'];?></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div>
		<h1 class="text-primary">
			<center>
				<?php echo $_GET['subject'];?>
			</center>
		</h1>

<!-- 		<form name="uploadform" id="uploadform" method="post" enctype="multipart/form-data" action="uploadProcess.php?subject=<?php echo $_GET['subject'];?>">
		<input type="file" name="uploadExp" id="uploadExp">
		<input type="hidden" name="MAX_FILE_SIZE" value="32768">
		<br>
		<input type="submit" name="submit" value="submit">
	</form>
	</div> -->
	<form>
		<table class="table table-striped table-bordered table-hover">
			<tr>
				<td>
					<h4>Sr.No</h4>
				</td>
				<td>
					<h4>Aim</h4>
				</td>
				<td>
						<a href="http://192.168.98.101:8005">
							<h4>Execute Code</h4>
						</a>
					</a>
				</td>
				<td>
					<h4>Submitted</h4>
				</td>
			</tr>
		</table>
	</form>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>