<!DOCTYPE html>
<html>
<head>
    <title>View Palanca</title>
</head>
<body>
    <h1>View Palanca</h1>
    <?php
    
    require_once 'db_connection.php';

    // Query to retrieve student information
    $studentsQuery = "SELECT * FROM students";
    $studentsResult = $conn->query($studentsQuery);

    // Display links to view messages for each student
    echo "View messages for a specific student: ";
    while ($row = $studentsResult->fetch_assoc()) {
        echo "<a href='student_messages.php?student_id=" . $row['id'] . "'><br>" . $row['name'] . "</a>";
    }

    $conn->close();
    ?>
</body>
</html>
