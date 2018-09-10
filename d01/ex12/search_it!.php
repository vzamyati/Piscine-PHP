#!/usr/bin/php
<?php
	if ($argc > 2) {
		for ($i = 2; $i < $argc; $i++) { 
			$str = array_filter(explode(":", $argv[$i]));
			$key = $str[0];
			$val = $str[1];
			if (!$key && $val)
				$key = "0";
			$array[$key] = $val;
		}
		foreach ($array as $key => $value) {
			if ($argv[1] == "0" && $key == "0")
				echo "$val\n";
			else if ($key == $argv[1] && $key != "0")
				echo "$val\n";
		}
	}
?>