<?php
	$passwd = "123456";

	$sql = mysqli_connect("localhost", "root", $passwd);
	mysqli_query($sql, "CREATE DATABASE IF NOT EXISTS shop");
	$sql = mysqli_connect("localhost", "root", $passwd, "shop");
	$sql_content = file_get_contents('shop.sql');
	mysqli_multi_query($sql, $sql_content);
?>