
<?php
		include('connection.php');
	
		
   
	$query = "SELECT location_id,location_name from location";
  $result = $db->query($query);

  while($row = $result->fetch_assoc()){
    $categories[] = array("id" => $row['location_id'], "val" => $row['location_name']);
  }

  $query = "SELECT product_id,item_name,location_id FROM product";
  $result = $db->query($query);

  while($row = $result->fetch_assoc()){
    $subcats[$row['location_id']][] = array("product_id" => $row['id'], "val" => $row['item_name']);
  }

  $jsonCats = json_encode($categories);
  $jsonSubCats = json_encode($subcats);
?>