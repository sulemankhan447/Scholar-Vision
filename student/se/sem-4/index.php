<!-- SE CO Subjects-->
<?php 
	session_start();
	if($_SESSION)
	{
		?>
<!DOCTYPE html>
<html>
<head>
	<title>Sem 4</title>
	<!-- Bootstrap Core CSS-->
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
</head>
<body>
		<div class="jumbotron text-center">
		<img src="../../img/avatar.png" alt="Profile Pic" width="250" height="250" class="img-circle"></img>
		<h4>Welcome <?php echo $_SESSION['userName'];?></h4>
		<h4>Year:SE:CO</h4>
	</div>

	<div class="container">
		<div class="row">
			<!-- Analysis of Algorithm-->
			<div class="col-lg-3">			
				<div class="card" style="width: 20rem;">
 					<img class="card-img-top" src="img/aoa.png"  width="200" height="200" alt="Analysis of Algorithm">
  					<div class="card-block">
  						<h4 class="card-title">Analysis of Algorithm</h4>
  						<hr>
   						<p class="card-text">Learn Insights of Algorithm</p>
  						<a href="uploadExperiment.php?subject=aoa" class="btn btn-primary" target="_blank">Lets Upload Experiments</a>
					</div>
				</div>
			</div>
			<!-- DBMS-->
			<div class="col-lg-3">			
				<div class="card" style="width: 20rem;">
 					<img class="card-img-top" src="img/dbms.png"  width="200" height="200" alt="Database Management System">
  					<div class="card-block">
  						<h4 class="card-title">Database Management System</h4>
  						<hr>
   						<p class="card-text">Learn how Big I.T giants save their Data</p>
  						<a href="uploadExperiment.php?subject=dbms" class="btn btn-primary" target="_blank">Lets Upload Experiments</a>
					</div>
				</div>
			</div>
			<!-- COA-->
			<div class="col-lg-3">			
				<div class="card" style="width: 20rem;">
 					<img class="card-img-top" src="img/coa.png"  width="200" height="200" alt="Computer Organization & Architecture">
  					<div class="card-block">
  						<h4 class="card-title">Computer Organization & Architecture</h4>
  						<hr>
   						<p class="card-text">Explore World of Hardware and their Functionality</p>
  						<a href="uploadExperiment.php?subject=coa" class="btn btn-primary" target="_blank">Lets Upload Experiments</a>
					</div>
				</div>
			</div>
			<!-- Computer Graphics-->
			<div class="col-lg-3">			
				<div class="card" style="width: 20rem;">
 					<img class="card-img-top" src="img/cg.png"  width="200" height="200" alt="Computer Networks">
  					<div class="card-block">
  						<h4 class="card-title">Computer Graphics</h4>
  						<hr>
   						<p class="card-text">Dive into world of Graphics & Animations.</p>
  						<a href="uploadExperiment.php?subject=cg" class="btn btn-primary" target="_blank">Lets Upload Experiments</a>
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
		header("Location:../../../web/index.php");
	}
?>
