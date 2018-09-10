#!/usr/bin/php
<?php
	if ($argc == 4) {
		$par1 = trim($argv[1]);
		$operand = trim($argv[2]);
		$par2 = trim($argv[3]);

		if ($operand == "+" || $operand == "-" || $operand == "*" || $operand == "/" || $operand == "%") {
			if (($operand == "/" || $operand == "%") && $par2 == 0)
				;
			else if ($operand == "+")
				echo $par1 + $par2 . "\n";
			else if ($operand == "-")
				echo $par1 - $par2 . "\n";
			else if ($operand == "*")
				echo $par1 * $par2 . "\n";
			else if ($operand == "/")
				echo $par1 / $par2 . "\n";
			else if ($operand == "%")
				echo $par1 % $par2 . "\n";
		}
	}
	else
		echo "Incorrect Parameters\n";
?>