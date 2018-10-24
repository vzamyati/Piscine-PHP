<?php
    include("auth.php");
    session_start();

     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST['login'] == 'admin' && $_POST['password'] == 'admin') {
            $_SESSION['loggued_on_use'] = $_POST['login'];
            header("Location: admin.php");
        } else if (auth($_POST['login'], $_POST['password']) == true) {
            $_SESSION['loggued_on_use'] = $_POST['login'];
            header("Location: index.php");
        } else {
            $_SESSION['loggued_on_use'] = "";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Login</title>
	<link rel="stylesheet" href="./css/login.css" />
	<link rel="stylesheet" href="fonts.css" />
</head>
<body>
    <div class="block">
        <div class="header">
         <h2>Login</h2>
        </div>
        <div id="login">
            <form action="login.php" method="POST">
                <form class="clearfix">
                    <input type="text" placeholder="Login" name="login" required/>
    				<input type="password" placeholder="Password" name="password" required/>
                    <input type="submit" value="Login">
                    <p>Not yet a member? &nbsp;&nbsp;<a href="register.php">Create an account</a></p>
                </form>
            </form>
        </div>
    </div>
</body>
</html>