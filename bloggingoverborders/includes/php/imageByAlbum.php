<?php
    require 'db.php';
    
    // Connect to the database and get the data
    $connection = get_mysql_connection();
    
    // Formulate query
    $query1 = "SELECT * FROM photoAlbum";
    
    // Submit query and get results
    $result = get_table($connection, $query1);
    
    // Encode table as JSON text
    echo json_encode($result);
    
    ?>
