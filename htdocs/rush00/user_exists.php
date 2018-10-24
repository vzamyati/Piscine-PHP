<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST['submit'] == "try_again") {
            header("Location: register.php");
        } else if ($_POST['submit'] == "home") {
            header("Location: index.php");
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>User already exists</title>
	<link rel="stylesheet" href="./css/user_exists.css" />
	<link rel="stylesheet" href="fonts.css" />
</head>
<body>
    <div class="block">
        <div class="header">
         <h2>Sorry, user with such login already exists.</h2>
        </div>
        <div id="user">
            <form action="user_exists.php" method="post">
                <button type="submit" name="submit" value="try_again">Try again</button>
                <button type="submit" name="submit" value="home">Go Home</button>
            </form>
        </div>
    </div>
</body>
</html>