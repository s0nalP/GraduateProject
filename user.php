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
<link href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>

<script>
		$(document).ready(function() {
    var table = $('#example').DataTable();
 
    $('button').click( function() {
        var data = table.$('input, select').serialize();
        alert(
            "The following data would have been submitted to the server: \n\n"+
            data.substr( 0, 120 )+'...'
        );
        return false;
    } );
} );
	</script>
<!--//Metis Menu -->
</head>

<body class="cbp-spmenu-push">
	<div class="main-content">
		<?php include 'header.php';?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				
					<h3 class="title1">User List</h3>
				
					</div >
					
			
				

						<br/>
						<table id="example" class="display" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>ID</th>
					<th>User Type </th>
					<th>First Name </th>
					<th>Last Name</th>
					<th>E-Mail ID</th>
					<th>Status</th>
					
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>ID</th>
					<th>User Type </th>
					<th>First Name </th>
					<th>Last Name</th>
					<th>E-Mail ID</th>
					<th>Status</th>
				
				</tr>
				
			</tfoot>
			<tbody>
			<?php

include('connection.php'); //include of db config file
$result= mysql_query("SELECT * from user");
			If (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        ?>
				<tr>
					
					<td><a href="#"><?php echo $row['userid']; ?></a></td>
					<td><a href="#"><?php echo $row['user_type']; ?></a></td>
					<td><a href="#"><?php echo $row['fname']; ?></a></td>
					<td><a href="#"><?php echo $row['lname']; ?></a></td>
					<td><a href="#"><?php echo $row['emailid']; ?></a></td>
					<td><?php 
if($row['status'] == 'active')
{
	?>
    <a href="action.php?status=<?php echo $row['userid'];?>" 
 class="act" onclick="return confirm('Activate <?php echo $data?>');"> Deactivate </a>
<?php
}
if($row['status'] == 'inactive')
{
?>
<a href="action.php?status=<?php echo $row['userid'];?>" 
 class="deact" onclick="return confirm('De-activate <?php echo $data?>');"> Activate</a>
<?php
}
?>




					</td>


				
				</tr>

				<?php
    }
}
?>
				</tr>
				
				</tbody>
		</table>
						
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

<div class="modal fade" id="<?php echo $row['userid'];?>" tabindex="-3" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">New Payment Terms</h4>
      </div>
      <div class="modal-body">
	  <form name="frmvendor" method="post"action="updatepassword.php">
        <div class="form-group">
							<label for="inputPassword" class="col-sm-4 control-label">New Payment Terms</label>
								<div class="col-sm-8">
<input type="text" class="form-control" name="paymentterms" value="<?php echo $row['userid'];?>" hidden/>
									<input type="password" class="form-control" name="password" placeholder="Enter Password" required>
									<div class="clearfix"> </div>
								</div>
						</div>
						
      </div><br/><br/><br/>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary"/>
      </div>
	  </form>
    </div>
  </div>
</div>	
</body>
	</html>