<?php
    include("auth.php");
    session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['submit'] == "yes") {
        include ("install.php");
        $link = mysqli_connect($db_host, $db_user, $db_paswd, $db_database);
        $result = mysqli_query($link, "SELECT * FROM users");
        $user = "DELETE FROM users WHERE login='$_SESSION[loggued_on_use]'";
        $result = mysqli_query($link, $user);
        $_SESSION['loggued_on_use'] = "";
        header("Location: index.php");
    } else if ($_POST['submit'] == "no") {
        header("Location: account.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Delete account?</title>
	<link rel="stylesheet" href="./css/delete_account.css" />
	<link rel="stylesheet" href="fonts.css" />
</head>
<body>
    <div class="block">
        <div class="header">
         <h2>Do you really want to delete account?</h2>
        </div>
        <div id="delete">
            <form action="delete_account.php" method="POST">
                <button type="submit" name="submit" value="no">NO!</button>
                <button type="submit" name="submit" value="yes">YES</button>
            </form>
        </div>
    </div>
</body>
</html>


