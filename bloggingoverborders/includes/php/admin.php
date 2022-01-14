<?php
    require 'authentication.inc';
    
    session_start();
    session_authenticate();

   // Check if there are session messages
   if (isset($_SESSION["city_message"]))
   {
        $city_message .= $_SESSION["city_message"];
        unset($_SESSION["city_message"]);
    }
   if (isset($_SESSION["user_message"]))
   {
        $user_message .= $_SESSION["user_message"];
        unset($_SESSION["user_message"]);
    }
?>
<html>
<head>
    <!-- Javascript for data access -->
    <script type="text/javascript" src="../js/data.js"></script>
    
    <!-- Custom items for this web app -->
    <link href="../css/whereintheworld.css" rel="stylesheet" />
    <link rel="stylesheet" href="./bloggingoverborders/Content/Themes/CSS/style.css">

</head>
<body>
    <div id="editContainer">
      <p></p>
      <!-- Form to add new feature to the feature article table -->
      <form action="addCityToDatabase.php" method="post">
          <label id='cityLabel' for='city'> City </label>
          <input type='text' id='city' name='city'></input></br>

          <label id='countryLabel' for='Country'> Coutry </label>
          <input type='text' id='country' name='country'></input></br>

          <label id='latitudeLabel' for='latitude'> Latitude </label>
          <input type='text' id='latitude' name='latitude'></input></br>

          <label id='longitudeLabel' for='longitude'> Longitude </label>
          <input type='text' id='longitude' name='longitude'></input></br>
        <p></p>
        <input type="submit" value="Add City" />
        <?php echo "<p class='message'>" . $city_message . "</p>" ?>
      </form>
      <p></p>
      <!-- Form to add a new user to the user table -->
      <form id="createform" action="addUserToDatabase.php" method="post">
           <label for="family">Family Name</label>
           <input type="text" name="family" id="family" /></br>

           <label for="given">Given Name</label>
           <input type="text" name="given" id="given" /></br>

           <label for="email">Email</label>
           <input type="text" name="email" id="email" /></br>

           <label for="password1">Password</label>
           <input type="password" name="password1" id="password1" /></br>

           <label for="password2">Re-enter Password</label>
           <input type="password" name="password2" id="password2" /></br>
        <p></p>
        <input type="submit" value="Create Credentials"/>
        <?php echo "<p class='message'>" . $user_message . "</p>" ?>
      </form>
      <p></p>
      <form action="login.php">
        <input type="submit" value="Logout">
      </form>
       
    </div>
</body>
</html>
