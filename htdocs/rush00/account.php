<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST['submit'] == "cart") {
            header("Location: cart.php");
        } else if ($_POST['submit'] == "delete") {
            header("Location: delete_account.php");
        } else if ($_POST['submit'] == "home") {
            header("Location: index.php");
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Account?</title>
	<link rel="stylesheet" href="./css/account.css" />
	<link rel="stylesheet" href="fonts.css" />
</head>
<body>
    <div class="block">
        <div class="header">
         <h2>Your profile</h2>
        </div>
        <div id="account">
            <form action="account.php" method="post">
               <button type="submit" name="submit" value="cart">Your cart</button>
                <button type="submit" name="submit" value="delete">Delete your account</button>
                <button type="submit" name="submit" value="home">Go Home</button>
            </form>
        </div>
    </div>
</body>
</html>
