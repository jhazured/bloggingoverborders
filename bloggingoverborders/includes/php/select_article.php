<?php
  require 'db.php';

  // Connect to the database
  $connection = get_mysql_connection();

  // Process HTTP GET request interface values
  $articleID = 1;
  if (isset($_GET['articleID']))
     $articleID = mysqlclean($_GET, 'articleID', 30, $connection);

  // Formulate mySQL query by concatenating literal stirngs and variables
  $query1 = "SELECT * FROM article WHERE articleID=" . $articleID . ";";
            
  // Submit query and get reuslts
  $result = get_table($connection, $query1);

  // Econde result as JSON text and return
  echo json_encode($result);
  
?>
