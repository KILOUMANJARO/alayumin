<!DOCTYPE html>
<html>
<head>
    <title>My Messages</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="design/logo.png" />
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
    <?php
        require_once 'db_connection.php';

        // Check if the student ID is provided in the query string
        if (isset($_GET['student_id'])) {
            $studentId = $_GET['student_id'];

            // Fetch student information
            $studentQuery = "SELECT * FROM students WHERE id = $studentId";
            $studentResult = $conn->query($studentQuery);
            

            // Check if the student exists
            if ($studentResult->num_rows > 0) {
                $student = $studentResult->fetch_assoc();

                // Display student name and other details
                echo "<h1>Palancas for " . $student['name'] . "</h1>";

                // Fetch messages for the student
                $messagesQuery = "SELECT messages.message, messages.subject, messages.date
                    FROM messages
                    INNER JOIN students ON messages.student_id = students.id
                    WHERE students.id = $studentId
                    ORDER BY messages.date DESC"; // Fetch latest messages first
                $messagesResult = $conn->query($messagesQuery);

                // Display messages
                if ($messagesResult->num_rows > 0) {
                    while ($message = $messagesResult->fetch_assoc()) {
                        echo '<div class="box">';
                        echo "<p class='sender'><strong>Sender:</strong> " . $message['subject'] . "</p>";
                        echo "<p><strong>Message:</strong> " . $message['message'] . "</p>";
                        echo "<p class='timestamp'><strong>Timestamp:</strong> " . $message['date'] . "</p>";
                        echo "</div>";
                    }
                } else {
                    echo "No messages found for this student.";
                }
            } else {
                echo "Student not found.";
            }
        } else {
            echo "Invalid student ID.";
        }

        $conn->close();
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        @font-face {
            font-family: 'Nighty';
            src: url('Nighty.otf') format('opentype');
            font-weight: normal;
            font-style: normal;
        }

        * {
            font-family: 'Varela Round', sans-serif;
        }

        h1 {
            color: #FA6B40;
            font-family: "Nighty", sans-serif;
            font-size: 5vw;
        }

        .nav {
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 9999;
            font-size: 1.35vw;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .nav a {
            text-decoration: none;
            padding-left: 5px;
            padding-right: 5px;
        }

        .nav1 {
            font-weight: bold;
            color: #EEEB70;
        }

        .nav2 {
            font-weight: bold;
            color: #EEEB70;
        }

        .header_img {
            top: 0;
            left: 0;
            width: 100%;
            z-index: 9999;
        }

        .container {

        }

        .footer_img {
            bottom: 0;
            left: 0;
            width: 100%;
        }

        .message-container {
            display: grid;
            gap: 20px;
            justify-items: center;
        }

        .box {
            background-color: white;
            padding: 10px;
            flex-direction: column;
            align-items: center;
            border-radius: 10px;
            min-width: 50vw;
            max-width: 50vw; /* Set a maximum width for the box */
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 1vw;
            margin-top: 1vw;
            padding: 2vw;
            color: #8F82DB;
            border-style: solid;
            border-color: #8F82DB;
            word-wrap: break-word; /* Allow long words to wrap to a new line */
        }

        .box .sender {
            font-weight: bold;
            color: #FA6B40;
        }

        .box .timestamp {
            color: lightgray;
        }
    </style>
</head>
<body class="message-container">
</body>
</html>
