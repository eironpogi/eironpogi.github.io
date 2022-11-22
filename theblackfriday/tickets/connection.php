<?php
#Change this section when uploaded
$servername = 'localhost';
$server_username = 'theblackfriday_u';
$password = 'theblackfriday_p';
$dbname = 'db_theblackfriday';
#end of section

// Create connection
$con = new mysqli($servername, $server_username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die('Connection failed: ' . $con->connect_error);
}
?>