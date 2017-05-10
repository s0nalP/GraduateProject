<!DOCTYPE HTML>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 

<body class="cbp-spmenu-push">

	<div class="main-content">
		<?php include 'header.php';?>
		
		<!-- //header-ends -->
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<h3 class="title1">Add New User</h3>
				<form id="user" method="post" action="insertuser.php">
			<div class="row">	
				
				<div class="col-sm-6 col-md-6 col-lg-6" >
				<div class="form-group">
						<label class="col-sm-3 control-label">First Name</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" placeholder="Enter Name" name="fname" required>
									<div class="clearfix"> </div>
								</div>
						</div>
				<br/><br/>
				<div class="form-group">
						<label class="col-sm-3 control-label">Email ID</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" placeholder="Enter E-Mail ID" name="emailid" required>
									<div class="clearfix"> </div>
								</div>
						</div>
				<br/><br/>
				<div class="form-group">
						<label class="col-sm-3 control-label">Contact No.</label>
								<div class="col-sm-9">
									<input type="number" class="form-control" placeholder="Enter Contact No." name="cn" required>
									<div class="clearfix"> </div>
								</div>
						</div>		
				</div>	
				
				<div class="col-sm-6 col-md-6 col-lg-6" >
					<div class="form-group">
						<label class="col-sm-3 control-label">Last Name</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" placeholder="Enter Last Name" name="lname" required>
									<div class="clearfix"> </div>
								</div>
						</div>
				<br/><br/>
				<div class="form-group">
							<label for="payment terms" class="col-sm-3 control-label">User Type</label>
								<div class="col-sm-9">
								<select name="type_name" required>
								<option value="Admin">Admin</option>
								<option value="Super Admin">Super Admin</option>
							
								</select>
								<div class="clearfix"> </div>
								</div>
						</div>
				<br/><br/>
				<div class="form-group">
						<label class="col-sm-3 control-label">Password</label>
								<div class="col-sm-9">
									<input type="password" class="form-control" placeholder="Enter Password" name="password" required>
									<div class="clearfix"> </div>
								</div>
						</div>	
<br/><br/>
							
						<div class="sub_home">
							<input type="submit" value="Submit">
							<div class="clearfix"> </div>
						</div>
				</div>
				</div>
				</form>
				
			</div>
</div>
</div>
</div>			
		
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js"> </script>
</body>
</html>