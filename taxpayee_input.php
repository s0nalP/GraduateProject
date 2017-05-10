 <style>
.txtbox {
 border: none;
 width: 100%;
}
input {
	font-size: 17px;
    height: 30px;	
}
table {
	 background: none repeat scroll 0 0 #abcdef;
    border: 1px solid #000;	
}
</style> 
<table width="100%" border="1" cellpadding="1" cellspacing="1" class="test">
  <tr>
    <td style="text-align: center;">item code</td>
    <td style="text-align: center;">taxpayee code</td>
    <td style="text-align: center;">price</td>
   
  </tr>
  <tbody>
  

 <tr>
    <td><select name="item_code[]" class="txtbox" required>
								<?php
							include('connection.php');
							$sql = "SELECT item_code FROM product";
							$result = mysql_query($sql);

							
							while ($row = mysql_fetch_array($result)) {
								echo "<option value='" . $row['item_code'] ."'>" . $row['item_code'] ."</option>";
							}
							
							?>
								</select></td>
    <td><input type="text" class="txtbox"   name="vendor_product_code[]" required/></td>
    <td><input type="text" class="txtbox"   name="unit_price[]" required/></td>
   
  </tr>
  </tbody>
</table>

