#!/usr/bin/php
<?php
	if ($argc == 2)
	{
		$res = str_replace(" ", "", $argv[1]);
		$f = intval($res);
		$op = substr(substr($res, strlen((string)$f)), 0, 1);
		$s = substr(substr($res, strlen((string)$f)), 1);
		if (!is_numeric($f) or !is_numeric($s)){
			echo "Syntax Error\n";
			exit ();
		}
		switch ($op) {
			case '+':
				echo $f + $s;
				break;
			case '-':
				echo $f - $s;
				break;
			case '*':
				echo $f * $s;
				break;
			case '/':
			{
				if ((int)$s === 0){
					echo "You can't divide by zero\n";
					return (0);
				}
				else
					echo $f / $s;
			}
			case '%':
			{
				if ((int)$s === 0){
					echo "You can't divide by zero\n";
					return (0);
				}
				else
					echo $f % $s;
			}
			default:
				echo "Syntax Error\n";
				exit ();
		}
	}
	else {
		echo "Incorect Parametrs\n";
		exit ();
	}
	echo "\n";
?>