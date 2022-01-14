<?php
  require 'authentication.inc';
  require 'db.php';

  function record_login($connection, $username, $last_login)
  {
     $query = "UPDATE users SET last_login=\"$last_login\" 
                  WHERE username=\"$username\";";
     if (!(@mysql_query($query, $connection)))
          showerror();
  }

  $connection = get_mysql_connection();

  // Clean the data collected in the form
  $email    = mysqlclean($_POST, "username", 20, $connection);
  $password = mysqlclean($_POST, "password", 20, $connection);

  session_start();

  // Authenticate the user
  if (authenticate_user($connection, $username, $password))
  {
     // Register the loginUsername
     $_SESSION["username"] = $username;

     // Register the IP address that started this session
     $_SESSION["loginIP"] = $_SERVER["REMOTE_ADDR"];

     // Register the current time
     date_default_timezone_set("Australia/Perth");
     $loginDate = date('D j M Y h:i:s A');
     $_SESSION['loginTime'] = $last_login;

    //record_login
    ($connection, $username, $last_login);

     header("Location: dashboard.php");
     exit();
  }
  else
  {
     // The authentication failed: setup a logout message
     $_SESSION["message"] = 
       "Could not connect to database as '{$username}' with the  password supplied.";

     // Logout by going to the login page
     header("Location: login.php");
     exit;
  }
?>


