<?php
    include("auth.php");
    include 'install.php';
    session_start();
    $link = mysqli_connect($db_host, $db_user, $db_paswd, $db_database);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (login_exists($_POST['login'])){
            header("location: user_exists.php");
        } else {
            $login = $link->real_escape_string($_POST['login']);
            $password = md5($_POST['password']);

            $_SESSION['login'] = $login;
            $sql = "INSERT INTO users (login, password)" . "VALUES('$login', '$password')";

            if ($link->query($sql) === true) {
                header("location: login.php");
            }
        }
            
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Register</title>
	<link rel="stylesheet" href="./css/register.css" />
	<link rel="stylesheet" href="fonts.css" />
</head>
<body>
    <div class="block">
        <div class="header">
         <h2>Register</h2>
        </div>
        <div id="login">
            <form action="register.php" method="post">
                <input type="text" placeholder="Login" name="login" required />
                <input type="password" placeholder="Password" name="password" required/>
                <input type="submit" name="reg" value="Register">
                <p>Already a member? &nbsp;&nbsp;<a href="login.php">Sign in</a></p>
            </form>
        </div>
    </div>
</body>
</html>


