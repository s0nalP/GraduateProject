<?php
if(count($_POST)>0) {
include('connection.php'); //include of db config file
mysql_query("INSERT INTO currency(currency_name) VALUES ('" . $_POST["currency"] . "')");
			$current_id = mysql_insert_id();
			if(!empty($current_id)) {
			$message = "New User Added Successfully";
			header("location:newtaxpayee.php");
				}
				}
?>