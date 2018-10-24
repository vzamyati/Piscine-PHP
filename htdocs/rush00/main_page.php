<!DOCTYPE html>
<html>
<head>
	<title>SweetHouse</title>
	<link rel="stylesheet" href="./css/main_page.css" />
	<link rel="stylesheet" href="fonts.css" />
</head>
<body>
	<?php
		include "header.php";
		include "install.php";

        echo		'<ul class="products clearfix">';
		$link = mysqli_connect($db_host, $db_user, $db_paswd, $db_database);
        $results = mysqli_query($link, "SELECT * FROM categories");
        while ($row = mysqli_fetch_assoc($results))
        {
        	echo 		'<li class="product-wrapper">';
        	echo 		'<div class="product-photo">';
            echo				'<a href="categories.php?cat_id='.$row['cat_id'].'" class="product" >';
            echo					'<img src="'.$row['cat_img'].'"alt=""" />';
            echo				'</a>';
            echo			'</div>';
			echo	'<p>'.$row['cat_name'].'</p>';
        }
        echo '</li>';
		echo '</ul';
        ?>
	?>
</body>
</html>