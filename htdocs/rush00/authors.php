<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST['submit'] == "obalagur") {
            header("Location: https://profile.intra.42.fr/users/obalagur");
        } else if ($_POST['submit'] == "vzamyati") {
            header("Location: https://profile.intra.42.fr/users/vzamyati");
        } else if ($_POST['submit'] == "home") {
            header("location: index.php");
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Authors</title>
	<link rel="stylesheet" href="./css/authors.css" />
	<link rel="stylesheet" href="fonts.css" />
</head>
<body>
    <div class="block">
        <div class="header">
         <h2>This site was made by</h2>
        </div>
        <div id="authors">
            <form action="authors.php" method="post">
                <button type="submit" name="submit" value="obalagur">obalagur</button>
                <button type="submit" name="submit" value="vzamyati">vzamyati</button>
                <button type="submit" name="submit" value="home">Go Home</button>
            </form>
        </div>
    </div>
</body>
</html>
