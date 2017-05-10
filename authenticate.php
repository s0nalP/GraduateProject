<?php
	session_start();
	
include('connection.php'); //include of db config file
	
	$msg="";
	
		$uname=$_POST['EmailID'];
		$pwd=$_POST['Password'];
		
		$sql=mysql_query("SELECT * FROM user
								WHERE emailid='$uname' AND password='$pwd' ");
						
		$cout=mysql_num_rows($sql);
			if($cout>0){
				$row=mysql_fetch_array($sql);
				 $_SESSION['user'] = $row['fname'];
				 $_SESSION['usertype'] = $row['user_type'];
				 if (isset($_SESSION['user']) && isset($_SESSION['usertype'])) {
   // logged in
 
					if( $row['status']=='active' )
					{
						header("location:dashboard.php");
					}
					
					else 
					{
						$Message = "Invalid User";             
                                                header("location:index.php?Message={$Message}");
					}
			}
			} else {
   $Message = "Incorrect Username or Password ";             
                                                header("location:index.php?Message={$Message}");
					}
				
				
					
			
			
			

?>