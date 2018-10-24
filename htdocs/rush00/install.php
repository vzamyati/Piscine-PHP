<?php
	$db_host = 'localhost';
	$db_user = 'root';
	$db_paswd = '123456';
	$db_database = 'vz_shop';

	$link = mysqli_connect($db_host, $db_user, $db_paswd);
	mysqli_query($link, "CREATE DATABASE IF NOT EXISTS $db_database");
	$connect = mysqli_connect($db_host, $db_user, $db_paswd, $db_database) or die("No connect\n");
	$content = file_get_contents('vz_shop.sql');
	mysqli_multi_query($connect, $content);
?>