<?php
   require 'db.php';

   session_start();

   function check_field($field_name, $value)
   {
      $error="";
      if (strlen($value)<= 0)
      {
         $error = $field_name . " is a required field.<br>";
      }
      return $error;
   }

   $connection 	  = get_mysql_connection();
   $featureTitle  = mysqlclean($_POST, 'featureTitle', 256, $connection);
   $authorName    = mysqlclean($_POST, 'authorName',   256, $connection);
   $publishDate   = mysqlclean($_POST, 'publishDate',  256, $connection);
   $blockQuote    = mysqlclean($_POST, 'blockQuote', 256, $connection);
   $featureText   = mysqlclean($_POST, 'featureText', 256, $connection);

   $error = $error . check_field("featureTitle",  $featureTitle);
   $error = $error . check_field("authorName",   $authorName);
   $error = $error . check_field("publishDate",  $blockQuote);
   $error = $error . check_field("featureText", $featureText);

   $message = "";
   if (strlen($error)>0)
   {
      $message = $message ."<p>Please add missing fields</p>";
   }
   else
   {
       $query = "INSERT INTO feature_article SET ";
       $query = $query . " featureTitle=\"$featureTitle\", ";
       $query = $query . " authorName=\"$authorName\", ";
       $query = $query . " publishDate=\"$blockQuote\", ";
       $query = $query . " featureText=\"$featureText\";";
       if (!(@mysql_query($query, $connection)))
          $message = $message . "<p>Error adding feature_article: " . $feature_article . '</p>';
       else {
          $message = $message . "<p>" .  $feature_article . " added to feature_article table successfully</p>";
       }    
   }
   $_SESSION['feature_article_message'] = $message;
   header("Location: admin.php");
?>
