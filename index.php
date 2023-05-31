<!DOCTYPE html>
<html>
<head>
    <title>Alayumin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="icon" type="image/x-icon" href="design/logo.png" />
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        * {
            font-family: 'Varela Round', sans-serif;
        }
        
        .container {
            margin-top: 15vw;
           
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 0 40px; /* Gap only on the left and right */
            margin-bottom: 20px;
            width: 100%;
        }

        .grid-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            width: 200px;
            margin-top: 20px;
            margin-bottom: 0;
        }

        .grid-item img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            object-fit: cover;
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
            color: white;
        }

        .nav2 {
            font-weight: bold;
            color: #EEEB70;
        }

        .header_img {
            display: flex;
            width: 100vw;
            background-size: auto;
            background-repeat: no-repeat;
            background-position: top;
            text-align: center;
            margin-top: 0vw;
            top: 0;
            position: fixed;
        }

        .header_img {
            max-width: 100%;
            height: auto;
        }

        .footer_img {
            max-width: 100%;
            width: 100%;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: top;
            text-align: center;
            position: fixed;
            bottom: 0;
            left: 0;
        }
        h1{
            color: white;
        }
    </style>
</head>
<body>
    <img class="header_img" src="design/headerimg.png">
    <div class="nav">
        <a href="index.php" class="nav1">Home</a>
        <a href="about_us.php" class="nav2">About Us</a>
    </div>
    <div class="container">
        <div class="left-column">
            <?php
            require_once 'db_connection.php';
            $studentsQuery = "SELECT * FROM students";
            $studentsResult = $conn->query($studentsQuery);
            ?>
            <div class="container-fluid">
                <div class="row">
                    <?php
                    while ($row = $studentsResult->fetch_assoc()) {
                        $studentId = $row['id'];
                        $studentName = $row['name'];
                        $studentImage = 'images/' . $studentId . '.png';
                        ?>
                        <div class="col">
                            <a href="send_message.php?studentId=<?php echo $studentId; ?>&recipient=<?php echo urlencode($studentName); ?>">
                                <div class="grid-item">
                                    <img src="<?php echo $studentImage; ?>" alt="Student Picture" class="grid-item-img" height="280px">
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <h1>  end </h1>
    </div>
    <footer>
        <img class="footer_img" src="design/footerimg.png">
    </footer>
</body>
</html>
