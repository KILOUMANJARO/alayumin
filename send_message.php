<?php
        // Check if the form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $studentId = $_POST['studentId'];
            $recipient = $_POST['recipient'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            require_once 'db_connection.php';

            // Escape the message, recipient, and subject to prevent SQL injection
            $escapedMessage = $conn->real_escape_string($message);
            $escapedRecipient = $conn->real_escape_string($recipient);
            $escapedSubject = $conn->real_escape_string($subject);

            $timestamp = date('Y-m-d H:i:s');

            // Prepare the query to insert the message
            $query = "INSERT INTO messages (student_id, subject, message, date) VALUES ('$studentId', '$escapedSubject', '$escapedMessage', '$timestamp')";
            if ($conn->query($query) === TRUE) {
                    // Message saved successfully
                    $successMessage = "Message sent successfully!";
                } else {
                    // Error occurred while saving the message
                    $errorMessage = "Error: " . $conn->connect_error;
                }
            $conn->close();
            header("Location: index.php");
            exit();
        }
?>
<html>
<head>
    <title>Send Message</title>
    <link rel="icon" type="image/x-icon" href="design/logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            font-family: 'Varela Round', sans-serif;
        }
        body {
            justify-content: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: left;
            max-width: 100%;
            width: 100%;
            
        }

        label {
            margin-top: 10px;
            text-align: left;
            font-family: 'Varela Round', sans-serif;
            font-size: 15px;
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: auto;
            padding: 1vw;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            line-height: 1;
            margin-top: 5px;
            resize: vertical;
            font-family: 'Varela Round', sans-serif;
            font-size: 15px;
            font-weight: bold;
            color: #8F82DB;
        }

        input::placeholder {
            color: gray;
        }

        textarea::placeholder {
            color: gray;
        }

        button {
            background-color: #79E88F; /* Green */
            border-style: solid;
            border-color: #79E88F;
            color: white;
            padding: 16px 28px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            border-radius: 10px;
            font-weight: bold;
            transition-duration: 0.4s;
            cursor: pointer;
            font-family: 'Varela Round', sans-serif;
        }

        button:hover {
            background-color: white; /* Green */
            color: #79E88F;
            border-style: solid;
            border-color: #79E88F;
        }
        .container {
            background-color: #EEEB70;
            padding-right: 2vw;
            padding-left: 2vw;
            padding-top: 1vw;
            padding-bottom: 1vw;
            flex-direction: column;
            align-items: center;
            border-radius: 10px;
            width: 60vw;
            min-height: 21vw;
            margin-top: 1vw;
            margin-left: auto;
            margin-right: auto; 
            margin-bottom: 5vw;
        }
        
        .form-buttons {
        display: flex;
        justify-content: space-between;
        margin-top: 10px;
        }

        .form-buttons button {
            flex: 1;
            margin-right: 5px;
        }

        .form-buttons .return-button {
            text-decoration: none;
            color: inherit;
        }

        .nav {
            position: fixed;
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
            color: white;
        }

        .header_img {
            display:flex;
            width: 100%;
            background-size:contain;
            background-repeat: no-repeat;
            background-position: top;
            text-align: center;
            margin-top: 0vw;
            top: 0;
            left: 0;   
        }

        .header_img {
            max-width:100%;
            height:auto;
            left: 0;
        }
        .sendto{
            color: #8F82DB;
        }
        .footer_img{
            max-width:100%;   
            width: 100%;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: top;
            text-align: center;
            position: fixed;
            bottom: 0;
            left: 0;
        }
    </style>
    <script>
        function populateRecipient(studentName) {
            var recipientField = document.getElementById('recipient');
            recipientField.value = studentName;
        }
    </script>
</head>
<body>
    <div class="nav" style="position: absolute; top: 20px; right: 60px; width: 50%;">
        <a href="index.php" class="nav1" >Home</a> 
        <a href="about_us.php" class="nav2" >About Us</a>
    </div>

    <img class="header_img" src="design/headerimg.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <div class="container">
        <form action="send_message.php" method="POST">
            <!-- Retrieve the student ID from the query parameter -->
            <input type="hidden" name="studentId" value="<?php echo $_GET['studentId']; ?>">

            
            <input type="text" class="sendto" name="recipient" id="recipient" value=" Send to: <?php echo $_GET['recipient']; ?>" required readonly>
            <input type="text" name="subject" id="subject" required placeholder="Subject">
            <textarea name="message" id="message" rows="10" cols="50" required placeholder="Write your message here..."></textarea>

            <div class="form-buttons">
                <button type="submit" class="submit-button">SUBMIT</button>
                <button formnovalidate><a href="index.php" class="return-button">RETURN</a></button>
            </div>
        </form>
    </div>
    <?php
        if (isset($successMessage)) {
            echo $successMessage;
        } elseif (isset($errorMessage)) {
            echo $errorMessage;
        }
    ?>
    <img class="footer_img" src="design/footerimg.png">

</body>
</html>
