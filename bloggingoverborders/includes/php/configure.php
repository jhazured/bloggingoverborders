<?PHP

/* Database credentials. Assuming you are running MySQL
server with default setting (user_name "justin" with password "Password1234") */
$user_name = "justin";
$password = "Password1234";
$database = "bloggingoverborders";
$server = "localhost";

/* Attempt to connect to MySQL database */
$link = mysqli_connect($server, $user_name, $password, $database);

print "Connection to the server opened";

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
