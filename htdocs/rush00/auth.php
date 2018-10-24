<?php
	function auth($login, $password) {
		include 'install.php';
		$link = mysqli_connect($db_host, $db_user, $db_paswd, $db_database);
		$result = mysqli_query($link, "SELECT * FROM users");
		$passwd = md5($password);
		while ($row = mysqli_fetch_assoc($result)) {
			if ($row['login'] == $login && $row['password'] == $passwd)
				return (true);
		}
		return (false);
	}

	function login_exists($login) {
		include 'install.php';
		$link = mysqli_connect($db_host, $db_user, $db_paswd, $db_database);
		$result = mysqli_query($link, "SELECT * FROM users");
		while ($row = mysqli_fetch_assoc($result)) {
			if ($row['login'] === $login)
				return (true);
		}		
		return (false);
	}
?>