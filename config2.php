<?php
$currency = '&#8377; '; //Currency Character or code

$db_username = 'your username';
$db_password = 'your password';
$db_name = 'your database name';
$db_host = 'your hostname';
//connect to MySql                      
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);                        
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
?>