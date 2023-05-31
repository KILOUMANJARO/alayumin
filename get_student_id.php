<?php
require_once 'db_connection.php';

if (isset($_GET['student_id'])) {
    $studentId = $_GET['student_id'];

    $query = "SELECT id FROM students WHERE id = '$studentId'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $studentId = $row['id'];
        echo $studentId;
    }
}

$conn->close();
?>
