<?php 

$db = new mysqli("localhost","root","","richpanel"); 

if ($db->connect_error) { 
    die("Unable to connect database: " . $db->connect_error); 
} 
?>