<?php

// Initialize the session
require 'authentication.inc';
session_start();
session_authenticate();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
 
<DOCTYPE! HTML>
<html lang="en">

<head>
	<meta charset="UTF-8" /meta>
	<title> bloggingoverborders/dashboard </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="keywords" content="travel, asia, recommendations, blogging, www.bloggingoverborders.com">
    	<meta name="author" content="Justin Harker">
    	<meta http-equiv="refresh" content="200">
    	<meta name="google-site-verification" content="aM8n2s8vyE7-3C_KBex2ht-7QygtCkBhU7IT9hwaveM" />
    	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    	<link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>
   	<script src="javascript.js">
    	</script>
<style>

</style> 
</head>

<body>

<div id="wrapper">
      <div class="header">
        <a href="http://www.bloggingoverborders.com/dashboard"></a>
        <h1> Blogging Over Borders </h1>
        <h6>Dashboard page</h6>
</div>

<div class="top-nav">
    <nav>
        <ul>
          <li> <a href="contact.html"> Contact</a> </li>
          <li> <a href="index.html">Home</a> </li>
          <li> <a href="image_gallery.html">Image Gallery</a> </li>
	  <li> <a href="create_edit_feature.html"> Create/Edit Feature</a> </li>
	  <div class="dropdown">
		<button class="dropbtn">Recent Articles</button>
		<div class="dropdown-content">
		<a href="#">Sapa, Vietnam</a>
		<a href="#">Hanoi, Vietnam</a>
	  </div>
	  
	</ul>
	<div id="login-navigation">
		<label>Welcome <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>!</label><a href="logout.php"><button type="submit">Logout</button></a>
	</div>
   </nav>
</div>

	

</div>
</body>	

</html>
 
