<!-- TE CO Subjects-->
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
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
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
			<!-- Computer Networks-->
			<div class="col-lg-3">			
				<div class="card" style="width: 20rem;">
 					<img class="card-img-top" src="img/cn.png"  width="200" height="200" alt="Computer Networks">
  					<div class="card-block">
  						<h4 class="card-title">Computer Networks</h4>
   						<p class="card-text">Explore World of <br />Networks</p>
  						<a href="../../uploadExperiment.php?subject=cn" class="btn btn-primary" target="_blank">Lets Upload Experiments</a>
					</div>
				</div>
			</div>
			<!-- Micro Processors-->
			<div class="col-lg-3">			
				<div class="card" style="width: 20rem;">
 					<img class="card-img-top" src="img/mp.png"  width="200" height="200" alt="Computer Networks">
  					<div class="card-block">
  						<h4 class="card-title">MicroProcessors</h4>
   						<p class="card-text">Explore World of MicroProcessors</p>
  						<a href="../../uploadExperiment.php?subject=mp" class="btn btn-primary" target="_blank">Lets Upload Experiments</a>
					</div>
				</div>
			</div>
			<!-- WTL-->
			<div class="col-lg-3">			
				<div class="card" style="width: 20rem;">
 					<img class="card-img-top" src="img/wtl.png"  width="200" height="200" alt="Computer Networks">
  					<div class="card-block">
  						<h4 class="card-title">WTL</h4>
   						<p class="card-text">Explore World of Web Development</p>
  						<a href="../../uploadExperiment.php?subject=wtl" class="btn btn-primary" target="_blank">Lets Upload Experiments</a>
					</div>
				</div>
			</div>
			<!-- Opertaing System-->
			<div class="col-lg-3">			
				<div class="card" style="width: 20rem;">
 					<img class="card-img-top" src="img/os.png"  width="200" height="200" alt="Computer Networks">
  					<div class="card-block">
  						<h4 class="card-title">Operating System</h4>
   						<p class="card-text">Learn Processes,Memory Management etc.</p>
  						<a href="../../uploadExperiment.php?subject=os" class="btn btn-primary" target="_blank">Lets Upload Experiments</a>
					</div>
				</div>
			</div>
			<!-- SOAD-->
			<div class="col-lg-3">			
				<div class="card" style="width: 20rem;">
 					<img class="card-img-top" src="img/soad.png"  width="200" height="200" alt="Computer Networks">
  					<div class="card-block">
  						<h4 class="card-title">SOAD</h4>
   						<p class="card-text">World of Diagrams</p>
  						<a href="../../uploadExperiment.php?subject=soad" class="btn btn-primary" target="_blank">Lets Upload Experiments</a>
					</div>
				</div>
			</div>

			

		</div><!-- Row End-->
	</div><!-- Container End-->
<!--	<script type="text/javascript" src="../../../js/jquery.min.js"></script> -->
	<script type="text/javascript" src="../../js/jquery.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
</body>
</html>
		<?php
	}
	else
	{
		header("Location:../../../Signin/index.php");
	}
?>
