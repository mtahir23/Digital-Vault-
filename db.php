<?php

$conn = new mysqli("localhost","root","","digital_vault");

if($conn->connect_error){
die("Connection failed: " . $conn->connect_error);
}

?>
