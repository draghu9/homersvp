<?php
require_once('server.php');

if(SERVER=='dev'){
	define("HOST", "localhost"); // The host you want to connect to.
	define("USER", "root"); // The database username.
	define("PASSWORD", ""); // The database password. 
	define("DATABASE", "rsvp"); // The database name.
}
elseif(SERVER=='live'){
	define("HOST", "localhost"); // The host you want to connect to.
	define("USER", "root"); // The database username.
	define("PASSWORD", "eKcGZr59zAa2BEWU"); // The database password. 
	define("DATABASE", "rsvp"); // The database name.
}

 
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
// check connection
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}
?>