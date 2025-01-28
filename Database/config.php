<?php


$hn = "localhost";
$un = "giuliano_admin";
$pw = "CdnBXrrRgrjOeONT";
$db = "musicgg";

// Create database connection
$conn = new mysqli($hn, $un, $pw, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
else echo "Connection succesful"  

?>