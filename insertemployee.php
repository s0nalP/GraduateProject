<?php
if(count($_POST)>0) {
include('connection.php'); //include of db config file





 $name = $_POST["name"];
 $phone = $_POST["phone"];
 $fax = $_POST["fax"];
 $email = $_POST["email"];
 $address = $_POST["address"];
 
mysql_query("INSERT INTO customer(customer_name,phone,fax,email,address,) VALUES ('$name','$phone','$fax','$email','$address')");
			$current_id = mysql_insert_id();
			if(!empty($current_id)) {
			$message = "New User Added Successfully";
			header("location:employeelist.php");
		
				}
				
				
}	
?>