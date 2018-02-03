<?php
$mysqli = new mysqli();
$mysqli->connect('localhost', 'db username', 'db password', 'database name');



if ($mysqli->connect_errno) { echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error; } 

?>