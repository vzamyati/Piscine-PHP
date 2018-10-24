<!DOCTYPE html>
<html>
<head>
	<title>SweetHouse</title>
	<link rel="stylesheet" href="./css/categories.css" />
	<link rel="stylesheet" href="fonts.css" />
</head>
<body>
	<?php
		include "header.php";
		include "install.php";
		include "cart_manager.php";

		echo		'<ul class="products clearfix">';
		$link = mysqli_connect($db_host, $db_user, $db_paswd, $db_database);
		$id_cat = $_GET['cat_id'];
		$results = mysqli_query($link, "SELECT * FROM products WHERE cat_id=$id_cat");
		while ($row = mysqli_fetch_assoc($results))
		{
			echo 		'<form method="post" action="categories.php?cat_id='.$row['cat_id'].'">';

		    echo 		'<li class="product-wrapper">';
        	echo 		'<div class="product-photo">';
        	echo				'<a href="categories.php?cat_id='.$row['cat_id'].'" class="product" >';
            echo					'<img src="'.$row['p_image'].'"alt=""" />';
            echo				'</a>';
            echo		'</div>';
			echo	'<p>'.$row['p_name'].'</p>';
            echo 	'<p>'.$row['p_price'].'UAH</p>';
            echo     '<button type="submit" name="add_to_cart">BUY</button>';

            /*HIDDEN*/
            echo     '<input type="hidden" name="h_image" value="'.$row["p_image"].'" />';
            echo     '<input type="hidden" name="h_id" value="'.$row["p_id"].'" />';
            echo     '<input type="hidden" name="h_price" value="'.$row["p_price"].'" />';
            echo     '<input type="hidden" name="h_quantity" value="1" />';
            echo     '<input type="hidden" name="h_name" value="'.$row["p_name"].'" />';

            echo '</form>';
              
		}
		echo '</li>';
		echo '</ul';
	?>
</body>
</html>