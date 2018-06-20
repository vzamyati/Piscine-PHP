#!/usr/bin/php
<?php
	while(1)
	{
		echo "Enter a number: ";
		$number = trim(fgets(STDIN));
		if (feof(STDIN))
			exit();
		if (!is_numeric($number))
			echo "'$number' is not a number\n";
		else if ($number % 2)
			echo "The number $number is odd\n";
		else
			echo "The number $number is even\n";
		$number = NULL;
	}
?>