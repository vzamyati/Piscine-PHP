<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST['submit'] == "thanks") {
            foreach($_SESSION['cart'] as $keys => $values) {
                unset($_SESSION['cart'][$keys]);
            }
            header("Location: index.php");
        } 
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Thanks!</title>
	<link rel="stylesheet" href="./css/thanks.css" />
	<link rel="stylesheet" href="fonts.css" />
</head>
<body>
    <div class="block">
        <div class="header">
         <h2>Thank you for choosing our shop!</h2>
        </div>
        <div id="thanks">
            <form action="thanks.php" method="post">
                <button type="submit" name="submit" value="thanks">Continue shopping</button>
            </form>
        </div>
    </div>
</body>
</html>
