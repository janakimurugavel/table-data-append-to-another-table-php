<?php
$conn = new mysqli('localhost', 'root', '', 'sql-task');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
}
echo"connected";


?>