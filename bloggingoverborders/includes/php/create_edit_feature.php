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
	<title> bloggingoverborders/create_edit_feature </title>
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

p {
	color: black;
}

#subject {
	width:100%;
}

input[type=email] {
	width: 100%;
	line-height: 1.5em;
	border: 1px solid black;
}

input[type=text], select, textarea {
    	width: 100%;
    	margin-top: 5px;
    	margin-bottom: 5px;
	line-height: 1.5em;
	border: 1px solid black;
  
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 15px 20px 15px 20px;
    border: none;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

#create-edit-feature-form {
	float: left;
	margin-left: 10%;
	width: 50%;
	height: auto;
	padding: 25px;
	background-color: teal;
   	border: 5px solid lightgrey;
   				
}

#upload-image-gallery-form {
	float: right;
	margin-left: 10%;
	width: 50%;
	height: auto;
	padding: 25px;
	background-color: teal;
   	border: 5px solid lightgrey;
   				
}
</style> 
</head>

<body>

<div id="wrapper">
      <div class="header">
        <a href="http://www.bloggingoverborders.com/create_edit_feature"></a>
        <h1> Blogging Over Borders </h1>
        <h6>Create/Edit Feature Page</h6>
</div>

<div class="top-nav">
    <nav>
        <ul>
          <li> <a href="contact.html"> Contact</a> </li>
          <li> <a href="index.html">Home</a> </li>
          <li> <a href="image_gallery.html">Image Gallery</a> </li>
	  <li> <a href="dashboard.html"> Dashboard</a> </li>
	</ul>
	<div id="login-navigation">
		<label><label>Welcome <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>!</label><a href="logout.php"><button type="submit">Logout</button></a>
	</div>
    </nav>
</div>

<form method="post" action="create_edit_feature.php" id="create-edit-feature-form">
        <div id="contact-form-controls">
        <legend>Create New Feature</legend> <br>
	<p>Please enter title, feature text, and upload photos here then click submit.</p> 
            <fieldset>
		
            <label for="feature-title">Feature Title:</label> <br>
	    <input type="text" placeholder="Enter feature title here" name="feature-title" required> <br>
	    <label for="blockquote-text">Blockquote text:</label>
	    <input type="text" placeholder="Enter blockquote text here:" name="blockquote-text" required> <br>
	    <label for="card">
            <span>Select Album:</span>
            </label>
	    <select id="album" name="photo-album">
            <option value="visa">Halong Bay, Vietnam</option>
            <option value="mc">Sapa, Vietnam</option>
            </select>
	    
	    <label for="main-text">Main text:</label>
	    <textarea id="main-text" name="main-text" placeholder="Enter main text here:" style="width:100%; height:200px"></textarea><br>
	    <input type="submit" value="Submit">
            </fieldset>
       </div>
</form>


<form method="post" action="upload-image.php"  enctype="multipart/form-data" id="upload-image-gallery-form">>
   	<div id="image-gallerycontrols">
 	<legend>Edit/Upload New Image Gallery</legend> <br>
	<p>Please enter title, feature text, and upload photos here then click submit.</p> 
    	<input type="file" name="my_image">
    	<input type="submit" name="upload_image" value="upload">
</form>

<form method="get" action=" " >
 <input type="file" name="your_image_name">
 <input type="submit" name="display_image" value="Display">
</form>

<input type="submit" name="action" value="Update" />
<input type="submit" name="action" value="Delete" />

	

</div>
</body>	

</html>
