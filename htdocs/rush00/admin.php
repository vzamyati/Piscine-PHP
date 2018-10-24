<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST['submit'] == "home") {
            header("Location: index.php");
        } else if ($_POST['submit'] == "phpmyadmin") {
            header("Location: http://127.0.0.1:8080/phpmyadmin/");
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hello, admin</title>
    <link rel="stylesheet" href="./css/admin.css" />
    <link rel="stylesheet" href="fonts.css" />
</head>
<body>
    <div class="block">
        <div class="header">
         <h2>Hello, admin!</h2>
        </div>
        <div id="admin">
            <form action="admin.php" method="POST">
                <button type="submit" name="submit" value="phpmyadmin">Open phpMyAdmin</button>
                <button type="submit" name="submit" value="home">Go Home</button>
            </form>
        </div>
    </div>
</body>
</html>


