<header class="header">
		<div class="logo">
			<a href="index.php"><img src="images/logo_text.jpeg"></a>
		</div>
		<ul class="header_menu">
			<li class="header_menu__item"><a href="index.php" class="header_menu__link">Home</a></li>
			<li class="header_menu__item"><a href="main_page.php" class="header_menu__link">Items</a></li>
			<li class="header_menu__item"><a href="authors.php" class="header_menu__link">About</a></li>
		</ul>
		<ul class="header_menu2">
			<li class="header_menu2__item"><a href="<?php 
				session_start();
				if ($_SESSION['loggued_on_use'] == 'admin') {
					echo "admin.php";
				} else if ($_SESSION['loggued_on_use']) {
					echo "account.php";
				} else {
					echo "login.php";
			}
			?>" class="header_menu2__link">
			<?php 
				if (!$_SESSION['loggued_on_use']){
					echo "Login";
			?></a></li>
			<?php
				} else {
					echo $_SESSION['loggued_on_use']; 
			?></a></li>
			<li class="header_menu2__item"><a href="logout.php" class="header_menu2__link">Logout</a></li>
			<?php 
				} 
			?>
		</ul>
</header>