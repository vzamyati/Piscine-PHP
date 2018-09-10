#!/usr/bin/php
<?php
	if ($argc == 2) {
		$str = str_replace(" ", "", $argv[1]);
		$str = str_replace("+", " + ", $str);
		$str = str_replace("-", " - ", $str);
		$str = str_replace("*", " * ", $str);
		$str = str_replace("/", " / ", $str);
		$str = str_replace("%", " % ", $str);
		$array = array_filter(explode(" ", $str));
		$par1 = $array[0];
		$operand = $array[1];
		$par2 = $array[2];
		if (!is_numeric($par1) || !is_numeric($par2)) {
			echo "Syntax Error\n";
			exit();
		}
		if ($operand === "+" || $operand === "-" || $operand === "*" || $operand === "/" || $operand === "%") {
			if (($operand === "/" || $operand === "%") && $par2 === 0)
				;
			else if ($operand === "+")
				echo $par1 + $par2 . "\n";
			else if ($operand === "-")
				echo $par1 - $par2 . "\n";
			else if ($operand === "*")
				echo $par1 * $par2 . "\n";
			else if ($operand === "/")
				echo $par1 / $par2 . "\n";
			else if ($operand === "%")
				echo $par1 % $par2 . "\n";
		}
	}
	else
		echo "Incorrect Parameters\n";
?>