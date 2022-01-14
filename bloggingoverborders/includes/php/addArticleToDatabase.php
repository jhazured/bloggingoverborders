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
   $articleTitle  = mysqlclean($_POST, 'articleTitle', 256, $connection);
   $authorName    = mysqlclean($_POST, 'authorName',   256, $connection);
   $publishDate   = mysqlclean($_POST, 'publishDate',  256, $connection);
   $blockQuote    = mysqlclean($_POST, 'blockQuote', 256, $connection);
   $articleText   = mysqlclean($_POST, 'articleText', 256, $connection);

   $error = $error . check_field("articleTitle",  $articleTitle);
   $error = $error . check_field("authorName",   $authorName);
   $error = $error . check_field("publishDate",  $blockQuote);
   $error = $error . check_field("articleText", $articleText);

   $message = "";
   if (strlen($error)>0)
   {
      $message = $message ."<p>Please add missing fields</p>";
   }
   else
   {
       $query = "INSERT INTO article SET ";
       $query = $query . " articleTitle=\"$articleTitle\", ";
       $query = $query . " authorName=\"$authorName\", ";
       $query = $query . " publishDate=\"$blockQuote\", ";
       $query = $query . " articleText=\"$articleText\";";
       if (!(@mysql_query($query, $connection)))
          $message = $message . "<p>Error adding article: " . $article . '</p>';
       else {
          $message = $message . "<p>" .  $article . " added to article table successfully</p>";
       }    
   }
   $_SESSION['article_message'] = $message;
   header("Location: create_edit_feature.php");
?>
