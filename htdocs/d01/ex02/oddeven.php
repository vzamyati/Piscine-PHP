#!/usr/bin/php
<?php
	$stdin = fopen('php://stdin', 'r'); #read from stdin
	while ($stdin && !feof($stdin)) { #loop for the programm
		echo ("Enter a number: ");
		$nb = fgets($stdin); #gets the value from stdin
		if ($nb) {
			$nb = str_replace("\n", "", $nb); #replace \n in nb for right out
			if (is_numeric($nb)) {
				if ($nb % 2 == 0)
					echo "The number " . $nb . " is even\n";
				else
					echo "The number " . $nb . " is odd\n";
			}
			else
				echo "'" . $nb . "' is not a number\n";
		}
	}
	fclose($stdin);
	echo "\n";
?>