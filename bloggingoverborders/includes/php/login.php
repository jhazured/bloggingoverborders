<?php
      //Reload with HTTPS if necessary
      if (empty($_SERVER['HTTPS'])) {
        header("Location: https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);
        exit;
      }
   
   // Create or find an existing session
    session_start();
    
   // Possible logout/can't authenticate message
   if (isset($_SESSION["message"]))
   {
        $message .= $_SESSION["message"];
        unset($_SESSION["message"]);
    }
    
  // Destroy the message
  session_destroy();
    
?>
<head>
	<meta charset="UTF-8" /meta>
	<title> www.bloggingoverborders.com/login </title>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="keywords" content="travel, asia, recommendations, blogging, www.bloggingoverborders.com">
    	<meta name="author" content="Justin Harker">
    	<meta http-equiv="refresh" content="200">
    	<link rel="stylesheet" href="../../Content/Themes/CSS/style.css">
	<script type="text/javascript" src="js/data.js"></script>
<style>
/*format login form object*/
#login-form {
	display: block;
	float: left;
    	width: auto;
	height: auto;
	margin-top: 10%;
	margin-left: 30%;
	margin-right: 15%;
  	padding: 25px 25px 25px 25px;
	border: 1px black solid;
	background-color: teal;
	
}

/*format login form controls*/
#login-form-controls {
  	color: black;
	text-align: center;
  	line-height: 1.8em;
  	margin-right: 15px;
 	margin-left: 15px;
  	
}
</style>
</head>

<body>

<div id="wrapper">
      <div class="header">
        <a href="http://www.bloggingoverborders.com/login"></a>
        <h1> Blogging Over Borders </h1>
        <h6>Login Page</h6>
</div>

<div class="top-nav">
    <nav>
        <ul>
          <li> <a href="/contact.html"> Contact</a> </li>
          <li> <a href="/index.html">Home</a> </li>
          <li> <a href="/image_gallery.html">Image Gallery</a> </li>
	</ul>
    </nav>
</div>


<form method="post" action="logincheck.php" id="login-form" enctype="multipart/form-data" autocomplete="off">

	<!--Messages communicated via apache in $_SESSION[ ] -->
     	<?php echo "<p id='message'>" . $message . "</p>" ?>

       <div id="login-form-controls">
       <legend>Login as administrator</legend>
            <fieldset>
            <label for="userName"><b>Username</b></label>
	    <input type="username" placeholder="Enter Username" name="username" required> <br>
	    <label for="password"><b>Password</b></label>
	    <input type="password" placeholder="Enter Password" name="password" required> <br>
	    <button id="forgot-password" type="password"> <a href="#">Forgot password?</a></button>
	    <input type="checkbox" checked="checked" name="remember">Remember me</label> 
	    <!-- The submit button starts the POST method -->
	    <input type="submit" value='login'>
            </fieldset>
       </div>
</form>
    
</body>
</html>
