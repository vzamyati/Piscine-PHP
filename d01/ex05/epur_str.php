#!/usr/bin/php
<?php
	if ($argc == 2) {
		$str = trim(preg_replace('/\s\s+/', ' ', $argv[1])); #\s\s+ = \s matches any whitespace character, + matches between one and unlimited times, as many times as possible, giving back as needed
		echo "$str\n";
	}
?>