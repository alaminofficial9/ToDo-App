<?php
$conn = new mysqli("localhost","root","","todo_app");
if($conn->connect_error){ die("DB Connection Failed: ".$conn->connect_error); }
?>
