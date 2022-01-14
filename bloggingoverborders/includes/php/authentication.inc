<?php

  function get_user_details($connection, $username)
  {
    $query = "SELECT * FROM users WHERE username=\"$username\";";
    $table=get_table($connection, $query);
    return $table;
  }

  function authenticate_user($connection, $username, $password)
  {
    // Test the username and password paramters
    if (!isset($username) || !isset($password))
       return false;

    // Create a digets of the password collected from the challenge
    $password_digest = md5(trim($password));
   
    // Formulate the SQL query to find the user in the database
    $query = "SELECT password FROM users WHERE username=\"$username\" AND password=\"$password_digest\";";

    // Execute the query
    if (!($result = @ mysql_query($query, $connection)))
       showerror();

    // If there is one row we have found the user
    $rows = mysql_num_rows($result);

    if ($rows == 1)
       return true;
    else
       return false;
  }

  // Connects to a session and checks that the user has authenticated and that 
  // the remote IP address mathces the address used to create the session.
  function session_authenticate()
  {
     // Check if the user hasn't logged in
     if (!isset($_SESSION["username"]))
     {
        // The request does not identify a session
        $_SESSION["message"] = "You must be logged in to access 
                                {$_SERVER["REQUEST_URI"]}";
        header ("Location: login.php");
        exit;
     }

     // Check if the request is from a dfferent IP address to previously
     if (!isset($_SESSION["loginIP"]) ||
        ($_SESSION[loginIP] != $_SERVER["REMOTE_ADDR"]))
     {
        // The request did not originate from the machine that was
        // used to create the session.
        // This is possibly a session hijack attempt

        $_SESSION["message"] = "You are not authorized to access 
                                {$_SERVER["REQUEST_URI"]} from the address
                                {$_SERVER["REMOTE_ADDR"]}. You must access it from {$_SESSION[loginIP]}.";
        header("Location: login.php");
        exit;
     }
   }
?>
