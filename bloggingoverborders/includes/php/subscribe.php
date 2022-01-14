<?php

//send an email to all the subscribers
$to = "someone@example.com";
$subject = "Bloggingoverborders.com has a new feature article!";
$message = "Hi there! It's Derek here just sending you a quick email to let you know there is a new feature article at bloggingoverborders.com. Please come back to my site and have a look :)";
$from = "derek@bloggingoverborders.com";
$headers = "From: $from";
mail($to,$subject,$message,$headers);
echo "Mail Sent.";?>
