#!/usr/bin/php
<?php
	if ($argc == 4)
	{
		$f = (int)trim($argv[1]);
		$s = (int)trim($argv[3]);

		switch(trim($argv[2])){
			case '+':
			echo $f + $s);
			break;
			case '-':
			echo $f - $s;
			break;
			case '*':
			echo $f * $s;
			break;
			case '/':
				if ((int)$s === 0){
					echo "You can't divide by zero\n";
					return (0);
				}
				else
					echo $f / $s;
			break;
			case '%':
				if ((int)$s === 0){
					echo "You can't divide by zero\n";
					return (0);
				}
				else
					echo $f % $s;
			break;
			default:
				echo "Not right paramets\n";
				break;
		}
	}
	else
		echo "Not right paramets\n";
	echo "\n";
?>