<?php
  require 'db.php';

  // No form data in this example so no pre-processing

  // Connect to the database and get the data
  $connection = get_mysql_connection();

  // Formulate query
  $query1 = "SELECT * FROM article WHERE articleID='1'";
		
  
  // Submit query and get results
  $result = get_table($connection, $query1);
  
  // Encode table as JSON text
  echo json_encode($result);
  
?>
