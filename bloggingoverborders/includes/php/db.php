<?php

//Host attributes
$hostname = "localhost";
$database = "bloggingoverborders";
$dbusername = "justin";
$dbpassword = "Password1234";

  // Establish and return a connection to the mySQL server
  function get_mysql_connection()
  {
   global $hostname;
   global $dbusername;
   global $dbpassword;
   global $database;

   // Connect to server 
   if (!($connection = @ mysql_connect($hostname, $dbusername, $dbpassword)))
      die("Could not connect to the database. Please try again later.");

   // Select the database
   if (!mysql_select_db($database, $connection))
      showerror();

   return $connection;
  }

  // Print an error number and message in red.
  function showerror()
  {
    echo '<FONT COLOR="#FF0000"><B>';
    die("Error " . mysql_errno() . "</B> : " . mysql_error() . '</FONT>');
  }

  // Clean the array to prevent security problem with strings
  function mysqlclean ($array, $index, $maxlength, $connection)
  {
    if (isset($array["{$index}"]))
    {
        $input = substr($array["{$index}"], 0, $maxlength);
        $input = mysql_real_escape_string($input, $connection);
        $input = trim($input);
        return ($input);
    }
  }

  // Return a table containing the results of a database query
  function get_table($connection, $query)
  {
       $table=null;
       if (! ($result = @ mysql_query ($query, $connection)))
              showerror();

       // Build an array containing a copy of the table
       $index=0;
       while ($row = @ mysql_fetch_array($result))
       {
         $table[$index] = $row;
         $index++;
       }

       // Return the table resulting from the query
       return $table;
  }

?>
