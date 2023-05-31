<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>
    <h1>Students</h1>
    <?php
    
    require_once 'db_connection.php';

    // Fetch all students from the database
    $studentsQuery = "SELECT * FROM students";
    $studentsResult = $conn->query($studentsQuery);

    if ($studentsResult->num_rows > 0) {
        // Display a list of students
        echo "<ul>";
        while ($row = $studentsResult->fetch_assoc()) {
            echo "<li>" . $row['name'] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "No students found.";
    }

    $conn->close();
    ?>
</body>
</html>
