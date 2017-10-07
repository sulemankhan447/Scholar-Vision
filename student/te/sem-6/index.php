<!-- TE CO Sem 6 Subjects-->
<?php 
	session_start();
	if($_SESSION)
	{
		?>

		<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Bootstrap Core CSS-->
	<link rel="stylesheet" type="text/css" href="../../../css/bootstrap.min.css">
</head>
<body>
		<!--<a href="http://localhost/ExpPor/index.html" id=log class="btn btn-primary btn-xl page-scroll" style="margin-left: 1150px">Logout</a> -->
		<div class="jumbotron text-center">
		<img src="../../img/avatar.png" alt="Profile Pic" width="250" height="250" class="img-circle"></img>
		<h4>Welcome <?php echo $_SESSION['userName'];?></h4>
		<h4>Year:TE:CO</h4>
	</div>

	<div class="container">
		<div class="row">
			<!-- System Programming-->
			<div class="col-lg-3">			
				<div class="card" style="width: 20rem;">
 					<img class="card-img-top" src="img/sp.png"  width="200" height="200" alt="Computer Networks">
  					<div class="card-block">
  						<h4 class="card-title">System Programming</h4>
   						<p class="card-text">Dive into Depth of Programming</p>
  						<a href="uploadExperiment.php?subject=cn" class="btn btn-primary" target="_blank">Lets Upload Experiments</a>
					</div>
				</div>
			</div>
			<!-- Software Engineering-->
			<div class="col-lg-3">			
				<div class="card" style="width: 20rem;">
 					<img class="card-img-top" src="img/se.png"  width="200" height="200" alt="Computer Networks">
  					<div class="card-block">
  						<h4 class="card-title">Software Engineering</h4>
   						<p class="card-text">Learn Software Engineering</p>
  						<a href="uploadExperiment.php?subject=mp" class="btn btn-primary" target="_blank">Lets Upload Experiments</a>
					</div>
				</div>
			</div>
			<!-- Distributed Databases-->
			<div class="col-lg-3">			
				<div class="card" style="width: 20rem;">
 					<img class="card-img-top" src="img/dd.png"  width="200" height="200" alt="Computer Networks">
  					<div class="card-block">
  						<h4 class="card-title">Distributed Databases</h4>
   						<p class="card-text">Replication,Fragmentation</p>
  						<a href="uploadExperiment.php?subject=wtl" class="btn btn-primary" target="_blank">Lets Upload Experiments</a>
					</div>
				</div>
			</div>
			<!-- Mobile Communication-->
			<div class="col-lg-3">			
				<div class="card" style="width: 20rem;">
 					<img class="card-img-top" src="img/mc.png"  width="200" height="200" alt="Computer Networks">
  					<div class="card-block">
  						<h4 class="card-title">Mobile Communication</h4>
   						<p class="card-text">3G,4G and Signals</p>
  						<a href="uploadExperiment.php?subject=os" class="btn btn-primary" target="_blank">Lets Upload Experiments</a>
					</div>
				</div>
			</div>
			<!-- Operations Research-->
			<div class="col-lg-3">			
				<div class="card" style="width: 20rem;">
 					<img class="card-img-top" src="img/or.png"  width="200" height="200" alt="Computer Networks">
  					<div class="card-block">
  						<h4 class="card-title">Operations Research</h4>
   						<p class="card-text">Lorem Ipsum Lorem Ipsum</p>
  						<a href="uploadExperiment.php?subject=soad" class="btn btn-primary" target="_blank">Lets Upload Experiments</a>
					</div>
				</div>
			</div>

			

		</div><!-- Row End-->
	</div><!-- Container End-->
<!--	<script type="text/javascript" src="../../../js/jquery.min.js"></script> -->
	<script type="text/javascript" src="../../../js/jquery.js"></script>
	<script type="text/javascript" src="../../../js/bootstrap.min.js"></script>
</body>
</html>
		<?php
	}
	else
	{
		header("Location:../../../Signin/index.php");
	}
?>
