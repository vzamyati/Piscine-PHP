<?php 
	session_start();

	foreach($_SESSION['cart'] as $keys => $values)
	        unset($_SESSION['cart'][$keys]);
	$_SESSION['loggued_on_use'] = "";
	header("Location: index.php");
 ?>
