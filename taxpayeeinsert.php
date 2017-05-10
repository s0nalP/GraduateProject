<?php
if(count($_POST)>0) 
{
include('connection.php'); //include of db config file


 $payment = mysql_real_escape_string($_POST['payment']);

 $queryp = mysql_query("SELECT paymentid FROM payment_terms WHERE payment_terms_name = '$payment' ");
 $paymentresult = mysql_result($queryp,0,0);
 $currency = mysql_real_escape_string($_POST['currency']);

 $queryc = mysql_query("SELECT currencyid FROM currency WHERE currency_name = '$currency' ");
 $currencyresult = mysql_result($queryc,0,0);


 $name = $_POST["name"];
 $phone = $_POST["phone"];
 $fax = $_POST["fax"];
 $discount = $_POST["discount"];
 $address = $_POST["address"];
 
mysql_query("INSERT INTO vendor_info(name,phone,fax,discount,address,paymentid,currencyid) VALUES ('$name','$phone','$fax','$discount','$address','$paymentresult','$currencyresult')");
			$current_id = mysql_insert_id();
			if(!empty($current_id)) 
			{
			$message = "New User Added Successfully";
		
			}
				$last_id = mysql_insert_id();
				
}	
?>