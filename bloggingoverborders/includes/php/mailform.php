<html>
<body>

<?php
//https://www.w3schools.com/php/func_filter_var.asp
function spamcheck($email)
{
//filter_var() sanitizes the e-mail//address
$email=filter_var($email, FILTER_SANITIZE_EMAIL); 
//filter_var() validates the e-mail//address 
if(filter_var($email, FILTER_VALIDATE_EMAIL))
	{return TRUE;}
else
	{return FALSE;}}

//if "email" is filled out, proceed//check if the email address is invalid
if (isset($_REQUEST['email']))
{
$mailcheck = spamcheck($_REQUEST['email']);

if ($mailcheck==FALSE)
	{
	echo "Invalid input";}
else{
//send email
$email = $_REQUEST['email'] ;
$subject = $_REQUEST['subject'] ;
$message = $_REQUEST['message'] ;
mail("someone@example.com", "Subject: $subject",$message, "From: $email" );
echo "Thank you for subscribing! from Derek at bloggingoverborders.com";
}
}
else
{
else//if "email" is not filled out, display the form
{
?>
	<?php <echo> "<form method='POST' action='mailform.php'>;"?>
	<input type="email" input name="subscriber-email"> <br>
	<input type="text" input name="subject-line"> <br>
	<textarea name="message" rows='15' cols='40'></textarea> </br>
	<input type="submit" input name="Submit"><button>Submit</button>
	</form> 
}

</body>

</html>


