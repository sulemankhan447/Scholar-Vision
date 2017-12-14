<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Faculty Admin Panel</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

			<link rel="stylesheet" href="assets/js/jquery.datetimepicker.min.css">
			<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css" />
			<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/js/bootstrap-select.min.js"></script>
			<!-- Latest compiled and minified CSS -->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Bootstrap core CSS     -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="dashboard.html" class="simple-text">
                    Faculty Name
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="user.html">
                        <i class="pe-7s-graph"></i>
                        <p>Profile</p>
                    </a>
                </li>
                <li>
                    <a href="writeups.php">
                        <i class="pe-7s-user"></i>
                        <p>Write-Ups</p>
                    </a>
                </li>
                <li class="active">
                    <a href="experiments.php">
                        <i class="pe-7s-note2"></i>
                        <p>Experiments</p>
                    </a>
                </li>


            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#" style="margin-right: 600px">Admin Dashboard</a>
                </div>

                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                    <ul class="nav navbar-nav navbar-right" >
                        <li>
                           <a href="">
                               Account
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Enter Following Details</h4>

                                <br>
																<label class="col-xs-3 control-label">Subjects:</label>
        <div class="col-xs-5 selectContainer">
            <select name="language" class="form-control">
                <option value="">Select Subjects</option>
                <option value="arabic">Arabic</option>
                <option value="english">English</option>
                <option value="french">French</option>
                <option value="german">German</option>
                <option value="other">Other</option>
            </select>
        </div>

                            </div>
<br>
    <br>                        <div class="content table-responsive table-full-width">
                                    <table class = "table table-bordered" id = "dynamic_field">
                                      <thead>
                                          <th>EXPERIMENT NO</th>
                                        <th>EXPERIMENT AIM</th>
                                        <th>DATE OF SUBMISSION</th>
                                      </thead>
                                      <tr>
                                        <td><input type="text" name = "id[]" id = "e_id" class = "form-control name_list" value="1"></td>
                                        <td><input type="text" name = "aim[]" id = "e_aim" class = "form-control name_list"></td>
                                        <td><input type="text" name = "dos[]" id ="e_dos" class = "form-control name_list"></td>
                                        <td><input type="button" name = "add" id="add" class="btn btn-primary" value = "ADD MORE"></td>
                                      </tr>

                                    </table>

																		<div align = "center">

																			<input type="Submit" class="btn btn-primary">
																		</div>
                            </div>
</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
 <script src="assets/js/jquery.datetimepicker.full.js" type="text/javascript"></script>
<script src="assets/js/jquery.datetimepicker.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>



    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
<script>
    $(document).ready(function(){
      var i = 1;
			var j = 1;
      $('#add').click(function(){
          i++;
					j++;
          $('#dynamic_field').append('<tr id = "row'+i+'"> <td><input type="text" name = "id[]" id = "e_id" class = "form-control name_list" value="'+j+'"></td> <td><input type="text" name = "aim[]" id = "e_aim" class = "form-control name_list"></td> <td><input type="text" name = "dos[]" id = "e_dos" class = "form-control name_list"></td> <td><button name = "remove" id="'+i+'" class = "btn btn-danger btn_remove">X</button></td> <td> </tr>');
      });

      $(document).on('click','.btn_remove',function(){
					j--;
          var button_id = $(this).attr("id");
          $("#row"+button_id+"").remove();
      });

			$('#e_dos').datetimepicker();

      });

			$('.selectpicker').selectpicker({
  style: 'btn-info',
  size: 4
});
</script>
