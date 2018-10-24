<!DOCTYPE html>
<html>
<head>
	<title>SweetHouse</title>
	<link rel="stylesheet" href="./css/main_page.css" />
	<link rel="stylesheet" href="./css/slider.css" />
	<link rel="stylesheet" href="fonts.css" />

	<script src="./js/slider.js"></script>
</head>
<body>
	<?php
		include "header.php";
	?>
    <img src="https://mbtskoudsalg.com/images/welcome-png-transparent-5.png">

    <div class="content display-container">
		<img class="slides" src="https://images.pexels.com/photos/132694/pexels-photo-132694.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" style="width:100%">

		<img class="slides" src="https://images.pexels.com/photos/1028714/pexels-photo-1028714.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" style="width:100%">

		<img class="slides" src="https://images.pexels.com/photos/954199/pexels-photo-954199.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" style="width:100%">

		<img class="slides" src="https://images.pexels.com/photos/213621/pexels-photo-213621.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" style="width:100%">

		<button class="button black display-left" onclick="plusDivs(-1)">&#10094;</button><!-- < -->
		<button class="button black display-right" onclick="plusDivs(1)">&#10095;</button><!-- > -->
	</div>
	<script>
		showDivs(slideIndex);
	</script>
</body>
</html>