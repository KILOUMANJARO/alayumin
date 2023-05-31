<?php
$servername = "localhost";
$username = "id20827235_root";
$password = "Ardelara7875511!?";
$database = "id20827235_student_messages";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
